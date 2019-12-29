<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Auth\User;
use Illuminate\Http\Request;
use  App\Http\Requests\Backend\MessagesRequest;
use Cmgmyr\Messenger\Models\Thread;
use App\Http\Controllers\Controller;
use Cmgmyr\Messenger\Models\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Cmgmyr\Messenger\Models\Participant;

class MessagesController extends Controller
{
   /**
	 * Just for testing - the user should be logged in. In a real
	 * app, please use standard authentication practices
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Show all of the message threads to the user.
	 *
	 * @return mixed
	 */
	public function index()
	{
        //$currentUserId = Auth::user()->id;
		// All threads, ignore deleted/archived participants
		$threads = Thread::forUser(Auth::id())->latest('updated_at')->get();
		// All threads that user is participating in
		// $threads = Thread::forUser(Auth::id())->latest('updated_at')->get();
		// All threads that user is participating in, with new messages
		// $threads = Thread::forUserWithNewMessages(Auth::id())->latest('updated_at')->get();
		return view('backend.messenger.index', compact('threads'));
	}
	/**
	 * Shows a message thread.
	 *
	 * @param $id
	 * @return mixed
	 */
	public function show($id)
	{
		try {
			$thread = Thread::findOrFail($id);
		} catch (ModelNotFoundException $e) {
			Session::flash('error_message', 'The thread with ID: ' . $id . ' was not found.');
			return redirect()->route('messages');
		}
		// show current user in list if not a current participant
		// $users = User::whereNotIn('id', $thread->participantsUserIds())->get();
		// don't show the current user in list
		$userId = Auth::id();
		$users = User::whereNotIn('id', $thread->participantsUserIds($userId))->get();
		$thread->markAsRead($userId);
		return view('backend.messenger.show', compact('thread', 'users'));
	}
	/**
	 * Creates a new message thread.
	 *
	 * @return mixed
	 */
	public function create()
	{
		$users = User::where('id', '!=', Auth::id())->get();
		return view('backend.messenger.create', compact('users'));
	}
	/**
	 * Stores a new message thread.
	 *
	 * @param  MessagesRequest  $request
	 * @return mixed
	 */
	public function store(MessagesRequest $request)
	{

		$validateMessage = $request->validate([
			'subject' => 'required|min:3|max:30',
			'message'  => 'required|min:6|max:200',
			'recipients' => 'required'
            
		]);
		//dd($validateMessage);
		if($validateMessage == false){
			return redirect()->back();
		}
		else{
			$thread = Thread::create([
				'subject' => $request->input('subject'),
			]);
			// Message
			Message::create([
				'thread_id' => $thread->id,
				'user_id' => Auth::id(),
				'body' => $request->input('message'),
			]);
			// Sender
			Participant::create([
				'thread_id' => $thread->id,
				'user_id' => Auth::id(),
				'last_read' => new Carbon,
			]);
			// Recipients
			if ($request->input('recipients')) {
				$thread->addParticipant($request->input('recipients'));
			}
	
			return redirect()->route('admin.messages');
		}
	
	}
	/**
	 * Adds a new message to a current thread.
	 *
	 * @param $id
	 * @return mixed
	 */
	public function update($id)
	{
		try {
			$thread = Thread::findOrFail($id);
		} catch (ModelNotFoundException $e) {
			Session::flash('error_message', 'The thread with ID: ' . $id . ' was not found.');
			return redirect()->route('admin.messages');
		}
		$thread->activateAllParticipants();
		// Message
		Message::create([
			'thread_id' => $thread->id,
			'user_id' => Auth::id(),
			'body' => Input::get('message'),
		]);
		// Add replier as a participant
		$participant = Participant::firstOrCreate([
			'thread_id' => $thread->id,
			'user_id' => Auth::id(),
		]);
		$participant->last_read = new Carbon;
		$participant->save();
		// Recipients
		if (Input::has('recipients')) {
			$thread->addParticipant(Input::get('recipients'));
		}
		return redirect()->route('admin.messages.show', $id);
	}
}

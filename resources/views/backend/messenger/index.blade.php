@extends('backend.layouts.app')


@section('content')
    <div class="row">
            <div class="col">
                    <div class="card">
                         <!-- start -->
                    <div class="card-header">
                        <strong>@lang('strings.backend.messages.index')</strong>
                    </div><!--card-header-->
                        @if (Session::has('error_message'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('error_message') }}
                            </div>
                        @endif
                        @if($threads->count() > 0)
                        <div class="card-body">
                            @foreach($threads as $thread)
                            <?php $class = $thread->isUnread($currentUserId) ? 'alert-info' : ''; ?>
                            <div id="thread_list_{{$thread->id}}" class="media alert {{ $class }}">
                                <h4 class="media-heading">{!! link_to('admin/messages/' . $thread->id, $thread->subject) !!}</h4>
                                <p id="thread_list_{{$thread->id}}_text">{{ $thread->latestMessage->body }}</p>
                                <p><small><strong>Creator:</strong> {{ $thread->creator()->first_name }}</small></p>
                                <p><small><strong>Participants:</strong> {{ $thread->participantsString(Auth::id(), ['first_name']) }}</small></p>
                            </div>
                            @endforeach
                        </div>
                        @else
                            <p>Sorry, no threads.</p>
                        @endif
                    </div>
            </div>
    </div>
@stop


<?php

namespace App\Http\Controllers\Backend;

use App\Models\Auth\User;
use App\Models\Auth\SocialAccount;
use App\Http\Controllers\Controller;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user = User::where('active', 1)->count();
        $newuser = User::where('active', 0)->count();
        $fb = SocialAccount::where('provider', 'facebook')->count();
        $tw = SocialAccount::where('provider', 'twitter')->count();
        $bit = SocialAccount::where('provider','bitbucket')->count();
        $git = SocialAccount::where('provider','github')->count();
        $google = SocialAccount::where('provider','google')->count();
        $linkedin = SocialAccount::where('provider','linkedin')->count();

        return view('backend.dashboard',compact(
            'user','newuser','fb','tw','bit','git',
            'google','linkedin'
        ));
    }
}

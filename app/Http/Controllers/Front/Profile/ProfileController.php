<?php

namespace App\Http\Controllers\Front\Profile;

use App\Http\Controllers\Controller;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('front.profiles.view', ['user' => Auth::user()]);
    }

    public function update(UserProfile $profile)
    {

    }

    public function notifications()
    {

    }

    public function newMessage()
    {

    }
}

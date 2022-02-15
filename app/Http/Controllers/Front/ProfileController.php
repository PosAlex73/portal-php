<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\UserProfile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('front.profiles.view');
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

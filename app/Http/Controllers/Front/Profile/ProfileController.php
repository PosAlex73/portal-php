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

    public function update(Request $request, UserProfile $profile)
    {
        $fields = $request->only(['phone', 'address', 'lang', 'skills', 'about']);
        $profile->update($fields);

        return redirect(route('front_profile.tabs', ['tab' => 'profile', 'user' => $profile->user]));
    }

    public function notifications()
    {

    }

    public function newMessage()
    {

    }
}

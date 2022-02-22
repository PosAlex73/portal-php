<?php

namespace App\Http\Controllers\Front\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserSetting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function update(Request $request, User $user)
    {
        $user_settings = $request->get('values');
        $user_settings = UserSetting::mergeSettings($user_settings);
        $user_settings = serialize($user_settings);

        $user->settings()->update(['values' => $user_settings]);

        return redirect(route('front_profile.tabs', ['tab' => 'settings', 'user' => $user]));
    }
}

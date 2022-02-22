<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserSetting;
use Illuminate\Http\Request;

class UserSettingsController extends AdminController
{
    public function update(Request $request, User $user)
    {
        $user_settings = $request->get('values');
        $user_settings = UserSetting::mergeSettings($user_settings);
        $user_settings = serialize($user_settings);

        $user->settings()->update(['values' => $user_settings]);

        return redirect(route('user.index', ['user' => $user]));
    }
}

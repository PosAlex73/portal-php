<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends AdminController
{
    public function profile(Request $request, User $user)
    {
        return view('admin.users.edit', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $fields = $request->only(['phone', 'address', 'lang', 'skills', 'about']);
        $user->profile()->update($fields);

        return redirect(route('user.edit', ['user' => $user]));
    }
}

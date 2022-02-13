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
}

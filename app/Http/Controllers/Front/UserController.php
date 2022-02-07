<?php

namespace App\Http\Controllers\Front;

use App\Enums\CommonStatuses;
use App\Enums\UserTypes;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list()
    {
        $users = User::where([
            'status' => CommonStatuses::ACTIVE,
            'type' => UserTypes::SIMPLE
        ])->get();

        return view('front.users.list', $users);
    }

    public function user(User $user)
    {
        if ($user->status !== CommonStatuses::ACTIVE && $user->type === UserTypes::ADMIN) {
            return abort(404);
        }

        return view('front.users.view', ['user' => $user]);
    }
}

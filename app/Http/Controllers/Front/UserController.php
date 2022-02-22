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
        ])->paginate(static::getPaginate());

        return view('front.users.list', ['users' => $users]);
    }

    public function update(Request $request, User $user)
    {
        $fields = $request->only(['name', 'email', 'status']);
        $user->update($fields);

        return redirect(route('front_profile'));
    }

    public function user(User $user)
    {
        if ($user->status !== CommonStatuses::ACTIVE && $user->type === UserTypes::ADMIN) {
            return abort(404);
        }

        return view('front.users.view', ['user' => $user]);
    }

    public function tabs(string $tab, User $user)
    {
        return view('front.profiles.tabs.' . $tab, ['user' => $user]);
    }
}

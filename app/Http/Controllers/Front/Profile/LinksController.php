<?php

namespace App\Http\Controllers\Front\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserLinks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LinksController extends Controller
{
    public function update(Request $request, User $user)
    {
        $fields = $request->only(['title', 'status', 'url']);
        $user->links()->create($fields);

        return redirect(route('front_profile.tabs', ['tab' => 'links', 'user' => $user]));
    }

    public function massDelete(Request $request)
    {
        UserLinks::destroy($request->get('user_links'));

        return redirect(route('front_profile.tabs', ['tab' => 'links', 'user' => Auth::user()]));
    }
}

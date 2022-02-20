<?php

namespace App\Http\Controllers\Front\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactsController extends Controller
{
    public function update(Request $request, User $user)
    {
        $fields = $request->only(['title', 'contact', 'type', 'status']);
        $user->contacts()->create($fields);

        return redirect(route('front_profile.tabs', ['tab' => 'contacts', 'user' => $user]));
    }

    public function massDelete(Request $request)
    {
        UserContact::destroy($request->get('contacts'));

        return redirect(route('front_profile.tabs', ['tab' => 'contacts', 'user' => Auth::user()]));
    }
}

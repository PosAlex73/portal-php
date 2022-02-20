<?php

namespace App\Http\Controllers\Front;

use App\Enums\CommonStatuses;
use App\Events\Contacted;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserContactRequest;
use App\Models\Portfolio;
use App\Models\User;
use App\Models\UserContact;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

class PortfolioListController extends Controller
{
    public function list(Request $request)
    {
        if ($request->exists('search')) {
            $search = $request->get('search');
            $portfolios = Portfolio::where('title', 'LIKE', "$search%")
                ->orWhere('description', 'LIKE', "$search%")->paginate(static::getPaginate());
        } else {
            $portfolios = Portfolio::paginate(static::getPaginate());
        }

        return view('front.portfolios.list', ['portfolios' => $portfolios]);
    }

    public function show(Portfolio $portfolio)
    {
        return view('front.portfolios.view', ['portfolio' => $portfolio]);
    }

    public function contact(Request $request, User $user)
    {
        $fields = $request->only(['title', 'contact', 'type']);
        $fields['status'] = CommonStatuses::ACTIVE;
        $fields['user_id'] = $user->id;

        $contact = UserContact::create($fields);

        Event::dispatch(new Contacted($user, $contact));

        return redirect(route('front.user', ['user' => $user]));
    }
}

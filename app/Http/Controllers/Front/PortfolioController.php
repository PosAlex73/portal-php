<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\User;
use App\Models\UserContact;
use App\Models\UserProfile;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function list(Request $request)
    {
        if ($request->exists('search')) {
            $search = $request->get('search');
            $portfolios = Portfolio::where(['title', 'LIKE', "%$search"])->orWhere(['description', 'LIKE', "%$search"]);
        } else {
            $portfolios = Portfolio::all(static::getPaginate());
        }

        return view('front.portfolios.list', ['portfolios' => $portfolios]);
    }

    public function show(Portfolio $portfolio)
    {

    }

    public function store(Portfolio $portfolio)
    {

    }

    public function update(Portfolio $portfolio)
    {

    }

    public function delete(Portfolio $portfolio)
    {

    }

    public function contact(Request $request, User $user)
    {

    }
}

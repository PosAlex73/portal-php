<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $best_users = User::all()->take(static::getPaginate());
        $portfolios = Portfolio::all()->take(static::getPaginate());

        return view('front.index.index', [
            'best_users' => $best_users,
            'portfolios' => $portfolios
        ]);
    }
}

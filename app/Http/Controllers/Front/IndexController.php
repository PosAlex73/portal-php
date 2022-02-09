<?php

namespace App\Http\Controllers\Front;

use App\Enums\CommonStatuses;
use App\Enums\UserTypes;
use App\Http\Controllers\Controller;
use App\Mail\Contacted;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index()
    {
        $best_users = User::where(['status' => CommonStatuses::ACTIVE])
            ->where('type', '<>', UserTypes::ADMIN)
            ->take(static::getPaginate())
            ->get();

        $portfolios = Portfolio::all()->take(static::getPaginate());
        $categories = Category::all()->take(static::getPaginate());

        return view('front.index.index', [
            'best_users' => $best_users,
            'portfolios' => $portfolios,
            'categories' => $categories
        ]);
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Facades\Set;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $best_users = User::all()->count();
    }
}

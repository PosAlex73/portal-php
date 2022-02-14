<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Article::orderByDesc('created_at')->paginate(static::getPaginate());

        return view('front.blog.list', ['articles' => $articles]);
    }

    public function article(Article $article)
    {
        return view('front.blog.article', ['article' => $article]);
    }
}

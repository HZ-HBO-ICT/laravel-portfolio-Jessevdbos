<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Faker\Core\Number;
use Illuminate\Routing\Route;
use App\Http\Controllers\ArticlesController;

class BlogController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $articles = Article::take(3)->latest()->get();
        return view('blog', [
            'articles' => $articles
        ]);
    }
}

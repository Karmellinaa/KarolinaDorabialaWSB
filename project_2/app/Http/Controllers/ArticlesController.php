<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('articles.index', ['articles' => $articles]);
    }

    public function store(Request $req)
    {
        $articles = new Article();
        $articles->title = $req->input('title');
        $articles->body = $req->input('body');
        $articles->save();

        return redirect('articles/index');
    }
}

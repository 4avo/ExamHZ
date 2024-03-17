<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{   
    /** shows all the articles in the database*/ 
    public function index()
    {
        return view('articles.index', [
            'articles' => Article::orderBy('published_at', 'desc')->get()
        ]);
    }

    /** returns the create article view*/ 
    public function create()
    {
        return view('articles.create');
    }

    /** return the show article view*/ 
    public function show(Article $article)
    {
        return view('articles.show', [
            'article' => $article,
        ]);
    }

}

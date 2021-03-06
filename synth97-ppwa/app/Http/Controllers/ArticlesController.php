<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function show($id) {
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }

    public function create() {
        return view('articles.create');
    }

    public function store() {
        // validation
        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

       $article = new Article();
       $article->title = request('title');
       $article->excerpt = request('excerpt');
       $article->body = request('body');
       $article->save();

       return redirect('/articles');
    }

    public function showAll() {
        $allArticles = Article::latest()->get();

        return view('articles.archive', ['allArticles' => $allArticles]);
    }

    public function edit($id) {
        // find the article with the id associated in the url
        $article = Article::find($id);

        return view('articles.edit', ['article' => $article]);
    }

    public function update($id) {
        // validation
        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        // find the article with the id associated in the url
        $article = Article::find($id);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles/' . $article->id);
    }

}

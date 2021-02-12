<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ProfessionController extends Controller
{
    public function index()
    {
        return view('articles.index', [
            'articles' => Article::latest()->get()
        ]);
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/profession');
    }

    public function edit($id)
    {
        $article = Article::findorfail($id);
        return view('articles.edit', compact('article'));
    }

    public function update($id)
    {
        $article = Article::findorfail($id);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/profession/'.$article->id);
    }

    public function destroy($id)
    {
        Article::findorfail($id)->
        destroy($id);
        return redirect('/profession');
    }
}

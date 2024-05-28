<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('commentaires')->get();
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'image_url' => 'required|url',
            'a_la_une' => 'boolean',
        ]);

        Article::create($validated);
        return redirect()->route('articles.index');
    }

    public function show($id)
    {
        $article = Article::with('commentaires')->findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'image_url' => 'required|url',
            'a_la_une' => 'boolean',
        ]);

        $article = Article::findOrFail($id);
        $article->update($validated);

        return redirect()->route('articles.index');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('articles.index');
    }
}


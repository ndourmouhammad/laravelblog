<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        // Valider les données entrantes
        $validatedData = $request->validate([
            'nom' => 'required|max:255',
            'description' => 'required|string',
            'image_url' => 'required|url',
            'date_creation' => 'required|date',
            
        ]);
    
        // Créer une nouvelle instance de l'article avec les données validées
        $article = new Article();
        $article->nom = $validatedData['nom'];
        $article->description = $validatedData['description'];
        $article->image_url = $validatedData['image_url'];
        $article->date_creation = $validatedData['date_creation'];
        $article->a_la_une = $request->has('a_la_une');
    
        // Sauvegarder l'article
        $article->save();
    
        // Rediriger vers la page d'index des articles
        return redirect()->route('articles.index');
    }
    
    

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        
        $article->nom = $request->input('nom');
        $article->description = $request->input('description');
        $article->image_url = $request->input('image_url');
        $article->date_creation = $request->input('date_creation');
        $article->a_la_une = $request->has('a_la_une');
    
        $article->update();
    
        return redirect()->route('articles.index');
    }
    


    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('articles.index');
    }
}

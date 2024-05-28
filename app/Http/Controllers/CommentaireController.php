<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentaire;
use App\Models\Article;

class CommentaireController extends Controller
{
    public function create($articleId)
    {
        $article = Article::findOrFail($articleId);
        return view('commentaires.create', compact('article'));
    }

    public function store(Request $request, $articleId)
    {
        $validated = $request->validate([
            'contenu' => 'required',
            'nom_complet_auteur' => 'required',
            'date_heure_creation' => 'required|date',
        ]);

        $validated['article_id'] = $articleId;
        Commentaire::create($validated);

        return redirect()->route('articles.show', $articleId);
    }

    public function edit($id)
    {
        $commentaire = Commentaire::findOrFail($id);
        return view('commentaires.edit', compact('commentaire'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'contenu' => 'required',
            'nom_complet_auteur' => 'required',
            'date_heure_creation' => 'required|date',
        ]);

        $commentaire = Commentaire::findOrFail($id);
        $commentaire->update($validated);

        return redirect()->route('articles.show', $commentaire->article_id);
    }

    public function destroy($id)
    {
        $commentaire = Commentaire::findOrFail($id);
        $commentaire->delete();

        return redirect()->route('articles.show', $commentaire->article_id);
    }
}

<!DOCTYPE html>
<html>
<head>
    <title>Détails de l'Article</title>
</head>
<body>
    <h1>{{ $article->nom }}</h1>
    <p>{{ $article->description }}</p>
    <p>Date de création: {{ $article->date_creation }}</p>
    <p>À la une: {{ $article->a_la_une ? 'Oui' : 'Non' }}</p>
    <p><img src="{{ $article->image_url }}" alt="Image de l'article"></p>

    <h2>Commentaires</h2>
    <ul>
        @foreach($article->commentaires as $commentaire)
            <li>
                <p>{{ $commentaire->nom_complet_auteur }}: {{ $commentaire->contenu }}</p>
                <form action="{{ route('commentaires.destroy', $commentaire->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
                <a href="{{ route('commentaires.edit', $commentaire->id) }}">Modifier</a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('commentaires.create', $article->id) }}">Ajouter un commentaire</a>
    <br>
    <a href="{{ route('articles.index') }}">Retour à la liste des articles</a>
</body>
</html>

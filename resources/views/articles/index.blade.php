<!DOCTYPE html>
<html>
<head>
    <title>Liste des Articles</title>
</head>
<body>
    <h1>Liste des Articles</h1>
    <a href="{{ route('articles.create') }}">Créer un nouvel article</a>
    <ul>
        @foreach($articles as $article)
            <li>
                <a href="{{ route('articles.show', $article->id) }}">{{ $article->nom }}</a>
                <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
                <a href="{{ route('articles.edit', $article->id) }}">Modifier</a>
            </li>
        @endforeach
    </ul>
</body>
</html>

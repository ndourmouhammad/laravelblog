<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Articles</title>
    <!-- Inclure Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-4">
    <div class="max-w-3xl mx-auto">
        <h1 class="text-3xl font-bold mb-4">Liste des Articles</h1>
        <a href="{{ route('articles.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Créer un nouvel article</a>
        <ul class="mt-4">
            @foreach($articles as $article)
                <li class="bg-white shadow-md rounded-lg p-4 mb-4 flex justify-between items-center">
                    <a href="{{ route('articles.show', $article->id) }}" class="text-blue-500">{{ $article->nom }}</a>
                    <div>
                        
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 mr-4">Supprimer</button>
                        </form>
                        
                        <a href="{{ route('articles.edit', $article->id) }}" class="text-yellow-500">Modifier</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>

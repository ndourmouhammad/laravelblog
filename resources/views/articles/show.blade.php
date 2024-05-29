<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'Article</title>
    <!-- Inclure Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-4">
    <div class="max-w-3xl mx-auto">
        <!-- Bouton de retour en haut de la page -->
        <a href="{{ route('articles.index') }}" class="text-blue-500 mb-4 block">Retour à la liste des articles</a>

        <h1 class="text-3xl font-bold mb-4">{{ $article->nom }}</h1>
        <div class="flex mb-8">
            <img src="{{ $article->image_url }}" alt="Image de l'article" class="mr-4 rounded-md shadow-md max-w-xs">
            <div>
                <p class="mb-2"><strong>Description :</strong> {{ $article->description }}</p>
                <p class="mb-2"><strong>Date de création :</strong> {{ $article->date_creation }}</p>
                <p class="mb-2 text-red-500"><strong>À la une :</strong> {{ $article->a_la_une ? 'Oui' : 'Non' }}</p>
            </div>
        </div>

        <h2 class="text-2xl font-bold mb-4">Commentaires</h2>
        <ul>
            @foreach($article->commentaires as $commentaire)
                <li class="bg-white shadow-md rounded-lg p-4 mb-4">
                    <p class="mb-2"><strong>{{ $commentaire->nom_complet_auteur }} :</strong> {{ $commentaire->contenu }}</p>
                    <p class="mb-2">Ajouté le : {{ $commentaire->date_heure_creation }}</p>
                    <div class="flex items-center">
                        <a href="{{ route('commentaires.destroy', $commentaire->id) }}" class="text-red-500 mr-4">Supprimer</a>
                        <a href="{{ route('commentaires.edit', $commentaire->id) }}" class="text-yellow-500">Modifier</a>
                    </div>
                </li>
            @endforeach
        </ul>

        <a href="{{ route('commentaires.create', $article->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Ajouter un commentaire</a>
    </div>
</body>
</html>

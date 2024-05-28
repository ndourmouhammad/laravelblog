<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le Commentaire</title>
    <!-- Inclure Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-4">
    <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        <h1 class="text-3xl font-bold mb-6">Modifier le Commentaire</h1>
        <form action="{{ route('commentaires.update', $commentaire->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nom_complet_auteur" class="block mb-2">Nom complet de l'auteur :</label>
                <input type="text" id="nom_complet_auteur" name="nom_complet_auteur" value="{{ $commentaire->nom_complet_auteur }}" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="contenu" class="block mb-2">Contenu :</label>
                <textarea id="contenu" name="contenu" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>{{ $commentaire->contenu }}</textarea>
            </div>
            <div class="mb-4">
                <label for="date_heure_creation" class="block mb-2">Date et heure de création :</label>
                <input type="datetime-local" id="date_heure_creation" name="date_heure_creation" value="{{ $commentaire->date_heure_creation }}" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Mettre à jour</button>
        </form>
    </div>
</body>
</html>

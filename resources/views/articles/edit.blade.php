<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l'Article</title>
    <!-- Inclure Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-4">
    <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        <h1 class="text-3xl font-bold mb-6">Modifier l'Article</h1>
        <form action="{{ route('articles.update', $article->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nom" class="block mb-2">Nom :</label>
                <input type="text" id="nom" name="nom" value="{{ $article->nom }}" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block mb-2">Description :</label>
                <textarea id="description" name="description" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>{{ $article->description }}</textarea>
            </div>
            <div class="mb-4">
                <label for="image_url" class="block mb-2">URL de l'image :</label>
                <input type="url" id="image_url" name="image_url" value="{{ $article->image_url }}" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="date_creation" class="block mb-2">Date de création :</label>
                <input type="datetime-local" id="date_creation" name="date_creation" value="{{ $article->date_creation }}" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="a_la_une" class="flex items-center">
                    <input type="checkbox" id="a_la_une" name="a_la_une" {{ $article->a_la_une ? 'checked' : '' }} class="mr-2">
                    <span>À la une</span>
                </label>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Mettre à jour</button>
        </form>
    </div>
</body>
</html>

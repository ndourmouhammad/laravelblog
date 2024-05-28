<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier l'Article</title>
</head>
<body>
    <h1>Modifier l'Article</h1>
    <form action="{{ route('articles.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" value="{{ $article->nom }}" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required>{{ $article->description }}</textarea>
        </div>
        <div>
            <label for="image_url">URL de l'image:</label>
            <input type="url" id="image_url" name="image_url" value="{{ $article->image_url }}" required>
        </div>
        <div>
            <label for="date_creation">Date de création:</label>
            <input type="datetime-local" id="date_creation" name="date_creation" value="{{ $article->date_creation }}" required>
        </div>
        <div>
            <label for="a_la_une">À la une:</label>
            <input type="checkbox" id="a_la_une" name="a_la_une" {{ $article->a_la_une ? 'checked' : '' }}>
        </div>
        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html>

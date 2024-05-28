<!DOCTYPE html>
<html>
<head>
    <title>Créer un Article</title>
</head>
<body>
    <h1>Créer un Article</h1>
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div>
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>
        </div>
        <div>
            <label for="image_url">URL de l'image:</label>
            <input type="text" id="image_url" name="image_url">
        </div>
        <div>
            <label for="date_creation">Date de création:</label>
            <input type="datetime-local" id="date_creation" name="date_creation">
        </div>
        <div>
            <label for="a_la_une">À la une:</label>
            <input type="checkbox" id="a_la_une" name="a_la_une">
        </div>
        <button type="submit">Créer</button>
    </form>
</body>
</html>

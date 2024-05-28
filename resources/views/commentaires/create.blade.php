<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un Commentaire</title>
</head>
<body>
    <h1>Ajouter un Commentaire</h1>
    <form action="{{ route('commentaires.store', $article->id) }}" method="POST">
        @csrf
        <div>
            <label for="nom_complet_auteur">Nom complet de l'auteur:</label>
            <input type="text" id="nom_complet_auteur" name="nom_complet_auteur" required>
        </div>
        <div>
            <label for="contenu">Contenu:</label>
            <textarea id="contenu" name="contenu" required></textarea>
        </div>
        <div>
            <label for="date_heure_creation">Date et heure de création:</label>
            <input type="datetime-local" id="date_heure_creation" name="date_heure_creation" required>
        </div>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>

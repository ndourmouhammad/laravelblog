<!DOCTYPE html>
<html>
<head>
    <title>Modifier le Commentaire</title>
</head>
<body>
    <h1>Modifier le Commentaire</h1>
    <form action="{{ route('commentaires.update', $commentaire->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nom_complet_auteur">Nom complet de l'auteur:</label>
            <input type="text" id="nom_complet_auteur" name="nom_complet_auteur" value="{{ $commentaire->nom_complet_auteur }}" required>
        </div>
        <div>
            <label for="contenu">Contenu:</label>
            <textarea id="contenu" name="contenu" required>{{ $commentaire->contenu }}</textarea>
        </div>
        <div>
            <label for="date_heure_creation">Date et heure de création:</label>
            <input type="datetime-local" id="date_heure_creation" name="date_heure_creation" value="{{ $commentaire->date_heure_creation }}" required>
        </div>
        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html>

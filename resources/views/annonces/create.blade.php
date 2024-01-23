<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une Annonce</title>
</head>
<body>

    <h2>Créer une Annonce</h2>

    <form action="{{ route('annonces.create') }}" method="post">
        @csrf
        <label for="titre">Titre de l'annonce</label>
        <input type="text" id="titre" name="titre" required>

        <label for="contenu">Contenu de l'annonce</label>
        <textarea id="contenu" name="contenu" rows="4" required></textarea>

        <button type="submit">Créer Annonce</button>
    </form>

</body>
</html>

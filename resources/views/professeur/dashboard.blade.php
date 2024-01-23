<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord du Professeur Responsable de Module</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #F5F5DC;
            display: grid;
            grid-template-rows: auto 1fr; /* La première ligne pour le header, la deuxième pour le contenu */
            min-height: 100vh;
        }

        .header {
            background-color: #446040;
            padding: 15px;
            text-align: center; 
            width: 100%;
            box-sizing: border-box;
            color: white;
        }

        .welcome {
            color: #446040;
            border-bottom: 2px solid #446040;
            padding-bottom: 10px;
            text-align: center;
        }

        .container {
            display: grid;
            grid-template-columns: 1fr 1fr; /* Deux colonnes, une pour chaque partie */
            max-width: 800px;
            margin: 20px auto; /* Ajustement des marges et centrage horizontale */
            gap: 20px; /* Espace entre les colonnes */
        }

        .container > div {
            padding: 20px;
            border: 1px solid #446040;
            border-radius: 5px;
            background-color: #F5F5DC; /* Couleur de fond pour les deux côtés */
        }

        h2 {
            color: #446040;
            border-bottom: 2px solid #446040;
            padding-bottom: 10px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        label {
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        button {
            background-color: #446040;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        button:hover {
            background-color: #F5F5DC;
            color: #446040;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome !!</h1>
    </div>

    <div class="welcome">
        <h1>Tableau de Bord - Professeur Responsable de Module</h1>
    </div>

    <div class="container">

        <div class="left-side">
            <section>
                <h2>Ajouter une Annonce</h2>
                <form>
                    <label for="titre">Titre de l'annonce</label>
                    <input type="text" id="titre" name="titre" required>

                    <label for="contenu">Contenu de l'annonce</label>
                    <textarea id="contenu" name="contenu" rows="4" required></textarea>

                    <button type="submit" class="btn-primary">Ajouter Annonce</button>
                </form>
            </section>
        </div>

        <div class="right-side">
            <section>
                <h2>Répondre aux Demandes</h2>
                <form>
                    <!-- Ajoutez les champs nécessaires pour la réponse aux demandes -->
                </form>
            </section>
        </div>

    </div>
</body>
</html>

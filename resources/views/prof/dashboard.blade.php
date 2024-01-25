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
            background-color: #182018;
            overflow-x: hidden; /* Pour éviter les barres de défilement horizontales */
        }

        #sidebar {
            height: 100vh;
            width: 80px;
            background-color: #000000;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
        }

        /* ... (votre CSS restant) */

        .virtual-tour-container {
            margin: 20px 0;
            background-color: #1E1E1E;
            border: 1px solid #4CAF50;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
            border-radius: 15px;
            text-align: center;
            color: #4CAF50;
            max-width: 100%; /* Pour occuper toute la largeur */
            margin-left: auto; /* Pour centrer le contenu */
            margin-right: auto; /* Pour centrer le contenu */
        }
        .container {
            flex: 1; /* Fill remaining vertical space */
            max-width: 800px;
            margin: 0 auto;
            background-color: #FFF;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #446040;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        label {
            font-weight: bold;
        }

        input, textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #446040;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #344533;
        }
        /* Style de la barre pour saisir le nom de module */
        .module-bar {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .module-bar label {
            font-weight: bold;
        }

        .module-bar input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tableau de Bord  <br>
        <h1><hr style="border: 5px solid #446040;"> Professeur Responsable de Module : </h1>
        <!-- Barre pour saisir le nom de module -->
        <div class="module-bar">
            <label for="module">Nom du Module : </label>
            <input type="text" id="module" name="module" required>
        </div>
        <section>
            <h2>Ajouter une Annonce : </h2>
            <form>
                <label for="titre">Titre de l'annonce : </label>
                <input type="text" id="titre" name="titre" required>

                <label for="contenu">Contenu de l'annonce : </label>
                <textarea id="contenu" name="contenu" rows="10" required></textarea>

                <button type="submit">Ajouter Annonce : </button>
            </form>
        </section>
        <section>
            <h2>Répondre aux Demandes des Étudiants</h2>
            <form>
                <label for="demande">Demande de l'étudiant : </label>
                <textarea id="demande" name="demande" rows="4" readonly>This is a student's request.</textarea>

                <label for="reponse">Réponse du Professeur :</label>
                <textarea id="reponse" name="reponse" rows="10" required></textarea>

                <button type="submit">Envoyer Réponse</button>
            </form>
        </section>
    </div>
</body>
</html>

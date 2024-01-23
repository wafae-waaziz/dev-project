<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etudiant Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: #446040;
            padding: 15px;
            color: white;
            text-align: right;
        }

        .header a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
        }

        .content {
            padding: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        ul li a {
            text-decoration: none;
            color: #000000;
            background-color: #F5F5DC;
            padding: 10px;
            display: block;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        ul li a:hover {
            background-color: #008000; 
            color: white;
        }

    </style>
</head>
<body>

    <div class="header">
        <h2>Welcome,!</h2>
        <a href="{{ url('/login') }}">Logout</a>
    </div>

    <div class="content">
        <h3>Options:</h3>
        <ul>
            <li><a href="{{ route('emploi') }}">Emploi du Temps</a></li>
            <li><a href="{{ route('annonce') }}">Annonces Professeurs</a></li>
            <li><a href="{{ route('demandes') }}">Demandes Étudiants</a></li>
            <li><a href="{{ route('absence') }}">Justifications Absence</a></li>
            <li><a href="{{ route('tp') }}">Changements TP</a></li>
            <li><a href="{{ route('incident') }}">Signalement Incidents</a></li>
        </ul>
    </div>
</body>
</html>
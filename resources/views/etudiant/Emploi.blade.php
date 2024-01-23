<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emploi du Temps</title>
    <style>
        body {
            background-color: #6c7e68; 
            color: #000000; 
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .header {
            background-color: #3a503a; 
            color: #FFFFFF;
            padding: 20px;
            text-align: center;
        }

        .header a {
            color: #FFFFFF;
            text-decoration: none;
            margin-right: 20px;
        }

        .content {
            padding: 20px;
            width: 80%;
            height: max-content;
            border: 2px solid #9a9393;
            margin: 50px auto;
            border-radius: 10px;
            background-color: #aaa5a5;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .content h3{
            text-align: center;
        }
        
    </style>
</head>
<body>

    <div class="header">
        <h2>Emploi du Temps</h2>
        <a href="{{ route('welcome') }}">Logout</a>
    </div>

    <div class="content" id="emploiContent">
        <h3>Votre Emploi sera Afficher ici</h3> 
        <!-- remove this h3 after adding emploi using laravel -->
    </div>

    <script>
        fetch('/api/emploi-du-temps')
            .then(response => response.json())
            .then(data => {
                document.getElementById('emploiContent').innerHTML = data.content;
            })
            .catch(error => console.error('Error fetching emploi du temps:', error));
    </script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link rel="stylesheet" href="main.css">
    <style>
        body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #182018;
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

        #sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #sidebar li {
            margin-bottom: 10px;
        }

        #sidebar a {
            text-decoration: none;
            color: white;
            display: flex;
            align-items: center;
        }

        #sidebar a img {
            width: 129px; 
            height: 90px;
            margin-left: -10px;
            margin-bottom: 5px;
        }

        #content {
            margin-left: 120px; 
            padding: 0px;
        }

        .searchbar {
            margin-bottom: 20px;
            background-color: #000000;
        }

        .searchbar input {
            width: 700px;
            height: 40px;
            padding: 10px;
            margin-right: 70px;
            background-color: #000000;
            border: #000000;
            color: white;
        }

        .searchbar button {
            padding: 10px;
            background-color: #000000;
            color: rgb(255, 255, 255);
            border: none;
            cursor: pointer;
            margin-left: 10px;
        }

        .infos {
            background-color: #446040;
            padding: 10px;
            margin-top: -18px;
            border-radius: 10px;
        }

        .categories {
            margin-top: 20px;
        }

        .categories ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .categories li {
            margin-right: 20px;
        }

        .categories li > ul {
            margin-left: 20px;
            display: none;
        }

        .categories a {
            display: block;
            text-decoration: none;
            color: rgb(2, 2, 2);
            padding: 10px;
            background-color: beige;
            border: 1px solid #0b0b0b;
            border-radius: 5px;
        }

        .categories li:hover > ul {
            display: block;
        }

        #login {
            text-decoration: none;
            color: #333;
            padding: 8px;
            margin-left: 200px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #ddd;
        }

        #login:hover {
            background-color: #bbb;
        }

        .actualite-content {
            margin: 20px;
        }

        .actualite-content h2 {
            text-align: center;
        }

        #news-container {
            display: flex;
            flex-direction: column;
            width: 60%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #182018;
            border: 1px solid #4CAF50;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        .news {
            display: none;
        }

        .active {
            display: block;
        }
        .read-more {
            margin-top: 15px;
            text-align: right;
        }

        .read-more a {
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .read-more a:hover {
            color: #357b3b;
        }

        .news img {
            width: 100%; 
            border-radius: 5px; 
        }

        .news h2 {
            color: #4CAF50;
            font-size: 22px;
            margin-bottom: 10px;
        }

        .news p {
            color: #ccc;
            line-height: 1.5;
        }

        #navigation-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        #prev-btn,
        #next-btn {
            font-size: 20px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            outline: none;
            transition: background-color 0.3s ease;
        }

        #prev-btn:hover,
        #next-btn:hover {
            background-color: #357b3b;
        }

        .map-container {
            margin: 20px 0;
            background-color: #182018;
            border: 1px solid #4CAF50;
            padding: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            height: 20%;
            max-width: 100%; 
        }

        .map-container h2 {
            text-align: center;
            color: #4CAF50;
        }

        .map-container p {
            color: #ccc;
            text-align: center;
            margin-bottom: 15px;
        }

        #map {
            position: relative;
            display: flex;
            height: auto;
            justify-content: center;
            align-items: center;

        }

        #map img {
            max-width: 50%;
            height: 100%;
            border-radius: 10px;
        }


        .virtual-tour-container {
            margin: 20px 0;
            background-color: #1E1E1E;
            border: 1px solid #4CAF50;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
            border-radius: 15px;
            text-align: center;
            color: #4CAF50;
            max-width: 95%;
        }

        .virtual-tour-container h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .virtual-tour-container p {
            color: #ccc;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .image-gallery {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .image-gallery img {
            width: 23%;
            border-radius: 15px;
            transition: transform 0.3s ease-in-out;
        }

        .image-gallery img:hover {
            transform: scale(1.1);
        }

        .virtual-tour-container img {
            max-width: 100%;
            height: auto;
            border-radius: 15px;
        }


        .rightofmap h4 {
            color: #005503;
        }

        .leftofmap h5 {
            color: #4CAF50;
        }
        .leftofmap h4 {
            color: #005503;
        }
    </style>
</head>
<body>

    <div id="sidebar">
        <ul>
            <li><a href="#home"><img src="https://process.studio/wp-content/uploads/2017/09/archdiploma_black.gif" alt="Home"></a></li>
            <li><a href="#about">ABOUT US</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="#localization">Localisation</a></li>
            <li><a href="#settings"><Settings</a></li>
            <li><a href="#help">Help</a></li>
        </ul>
    </div>    
    <div id="content">
        <div class="searchbar">
            <input type="text" placeholder="Search...">
            <button type="button">Search</button>
            <a href="{{ url('/login') }}" id="login">Login</a>
        </div>
        <div class="infos">
            <div class="categories">
                <ul>
                    <li>
                        <a href="#">FACULTE</a>
                        <ul>
                            <li><a href="#">Infos Filières</a></li>
                            <li><a href="#">Annonces Départements</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/login') }}">Espace Etudiant</a>
                        <ul>
                            <li><a href="{{ url('/login') }}">Annonces Professeurs</a></li>
                            <li><a href="{{ url('/login') }}">Demandes Étudiants</a></li>
                            <li><a href="{{ url('/login') }}">Justifications Absence</a></li>
                            <li><a href="{{ url('/login') }}">Changements TP</a></li>
                            <li><a href="{{ url('/login') }}">Signalement Incidents</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/login') }}">Prof Responsable Module</a>
                        <ul>
                            <li><a href="{{ url('/login') }}">Gestion Annonces</a></li>
                            <li><a href="{{ url('/login') }}">Réponses Étudiants</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/login') }}">Responsable Filière</a>
                        <ul>
                            <li><a href="{{ url('/login') }}">Gestion Annonces</a></li>
                            <li><a href="{{ url('/login') }}">Réponses Étudiants</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/login') }}">Chef Département</a>
                        <ul>
                            <li><a href="{{ url('/login') }}">Gestion Emplois</a></li>
                            <li><a href="{{ url('/login') }}">Gestion Annonces</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/login') }}">Responsable Service Pédagogique</a>
                        <ul>
                            <li><a href="{{ url('/login') }}">Gestion Emplois</a></li>
                            <li><a href="{{ url('/login') }}">Affectation Salle</a></li>
                            <li><a href="{{ url('/login') }}">Modification Prof</a></li>
                            <li><a href="{{ url('/login') }}">Inscription Étudiants</a></li>
                            <li><a href="{{ url('/login') }}">Modification Filière</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div id="news-container">
                <div class="news active" id="news1">
                  <h2>Des Entreprises de Renom à l'Université à la Recherche de Jeunes Talents</h2>
                  <img src="https://www.edinfo.ma/images/uploads/20151209105840_67441.jpg" class="news1">
                  <p>Dans une démarche innovante et en quête de nouveaux talents, un consortium d'entreprises de premier plan s'apprête à investir le campus universitaire pour rencontrer et recruter les étudiants les plus prometteurs. Cet événement...</p>
                  <div class="read-more">
                    <a href="news1.html">Read More</a>
                  </div>
                </div>
                <div class="news" id="news2">
                  <h2> Ouverture sur le Monde : Des Bourses d'Études Internationales Offertes aux Étudiants de la Faculté</h2>
                  <img src="https://bourses-etudes.net/wp-content/uploads/2020/03/Etudier-a-letranger-1-1.png">
                  <p>La faculté est fière d'annoncer une gamme exceptionnelle d'opportunités de bourses d'études internationales dans des pays renommés, offrant à nos étudiants la possibilité de vivre une expérience académique et culturelle unique à travers le monde...</p>
                  <div class="read-more">
                    <a href="news2.html">Read More</a>
                  </div>
                </div>
                <div class="news" id="news3">
                  <h2>Nouvelles Technologies et Innovations sur le Campus :</h2>
                  <img src="https://pro.etudiant.lefigaro.fr/wp-content/uploads/2022/10/shutterstock_1494218468.jpg">
                  <p>Notre campus s'engage résolument dans une ère d'innovation avec le déploiement de nouvelles technologies et initiatives modernes qui transforment l'environnement académique. Ces développements témoignent de l'engagement de la faculté à rester à la pointe de la technologie pour offrir une expérience d'apprentissage enrichissante...</p>
                  <div class="read-more">
                    <a href="news3.html">Read More</a>
                  </div>
                </div>
            
                <!-- Navigation Buttons -->
                <div id="navigation-buttons">
                  <button id="prev-btn" onclick="showNews(-1)">❮</button>
                  <button id="next-btn" onclick="showNews(1)">❯</button>
                </div>
              </div>
            </div>

            <div class="container">
                <div class="map-container">
                    <h2>Map de notre Université</h2>
                    <div id="map">
                        <div class ="leftofmap">
                            <h5>Localisation : Khouribga, Maroc</h5>
                            <h5>Année de Fondation : Depuis l'an 2000</h5>
                            <h4>Domaines d'Études :</h4>
                            <p>L'Université de Khouribga offre une gamme diversifiée de programmes académiques dans plusieurs domaines, couvrant les sciences, les arts, l'ingénierie, les sciences sociales, et bien d'autres. Cette diversité permet aux étudiants d'explorer un large éventail de disciplines et de développer des compétences polyvalentes.</p>
                            <h4>Coordonee :</h4>
                            <p>Nous aurions pu vous fournir l'adresse postale de l'école, mais honnêtement, où serait le plaisir dans cela? À la place, voici les coordonnées GPS : 32.882163, -6.897713. Ainsi, en voiture ou en train, prenez la route en direction de la capitale du code.</p>
                        </div>
                        <img src="https://i.pinimg.com/736x/2a/15/2f/2a152ff7471681ac8362410b383fb12d.jpg" class="news1">
                        <div class ="rightofmap">
                            <h4>&nbsp;Infrastructure :</h4>
                            <p>Le campus de l'Université de Khouribga est doté d'installations modernes, comprenant des salles de classe équipées de technologies avancées, des laboratoires de recherche, une bibliothèque bien garnie, des espaces de détente, et des installations sportives. L'environnement du campus favorise un apprentissage dynamique et stimulant.</p>
                            <h4>&nbsp;Doyen : Monsieur Larbi El Hilali</h4>
                            <p>Monsieur Larbi El Hilali, en tant que doyen de l'Université de Khouribga, apporte une direction solide et un leadership éclairé à la communauté académique. Fort de son engagement envers l'excellence académique, il encourage l'innovation, la recherche, et s'efforce de créer un environnement propice à l'épanouissement des étudiants.</p>
                        </div>
                    </div>
                </div>

                <div class="virtual-tour-container">
                    <h2>Decrouvrir notre Campus</h2>
                    <p>Une Virtual Vision de Notre Campus:</p>
                    <div class="image-gallery">
                        <img src="https://www.wilkhahn.com/blog/wp-content/uploads/2020/10/IMG_0893-Kopie-1.jpg" alt="Campus Image 1">
                        <img src="https://www.wilkhahn.com/blog/wp-content/uploads/2020/10/IMG_1060-1.jpg" alt="Campus Image 2">
                        <img src="https://www.wilkhahn.com/blog/wp-content/uploads/2020/10/IMG_1141-1.jpg" alt="Campus Image 3">
                        <img src="https://www.wilkhahn.com/blog/wp-content/uploads/2020/10/IMG_0905-1.jpg" alt="Campus Image 3">
                    </div>
                    <p>Experience Amusante avec une disposition de Salle de jeu , Des Salles , Une entree privee au etudiant et Responsable et egalement un large espace aerhee</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        let currentNewsIndex = 0;
        showNews(currentNewsIndex);

        function showNews(index) {
            const news = document.querySelectorAll('.news');
            news[currentNewsIndex].classList.remove('active');
            
            currentNewsIndex += index;

            if (currentNewsIndex < 0) {
            currentNewsIndex = news.length - 1;
            } else if (currentNewsIndex >= news.length) {
            currentNewsIndex = 0;
            }

            news[currentNewsIndex].classList.add('active');
        }
    </script>
</body>
</html>

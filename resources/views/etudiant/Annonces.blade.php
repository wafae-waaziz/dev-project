<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annonces Professeurs</title>
    <link rel="stylesheet" href="etudiant-page.css">
    <style>
        body {
            background-color: #3b4a4e;
            color: #2C3E50;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #446040;
            color: #ECF0F1;
            padding: 15px;
            text-align: center;
        }

        .header h2 {
            margin: 0;
        }

        .header a {
            color: #ECF0F1;
            text-decoration: none;
            float: right;
            margin-top: -30px;
        }

        .content {
            padding: 20px;
        }
    </style>
</head>
<body>

    <div class="header">
        <h2>Annonces Professeurs</h2>
        <a href="/login/login.html">Logout</a>
    </div>
    <div class="content" id="announcementsContent">
        
    </div>
    <script>
        function fetchAnnouncements() 
        {
            fetch('/api/announcements')
                .then(response => response.json())
                .then(data => {
                    const announcementsContent = document.getElementById('announcementsContent');
                    announcementsContent.innerHTML = ''; 

                    data.forEach(announcement => 
                    {
                        const announcementElement = document.createElement('div');
                        announcementElement.innerHTML = `
                            <h3>${announcement.title}</h3>
                            <p>${announcement.content}</p>
                            <p><strong>Posted by:</strong> ${announcement.author}</p>
                            <hr>
                        `;
                        announcementsContent.appendChild(announcementElement);
                    });
                })
                .catch(error => console.error('Error fetching announcements:', error));
        }
        fetchAnnouncements();
    </script>

</body>
</html>
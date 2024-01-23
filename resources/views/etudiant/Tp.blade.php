<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changements TP</title>
    <style>
        body {
            background-color: beige; 
            color: #000000; 
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        .header {
            background-color:  #2f482b; 
            color: #FFFFFF; 
            padding: 20px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h2 {
            margin: 0;
        }

        .header a {
            color: #FFFFFF;
            text-decoration: none;
            padding: 10px;
            background-color: #333333;
            border-radius: 5px;
        }

        .container {
            display: flex;
            flex: 1;
            padding: 20px;
        }

        .left-panel, .right-panel {
            flex: 1;
            padding: 20px;
            border-radius: 10px;
            margin-right: 20px;
            background-color:  #687a65;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .left-panel {
            background-color:  #687a65; 
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #687a65;
            border-radius: 5px;
        }

        .form-group button {
            background-color: #30452d; 
            color: #FFFFFF;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #6c7e68; 
        }

        .right-panel h3 {
            font-weight: bold;
            text-align: center;
            color: #020302;
        }
    </style>
</head>
<body>

    <div class="header">
        <h2>Changements TP</h2>
        <a href="/login/login.html">Logout</a>
    </div>

    <div class="container">
        <div class="left-panel">
            <h3>Choose Your TP Team</h3>
            <div class="form-group">
                <label for="matiere">Choose Matiere:</label>
                <input type="text" id="matiere" name="matiere" required>
            </div>
            <div class="form-group">
                <label for="teammates">Teammates:</label>
                <input type="text" id="teammates" name="teammates" placeholder="Enter names, separated by commas" required>
            </div>
            <div class="form-group">
                <button type="button" onclick="submitTeam()">Submit Team</button>
            </div>
        </div>

        <div class="right-panel">
            <h3>Message Des Profs :</h3>
            
        </div>
    </div>

    <script>
    function fetchMessages() {
        fetch('/get-messages') 
            .then(response => response.json())
            .then(data => {
                displayMessages(data.messages);
            })
            .catch(error => {
                console.error('Error fetching messages:', error);
            });
    }

    function displayMessages(messages) {
        var rightPanel = document.getElementById('rightPanel');
        rightPanel.innerHTML = '<h3>TP Messages</h3>';

        if (messages.length > 0) {
            messages.forEach(message => {
                rightPanel.innerHTML += '<p>' + message + '</p>';
            });
        } else {
            rightPanel.innerHTML += '<p>No messages available.</p>';
        }
    }

    fetchMessages();

    function submitTeam() {
        var matiere = document.getElementById('matiere').value;
        var teammates = document.getElementById('teammates').value;

        alert('Team submitted!\nMatiere: ' + matiere + '\nTeammates: ' + teammates);

        fetchMessages();
    }
    </script>

</body>
</html>

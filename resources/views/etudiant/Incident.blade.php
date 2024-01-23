<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signalement Incidents</title>
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
            width: 50%;
            border: 2px solid #3a503a;
            margin: 50px auto;
            border-radius: 10px;
            background-color: #FFFFFF;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
        }

        select,
        textarea,
        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 5px;
            box-sizing: border-box;
            border: 1px solid #3a503a;
            border-radius: 5px;
        }

        button {
            background-color: #3a503a;
            color: #FFFFFF; 
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2d3c2d; 
        }

        @media (max-width: 768px) {
            .content {
                width: 80%;
            }
        }
    </style>
</head>
<body>

    <div class="header">
        <h2>Signalement Incidents</h2>
        <a href="/login/login.html">Logout</a>
    </div>

    <div class="content">
        <form action="/submit-incident" method="post" id="incidentForm" onsubmit="return validateForm()">
            <label for="incidentType">Incident Type:</label>
            <select id="incidentType" name="incidentType" required>
                <option value="chaise">Chaise (Chair)</option>
                <option value="tableau">Tableau (Blackboard)</option>
                <option value="priseInterne">Prise interne (Internal Socket)</option>
                <option value="projecteur">Projecteur (Projector)</option>
                <option value="ordinateur">Ordinateur (Computer)</option>
            </select>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="time">Time:</label>
            <input type="time" id="time" name="time" required>

            <label for="department">Department:</label>
            <select id="department" name="department" onchange="updateOptions()" required>
                <option value="informatique">Informatique</option>
                <option value="mecanique">Mecanique</option>
                <option value="electrique">Electrique</option>
                <option value="biologie">Biologie</option>
                <option value="mathematique">Mathematique</option>
                <option value="physique">Physique</option>
                <option value="amphi">AMPHI</option>
            </select>

            <label for="class">Class/Amphi:</label>
            <select id="class" name="class" required>
               
            </select>

            <button type="submit">Submit Incident</button>
        </form>
    </div>



    <script>
        function updateOptions() {
            var departmentSelect = document.getElementById('department');
            var classSelect = document.getElementById('class');
            var selectedDepartment = departmentSelect.value;

            classSelect.innerHTML = '';

            if (selectedDepartment === 'amphi') {
                for (var i = 1; i <= 5; i++) {
                    addOption(classSelect, 'amphi' + i, 'Amphi ' + i);
                }
            } else {
                switch (selectedDepartment) {
                    case 'informatique':
                        addOption(classSelect, 'i10', 'I10');
                        addOption(classSelect, 'i11', 'I11');
                        addOption(classSelect, 'i12', 'I12');
                        addOption(classSelect, 'i13', 'I13');
                        addOption(classSelect, 'i14', 'I14');
                        addOption(classSelect, 'i15', 'I15');
                        break;
                    case 'mecanique':
                    case 'electrique':
                        for (var i = 1; i <= 5; i++) {
                            addOption(classSelect, 'm' + i, 'M' + i);
                        }
                        break;
                    case 'biologie':
                        for (var i = 6; i <= 11; i++) {
                            addOption(classSelect, 'i' + i, 'I' + i);
                        }
                        break;
                    case 'mathematique':
                        for (var i = 3; i <= 10; i++) {
                            addOption(classSelect, 'm' + i, 'M' + i);
                        }
                        break;
                    case 'physique':
                        for (var i = 10; i <= 15; i++) {
                            addOption(classSelect, 'm' + i, 'M' + i);
                        }
                        break;
                    default:
                        addOption(classSelect, 'default', 'Select Department First');
                        break;
                }
            }
        }

        function addOption(selectElement, value, text) {
            var option = document.createElement('option');
            option.value = value;
            option.text = text;
            selectElement.add(option);
        }

        function submitIncident() {
            var form = document.getElementById('incidentForm');
            var formData = new FormData(form);
            fetch('/submit-incident', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
            })
            .then(response => response.json())
            .then(data => {
                console.log(data.message);
                form.reset();
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            }

            function validateForm() {
                var description = document.getElementById('description').value;
                var date = document.getElementById('date').value;
                var time = document.getElementById('time').value;

                if (description.trim() === '' || date.trim() === '' || time.trim() === '') {
                    alert('Please fill in all required fields.');
                    return false;
                }
                submitIncident();
                return false;
            }

    </script>

</body>
</html>
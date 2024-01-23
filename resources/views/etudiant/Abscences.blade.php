<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justifications Absence</title>
    <style>
        body {
            background-color: #ECF0F1; 
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

        form {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input, textarea, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #BDC3C7; 
            border-radius: 5px;
        }

        button {
            background-color: #446040; 
            color: #ECF0F1; 
            cursor: pointer;
        }

        button:hover {
            background-color: #446040; 
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #BDC3C7;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #5c8670; 
            color: #ECF0F1; 
        }

    </style>
</head>
<body>

    <div class="header">
        <h2>Justifications Absence</h2>
        <a href="{{ url('/login') }}">Logout</a>
    </div>

    <div class="content">
        <form id="absenceForm">
            <label for="dateInput">Date:</label>
            <input type="date" id="dateInput" required>
            <label for="justificationInput">Justification:</label>
            <textarea id="justificationInput" rows="4" required></textarea>
            <button type="button" onclick="addAbsence()">Add Absence</button>
        </form>

        <table id="absenceTable">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Justification</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>

    <script>
        function addAbsence() {
            var date = document.getElementById('dateInput').value;
            var justification = document.getElementById('justificationInput').value;

           
            if (!date || !justification) {
                alert('Please enter both date and justification.');
                return;
            }

            const tableBody = document.querySelector('#absenceTable tbody');
            const newRow = document.createElement('tr');
            const dateCell = document.createElement('td');
            const justificationCell = document.createElement('td');

            dateCell.textContent = date;
            justificationCell.textContent = justification;

            newRow.appendChild(dateCell);
            newRow.appendChild(justificationCell);

            tableBody.appendChild(newRow);

            document.getElementById('dateInput').value = '';
            document.getElementById('justificationInput').value = '';
        }

        function updateTable() {
            // Fetch absence data from the server
            fetch('/get-absences')
                .then(response => response.json())
                .then(data => {
                    const tableBody = document.querySelector('#absenceTable tbody');
                    tableBody.innerHTML = '';

                    data.forEach(rowData => {
                        const row = document.createElement('tr');
                        const dateCell = document.createElement('td');
                        const justificationCell = document.createElement('td');

                        dateCell.textContent = rowData.date;
                        justificationCell.textContent = rowData.justification;

                        row.appendChild(dateCell);
                        row.appendChild(justificationCell);

                        tableBody.appendChild(row);
                    });
                })
                .catch(error => console.error('Error fetching absence data:', error));
        }

        updateTable(); // Fetch initial data when the page loads
    </script>
    

</body>
</html>
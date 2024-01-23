<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            background-color: #446040;
            color: #2C3E50;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #313b2f;
            color: #ECF0F1; 
            padding: 15px;
            text-align: center;
        }
        header button {
            background-color: #00d96d;
            color: #ECF0F1;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        header button:hover {
            background-color: #000000;
            color: #2C3E50;
        }
        a:visited
        {
            color: #000000;
        }
        .content {
            padding: 20px;
            background-color: #ECF0F1;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 20px auto;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #5c8670;
        }

        .document-group {
            margin-bottom: 15px;
        }

        .document-title {
            font-weight: bold;
            color: #446040;
            display: inline-block;
            margin-right: 10px;
        }

        .document-checkbox {
            display: inline-block;
        }

        button {
            background-color: #446040;
            color: #ECF0F1;
            cursor: pointer;
            border: none;
            padding: 10px;
            border-radius: 5px;
        }

        button:hover {
            background-color: #344E41;
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
        <h2>Demandes</h2>
        <button><a href="/login/login.html"> LOGOUT </a></button>
    </div>
    <div class="content">
        <form id="documentForm" name="document" method="post" action="/submit" enctype="multipart/form-data">
            <div class="document-group">
                <label class="document-title">Attestation de scolarité</label>
                <div class="document-checkbox">
                    <input type="checkbox" id="attestationCheckbox" name="documents[]" value="Attestation de scolarité">
                    <label for="attestationCheckbox"></label>
                </div>
            </div>

            <div class="document-group">
                <label class="document-title">Attestation de réussite</label>
                <div class="document-checkbox">
                    <input type="checkbox" id="attestationReussiteCheckbox" name="documents[]" value="Attestation de réussite">
                    <label for="attestationReussiteCheckbox"></label>
                </div>
            </div>

            <div class="document-group">
                <label class="document-title">Relevé de note</label>
                <div class="document-checkbox">
                    <input type="checkbox" id="releveNoteCheckbox" name="documents[]" value="Relevé de note">
                    <label for="releveNoteCheckbox"></label>
                </div>
            </div>

            <div class="document-group">
                <label class="document-title" id="rs" style="vertical-align: top;">Relevé de note par semestre</label>
                <div class="document-checkbox">
                    <label for="releve_SM01"><input type="checkbox" id="releve_SM01" name="documents[]" value="Relevé de note - TLGE SM01"> TLGE SM01</label>
                    <br>
                    <label for="releve_SM02"><input type="checkbox" id="releve_SM02" name="documents[]" value="Relevé de note - TLGE SM02"> TLGE SM02</label>
                    <br>
                    <label for="releve_SM03"><input type="checkbox" id="releve_SM03" name="documents[]" value="Relevé de note - TLGE SM03"> TLGE SM03</label>
                    <br>
                    <label for="releve_SM04"><input type="checkbox" id="releve_SM04" name="documents[]" value="Relevé de note - TLGE SM04"> TLGE SM04</label>
                </div>
            </div>
            
            

            <div class="document-group">
                <label class="document-title" style="vertical-align: top;">Baccalauréat</label>
                <div class="document-checkbox">
                    <input type="checkbox" id="provisoire" name="documents[]" value="Baccalauréat - Provisoire" onclick="baccToggle('provisoire')">
                    <label for="provisoire">Provisoire</label>

                    <input type="checkbox" id="definitif" name="documents[]" value="Baccalauréat - Définitif" onclick="baccToggle('definitif')">
                    <label for="definitif">Définitif</label>
                </div>
            </div>

            <div class="document-group">
                <label class="document-title">Diplôme Originale</label>
                <div class="document-checkbox">
                    <input type="checkbox" id="originale" name="documents[]" value="Diplôme Originale">
                    <label for="originale"></label>
                </div>
            </div>

            <button type="button" onclick="addDocuments()">Finish</button>
        </form>

        <table id="documentTable">
            <thead>
                <tr>
                    <th>Document</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <script>
        function addDocuments() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
            var tableBody = document.querySelector('#documentTable tbody');

            checkboxes.forEach(function (checkbox) {
                var newRow = document.createElement('tr');
                var documentCell = document.createElement('td');
                var statusCell = document.createElement('td');

                documentCell.textContent = checkbox.value;
                statusCell.textContent = 'EN COURS';

                newRow.appendChild(documentCell);
                newRow.appendChild(statusCell);
                tableBody.appendChild(newRow);
            });
            checkboxes.forEach(function (checkbox) {
                checkbox.checked = false;
            });

            submitFormToLaravel();
        }

        function submitFormToLaravel() {
            var tableRows = document.querySelectorAll('#documentTable tbody tr');
            var documents = Array.from(tableRows).map(function (row) {
                return {
                    name: row.cells[0].textContent,
                    status: row.cells[1].textContent,
                };
            });
            fetch('/submit', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify({ documents: documents }),
            })
            .then(response => response.json())
            .then(data => {
                updateTableWithStatus(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }

        function updateTableWithStatus(data) {
            var tableBody = document.querySelector('#documentTable tbody');
            tableBody.innerHTML = ''; 
            data.forEach(function (doc) {
                var newRow = document.createElement('tr');
                var documentCell = document.createElement('td');
                var statusCell = document.createElement('td');

                documentCell.textContent = doc.name;
                statusCell.textContent = doc.status;

                newRow.appendChild(documentCell);
                newRow.appendChild(statusCell);
                tableBody.appendChild(newRow);
            });
        }
    </script>
</body>
</html>

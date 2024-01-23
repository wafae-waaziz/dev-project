<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #446040;
    }

    .login-container {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .login-box {
        background-color: #000000;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        color: white;
        text-align: center;
    }

    .login-box input,
    .login-box select {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    .login-box button {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .login-box button:hover {
        background-color: #45a049;
    }

        </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <select name="role" required>
                    <option value="" disabled selected>Role</option>
                    <option value="etudiant">Etudiant</option>
                    <option value="prof">Professeur</option>
                    <option value="respo">Responsable de Filiere</option> 
                    <option value="chef">Chef de Departement</option>
                    <option value="responsable">Responsable Service Pédagogique</option>
                </select>
                <input type="email" name="email" placeholder="Email Institutionnel" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    
</body>
</html>

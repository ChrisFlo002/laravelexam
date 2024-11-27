<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                padding-top: 2rem;
            }

            h1 {
                color: #1e40af;
                text-align: center;
                margin-bottom: 2rem;
            }

            .login-button {
                background-color: #1e40af;
                color: white;
                padding: 1rem 2rem;
                text-decoration: none;
                border-radius: 0.5rem;
                display: flex;
                align-items: center;
                gap: 0.5rem;
                transition: background-color 0.3s;
            }

            .login-button:hover {
                background-color: #1e3a8a;
            }
        </style>
    </head>
    <body>
        <img src="{{ asset('images/flad_usa.png') }}" style="width: 150px;">
        <br>
        <h1>Welcome to the US Election app</h1>
        <br>
            <a href="/login" class="login-button">
                <i class="fas fa-sign-in-alt"></i>
                Log in
            </a>
    </body>
</html>

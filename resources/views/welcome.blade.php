<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | US Election App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f1f5f9;
            color: #1e293b;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 0;
        }

        h1 {
            color: #1e40af;
            text-align: center;
            font-size: 2rem;
            margin: 1.5rem 0;
        }

        .login-container {
            margin-top: 50px;
            text-align: center;
            background: white;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 400px;
        }

        .login-container img {
            width: 120px;
            margin-bottom: 1rem;
        }

        .login-button {
            background-color: #1e40af;
            color: white;
            padding: 1rem 2rem;
            text-decoration: none;
            border-radius: 0.5rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 1rem;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.2s;
            margin-top: 1rem;
        }

        .login-button:hover {
            background-color: #1e3a8a;
            transform: translateY(-2px);
        }

        footer {
            margin-top: auto;
            padding: 1rem;
            font-size: 0.9rem;
            color: #64748b;
        }

        footer a {
            color: #1e40af;
            text-decoration: none;
            font-weight: bold;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="{{ asset('images/flad_usa.png') }}" alt="USA Flag">
        <h1>Welcome to the US Election App</h1>
        <a href="/login" class="login-button" aria-label="Log in to the US Election App">
            <i class="fas fa-sign-in-alt"></i>
            Log in
        </a>
    </div>

    <footer>
        <p>&copy; 2024 US Election App. All rights reserved. <a href="#">Privacy Policy</a></p>
    </footer>
</body>
</html>

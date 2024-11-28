<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .sidebar {
            height: 100vh;
            width: 300px;
            background: linear-gradient(145deg, #003366, #0056b3);
            color: #ffffff;
            overflow-y: auto;
        }

        .sidebar .text-center img {
            margin-bottom: 10px;
            margin-top: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .sidebar h5 {
            font-size: 1.25rem;
            margin-bottom: 20px;
        }

        .sidebar ul.nav {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .sidebar ul.nav li.nav-item {
            margin-bottom: 10px;
        }

        .sidebar ul.nav a.nav-link {
            font-size: 1rem;
            padding: 10px;
            border-radius: 5px;
            transition: background 0.3s, transform 0.2s;
        }

        .sidebar ul.nav a.nav-link:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateX(5px);
        }

        .sidebar ul.nav a.nav-link.active {
            background: #00509e;
            font-weight: bold;
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
            background-color: #f8f9fa;
        }

        .content-header h1 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .alert {
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
            }

            .main-content {
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="d-flex flex-column flex-md-row">
        <!-- Sidebar -->
        <nav class="sidebar">
            <div class="text-center mb-3">
                <img src="{{ asset('images/flad_usa.png') }}" style="width: 80px;">
                <h5>USA Elections</h5>
            </div>
            <ul class="nav flex-column px-3">
                <li class="nav-item">
                    <select id="partySelect" class="form-select bg-primary text-white" onchange="redirectToParty(this)">
                        @foreach ($parties as $party)
                            <option value="{{ $party->id }}">
                                {{ $party->name_party }}
                            </option>
                        @endforeach
                    </select>
                    <script>
                        function redirectToParty(selectElement) {
                            const partyId = selectElement.value;
                            window.location.href = `/partinfo/${partyId}`;
                        }
                    </script>
                </li>
                <li class="nav-item">
                    <a href="/state" class="nav-link text-white d-flex align-items-center">
                        <i class="fas fa-map me-2"></i>State
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/party" class="nav-link text-white d-flex align-items-center">
                        <i class="fas fa-flag me-2"></i>Party
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/user" class="nav-link text-white d-flex align-items-center">
                        <i class="fas fa-user-tie me-2"></i>Users
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/elector" class="nav-link text-white d-flex align-items-center">
                        <i class="fas fa-users me-2"></i>Elector
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/parle" class="nav-link text-white d-flex align-items-center">
                        <i class="fas fa-file-alt me-2"></i>Parlementaire
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/senator" class="nav-link text-white d-flex align-items-center">
                        <i class="fas fa-chart-bar me-2"></i>Senator
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/flag" class="nav-link text-white d-flex align-items-center">
                        <i class="fas fa-poll me-2"></i>Flags
                    </a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="nav-link text-white d-flex align-items-center">
                            <i class="fas fa-sign-out-alt me-2"></i>Disconnect
                        </button>
                    </form>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="main-content">
            <div class="content-header">
                <h1>@yield('title')</h1>
            </div>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @yield('content')
        </main>
    </div>
</body>

</html>

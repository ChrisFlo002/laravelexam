<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="bg-primary text-white p-3 sidebar" style="height: 100vh;">
            <div class="text-center mb-3">
                <img src="{{ asset('images/flad_usa.png') }}" style="width: 100px;">
                <h5>USA Elections</h5>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item" style="margin-bottom: 10px;">
                    <a href="detgovernor" class="nav-link text-white d-flex align-items-center">
                        <i class="fas fa-map me-2"></i>Details
                    </a>
                </li>
                <li class="nav-item" style="margin-bottom: 10px;">
                    <a href="/showGovernorElectors{{Governor::where('user_id','=',Auth::user()->id)->get()->state_id}}" class="nav-link text-white d-flex align-items-center">
                        <i class="fas fa-users me-2"></i>Electors
                    </a>
                </li>

                <li class="nav-item" style="margin-bottom: 10px;">
                    <a href="/parle" class="nav-link text-white d-flex align-items-center">
                        <i class="fas fa-file-alt me-2"></i>Parlementaire
                    </a>
                </li>
                <li class="nav-item" style="margin-bottom: 10px;">
                    <a href="/senator" class="nav-link text-white d-flex align-items-center">
                        <i class="fas fa-chart-bar me-2"></i>Senator
                    </a>
                </li>
                <li class="nav-item" style="margin-bottom: 10px;">
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Governor Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .sidebar {
            height: 100vh;
        }

        .main-content {
            padding: 20px;
            width: 100%;
        }

        .nav-tabs .nav-link.active {
            background-color: #0d6efd;
            color: white !important;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="bg-primary text-white p-3 sidebar">
            <div class="text-center mb-3">
                <img src="{{ asset('images/flad_usa.png') }}" alt="USA Flag" style="width: 120px; margin-bottom: 10px;">
                <h5>USA Elections</h5>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="/state" class="nav-link text-white d-flex align-items-center">
                        <i class="fas fa-map me-2"></i> State
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/party" class="nav-link text-white d-flex align-items-center">
                        <i class="fas fa-flag me-2"></i> Party
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/governor" class="nav-link text-white d-flex align-items-center">
                        <i class="fas fa-user-tie me-2"></i> Governor
                    </a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="nav-link text-white d-flex align-items-center">
                            <i class="fas fa-sign-out-alt me-2"></i> Disconnect
                        </button>
                    </form>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="main-content">
            <div class="container">
                <h1 class="mb-4">@yield('title', 'Governor Dashboard')</h1>

                <!-- Horizontal Navigation -->
                <ul class="nav nav-tabs mb-3">
                    <li class="nav-item">
                        <a class="nav-link @if (request()->is('governor/electors*')) active @endif"
                            href="{{ route('governor.electors', ['id' => Auth::user()->id]) }}">Electors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (request()->is('governor/senator*')) active @endif"
                            href="{{ route('governor.senators', ['id' => Auth::user()->id]) }}">Senators</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (request()->is('governor/parle*')) active @endif"
                            href="{{ route('governor.parliament', ['id' => Auth::user()->id]) }}">Parliament</a>
                    </li>
                </ul>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <!-- Dynamic Content -->
                @yield('content')
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

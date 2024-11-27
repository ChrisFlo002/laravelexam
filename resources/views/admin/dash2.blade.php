<!-- resources/views/layouts/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>US Election Admin - @yield('title')</title>
    <!-- Include your CSS and JS here -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Layout Structure */
        .dashboard-container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background-color: #1a237e;
            color: white;
            padding: 1rem;
            position: fixed;
            height: 100vh;
            overflow-y: auto;
        }

        .sidebar-header {
            padding: 1rem 0;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 1rem;
        }

        .sidebar-menu {
            list-style: none;
        }

        .sidebar-menu li {
            margin: 0.5rem 0;
        }

        .sidebar-menu a {
            color: white;
            text-decoration: none;
            padding: 0.75rem 1rem;
            display: flex;
            align-items: center;
            border-radius: 0.5rem;
            transition: background-color 0.3s;
        }

        .sidebar-menu a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .sidebar-menu i {
            margin-right: 0.75rem;
            width: 20px;
        }

        /* Main Content Area */
        .main-content {
            margin-left: 250px;
            flex-grow: 1;
            padding: 2rem;
            background-color: #f5f5f5;
        }

        .content-header {
            background-color: white;
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Active Menu Item */
        .sidebar-menu a.active {
            background-color: rgba(255, 255, 255, 0.2);
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>US Election Admin</h2>
            </div>

            <ul class="sidebar-menu">
                <li>
                    <a href="/state" class="sidebar-menu i">
                        <i class="fas fa-tachometer-alt"></i>
                        State
                    </a>
                </li>

                <li>
                    <form method="POST" action="/logout" class="logout-form">
                        @csrf
                        <a href="/logout"
                           onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
                            Logout
                        </a>
                    </form>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <div class="content-header">
                <h1>@yield('title')</h1>
            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>

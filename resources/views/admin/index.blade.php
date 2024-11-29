<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container my-5">
        <!-- Page Header -->
        <h1 class="text-center text-primary mb-4">User Home</h1>

        <!-- Add User Button -->
        <div class="d-flex justify-content-center mb-3">
            <form action="/newuser">
                <button type="submit" class="btn btn-primary">Add User</button>
            </form>
        </div>
        {{-- resources/views/users/index.blade.php --}}
        <form action="/search" method="GET" class="mb-4">
            <div class="flex gap-2">
                <input type="text" name="search" placeholder="Search by name..." value="{{ request('search') }}"
                    class="border rounded px-4 py-2">
                <button type="submit" class="bg-blue-100 text-black px-4 py-2 rounded">
                    Search
                </button>
            </div>
        </form>

        <!-- Users Table -->
        @if (count($users) > 0)
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Recorded</th>
                            <th>Updated</th>
                            <th colspan="3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->age }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>{{ $user->updated_at }}</td>
                                <td>
                                    <a href="/detuser/{{ $user->id }}"
                                        class="btn btn-info btn-sm text-white">Details</a>
                                </td>
                                <td>
                                    <a href="/eduser/{{ $user->id }}"
                                        class="btn btn-warning btn-sm text-white">Edit</a>
                                </td>
                                <td>
                                    <a href="/deluser/{{ $user->id }}" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this user?')">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <!-- No Data Message -->
            <div class="alert alert-warning text-center">
                No users found.
            </div>
        @endif
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

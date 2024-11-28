@extends('layouts.partials.dashboard')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Home</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1 {
            text-align: center;
            margin-top: 20px;
            color: #007bff;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-danger {
            background-color: #dc3545;
            border: none;
        }
        table {
            margin-top: 20px;
        }
        .table-actions a {
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>User Home</h1>
        <div class="d-flex justify-content-between align-items-center mt-4">
            <p class="lead">Manage your users below:</p>
            <form action="/admin/newuser" class="d-inline">
                <button type="submit" class="btn btn-success">Add User</button>
            </form>
        </div>
        @if (count($users) > 0)
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Email</th>
                            <th>Recorded</th>
                            <th>Updated</th>
                            <th colspan="3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="text-center">
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->age }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>{{ $user->updated_at }}</td>
                                <td class="table-actions">
                                    <a href="/admin/detuser/{{ $user->id }}" class="btn btn-info btn-sm text-white">Details</a>
                                </td>
                                <td class="table-actions">
                                    <a href="/admin/eduser/{{ $user->id }}" class="btn btn-warning btn-sm">Edit</a>
                                </td>
                                <td class="table-actions">
                                    <a href="/admin/deluser/{{ $user->id }}"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-warning text-center mt-4">
                No users found. Please add a new user!
            </div>
        @endif
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
@endsection

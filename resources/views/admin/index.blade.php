@extends('layouts.partials.dashboard')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presidential Elector Home</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            margin-top: 50px;
            color: #007bff;
        }

        table {
            margin-top: 40px;
        }
        .table-actions a {
            margin-right: 5px;
        }
        .btn-danger {
            background-color: #dc3545;
        }
        .btn-primary {
            background-color: #007bff;
        }
    </style>
</head>

<body>
    <h1>User Home</h1>
    <form action="/newuser">
        <button type="submit">Add User</button>
    </form>
    @if (count($users) > 0)
        <table>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Recorded</th>
                <th>Updated</th>
                <th colspan="3">Actions</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td>
                        <a href="/detuser/{{ $user->id }}">Details</a>
                    </td>
                    <td>
                        <a href="/eduser/{{ $user->id }}">Edit</a>
                    </td>
                    <td>
                        <a href="/deluser/{{ $user->id }}"
                            onclick="return confirm('Are you sure you want to delete elector?')">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
</body>

</html>
@endsection

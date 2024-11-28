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
    <div class="container">
        <h1>Electors Home</h1>
        @if (count($users) > 0)
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Party</th>
                        <th>State</th>
                        <th>Recorded</th>
                        <th>Updated</th>
                        <th colspan="3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                        
                        <td class="table-actions">
                            <a href="/edelector/{{$user->id}}" class="btn btn-info btn-sm">Details</a>
                            <a href="/edelector/{{$user->id}}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="/delelector/{{$user->id}}" class="btn btn-danger btn-sm"
                               onclick="return confirm('Are you sure you want to delete this elector?')">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="alert alert-warning text-center mt-4">
            <strong>No electors found.</strong>
        </div>
        @endif
    </div>
    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection

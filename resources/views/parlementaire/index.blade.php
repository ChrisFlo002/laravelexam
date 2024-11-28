@extends('layouts.partials.dashboard')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parliament Home</title>
    <!-- Bootstrap CSS -->
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

        .btn-warning {
            background-color: #ffc107;
            border: none;
        }

        .btn-success {
            margin-bottom: 20px;
        }

        .table-container {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Parliament Home</h1>
        <div class="d-flex justify-content-between align-items-center mt-4">
            <p class="lead">Manage the list of parliamentarians below:</p>
            <form action="/admin/newparle" class="d-inline">
                <button type="submit" class="btn btn-success">Add Parliament</button>
            </form>
        </div>

        @if (count($parlementaires) > 0)
            <div class="table-container">
                <table class="table table-bordered table-hover text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Party</th>
                            <th>State</th>
                            <th>Recorded</th>
                            <th>Updated</th>
                            <th colspan="3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($parlementaires as $parle)
                            <tr>
                                <td>{{ $parle->id }}</td>
                                <td>{{ $parle->name }}</td>
                                <td>{{ $parle->age }}</td>
                                <td>{{ $parle->gender }}</td>
                                <td>{{ $parle->party->name_party }}</td>
                                <td>{{ $parle->state->name }}</td>
                                <td>{{ $parle->created_at }}</td>
                                <td>{{ $parle->updated_at }}</td>
                                <td>
                                    <a href="/admin/detparle/{{ $parle->id }}" class="btn btn-info btn-sm text-white">Details</a>
                                </td>
                                <td>
                                    <a href="/admin/edparle/{{ $parle->id }}" class="btn btn-warning btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="/admin/delparle/{{ $parle->id }}"
                                       class="btn btn-danger btn-sm"
                                       onclick="return confirm('Are you sure you want to delete parliament?')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-warning text-center mt-4">
                No parliamentarians found. Please add a new one!
            </div>
        @endif
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
@endsection

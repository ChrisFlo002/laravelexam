@extends('layouts.partials.dashboard')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presidential Elector Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        h1 {
            margin-top: 20px;
            text-align: center;
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

        .actions-btns a {
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Presidential Electors Home</h1>
        <div class="d-flex justify-content-between align-items-center mt-4">
            <p class="lead">Manage the list of electors below:</p>
            <form action="/admin/newElector" class="d-inline">
                <button type="submit" class="btn btn-success">Add Elector</button>
            </form>
        </div>

        @if (count($electors) > 0)
            <div class="table-container">
                <table class="table table-bordered table-hover text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Party</th>
                            <th>State</th>
                            <th>Recorded</th>
                            <th>Updated</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($electors as $elector)
                            <tr>
                                <td>{{ $elector->id }}</td>
                                <td>{{ $elector->name_elector }}</td>
                                <td>{{ $elector->gender }}</td>
                                <td>{{ $elector->party->name_party }}</td>
                                <td>{{ $elector->state->name }}</td>
                                <td>{{ $elector->created_at }}</td>
                                <td>{{ $elector->updated_at }}</td>
                                <td class="actions-btns">
                                    <a href="/admin/detelector/{{ $elector->id }}" class="btn btn-info btn-sm text-white">Details</a>
                                    <a href="/admin/edelector/{{ $elector->id }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/admin/delelector/{{ $elector->id }}" 
                                       class="btn btn-danger btn-sm" 
                                       onclick="return confirm('Are you sure you want to delete elector?')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-warning text-center mt-4">
                No electors found. Please add a new one!
            </div>
        @endif
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
@endsection

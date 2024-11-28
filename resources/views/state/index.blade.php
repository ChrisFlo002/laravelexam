@extends('layouts.partials.dashboard')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        h1 {
            margin-top: 20px;
            text-align: center;
            color: #0d6efd;
        }

        .btn-primary {
            background-color: #0d6efd;
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
        <h1>State Home</h1>
        <div class="d-flex justify-content-between align-items-center mt-4">
            <p class="lead">Manage the list of states below:</p>
            <form action="/admin/newstate" class="d-inline">
                <button type="submit" class="btn btn-success">Add State</button>
            </form>
        </div>

        @if (count($states) > 0)
            <div class="table-container">
                <table class="table table-bordered table-hover text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>GPA/PIB</th>
                            <th>Population</th>
                            <th>Area</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($states as $state)
                            <tr>
                                <td>{{ $state->code }}</td>
                                <td>{{ $state->name }}</td>
                                <td>{{ $state->pib }}</td>
                                <td>{{ $state->population }}</td>
                                <td>{{ $state->area }}</td>
                                <td class="actions-btns">
                                    <a href="/admin/detstate/{{ $state->id }}" class="btn btn-info btn-sm text-white">Details</a>
                                    <a href="/admin/edstate/{{ $state->id }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/admin/delstate/{{ $state->id }}" 
                                       class="btn btn-danger btn-sm" 
                                       onclick="return confirm('Are you sure you want to delete state?')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-warning text-center mt-4">
                No states available. Please add a new state.
            </div>
        @endif
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
@endsection

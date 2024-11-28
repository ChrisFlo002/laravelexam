@extends('layouts.partials.dashboard')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senator Home</title>
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
        .table-actions a {
            margin-right: 5px;
        }
        .table-container {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Senator Home</h1>
        <div class="d-flex justify-content-between align-items-center mt-4">
            <p class="lead">Manage the list of senators below:</p>
            <form action="/admin/newsenator" class="d-inline">
                <button type="submit" class="btn btn-success">Add Senator</button>
            </form>
        </div>
        @if (count($senators) > 0)
            <div class="table-container">
                <table class="table table-bordered table-hover">
                    <thead class="table-primary text-center">
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
                        @foreach($senators as $senator)
                            <tr class="text-center">
                                <td>{{ $senator->id }}</td>
                                <td>{{ $senator->name }}</td>
                                <td>{{ $senator->age }}</td>
                                <td>{{ $senator->gender }}</td>
                                <td>{{ $senator->party->name_party }}</td>
                                <td>{{ $senator->state->name }}</td>
                                <td>{{ $senator->created_at }}</td>
                                <td>{{ $senator->updated_at }}</td>
                                <td class="table-actions">
                                    <a href="/admin/detsenator/{{$senator->id}}" class="btn btn-info btn-sm text-white">Details</a>
                                </td>
                                <td class="table-actions">
                                    <a href="/admin/edsenator/{{$senator->id}}" class="btn btn-warning btn-sm">Edit</a>
                                </td>
                                <td class="table-actions">
                                    <a href="/admin/delsenator/{{$senator->id}}"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this senator?')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-warning text-center mt-4">
                No senators found. Please add a new senator!
            </div>
        @endif
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection

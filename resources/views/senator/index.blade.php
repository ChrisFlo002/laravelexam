<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senator Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5">
        <h1 class="text-center text-primary mb-4">Senator Home</h1>
        
        <!-- Add Senator Button -->
        <div class="d-flex justify-content-center mb-3">
            <form action="/newsenator">
                <button type="submit" class="btn btn-primary">Add Senator</button>
            </form>
        </div>

        @if (count($senators) > 0)
        <!-- Senator Table -->
        <div class="table-responsive">
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
                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($senators as $senator)
                    <tr>
                        <td>{{ $senator->id }}</td>
                        <td>{{ $senator->name }}</td>
                        <td>{{ $senator->age }}</td>
                        <td>{{ $senator->gender }}</td>
                        <td>{{ $senator->party->name }}</td>
                        <td>{{ $senator->state->name }}</td>
                        <td>{{ $senator->created_at }}</td>
                        <td>{{ $senator->updated_at }}</td>
                        <td>
                            <a href="/detsenator/{{$senator->id}}" class="btn btn-info btn-sm text-white">Details</a>
                        </td>
                        <td>
                            <a href="/edsenator/{{$senator->id}}" class="btn btn-warning btn-sm text-white">Edit</a>
                        </td>
                        <td>
                            <a href="/delsenator/{{$senator->id}}" 
                               class="btn btn-danger btn-sm" 
                               onclick="return confirm('Are you sure you want to delete this senator?')">
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
            No senators found. Please add a new senator.
        </div>
        @endif
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container my-5">
        <!-- Page Header -->
        <h1 class="text-center text-primary mb-4">State Home</h1>

        <!-- Add State Button -->
        <div class="d-flex justify-content-center mb-3">
            <form action="/newstate">
                <button type="submit" class="btn btn-primary">Add State</button>
            </form>
        </div>

        <!-- States Table -->
        @if (count($states) > 0)
            <div class="table-responsive">
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
                                <td>
                                    <a href="/detstate{{ $state->id }}" class="btn btn-info btn-sm text-white">Details</a>
                                    <a href="/edstate/{{ $state->id }}" class="btn btn-warning btn-sm text-white">Edit</a>
                                    <a href="/delstate/{{ $state->id }}" 
                                       class="btn btn-danger btn-sm" 
                                       onclick="return confirm('Are you sure you want to delete this state?')">
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
                No states found. Please add a new state.
            </div>
        @endif
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

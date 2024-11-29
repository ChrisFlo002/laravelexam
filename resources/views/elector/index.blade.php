<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electors Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container my-5">
        <!-- Page Header -->
        <h1 class="text-center text-primary mb-4">Electors Home</h1>

        <!-- Add Elector Button -->
        <div class="d-flex justify-content-center mb-3">
            <form action="/newElector">
                <button type="submit" class="btn btn-primary">Add Elector</button>
            </form>
        </div>

        <!-- Electors Table -->
        @if (count($electors) > 0)
            <div class="table-responsive">
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
                            <th colspan="3">Actions</th>
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
                                <td>
                                    <a href="/detelector/{{ $elector->id }}" class="btn btn-info btn-sm text-white">Details</a>
                                </td>
                                <td>
                                    <a href="/edelector/{{ $elector->id }}" class="btn btn-warning btn-sm text-white">Edit</a>
                                </td>
                                <td>
                                    <a href="/delelector/{{ $elector->id }}" 
                                       class="btn btn-danger btn-sm" 
                                       onclick="return confirm('Are you sure you want to delete this elector?')">
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
                No electors found. Please add a new elector.
            </div>
        @endif
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

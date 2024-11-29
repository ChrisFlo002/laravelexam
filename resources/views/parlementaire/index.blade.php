<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parliament Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container my-5">
        <!-- Page Header -->
        <h1 class="text-center text-primary mb-4">Parliament Home</h1>
        
        <!-- Add Parliament Button -->
        <div class="d-flex justify-content-center mb-3">
            <form action="/newparle">
                <button type="submit" class="btn btn-primary">Add Parliament</button>
            </form>
        </div>

        <!-- Parliament Table -->
        @if (count($parlementaires) > 0)
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
                                    <a href="/detparle/{{ $parle->id }}" class="btn btn-info btn-sm text-white">Details</a>
                                </td>
                                <td>
                                    <a href="/edparle/{{ $parle->id }}" class="btn btn-warning btn-sm text-white">Edit</a>
                                </td>
                                <td>
                                    <a href="/delparle/{{ $parle->id }}" 
                                       class="btn btn-danger btn-sm" 
                                       onclick="return confirm('Are you sure you want to delete this parliament?')">
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
                No parliament members found. Please add new members.
            </div>
        @endif
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

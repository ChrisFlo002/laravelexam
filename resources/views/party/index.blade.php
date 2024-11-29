<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Party Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container my-5">
        <!-- Page Header -->
        <h1 class="text-center text-primary mb-4">Party Home</h1>

        <!-- Add Party Button -->
        <div class="d-flex justify-content-center mb-3">
            <form action="/newparty">
                <button type="submit" class="btn btn-primary">Add Party</button>
            </form>
        </div>

        <!-- Parties Table -->
        @if (count($parties) > 0)
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($parties as $party)
                            <tr>
                                <td>{{ $party->id }}</td>
                                <td>{{ $party->name_party }}</td>
                                <td>
                                    <a href="/edparty/{{ $party->id }}" class="btn btn-warning btn-sm text-white">Edit</a>
                                    <a href="/delparty/{{ $party->id }}" 
                                       class="btn btn-danger btn-sm" 
                                       onclick="return confirm('Are you sure you want to delete this party?')">
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
                No parties found. Please add a new party.
            </div>
        @endif
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container my-5">
        <!-- Page Header -->
        <h1 class="text-center text-primary mb-4">Informations</h1>

        <!-- Informations Table -->
        @if ($infos->count() > 0)
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($infos as $info)
                            <tr>
                                <td>{{ $info->id }}</td>
                                <td>{{ $info->name ?? $info->name_elector }}</td>
                                <td>{{ $info->gender }}</td>
                                <td>{{ $info->party->name_party }}</td>
                                <td>{{ $info->state->name }}</td>
                                <td>{{ $info->created_at }}</td>
                                <td>{{ $info->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <!-- No Data Message -->
            <div class="alert alert-warning text-center">
                No information available.
            </div>
        @endif
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

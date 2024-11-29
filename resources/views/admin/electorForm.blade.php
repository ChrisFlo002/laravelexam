<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container my-5">
        <!-- Page Header -->
        <h1 class="text-center text-primary mb-4">Dashboard</h1>

        <!-- Electors Table -->
        @if (count($electors) > 0)
            <h3 class="text-secondary mt-4">Electors</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Name Elector</th>
                            <th>Gender</th>
                            <th>Party</th>
                            <th>State</th>
                            <th>Recorded</th>
                            <th>Updated</th>
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
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        <!-- Governors Table -->
        @if (count($governors) > 0)
            <h3 class="text-secondary mt-4">Governors</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Name Governor</th>
                            <th>Party</th>
                            <th>State</th>
                            <th>Recorded</th>
                            <th>Updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($governors as $governor)
                            <tr>
                                <td>{{ $governor->id }}</td>
                                <td>{{ $governor->user->name }}</td>
                                <td>{{ $governor->party->name_party }}</td>
                                <td>{{ $governor->state->name }}</td>
                                <td>{{ $governor->created_at }}</td>
                                <td>{{ $governor->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        <!-- Senators Table -->
        @if (count($senators) > 0)
            <h3 class="text-secondary mt-4">Senators</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Name Senator</th>
                            <th>Gender</th>
                            <th>Party</th>
                            <th>State</th>
                            <th>Recorded</th>
                            <th>Updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($senators as $senator)
                            <tr>
                                <td>{{ $senator->id }}</td>
                                <td>{{ $senator->name }}</td>
                                <td>{{ $senator->gender }}</td>
                                <td>{{ $senator->party->name_party }}</td>
                                <td>{{ $senator->state->name }}</td>
                                <td>{{ $senator->created_at }}</td>
                                <td>{{ $senator->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        <!-- Parliamentarians Table -->
        @if (count($parlementaires) > 0)
            <h3 class="text-secondary mt-4">Parliamentarians</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Name Parliament</th>
                            <th>Gender</th>
                            <th>Party</th>
                            <th>State</th>
                            <th>Recorded</th>
                            <th>Updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($parlementaires as $parlementaire)
                            <tr>
                                <td>{{ $parlementaire->id }}</td>
                                <td>{{ $parlementaire->name }}</td>
                                <td>{{ $parlementaire->gender }}</td>
                                <td>{{ $parlementaire->party->name_party }}</td>
                                <td>{{ $parlementaire->state->name }}</td>
                                <td>{{ $parlementaire->created_at }}</td>
                                <td>{{ $parlementaire->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

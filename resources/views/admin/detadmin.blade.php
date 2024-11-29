<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container my-5">
        <!-- Page Header -->
        <h1 class="text-center text-primary mb-4">User Details</h1>

        <!-- User Details Card -->
        <div class="card shadow-sm mx-auto" style="max-width: 600px;">
            <div class="card-body">
                <h5 class="card-title text-center text-uppercase mb-4">{{ $user->name }}</h5>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Created At:</strong> {{ $user->created_at }}</li>
                    <li class="list-group-item"><strong>Last Updated:</strong> {{ $user->updated_at }}</li>
                    <li class="list-group-item"><strong>Role:</strong> {{ Str::ucfirst($user->role) }}</li>
                    <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
                    <li class="list-group-item"><strong>Age:</strong> {{ $user->age }}</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

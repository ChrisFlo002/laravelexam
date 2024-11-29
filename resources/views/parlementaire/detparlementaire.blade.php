<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parliament Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5">
        <!-- Page Header -->
        <h1 class="text-center text-primary mb-4">Parliament Member Details</h1>
        
        <!-- Details Card -->
        <div class="card shadow-sm mx-auto" style="max-width: 600px;">
            <div class="card-body">
                <h5 class="card-title text-center text-uppercase mb-4">{{ $parle->name }}</h5>
                
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Created At:</strong> {{ $parle->created_at }}</li>
                    <li class="list-group-item"><strong>Last Updated:</strong> {{ $parle->updated_at }}</li>
                    <li class="list-group-item"><strong>Gender:</strong> {{ $parle->gender }}</li>
                    <li class="list-group-item"><strong>Age:</strong> {{ $parle->age }}</li>
                    <li class="list-group-item"><strong>Party:</strong> {{ $parle->party->name_party }}</li>
                    <li class="list-group-item"><strong>State:</strong> {{ $parle->state->name }}</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

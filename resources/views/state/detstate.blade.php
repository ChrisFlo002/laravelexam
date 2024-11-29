<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5">
        <!-- Page Header -->
        <h1 class="text-center text-primary mb-4">State Details</h1>

        <!-- State Details Card -->
        <div class="card shadow-sm mx-auto" style="max-width: 600px;">
            <div class="card-body">
                <h5 class="card-title text-center text-uppercase mb-4">{{ $state->name }} ({{ $state->code }})</h5>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Created At:</strong> {{ $state->created_at }}</li>
                    <li class="list-group-item"><strong>Last Updated:</strong> {{ $state->updated_at }}</li>
                    <li class="list-group-item"><strong>GDP (PIB):</strong> {{ $state->pib }}</li>
                    <li class="list-group-item"><strong>Area:</strong> {{ $state->area }} km²</li>
                    <li class="list-group-item"><strong>Population:</strong> {{ $state->population }}</li>
                </ul>

                <div class="text-center mt-4">
                    @if(Str::length($state->flag->path) > 0)
                        <img src="{{ Storage::url($state->flag->path) }}" alt="State Flag" class="img-thumbnail" style="height: 150px;">
                    @else
                        <p class="text-warning">No image found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

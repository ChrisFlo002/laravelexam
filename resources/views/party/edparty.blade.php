<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Party</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5">
        <!-- Page Header -->
        <h1 class="text-center text-primary mb-4">Edit Party</h1>

        <!-- Edit Party Form -->
        <form action="/edparty/{{$party->id}}" method="post" class="bg-white p-4 rounded shadow-sm">
            @csrf
            @method('PUT')

            <!-- Party Name -->
            <div class="mb-3">
                <label for="name_party" class="form-label">Party Name:</label>
                <input type="text" id="name_party" name="name_party" class="form-control" value="{{$party->name_party}}" required>
                @error('name_party')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Buttons -->
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit State</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5">
        <!-- Page Header -->
        <h1 class="text-center text-primary mb-4">Edit State</h1>

        <!-- Edit State Form -->
        <form method="POST" action="/edstate/{{$state->id}}" enctype="multipart/form-data" class="bg-white p-4 rounded shadow-sm">
            @csrf
            @method("PUT")

            <!-- State Code -->
            <div class="mb-3">
                <label for="code" class="form-label">State Code:</label>
                <input type="text" id="code" name="code" class="form-control" placeholder="Enter state code" required value="{{$state->code}}">
                @error('code')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- State Name -->
            <div class="mb-3">
                <label for="name" class="form-label">State Name:</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter state name" required value="{{$state->name}}">
                @error('name')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- GDP (PIB) -->
            <div class="mb-3">
                <label for="pib" class="form-label">GDP (PIB):</label>
                <input type="number" step="0.01" id="pib" name="pib" class="form-control" placeholder="Enter GDP value" value="{{$state->pib}}">
                @error('pib')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Population -->
            <div class="mb-3">
                <label for="population" class="form-label">Population:</label>
                <input type="number" id="population" name="population" class="form-control" placeholder="Enter population" value="{{$state->population}}">
                @error('population')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Area -->
            <div class="mb-3">
                <label for="area" class="form-label">Area (Superficie):</label>
                <input type="number" id="area" name="area" class="form-control" placeholder="Enter area size" value="{{$state->area}}">
                @error('area')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Current Flag -->
            <div class="mb-3 text-center">
                <label class="form-label">Current Flag:</label>
                <div>
                    <img src="{{ Storage::url($state->flag->path)}}" alt="Current Flag" class="img-thumbnail" style="height: 100px;">
                </div>
            </div>

            <!-- New Flag -->
            <div class="mb-3">
                <label for="flag" class="form-label">Choose New Flag Image:</label>
                <input type="file" id="flag" name="flag" class="form-control" accept="image/png,image/jpeg">
                @error('flag')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Buttons -->
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

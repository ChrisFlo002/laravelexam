<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elector Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-sm p-4" style="max-width: 500px; width: 100%;">
            <h2 class="text-center text-primary mb-4">Insert New Elector</h2>
            <form action="/postelector" method="post">
                @csrf

                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name_elector" placeholder="Enter elector's name" class="form-control" required>
                    @error('name_elector')
                    <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Gender -->
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select id="gender" name="gender" class="form-select" required>
                        <option value="" disabled selected>Select gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    @error('gender')
                    <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Age -->
                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" id="age" name="age" placeholder="Enter elector's age" class="form-control" min="18" required>
                </div>

                <!-- State -->
                <div class="mb-3">
                    <label for="state_id" class="form-label">State</label>
                    <select name="state_id" class="form-select">
                        @foreach ($states as $state)
                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Party -->
                <div class="mb-3">
                    <label for="party_id" class="form-label">Party</label>
                    <select name="party_id" class="form-select">
                        @foreach ($parties as $party)
                        <option value="{{ $party->id }}">{{ $party->name_party }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

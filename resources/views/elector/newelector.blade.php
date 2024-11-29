<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elector Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            font-family: Arial, sans-serif;
        }

        .card {
            border-radius: 15px;
            background: #ffffff;
        }

        .btn-primary {
            background-color: #4facfe;
            border: none;
        }

        .btn-primary:hover {
            background-color: #00a8cc;
        }

        .container {
            margin-top: 50px;
            margin-bottom: 50px;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow p-5" style="max-width: 500px; width: 100%;">
            <h2 class="text-center mb-4 text-uppercase text-primary">Insert New Elector</h2>
            <form action="/postelector" method="post">
                @csrf
                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Name</label>
                    <input type="text" id="name" name="name_elector" class="form-control"
                        placeholder="Enter elector's name" required>
                    @error('name_elector')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Gender -->
                <div class="mb-3">
                    <label for="gender" class="form-label fw-bold">Gender</label>
                    <select id="gender" name="gender" class="form-select" required>
                        <option value="" disabled selected>Select gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    @error('gender')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Age -->
                <div class="mb-3">
                    <label for="age" class="form-label fw-bold">Age</label>
                    <input type="number" id="age" name="age" class="form-control"
                        placeholder="Enter elector's age" min="18" required>
                    @error('age')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- State -->
                <div class="mb-3">
                    <label for="state_id" class="form-label fw-bold">State</label>
                    <select name="state_id" id="state_id" class="form-select">
                        @foreach ($states as $state)
                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach
                    </select>
                    @error('state_id')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Party -->
                <div class="mb-3">
                    <label for="party_id" class="form-label fw-bold">Party</label>
                    <select name="party_id" id="party_id" class="form-select">
                        @foreach ($parties as $party)
                            <option value="{{ $party->id }}">{{ $party->name_party }}</option>
                        @endforeach
                    </select>
                    @error('party_id')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary px-4">Save</button>
                    <button type="reset" class="btn btn-outline-secondary px-4">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Presidential Elector</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5">
        <!-- Page Header -->
        <h1 class="text-center text-primary mb-4">Edit Presidential Elector</h1>

        <!-- Edit Form -->
        <form method="POST" action="/edelector/{{$elector->id}}" class="bg-white p-4 rounded shadow-sm">
            @csrf
            @method("PUT")

            <!-- Full Name -->
            <div class="mb-3">
                <label for="name_elector" class="form-label">Full Name:</label>
                <input type="text" id="name_elector" name="name_elector" class="form-control" placeholder="Enter elector name" required value="{{$elector->name_elector}}">
                @error('name_elector')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Gender -->
            <div class="mb-3">
                <label for="gender" class="form-label">Gender:</label>
                <select id="gender" name="gender" class="form-select">
                    <option value="Male" {{ $elector->gender === 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ $elector->gender === 'Female' ? 'selected' : '' }}>Female</option>
                </select>
                @error('gender')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- State -->
            <div class="mb-3">
                <label for="state_id" class="form-label">State:</label>
                <select id="state_id" name="state_id" class="form-select">
                    @foreach ($states as $state)
                        <option value="{{ $state->id }}" {{ $elector->state_id === $state->id ? 'selected' : '' }}>
                            {{ $state->name }}
                        </option>
                    @endforeach
                </select>
                @error('state_id')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Party -->
            <div class="mb-3">
                <label for="party_id" class="form-label">Party:</label>
                <select id="party_id" name="party_id" class="form-select">
                    @foreach ($parties as $party)
                        <option value="{{ $party->id }}" {{ $elector->party_id === $party->id ? 'selected' : '' }}>
                            {{ $party->name_party }}
                        </option>
                    @endforeach
                </select>
                @error('party_id')
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

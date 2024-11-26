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
            <form>
                <div class="mb-3">
                    <label for="id_elector" class="form-label fw-bold">Elector ID</label>
                    <input type="text" id="id_elector" name="id_elector" class="form-control" placeholder="Enter elector ID" required>
                </div>
                <div class="mb-3">
                    <label for="state_id" class="form-label fw-bold">State ID</label>
                    <input type="text" id="state_id" name="state_id" class="form-control" placeholder="Enter state ID" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter elector's name" required>
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label fw-bold">Gender</label>
                    <select id="gender" name="gender" class="form-select" required>
                        <option value="" disabled selected>Select gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="party_id" class="form-label fw-bold">Party ID</label>
                    <input type="text" id="party_id" name="party_id" class="form-control" placeholder="Enter party ID" required>
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label fw-bold">Age</label>
                    <input type="number" id="age" name="age" class="form-control" placeholder="Enter elector's age" min="18" required>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-primary px-4">Save</button>
                    <button type="button" class="btn btn-outline-secondary px-4">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

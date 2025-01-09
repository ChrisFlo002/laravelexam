<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>govenor Form</title>
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
        .container{
            margin-top: 50px;
            margin-bottom: 50px;
        }
        
    </style>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow p-5" style="max-width: 500px; width: 100%;">
        <h2 class="text-center mb-4 text-uppercase text-primary">Insert New Governor</h2>
        <form>
            <div class="mb-3">
                <label for="governor_id" class="form-label fw-bold">Governor ID</label>
                <input type="text" id="governor_id" name="governor_id" class="form-control" placeholder="Enter governor ID" required>
            </div>
            <div class="mb-3">
                <label for="user_id" class="form-label fw-bold">User ID</label>
                <input type="text" id="user_id" name="user_id" class="form-control" placeholder="Enter user ID" required>
            </div>
            <div class="mb-3">
                <label for="state_id" class="form-label fw-bold">State ID</label>
                <input type="text" id="state_id" name="state_id" class="form-control" placeholder="Enter state ID" required>
            </div>
            <div class="mb-3">
                <label for="party_id" class="form-label fw-bold">Party</label>
                <input type="text" id="party_id" name="party_id" class="form-control" placeholder="Enter party affiliation" required>
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

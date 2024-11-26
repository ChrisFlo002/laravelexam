<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State Form</title>
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
            <h2 class="text-center mb-4 text-uppercase text-primary">Insert New State</h2>
            <form>
                <div class="mb-3">
                    <label for="id_etat" class="form-label fw-bold">State ID</label>
                    <input type="text" id="id_etat" name="id_etat" class="form-control" placeholder="Enter state ID" required>
                </div>
                <div class="mb-3">
                    <label for="code_etat" class="form-label fw-bold">State Code</label>
                    <input type="text" id="code_etat" name="code_etat" class="form-control" placeholder="Enter state code" required>
                </div>
                <div class="mb-3">
                    <label for="nom_etat" class="form-label fw-bold">State Name</label>
                    <input type="text" id="nom_etat" name="nom_etat" class="form-control" placeholder="Enter state name" required>
                </div>
                <div class="mb-3">
                    <label for="pib" class="form-label fw-bold">GDP (PIB)</label>
                    <input type="number" step="0.01" id="pib" name="pib" class="form-control" placeholder="Enter GDP value">
                </div>
                <div class="mb-3">
                    <label for="population" class="form-label fw-bold">Population</label>
                    <input type="number" id="population" name="population" class="form-control" placeholder="Enter population">
                </div>
                <div class="mb-3">
                    <label for="superficie" class="form-label fw-bold">Area (Superficie)</label>
                    <input type="number" id="superficie" name="superficie" class="form-control" placeholder="Enter area size">
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

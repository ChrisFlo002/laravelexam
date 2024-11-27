<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="d-flex">
    <!-- Sidebar -->
    <nav class="bg-primary text-white p-3 sidebar">
      <div class="text-center mb-3">
        <img src="{{ asset('images/flad_usa.png') }}" style="width: 100px;">
        <h5>USA Elections</h5>
      </div>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a href="#" class="nav-link text-white d-flex align-items-center" onclick="showSection('home')">
            <i class="fas fa-home me-2"></i>Home
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-white d-flex align-items-center" onclick="showSection('governor')">
            <i class="fas fa-user-tie me-2"></i>Governor
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-white d-flex align-items-center" onclick="showSection('elector')">
            <i class="fas fa-users me-2"></i>Elector
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-white d-flex align-items-center" onclick="showSection('state')">
            <i class="fas fa-map me-2"></i>State
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-white d-flex align-items-center" onclick="showSection('rapport')">
            <i class="fas fa-file-alt me-2"></i>Rapport
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-white d-flex align-items-center" onclick="showSection('statistiques')">
            <i class="fas fa-chart-bar me-2"></i>Statistiques
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-white d-flex align-items-center" onclick="showSection('results')">
            <i class="fas fa-poll me-2"></i>Results
          </a>
        </li>
        <li class="nav-item">
            <form method="POST" action="/logout">
                 @csrf
                <button type="submit" class="nav-link text-white d-flex align-items-center">
                    <i class="fas fa-sign-out-alt me-2"></i>Disconnect
                </button>
            </form>
        </li>
      </ul>
    </nav>

    <!-- Main Content -->
    <div class="flex-grow-1 p-4">
      <h1 class="text-primary">HOME</h1>
      <div id="content">
        <div id="home" class="content-section">
          <div class="row">
            <div class="col-4 mb-3">
              <div class="card bg-danger text-white text-center p-3">
                <i class="fas fa-user-tie fa-2x mb-2"></i>
                <h5>Governor</h5>
              </div>
            </div>
            <div class="col-4 mb-3">
              <div class="card bg-danger text-white text-center p-3">
                <i class="fas fa-users fa-2x mb-2"></i>
                <h5>Elector</h5>
              </div>
            </div>
            <div class="col-4 mb-3">
              <div class="card bg-danger text-white text-center p-3">
                <i class="fas fa-map fa-2x mb-2"></i>
                <h5>State</h5>
              </div>
            </div>
            <div class="col-4 mb-3">
              <div class="card bg-danger text-white text-center p-3">
                <i class="fas fa-poll fa-2x mb-2"></i>
                <h5>Results</h5>
              </div>
            </div>
          </div>
        </div>

        <div id="governor" class="content-section d-none">
          <h2>Governor Table</h2>
          <div class="search-form">
            <a class="btn btn-primary btn-add" href="govenorForm.blade.php">
                <i class="fa fa-plus"></i> Ajouter
            </a>
        </div>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>user_id</th>
                <th>state_id</th>
                <th>party_id</th>
                <th colspan="2">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>tx</td>
                <td>Republican</td>
                <td>
                    <a class="btn btn-edit text-primary" href="">
                        <i class="fa fa-edit"></i> Modifier
                    </a>
                    </td>
                    <td>
                    <a class="btn btn-delete text-danger" href="">
                        <i class="fa fa-trash"></i> Supprimer
                    </a>
              </tr>
            </tbody>
          </table>
        </div>

        <div id="elector" class="content-section d-none">
          <h2>Elector Table</h2>
          <div class="search-form">
            <a class="btn btn-primary btn-add" href="electorForm.blade.php">
                <i class="fa fa-plus"></i> Ajouter
            </a>
        </div>

          <table class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>state_id</th>
                <th>name</th>
                <th>gender</th>
                <th>party_id</th>
                <th>age</th>
                <th colspan="2">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>tx</td>
                <td>Jane Smith</td>
                <td>Male</td>
                <td>Republican</td>
                <td>25</td>
                <td>
                    <a class="btn btn-edit text-primary" href="">
                        <i class="fa fa-edit"></i> Modifier
                    </a>
                </td>
                <td>
                    <a class="btn btn-delete text-danger" href="">
                        <i class="fa fa-trash"></i> Supprimer
                    </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div id="state" class="content-section d-none">
          <h2>State Table</h2>
        <div class="search-form">
            <a class="btn btn-primary btn-add" href="stateForm.blade.php">
                <i class="fa fa-plus"></i> Ajouter
            </a>
        </div>

          <table class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>code</th>
                <th>name</th>
                <th>population</th>
                <th>area</th>
                <th>pib</th>
                <th colspan="2">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>tx</td>
                <td>Texas</td>
                <td>29M</td>
                <td>center</td>
                <td>78288</td>
                <td>
                    <a class="btn btn-edit text-primary" href="">
                        <i class="fa fa-edit"></i> Modifier
                    </a>
                    </td>
                    <td>
                    <a class="btn btn-delete text-danger" href="">
                        <i class="fa fa-trash"></i> Supprimer
                    </a>
              </tr>
            </tbody>
          </table>
        </div>

        <div id="results" class="content-section d-none">
          <h2>Results</h2>
          <p>Election results will be displayed here.</p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function showSection(sectionId) {
        document.querySelectorAll('.content-section').forEach((section) => {
            section.classList.add('d-none');
        });
        document.getElementById(sectionId).classList.remove('d-none');

        localStorage.setItem('activeSection', sectionId);
        }
        document.addEventListener('DOMContentLoaded', () => {
        const storedSection = localStorage.getItem('activeSection');

        if (storedSection) {
            showSection(storedSection);
        } else {
            showSection('home');
        }

        });
  </script>
</body>
</html>

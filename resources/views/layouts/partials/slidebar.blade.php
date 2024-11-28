<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>
    <nav class="sb-sidenav accordion sb-sidenav-dark" style="background-color: #3C3B6E;" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading text-white"></div>
                <img src="{{ asset('images/flad_usa.png') }}" width="120 px", style="margin-left: 30px;" alt="">
                {{-- <li class="nav-item">
                    <select id="partySelect" class="form-select bg-primary text-white" onchange="redirectToParty(this)">
                        @if ($parties->isEmpty())
                            <p>No parties found.</p>
                        @else
                            @foreach ($parties as $party)
                                <p>{{ $party->name_party }}</p>
                            @endforeach
                        @endif

                    </select>
                    <script>
                        function redirectToParty(selectElement) {
                            const partyId = selectElement.value;
                            window.location.href = `/partinfo/${partyId}`;
                        }
                    </script>
                </li> --}}

                <a class="nav-link text-white" href="{{ url('admin/admin/dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="bi bi-people"></i></div>
                    Dashboard
                </a>

                <a class="nav-link text-white" href="{{ url('admin/user') }}">
                    <div class="sb-nav-link-icon"><i class="bi bi-people"></i></div>
                    Users
                </a>

                <a class="nav-link text-white" href="{{ url('admin/elector') }}">
                    <div class="sb-nav-link-icon"><i class="bi bi-person-check"></i></div>
                    Elector
                </a>

                <a class="nav-link text-white" href="{{ url('admin/state') }}">
                    <div class="sb-nav-link-icon"><i class="bi bi-globe"></i></div>
                    State
                </a>

                <a class="nav-link text-white" href="{{ url('admin/parle') }}">
                    <div class="sb-nav-link-icon"><i class="bi bi-building"></i></div>
                    Parlementaire
                </a>

                <a class="nav-link text-white" href="{{ url('admin/senator') }}">
                    <div class="sb-nav-link-icon"><i class="bi bi-person-badge"></i></div>
                    Senator
                </a>

                <a class="nav-link text-white" href="{{ url('admin/party') }}">
                    <div class="sb-nav-link-icon"><i class="bi bi-flag"></i></div>
                    Party
                </a>

                <a class="nav-link text-white cursor-pointer" href="">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            <i class="fas fa-sign-out-alt me-2 w-0"></i>
                            <span class="text-white">
                                {{ __('Log Out') }}</span>
                        </x-dropdown-link>
                    </form>
                </a>
                <!-- <div class="sb-sidenav-menu-heading text-white">Interface</div>

            <a class="nav-link collapsed text-white" href="#" data-bs-toggle="collapse" data-bs-target="#collapseParty" aria-expanded="false" aria-controls="collapseParty">
                <div class="sb-nav-link-icon"><i class="bi bi-columns-gap"></i></div>
                Party
                <div class="sb-sidenav-collapse-arrow"><i class="bi bi-chevron-down"></i></div>
            </a>
            <div class="collapse" id="collapseParty" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link text-white" href="{{ url('admin/party/create') }}">Add Party</a>
                    <a class="nav-link text-white" href="{{ url('admin/party') }}">View Party</a>
                </nav>
            </div>

            <a class="nav-link collapsed text-white" href="#" data-bs-toggle="collapse" data-bs-target="#collapseParlementaire" aria-expanded="false" aria-controls="collapseParlementaire">
                <div class="sb-nav-link-icon"><i class="bi bi-columns-gap"></i></div>
                Parlementaire
                <div class="sb-sidenav-collapse-arrow"><i class="bi bi-chevron-down"></i></div>
            </a>
            <div class="collapse" id="collapseParlementaire" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link text-white" href="{{ url('admin/Parlementaire/create') }}">Add Parlementaire</a>
                    <a class="nav-link text-white" href="{{ url('admin/Parlementaire') }}">View Parlementaire</a>
                </nav>
            </div>

            <a class="nav-link collapsed text-white" href="#" data-bs-toggle="collapse" data-bs-target="#collapsesenator" aria-expanded="false" aria-controls="collapsesenator">
                <div class="sb-nav-link-icon"><i class="bi bi-columns-gap"></i></div>
                Senator
                <div class="sb-sidenav-collapse-arrow"><i class="bi bi-chevron-down"></i></div>
            </a>
            <div class="collapse" id="collapsesenator" aria-labelledby="headingTree" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link text-white" href="{{ url('admin/senator/create') }}">Add Senator</a>
                    <a class="nav-link text-white" href="{{ url('admin/senator') }}">View Senator</a>
                </nav>
            </div>

            <a class="nav-link collapsed text-white" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="bi bi-book"></i></div>
                Pages
                <div class="sb-sidenav-collapse-arrow"><i class="bi bi-chevron-down"></i></div>
            </a>

            <div class="sb-sidenav-menu-heading text-white">Addons</div>
            <a class="nav-link text-white" href="charts.html">
                <div class="sb-nav-link-icon"><i class="bi bi-graph-up"></i></div>
                Charts
            </a>
            <a class="nav-link text-white" href="tables.html">
                <div class="sb-nav-link-icon"><i class="bi bi-table"></i></div>
                Tables
            </a>
        </div>
    </div>
-->
                <!-- <div class="sb-sidenav-footer text-white">
        <div class="small">Logged in as:</div>
        Start Bootstrap
    </div> -->
    </nav>
</body>

</html>

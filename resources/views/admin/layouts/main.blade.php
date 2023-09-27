<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/iconly/bold.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
 </head>

<body>
    <div id="app" class="bg-light" style="height: 100vh">
        <div id="sidebar" class="active bg-light">
            <div class="sidebar-wrapper bg-light active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="ms-2 d-flex flex-column justify-content-center align-items-center">
                            <img src="{{ asset('assets/msos1.png') }}" alt="logo" style="width: 50px; height: 50px;">
                            <h3 class="pt-2"><a href="/admin" class="text-primary ms-2" style="text-decoration: none">mentalSOS</a><h3>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle text-primary"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu bg-light">
                    <ul class="menu" id="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item">
                            <a href="/admin" class='sidebar-link'>
                                <i class="text-primary bi bi-grid-fill"></i>
                                <span class="pt-1">Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="/pernyataan" class='sidebar-link'>
                                <i class="text-primary bi bi-card-checklist"></i>
                                <span class="pt-1">Pernyataan</span>
                            </a>
                        </li>
                        <hr>
                        <li class="sidebar-item">
                            <a href="#logoutModal" data-bs-target="#logoutModal" data-bs-toggle="modal" class='sidebar-link'>
                                <i class="bi bi-box-arrow-right text-danger"></i>
                                <span class="text-danger pt-1">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            @yield('content')
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <p class="text-primary">Apakah anda yakin untuk Logout?</p>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                        <a class="ms-2 btn btn-danger" href="/logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>
</html>

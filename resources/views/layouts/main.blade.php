<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>mentalSOS</title>
    <!-- icon-->
    <link rel="icon" href="{{ asset('assets/msos1.png') }}" type="image/x-icon">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    {{-- Jquery --}}
    <script src="{{ asset('js/jquery.js') }}"></script>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand d-flex justify-content-center align-items-center" href="#page-top">
                <img src="{{ asset('assets/msos.png') }}" class="me-3" alt="..." />
                <span style="text-transform: none">mentalSOS</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/#home">home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/tes/#tes">Tes</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#contact">Contact</a></li>
                    @if (Auth::user())
                        @if (Auth::user()->role == 'admin')
                            <div class="navbar-collapse" id="dropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <span class="fw-bold" style="font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'; font-size: 0.95rem; letter-spacing: 0.0625em;">{{ Auth::user()->nama }}</span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item text-primary" href="/admin"
                                                    style="font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'; font-size: 0.95rem; letter-spacing: 0.0625em;">
                                                    Dashboard
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item text-primary" data-bs-toggle="modal" data-bs-target="#logoutModal"
                                                    style="font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'; font-size: 0.95rem; letter-spacing: 0.0625em;">
                                                    Logout
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <div class="navbar-collapse" id="dropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <span class="fw-bold" style="font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'; font-size: 0.95rem; letter-spacing: 0.0625em;">{{ Auth::user()->nama }}</span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item text-primary" href="/profile"
                                                    style="font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'; font-size: 0.95rem; letter-spacing: 0.0625em; cursor: pointer">
                                                    Profile
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item text-primary" data-bs-toggle="modal" data-bs-target="#logoutModal"
                                                    style="font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'; font-size: 0.95rem; letter-spacing: 0.0625em; cursor: pointer">
                                                    Logout
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    @else
                        <li class="nav-item mt-1">
                            <a style="font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
                                font-size: 0.95rem; color: #fff; letter-spacing: 0.0625em;"
                                class="btn btn-sm btn-primary fw-bold" id="masuk1" data-bs-toggle="modal"
                                data-bs-target="#login">
                                login
                            </a>
                        </li>
                        <li class="nav-item mt-1">
                            <a style="font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
                                font-size: 0.95rem; color: #fff; letter-spacing: 0.0625em;"
                                class="btn btn-sm btn-primary fw-bold" id="daftar1" data-bs-toggle="modal"
                                data-bs-target="#daftar">
                                register
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    {{-- Modal Login --}}
    <div class="modal fade" id="login" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="modalCenterTitle">LOGIN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- login input-->
                    <div class="loginInput">
                        <form class="px-3 pt-2" action="/login" method="post">
                            @csrf
                            <div class="row g-3">
                                <input type="text" name="email" class="form-control mb-2" placeholder="Email">
                            </div>
                            <div class="row g-3">
                                <input type="password" name="password" class="form-control mb-2"
                                    placeholder="Password">
                            </div>
                            <div class="row g-3">
                                <button type="submit" class="btn btn-primary mb-2"
                                    style="width: 100%">Login</button>
                            </div>

                        </form>
                        <div class="d-flex justify-content-center px-2">
                            <button class="d-flex justify-content-center btn btn-light border border-primary"
                                style="width: 100%;" onclick="window.location.href='{{ '/auth/redirect' }}'">
                                <img style="display: block; height: 20px; padding-top: 4px;" class="me-2"
                                    src="{{ asset('assets/google.png') }}" alt="google">
                                Login dengan Google
                            </button>
                        </div>
                        <div class="row">
                            <p class="mt-4" style="font-size: 13px; text-align: center;">Belum punya akun?
                                <a data-bs-toggle="modal" data-bs-target="#daftar" class="text-primary"
                                    style="font-size: 13px; font-weight: 600; text-decoration: none; cursor: pointer;">&nbsp;REGISTER</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Daftar --}}
    <div class="modal fade" id="daftar" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="modalCenterTitle">REGISTER</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="loginInput">
                        <form class="px-3 pt-2" action="/regis" method="post">
                            @csrf
                            <div class="row g-3">
                                <input type="text" name="nama" class="form-control mb-2"
                                    placeholder="Nama Lengkap">
                            </div>
                            <div class="row g-3">
                                <input type="text" name="email" class="form-control mb-2" placeholder="Email">
                            </div>
                            <div class="row g-3">
                                <input type="password" name="password" class="form-control mb-2"
                                    placeholder="Password">
                            </div>
                            <div class="row g-3">
                                <input type="password" name="password_confirmation" class="form-control mb-2"
                                    placeholder="Konfirmasi Password">
                            </div>
                            <div class="row g-3 mb-2">
                                <button type="submit" class="btn btn-primary" style="width: 100%;">Register</button>
                            </div>
                        </form>
                        <div class="d-flex justify-content-center px-2">
                            <button class="d-flex justify-content-center btn btn-light border border-primary"
                                style="width: 100%;" onclick="window.location.href='{{ '/auth/redirect' }}'">
                                <img style="display: block; height: 20px; padding-top: 4px;" class="me-2"
                                    src="{{ asset('assets/google.png') }}" alt="google">
                                Login dengan Google
                            </button>
                        </div>
                        <div class="row">
                            <p class="mt-4" style="font-size: 13px; text-align: center;">Sudah punya akun?
                                <a data-bs-toggle="modal" data-bs-target="#login" class="text-primary"
                                    style="font-size: 13px; font-weight: 600; text-decoration: none; cursor: pointer;">&nbsp;LOGIN</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <p class="text-primary">Apakah anda yakin untuk logout?</p>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                        <a class="ms-2 btn btn-danger" href="/logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>

    <script>
        $(document).ready(function() {
            var $window = $(window),
                $masuk = $('#masuk1');
            $daftar = $('#daftar1');
            $search = $('#search');

            // MASUK & DAFTAR
            // ADD CLASS MT-2
            $window.resize(function resize() {
                if ($window.width() < 992) {
                    return $masuk.addClass('mt-2');
                }
                $masuk.removeClass('mt-2');
            }).trigger('resize');
            $window.resize(function resize() {
                if ($window.width() < 992) {
                    return $daftar.addClass('mt-3');
                }
                $daftar.removeClass('mt-3');
            }).trigger('resize');
        });
    </script>

    <script>
        let exist = {{ Session::has('errors') }};
        let msg = {{ Session::get('errors') }};
        msg = msg.replace(/&quot;/g, '\"');

        if (exist) {
            let json = JSON.parse(msg);
            let emailErr = ((typeof(json["email"]) !== 'undefined') ? json["email"] : '');
            let passErr = ((typeof(json["password_confirmation"]) !== 'undefined') ? json["password_confirmation"] : '');
            let alertText = emailErr + "\n" + passErr;
            alert(alertText);
        }
    </script>
</body>

</html>

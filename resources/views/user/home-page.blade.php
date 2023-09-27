@extends('layouts.main')

@section('content')
    <!-- Masthead-->
    <header class="masthead" id="home">
        <div class="container">
            <div class="masthead-subheading">Selamat Datang di mentalSOS</div>
            <div class="masthead-heading text-uppercase">Penanganan Dini Gangguan Kesehatan Mental</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#tes">Mulai Sekarang</a>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="tes">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">TES</h2>
                <h3 class="section-subheading text-muted">Temukan tanda-tanda depresi dan kecemasan anda!</h3>
            </div>
            @if (Auth::user())
                <div class="row text-center justify-content-center" id="cardTes">
                    <div class="col-md-3 service">
                        <div class="card border-0" style="height: 450px; background-image: url('{{ asset('assets/img/cardbg5.jpg') }}'); background-repeat: no-repeat; background-size: cover; box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
                            <div class="card-body p-4 d-flex justify-content-center align-items-center">
                                <a class="btn btn-primary w-100" href="/tes#tes">
                                    <h6 class="fw-bolder m-auto p-2">MULAI</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row text-center justify-content-center" id="cardTes">
                    <div class="col-md-3 service">
                        <div class="card border-0" style="height: 450px; background-image: url('{{ asset('assets/img/cardbg5.jpg') }}'); background-repeat: no-repeat; background-size: cover; box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
                            <div class="card-body p-4 d-flex justify-content-center align-items-center">
                                <a class="btn btn-primary w-100" href="/tes#tes">
                                    <h6 class="fw-bolder m-auto p-2">MULAI (TANPA AKUN)</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About</h2>
                <h3 class="section-subheading text-muted">Berikut merupakan deskripsi singkat tentang mentalSOS.</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/msos1.png"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2023</h4>
                            <h4 class="subheading">mentalSOS</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">mentalSOS merupakan website yang dibuat untuk penanganan dini bagi orang yang terkena gangguan mental.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/research.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2023</h4>
                            <h4 class="subheading">Tes mentalSOS</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Tes mentalSOS merupakan sebuah tes psikologi sederhana yang dibuat untuk deteksi awal tanda-tanda depresi dan kecemasan melalui metode kuantitatif.</p>
                            <a class="btn btn-primary btn-sm text-uppercase mt-2" href="/tes#tes"><small>Mulai Tes</small></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/5.jpg"
                        alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">Coming Soon</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Nantikan fitur-fitur selanjutnya yang luar biasa!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Be Part
                            <br />
                            Of Our
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact</h2>
                <h3 class="section-subheading text-muted">Hubungi kami jika anda menemukan masalah!</h3>
            </div>
            <div class="row text-center justify-content-evenly">
                <div class="col-md-4 mb-4 pb-3">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <img style="height: 100px; display: block; position: absolute; left: 30px; top: 13px" class="img-fluid" src="assets/img/logos/walogo.webp" alt="..." />
                    </span>
                    <h4 class="mt-3">WhatsApp</h4>
                    <p class="text-muted">+62 812-4923-1762</p>
                    <div class="wa">
                        <a href="https://wa.me/6281249231762?text=Halo,%20Saya%20adalah%20pengunjung%20website%20mentalSOS%20dan%20saya%20ingin%20menanyakan%20sesuatu%20kepada%20anda" target="_blank" class="btn btn-primary" style="width: 70%">KLIK DISINI</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4 pb-3">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <img style="height: 90px; display: block; position: absolute; left: 35px; top: 17px" class="img-fluid" src="assets/img/logos/gmaillogo.png" alt="..." />
                    </span>
                    <h4 class="mt-3">Email</h4>
                    <p class="text-muted">amril.agam.mubarrok-2022@vokasi.unair.ac.id</p>
                    <div class="email">
                        <a onclick="location.href='mailto:amril.agam.mubarrok-2022@vokasi.unair.ac.id'" target="_blank" class="btn btn-primary" style="width: 70%">KLIK DISINI</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4 mt-5" style="background-color: #212529;">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <div class="text-light">Copyright &copy; mentalSOS 2023</div>
            </div>
        </div>
    </footer>
    </body>

    <script>
        $(document).ready(function() {
            var window = $(window);
            var wa = $('.wa');
            var email = $('.email');

            window.resize(function resize() {
                if (window.width() < 1200 && window.width() > 768) {
                    return wa.addClass('mt-5');
                }
                wa.removeClass('mt-5');
            }).trigger('resize');

            window.resize(function resize() {
                if (window.width() < 1200 && window.width() > 768) {
                    return email.addClass('pt-1');
                }
                email.removeClass('pt-1');
            }).trigger('resize');
        });
    </script>
@endsection

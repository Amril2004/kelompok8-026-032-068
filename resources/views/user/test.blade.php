@extends('layouts.main')

@section('content')
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Selamat Datang di TES mentalSOS</div>
            <div class="masthead-heading text-uppercase">Deteksi Dini Gangguan Kesehatan Mental</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#tes">Mulai tes</a>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="tes">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-heading text-uppercase">TES</h2>
            </div>
            <div class="section-subheading text-muted mb-3">
                <h5>Berikut adalah langkah-langkah yang harus Anda lakukan :</h5>
            </div>
            <div class="section-subheading text-muted d-flex flex-column">
                <h6>TAHAP 1 :</h6>
                <ol class="text-left">
                    <li>Anda akan diberikan 10 pernyataan</li>
                    <li>Pilihlah 5 pernyataan yang paling mendeskripsikan apa yang anda alami dengan cara menekan kalimat
                        pernyataan tersebut</li>
                    <li>Pernyataan akan diadakan secara acak</li>
                    <li>Berusahalah untuk jujur pada diri sendiri</li>
                </ol>
            </div>
            <div class="section-subheading text-muted d-flex flex-column">
                <h6>TAHAP 2 :</h6>
                <ol class="text-left">
                    <li>Anda akan meandapatkan hasil dari diagnosa anda dan juga diberikan solusi/instruksi untuk masalah
                        sesuai dengan diagnosa anda</li>
                    <li>Jika anda mengalami beberapa masalah atau kesulitan, silahkan hubungi kontak yang tertera pada bar
                        navigasi</li>
                </ol>
            </div>
            {{-- pilih pernyataan --}}
            <div class="containerTes mb-5">
                <div class="row">
                    <form action="/hasiltes#hasiltes" method="post">
                        @csrf
                        <div class="col-12">
                            <p class="fw-bold">Pilihlah 5 pernyataan yang paling mendeskripsikan apa yang anda alami!</p>
                            <div>
                                @php
                                    $previousNumbers = [];
                                    $randomNumber = null;
                                    $totalPernyataan = count($pernyataans)-1;
                                    $randomedArray = [];

                                    for ($i=0; $i <= $totalPernyataan; $i++) {
                                        do {
                                            $randomNumber = rand(0, $totalPernyataan);

                                            $isDuplicate = in_array($randomNumber, $previousNumbers);

                                            if (!$isDuplicate) {
                                                $previousNumbers[] = $randomNumber;
                                                break;
                                            }
                                        } while ($isDuplicate);
                                    }
                                @endphp
                                @foreach ($previousNumbers as $key)
                                    <input id="{{ $pernyataans[$key]->id }}" type="checkbox" name="pernyataan{{ $pernyataans[$key]->id }}"
                                        value="{{ $pernyataans[$key]->pernyataan }}">
                                    <label for="{{ $pernyataans[$key]->id }}" class="box">
                                        <div class="course">
                                            <span class="circle" style="position: absolute"></span>
                                            <span class="subject ms-5">
                                                {{ $pernyataans[$key]->pernyataan }}
                                            </span>
                                        </div>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mt-4">
                            <button id="submit" type="submit" class="btn btn-primary px-4 py-2 fw-bolder text-uppercase"
                                disabled>
                                submit
                            </button>
                        </div>
                    </form>
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

    <script>
        $(document).ready(function() {
            $('.box').click(function() {
                var elem = $(this);
                var id = $(this).attr('for');
                // console.log($('.checked').length);
                if ($('.checked').length <= 4) {
                    $('#' + id).removeAttr('disabled');
                    $(elem).toggleClass('border border-primary bg-primary checked');
                    $(elem).find('.circle').toggleClass('border border-dark bg-dark');
                } else {
                    if ($(elem).hasClass('checked')) {
                        $(elem).toggleClass('border border-primary bg-primary checked');
                        $(elem).find('.circle').toggleClass('border border-dark bg-dark');
                    } else if ($('.checked').length > 4) {
                        $('#' + id).attr('disabled', 'true');
                        $(elem).attr('data-bs-toggle', 'tooltip');
                        $(elem).attr('data-bs-placement', 'top');
                        $(elem).attr('data-bs-title', 'Anda telah memilih 5 pernyataan');

                        $(elem).tooltip({
                            trigger: 'click'
                        });
                        $(elem).tooltip('show');

                        elem.on('shown.bs.tooltip', function() {
                            setTimeout(function() {
                                elem.tooltip('dispose');
                            }, 2000); // Hide the tooltip after 2 seconds (2000 milliseconds)
                        });
                    }
                }

                // disable and undisable submit btn
                if ($('.checked').length == 5) {
                    $('#submit').removeAttr('disabled');
                } else {
                    $('#submit').attr('disabled', 'true');
                }
            });
        });
    </script>
@endsection

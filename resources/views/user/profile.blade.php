@extends('layouts.main')

@section('content')
    <style>
        .video-container {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
            /* Aspect ratio for 16:9 videos */
            height: 0;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
    <section class="profile bg-dark" id="profile" style="height: 100vh">
        <div class="container py-auto mt-4 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card border border-primary">
                        <div class="rounded-top text-white bg-primary d-flex align-items-center" style="height:100px;">
                            <div class="ps-4 text-dark">
                                <h4 class="mt-0 mb-0">{{ Auth::user()->nama }}</h4>
                                <p class="small mb-0">{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                        <div class="d-flex flex-column justify-content-evenly pb-4">
                            <div class="p-4 pb-0 text-black">
                                <p class="mb-1 h6">Diagnosa Terakhir</p>
                                <button class="btn btn-primary text-dark mt-2" data-bs-toggle="modal"
                                data-bs-target="#detail">{{ $hasiltes->hasil }}</button>
                            </div>
                            <div class="p-4 pb-0 text-black">
                                <p class="mb-3 h6">Berikut video mengenai penanganan dini pada gejala {{ $hasiltes->hasil }} :</p>
                                <div class="mb-0">
                                    @if ($hasiltes->hasil == 'Clinical Depression')
                                        <div class="video-container">
                                            <iframe id="frame" style="border-radius: 10px" width="992" height="558"
                                                src="https://www.youtube.com/embed/4iovHI3m2Zw" targ>
                                            </iframe>
                                        </div>
                                    @else
                                        <div class="video-container">
                                            <iframe id="frame" style="border-radius: 10px" width="992" height="558"
                                                src="https://www.youtube.com/embed/p7Z1tLnc1LU">
                                            </iframe>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="detail" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="modalCenterTitle">Apa itu {{ $hasiltes->hasil }}?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if ($hasiltes->hasil == 'Clinical Depression')
                        <p>
                            Clinical Depression adalah Suatu gangguan kesehatan mental yang ditandai dengan suasana hati yang
                            terus tertekan atau
                            kehilangan minat dalam beraktivitas, menyebabkan penurunan yang signifikan dalam kualitas hidup
                            sehari-hari.
                            Kemungkinan penyebabnya termasuk ketegangan yang bersumber dari kombinasi kondisi biologis,
                            psikologis, dan sosial. Semakin banyak penelitian yang menunjukkan bahwa faktor ini dapat
                            menyebabkan perubahan dalam fungsi otak, termasuk aktivitas abnormal dari sirkuit saraf tertentu
                            dalam otak.
                        </p>
                    @else
                        <p>
                            Mild Anxiety atau kecemasan ringan adalah gangguan kecemasan yang paling umum. Kecemasan adalah
                            perasaan khawatir atau takut yang berlebihan terhadap suatu kejadian atau situasi yang sebenarnya
                            tidak mengancam nyawa. Kecemasan ringan bisa membuat seseorang merasa cemas, khawatir,
                            atau tegang dalam situasi-situasi yang sebenarnya aman dan normal. Orang yang mengalami kecemasan
                            ringan mungkin merasa tidak nyaman, tapi masih bisa menjalankan aktivitasnya seperti biasa
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        // $(document).ready(function () {
        //     var $window = $(window);
        //     var $profile = $('.profile');

        //     $window.resize(function resize() {
        //         if ($window.width() < 768) {
        //             return $profile.addClass('mt-5');
        //         }
        //         $profile.removeClass('mt-5');
        //     }).trigger('resize');
        // });
    </script>
@endsection

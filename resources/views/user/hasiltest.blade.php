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
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">“Mampu menjadi diri sendiri adalah salah satu komponen terkuat dari kesehatan
                mental yang baik.”</div>
            <div class="masthead-subheading"><small>-Lauren Fogel Mersy</small></div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#hasiltes">HASIL TES</a>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="hasiltes">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-heading text-uppercase">HASIL TES</h2>
            </div>
            <div class="section-subheading text-muted mb-3">
                <h5>Diduga mengalami
                    <span class="fst-italic">
                        @if (Auth::user())
                            {{-- @dd($hasiltes->ha.sil) --}}
                            "{{ $hasiltes->hasil }}"
                        @else
                            "{{ session('hasil') }}"
                        @endif
                    </span>
                </h5>
                @if (Auth::user() && $hasiltes->hasil == 'Clinical Depression')
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
                @elseif (Auth::user() && $hasiltes->hasil == 'Mild Anxiety')
                    <p>
                        Mild Anxiety atau kecemasan ringan adalah gangguan kecemasan yang paling umum. Kecemasan adalah
                        perasaan khawatir atau takut yang berlebihan terhadap suatu kejadian atau situasi yang sebenarnya
                        tidak mengancam nyawa. Kecemasan ringan bisa membuat seseorang merasa cemas, khawatir,
                        atau tegang dalam situasi-situasi yang sebenarnya aman dan normal. Orang yang mengalami kecemasan
                        ringan mungkin merasa tidak nyaman, tapi masih bisa menjalankan aktivitasnya seperti biasa
                    </p>
                @elseif (!Auth::user() && session('hasil') == 'Clinical Depression')
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
                @elseif (!Auth::user() && session('hasil') == 'Mild Anxiety')
                    <p>
                        Mild Anxiety atau kecemasan ringan adalah gangguan kecemasan yang paling umum. Kecemasan adalah
                        perasaan khawatir atau takut yang berlebihan terhadap suatu kejadian atau situasi yang sebenarnya
                        tidak mengancam nyawa. Kecemasan ringan bisa membuat seseorang merasa cemas, khawatir,
                        atau tegang dalam situasi-situasi yang sebenarnya aman dan normal. Orang yang mengalami kecemasan
                        ringan mungkin merasa tidak nyaman, tapi masih bisa menjalankan aktivitasnya seperti biasa
                    </p>
                @endif
            </div>
            <div class="section-subheading text-muted d-flex flex-column">
                <h6>Pernyataan yang dipilih :</h6>
                <ol class="text-left">
                    {{-- @dd($pernyataans) --}}
                    @foreach ($pernyataans as $p)
                        <li>{{ $p }}</li>
                    @endforeach
                </ol>
            </div>
            @if (Auth::user())
                <div class="section-subheading text-muted d-flex flex-column">
                    <h6>Berikut video mengenai penanganan dini pada gejala {{ $hasiltes->hasil }} :</h6>
                    <div class="text-start mt-2">
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
            @else
                <div class="section-subheading text-muted d-flex flex-column">
                    <h6>Berikut video mengenai penanganan dini pada gejala {{ session('hasil') }} :</h6>
                    <div class="text-start mt-2">
                        @if (session('hasil') == 'Clinical Depression')
                            <div class="video-container">
                                <iframe id="frame" style="border-radius: 10px" width="992" height="558"
                                    src="https://www.youtube.com/embed/4iovHI3m2Zw">
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
            @endif
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

@endsection

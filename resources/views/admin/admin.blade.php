@extends('admin.layouts.main')

@section('content')
    <!-- Page Heading -->
    <div class="page-heading">
        <h4>Data Peserta Tes Hari ini (Yang Memiliki Akun)</h4>
        {{-- <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tabel Obat</h3>
                    <button type="button" class="btn btn-info mb-3 mt-4 d-flex justify-content-center" data-bs-toggle="modal"
                        data-bs-target="#tambah">
                        <span class="bi bi-plus-square me-2" style="padding-top: 2px;"></span>Tambah Obat
                    </button>
                </div>
            </div>
        </div> --}}
        <!-- Content Row -->
        <section class="section mt-4">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Hasil</th>
                                <th scope="col">Tes Terakhir</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($todayUsers as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->nama }}</td>
                                    <td>{{ $user->hasil }}</td>
                                    <td>{{ $user->created_at->diffForHumans() }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection

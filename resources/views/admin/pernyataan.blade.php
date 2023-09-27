@extends('admin.layouts.main')

@section('content')
    <!-- Page Heading -->
    <div class="page-heading">
        {{-- <h4>Daftar Pernyataan</h4> --}}
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h4>Daftar Pernyataan</h4>
                    <button type="button" class="btn btn-info mb-3 mt-4 d-flex justify-content-center" data-bs-toggle="modal"
                        data-bs-target="#tambah">
                        <span class="bi bi-plus-square me-2" style="padding-top: 0px;"></span>Tambah Pernyataan
                    </button>
                </div>
            </div>
        </div>
        <!-- Content Row -->
        <section class="section">
            <div class="card">
                <div class="card-body">
                    @if (session('delete'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session('delete') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('tambah'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session('tambah') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('ubah'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session('ubah') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Pernyataan</th>
                                <th scope="col" class="text-center">Poin</th>
                                <th scope="col" class="text-center">Status</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pernyataans as $p)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $p->pernyataan }}</td>
                                    <td class="text-center">{{ $p->poin }}</td>
                                    <td class="text-center">
                                        @if ($p->status == 1)
                                            Tampil di Tes
                                        @else
                                            Tidak tampil di Tes
                                        @endif
                                    </td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <button style="height: 50%;" class="btn btn-primary text-light me-2"
                                            data-bs-toggle="modal" data-bs-target="#ubah-{{ $p->id }}">Ubah</button>
                                        <button style="height: 50%;" class="btn btn-danger text-light" data-bs-toggle="modal"
                                            data-bs-target="#delete-{{ $p->id }}">Hapus</button>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

    <!-- Modal Delete-->
    @foreach ($pernyataans as $p)
        <div id="delete-{{ $p->id }}" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="text-end">
                            <button type="button" class="btn-close text-end" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="mt-1">
                            <h4>Yakin untuk menghapus?</h4>
                            <p>Apakah benar anda ingin menghapus pernyataan "{{ $p->pernyataan }}"?</p>
                        </div>
                        <div class="d-flex flex-row-reverse mt-3">
                            <form action="/pernyataan/{{ $p->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" type="submit" name="submit">Hapus</button>
                            </form>
                            <button style="height: 50%;" class="btn btn-primary me-2" data-bs-dismiss="modal">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Modal Ubah-->
    @foreach ($pernyataans as $p)
        <div class="modal fade" id="ubah-{{ $p->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Ubah Pernyataan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form class="row d-flex flex-column" action="/pernyataan/{{ $p->id }}" method="post">
                            @method('put')
                            @csrf
                            <div class="mb-3 mt-3">
                                <label for="pernyataan" class="form-label">Pernyataan</label>
                                <input type="text" class="form-control" id="pernyataan" name="pernyataan" value="{{ $p->pernyataan }}">
                            </div>

                            <div class="mb-3">
                                <label>Status</label>
                                <select class="form-select w-50 border-1 rounded" name="status">
                                    {{-- <option>Pilih Status</option> --}}
                                    @if ($p->status == 1)
                                        <option selected value="1">Tampil di Tes</option>
                                        <option value="0">Tidak tampil di Tes</option>
                                    @else
                                        <option selected value="0">Tidak tampil di Tes</option>
                                        <option value="1">Tampil di Tes</option>
                                    @endif
                                </select>
                            </div>

                            <label for="tambahpoin">Poin</label>
                            <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups"
                                id="tambahpoin">
                                <div class="btn-group me-2" role="group" aria-label="First group">
                                    <button id="minus" type="button" min="0" class="btn btn-outline-secondary"
                                        onclick="counter(this.id)">-</button>
                                    <div class="input-group" style="width: 45px">
                                        <input id="value" type="text" name="poin"
                                            class="form-control rounded-0 text-center" value="1">
                                    </div>
                                    <button id="plus" type="button" min="0" class="btn btn-outline-secondary"
                                        onclick="counter(this.id)">+</button>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-info ms-3 text-light" style="width: 150px">Simpan</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{-- Modal Tambah --}}
    <div class="modal fade" id="tambah" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Tambah Pernyataan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="/tambahpernyataan" method="POST">
                        @method('post')
                        @csrf

                        <div class="mb-3 mt-3">
                            <label for="pernyataan" class="form-label">Pernyataan</label>
                            <input type="text" class="form-control" id="pernyataan" name="pernyataan">
                        </div>

                        <label for="category_id">Status</label>
                        <br>
                        <select class="form-select w-50 border-1 rounded" name="status">
                            <option selected>Pilih Status</option>
                            <option value="1">Tampil di Tes</option>
                            <option value="0">Tidak Tampil di Tes</option>
                        </select>

                        <label for="tambahpoin">Poin</label>
                        <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups"
                            id="tambahpoin">
                            <div class="btn-group me-2" role="group" aria-label="First group">
                                <button id="minus" type="button" min="0" class="btn btn-outline-secondary"
                                    onclick="counter(this.id)">-</button>
                                <div class="input-group" style="width: 45px">
                                    <input id="val" type="text" name="poin"
                                        class="form-control rounded-0 text-center" value="1">
                                </div>
                                <button id="plus" type="button" min="0" class="btn btn-outline-secondary"
                                    onclick="counter(this.id)">+</button>
                            </div>
                        </div>
                        <div class="submit d-flex flex-row-reverse mt-5">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script>
        function counter(clicked_id) {
            var counter = document.getElementById('value').value;

            var parsed = parseInt(counter);

            let result = clicked_id == "minus" ? parsed - 1 : parsed + 1;

            if (result <= 0) {
                result = 1;
            }
            document.getElementById('value').value = result;
        }

        function counter(clicked_id) {
            var counter = document.getElementById('val').value;

            var parsed = parseInt(counter);

            let result = clicked_id == "minus" ? parsed - 1 : parsed + 1;

            if (result <= 0) {
                result = 1;
            }
            document.getElementById('val').value = result;
        }
    </script>
@endsection

@extends('layouts.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/style_pengguna.css') }}">
    <div class="content px-5 py-4 ">
        <div class="d-flex justify-content-between">
            <h1>Daftar Pengguna</h1>
            <button class="btn btn-primer" data-bs-toggle="modal" data-bs-target="#createSelectedModal"><i
                    class="fa-solid fa-plus"></i> Tambah</button>
        </div>
        <div class="d-flex justify-content-between mt-3">
            <div class="form-group ">
                <span><i class="fa-solid fa-magnifying-glass"></i></span>
                <input class="form-field " type="email" placeholder="Search">
            </div>
            <select class="form-select" aria-label="Default select example">
                <option selected>Status</option>
                <option value="1">Terlama</option>
            </select>
            <select class="form-select" aria-label="Default select example">
                <option selected>Terbaru</option>
                <option value="1">Terlama</option>
            </select>
        </div>
        <div class="table-responsive mt-3">
            <table class="table">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Email</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tbody class="table-white">
                    @foreach ($users as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td><small class="bg-warning-2 px-2 py-1 rounded">Tidak Aktif</small></td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                {{ $users->links() }}
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade mt-5" id="createSelectedModal" tabindex="-1" aria-labelledby="createSelectedModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body my-4 mx-3">
                    <form action="" method="post" id="create-selected-letter">
                        @csrf
                        <div class="text-center mb-5">
                            <h2 class="modal-title fs-5" id="staticBackdropLabel">Silahkan Buat Akun user</h2>
                        </div>
                        <div class="mb-3">
                            <label for="" class="mb-1 text-black"><strong>Nama Perusahaan</strong></label>
                            <input type="text" name="" class="form-control" placeholder="Ayam bakar" required>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="mb-1 text-black"><strong>Email</strong></label>
                            <input type="email" name="" class="form-control" placeholder="aaym@gmail.com" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary ">Buat</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

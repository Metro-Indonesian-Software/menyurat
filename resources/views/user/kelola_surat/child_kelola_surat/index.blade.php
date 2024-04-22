@extends('layouts.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/style_kelola_surat.css') }}">
    <div class="content px-5 py-3 ">
        <div class="d-flex justify-content-between">
            <h2 class="fw-bold mb-4 mt-1" style="font-size: 20px;"><strong>{{ $title }}</strong></h2>
            <div class="">
                <button class="btn btn-primary my-auto" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-plus"></i> Tambah</button>
            </div>
        </div>
        <div class="d-flex gap-2">
            <div class="form-group ">
                <span><i class="fa-solid fa-magnifying-glass"></i></span>
                <input class="form-field " type="email" placeholder="Search">
            </div>
            <div class="btn btn-primary text-center  my-auto px-3 "> Cari </div>
            <select class="form-select filter" aria-label="Default select example">
                <option selected>Terbaru</option>
                <option value="1">Terlama</option>
            </select>
        </div>
        <div class="d-flex gap-4 mt-3 mb-3 filter-table-dashboard">
            <a href="" class="border-bottom p-1 border-2 filter-active-table"><small><i class="fa-solid fa-file"></i>
                    Semua
                    Surat</small></a>
            <a href="" class="border-bottom p-1 border-2 "><small><i class="fa-regular fa-clock"></i> Belum
                    Diterbitkan</small></a>
            <a href="" class="border-bottom p-1 border-2 "><small><i class="fa-solid fa-check"></i>
                    Sudah Diterbitkan</small></a>
        </div>
        <div class="table-responsive mt-2">
            <table class="table">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Judul Surat</th>
                        <th>Jenis</th>
                        <th>No. Surat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-white">
                    <tr>
                        <td>1</td>
                        <td>01-01-2021</td>
                        <td>Surat Cuti Jhon</td>
                        <td>Surat Cuti </td>
                        <td>0101</td>
                        <td><small class="bg-success-2 px-2 py-1 rounded">Sudah Diterbitkan</small></td>
                        <td>
                            <div class="dropdown dropstart">
                                <button type="button" class="btn border-0  " data-bs-toggle="dropdown"
                                    aria-expanded="false" aria-haspopup="true">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item text-warning" href="#"><i
                                                class="fa-regular fa-pen-to-square"></i> Edit</a></li>
                                    <li><a class="dropdown-item text-black" href="#"><i class="fa-regular fa-eye"></i>
                                            Lihat</a></li>
                                    <li><a class="dropdown-item text-danger" href="#"><i
                                                class="fa-solid fa-trash"></i>
                                            Hapus</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>01-01-2021</td>
                        <td>Surat Cuti Jhon</td>
                        <td>Surat Cuti </td>
                        <td>0101</td>
                        <td><small class="bg-warning-2 px-2 py-1 rounded">Belum Diterbitkan</small></td>
                        <td>
                            <div class="dropdown dropstart">
                                <button type="button" class="btn border-0  " data-bs-toggle="dropdown"
                                    aria-expanded="false" aria-haspopup="true">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item text-black" href="#"><i
                                                class="fa-solid fa-download"></i> Download</a></li>
                                    <li><a class="dropdown-item text-warning" href="#"><i
                                                class="fa-regular fa-pen-to-square"></i> Edit</a></li>
                                    <li><a class="dropdown-item text-black" href="#"><i class="fa-regular fa-eye"></i>
                                            Lihat</a></li>
                                    <li><a class="dropdown-item text-danger" href="#"><i
                                                class="fa-solid fa-trash"></i>
                                            Hapus</a></li>
                                    <li><a class="dropdown-item text-primer" href="#"><i
                                                class="fa-solid fa-file-import"></i>
                                            Terbitkan</a></li>
                                </ul>

                            </div>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>01-01-2021</td>
                        <td>Surat Cuti Jhon</td>
                        <td>Surat Cuti </td>
                        <td>0101</td>
                        <td><small class="bg-warning-2 px-2 py-1 rounded">Belum Diterbitkan</small></td>
                        <td>
                            <div class="dropdown dropstart">
                                <button type="button" class="btn border-0  " data-bs-toggle="dropdown"
                                    aria-expanded="false" aria-haspopup="true">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item text-black" href="#"><i
                                                class="fa-solid fa-download"></i> Download</a></li>
                                    <li><a class="dropdown-item text-warning" href="#"><i
                                                class="fa-regular fa-pen-to-square"></i> Edit</a></li>
                                    <li><a class="dropdown-item text-black" href="#"><i class="fa-regular fa-eye"></i>
                                            Lihat</a></li>
                                    <li><a class="dropdown-item text-danger" href="#"><i
                                                class="fa-solid fa-trash"></i>
                                            Hapus</a></li>
                                    <li><a class="dropdown-item text-primer" href="#"><i
                                                class="fa-solid fa-file-import"></i>
                                            Terbitkan</a></li>
                                </ul>

                            </div>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade mt-5" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-body my-4 mx-3">
                <form action="{{ route('letter.common.store.slug', ['slug' => request()->slug]) }}" method="post">
                    @csrf
                    <div class="text-center mb-4">
                        <label for="name" class="mb-3">
                            <h2 class="modal-title fs-5" id="staticBackdropLabel">Masukan Judul Surat</h2>
                        </label>
                        <input type="text" name="title" class="form-control" id="title"
                            placeholder="Judul surat..." required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Buat Surat</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection

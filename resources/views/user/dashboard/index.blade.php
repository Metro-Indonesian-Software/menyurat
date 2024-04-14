@extends('user.layouts.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/style_dashboard.css') }}">
    <div class="content px-5 py-3 ">
        <p class="fw-bold mb-2" style="font-size: 20px;">Hai, Edu labs !</p>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="my-auto">Selamat Datang di Menyurat by Metro Software</h2>
            <div class="btn-container">
                <div class="slide-buttons">
                    <button id="scrollLeftButton" class="slide-button btn btn-primary"><i
                            class="fa fa-chevron-left"></i></button>
                    <button id="scrollRightButton" class="slide-button btn btn-primary "><i
                            class="fa fa-chevron-right"></i></button>
                </div>
            </div>
        </div>


        <div class="scrolling-wrapper">
            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <div class="card" style="width: 150px; height:180px">
                    <img src="/assets/img/putih.jpg" alt="Avatar" class="image" style=" width: 100%; height: 100%;">
                    <div class="middle">
                        <div class="text"><i class="fa-solid fa-plus"></i></div>
                    </div>
                    <p class="text-center mt-3">Tambah Surat</p>
                </div>
            </a>
            <a href="">
                <div class="card " style="width: 150px; height:180px">
                    <img src="/assets/img/surat.jpg" alt="Avatar" class="image" style=" width: 100%; height: 100%;">
                    <div class="middle">
                        <div class="text"><i class="fa-solid fa-plus"></i></div>
                    </div>
                    <p class="text-center mt-3">Surat Lamaran</p>
                </div>
            </a>
            <a href="">
                <div class="card " style="width: 150px; height:180px">
                    <img src="/assets/img/surat.jpg" alt="Avatar" class="image" style=" width: 100%; height: 100%;">
                    <div class="middle">
                        <div class="text"><i class="fa-solid fa-plus"></i></div>
                    </div>
                    <p class="text-center mt-3">Surat Libur</p>
                </div>
            </a>
            <a href="">
                <div class="card " style="width: 150px; height:180px">
                    <img src="/assets/img/surat.jpg" alt="Avatar" class="image" style=" width: 100%; height: 100%;">
                    <div class="middle">
                        <div class="text"><i class="fa-solid fa-plus"></i></div>
                    </div>
                    <p class="text-center mt-3">Surat cuti</p>
                </div>
            </a>
            <a href="">
                <div class="card " style="width: 150px; height:180px">
                    <img src="/assets/img/surat.jpg" alt="Avatar" class="image" style=" width: 100%; height: 100%;">
                    <div class="middle">
                        <div class="text"><i class="fa-solid fa-plus"></i></div>
                    </div>
                    <p class="text-center mt-3">Surat Undangan</p>
                </div>
            </a>
            <a href="">
                <div class="card " style="width: 150px; height:180px">
                    <img src="/assets/img/surat.jpg" alt="Avatar" class="image" style=" width: 100%; height: 100%;">
                    <div class="middle">
                        <div class="text"><i class="fa-solid fa-plus"></i></div>
                    </div>
                    <p class="text-center mt-3">Tambah Surat</p>
                </div>
            </a>
            <a href="">
                <div class="card " style="width: 150px; height:180px">
                    <img src="/assets/img/surat.jpg" alt="Avatar" class="image" style=" width: 100%; height: 100%;">
                    <div class="middle">
                        <div class="text"><i class="fa-solid fa-plus"></i></div>
                    </div>
                    <p class="text-center mt-3">Tambah Surat</p>
                </div>
            </a>
        </div>

        <div class="d-flex justify-content-between mt-5">
            <h2 class="my-auto">Recently</h2>
            <div class="d-flex gap-2">
                <div class="form-group ">
                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input class="form-field " type="email" placeholder="Search">
                </div>
                <div class="btn btn-primary text-center  my-auto px-3 "> Cari </div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Terbaru</option>
                    <option value="1">Terlama</option>
                </select>
            </div>
        </div>
        <div class="d-flex gap-4 mt-3 filter-table-dashboard">
            <a href="" class="border-bottom p-1 border-2 filter-active-table"><small><i
                        class="fa-solid fa-file"></i>
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
                                    <li><a class="dropdown-item " href="#">Lihat</a></li>
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">Hapus</a></li>
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
                                    <li><a class="dropdown-item " href="#">Lihat</a></li>
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">Hapus</a></li>
                                </ul>
                            </div>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade " id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen ">
            <div class="modal-content" style="background-color: white">
                <div class="modal-header">
                    <div class="mx-5">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Buat Surat</h1>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mx-5">
                        <div class="row">
                            <div class="col-lg-8 border-end ">
                                <div class="row border-bottom pb-2">
                                    <h2>Semua Template</h2>
                                </div>
                                <div class="row pt-4 ">
                                    <div class="col-lg-3 mb-4">
                                        <a href="">
                                            <div class="card card-border" style="width: 170px;; height:240px">
                                                <img src="/assets/img/surat.jpg" alt="Avatar" class=""
                                                    style=" width: 100%; height: 100%;">
                                                <p class="text-center mt-3">Surat Lamaran</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 mb-4">
                                        <a href="">
                                            <div class="card card-border" style="width: 170px;; height:240px">
                                                <img src="/assets/img/surat.jpg" alt="Avatar" class=""
                                                    style=" width: 100%; height: 100%;">
                                                <p class="text-center mt-3">Surat Lamaran</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 mb-4">
                                        <a href="">
                                            <div class="card card-border" style="width: 170px;; height:240px">
                                                <img src="/assets/img/surat.jpg" alt="Avatar" class=""
                                                    style=" width: 100%; height: 100%;">
                                                <p class="text-center mt-3">Surat Lamaran</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 mb-4">
                                        <a href="">
                                            <div class="card card-border" style="width: 170px;; height:240px">
                                                <img src="/assets/img/surat.jpg" alt="Avatar" class=""
                                                    style=" width: 100%; height: 100%;">
                                                <p class="text-center mt-3">Surat Lamaran</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 mb-4">
                                        <a href="">
                                            <div class="card card-border" style="width: 170px;; height:240px">
                                                <img src="/assets/img/surat.jpg" alt="Avatar" class=""
                                                    style=" width: 100%; height: 100%;">
                                                <p class="text-center mt-3">Surat Lamaran</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 mb-4">
                                        <a href="">
                                            <div class="card card-border" style="width: 170px;; height:240px">
                                                <img src="/assets/img/surat.jpg" alt="Avatar" class=""
                                                    style=" width: 100%; height: 100%;">
                                                <p class="text-center mt-3">Surat Lamaran</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 mb-4">
                                        <a href="">
                                            <div class="card card-border" style="width: 170px;; height:240px">
                                                <img src="/assets/img/surat.jpg" alt="Avatar" class=""
                                                    style=" width: 100%; height: 100%;">
                                                <p class="text-center mt-3">Surat Lamaran</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 mb-4">
                                        <a href="">
                                            <div class="card card-border" style="width: 170px;; height:240px">
                                                <img src="/assets/img/surat.jpg" alt="Avatar" class=""
                                                    style=" width: 100%; height: 100%;">
                                                <p class="text-center mt-3">Surat Lamaran</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 mb-4">
                                        <a href="">
                                            <div class="card card-border" style="width: 170px;; height:240px">
                                                <img src="/assets/img/surat.jpg" alt="Avatar" class=""
                                                    style=" width: 100%; height: 100%;">
                                                <p class="text-center mt-3">Surat Lamaran</p>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 ">
                                <div class="d-flex flex-column ms-2 mt-3 " style="position: fixed;width: 400px">
                                    <div class="mb-3 ">
                                        <label for="judul_surat"><strong>Judul Surat</strong></label>
                                        <input type="text" id="judul_surat" class="form-control">
                                    </div>
                                    <div class="pb-3 border-bottom w-100">
                                        <label for="judul_surat"><strong>Nomor Surat</strong></label>
                                        <input type="text" id="nomor_surat" class="form-control">
                                    </div>
                                    <a href="/dashboard/buat_surat" type="submit"
                                        class="btn btn-primary mt-3 w-100">Buat Surat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div> --}}
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script>
        // var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        // var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        //     return new bootstrap.Popover(popoverTriggerEl)
        // })
        $(document).ready(function() {
            const scrollStep = 150; // Jarak scroll per langkah (sesuaikan dengan kebutuhan Anda)

            $("#scrollRightButton").click(function() {
                $(".scrolling-wrapper").animate({
                    scrollLeft: "+=" + scrollStep
                }, 500); // Waktu animasi (ms)
            });

            $("#scrollLeftButton").click(function() {
                $(".scrolling-wrapper").animate({
                    scrollLeft: "-=" + scrollStep
                }, 500); // Waktu animasi (ms)
            });
        });
    </script>
@endsection

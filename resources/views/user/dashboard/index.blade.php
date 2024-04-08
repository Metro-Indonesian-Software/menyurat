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
            <a href="">
                <div class="card " style="width: 150px; height:180px">
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
                    <input class="form-field" type="email" placeholder="Search">
                </div>
                <div class="btn btn-primary text-center  my-auto px-3 "> Cari </div>
                <div class="dropdown my-auto">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Terbaru
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Terbaru</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
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
                            <button type="button" class="border-0 bg-transparent " data-bs-toggle="popover"
                                data-bs-placement="left" data-bs-custom-class="custom-popover"
                                data-bs-title="Custom popover"
                                data-bs-content=" <button class='btn btn-success'>halo</button>">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>01-01-2021</td>
                        <td>Surat Cuti Jhon</td>
                        <td>Surat Cuti </td>
                        <td>0101</td>
                        <td><small class="bg-success-2 px-2 py-1 rounded">Sudah Diterbitkan</small></td>
                        <td> <button type="button" class="border-0 bg-transparent " data-bs-toggle="popover"
                                data-bs-placement="left" data-bs-custom-class="custom-popover"
                                data-bs-title="Custom popover" data-bs-content=" wadaw">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </button></td>
                    </tr>
                </tbody>
            </table>
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
                }, 300); // Waktu animasi (ms)
            });

            $("#scrollLeftButton").click(function() {
                $(".scrolling-wrapper").animate({
                    scrollLeft: "-=" + scrollStep
                }, 300); // Waktu animasi (ms)
            });
        });
    </script>
@endsection

@extends('layouts.letter_main')
@section('letter_content')
    <div class="create w-50 p-5 ">
        <div class="accordion  accordion-flush" id="accordionFlushExample">
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header  ">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#tanggal"
                        aria-expanded="true" aria-controls="tanggal"><strong>
                            Tempat Surat
                        </strong>
                    </button>
                </h2>
                <div id="tanggal" class="accordion-collapse collapse show">
                    <div class="accordion-body row g-1 ">
                        <div class="d-flex justify-content-between gap-3">

                            <div class="col">
                                <label for="" class="ps-0">Tanggal</label>
                                <input name="" id="" class="form-control w-100" type="date">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header  ">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#pokok_surat" aria-expanded="true" aria-controls="pokok_surat"><strong>
                            Pokok Surat
                        </strong>
                    </button>
                </h2>
                <div id="pokok_surat" class="accordion-collapse collapse ">
                    <div class="accordion-body row g-1 ">
                        <label for="" class="ps-0">Lampiran</label>
                        <input name="" id="" class="form-control mb-3 w-100" type="text">
                        <label for="" class="ps-0">Perihal</label>
                        <input name="" id="" class="form-control mb-3 w-100" type="text">
                        <label for="" class="ps-0">Tujuan Surat</label>
                        <input name="" id="" class="form-control mb-3 w-100" type="text">
                    </div>
                </div>
            </div>
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header  ">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#informasi_surat" aria-expanded="false" aria-controls="informasi_surat"><strong>
                            Informasi Surat
                        </strong>
                    </button>
                </h2>
                <div id="informasi_surat" class="accordion-collapse collapse">
                    <div class="accordion-body row g-1">
                        <div class="d-flex justify-content-between gap-3">
                            <div class="col ">
                                <label for="" class="ps-0">Hari</label>
                                <input name="" id="" class="form-control mb-3 w-100" type="text">
                            </div>
                            <div class="col">
                                <label for="" class="ps-0">Tanggal</label>
                                <input name="" id="" class="form-control w-100" type="date">
                            </div>
                        </div>
                        <label for="" class="ps-0">Waktu</label>
                        <input name="" id="" class="form-control w-100" type="time">
                        <label for="" class="ps-0">Tempat</label>
                        <input name="" id="" class="form-control w-100" type="text">
                        <label for="" class="ps-0">Nama Acara</label>
                        <input name="" id="" class="form-control w-100" type="text">
                    </div>
                </div>
            </div>
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header  ">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#pengesahan_surat" aria-expanded="false"
                        aria-controls="pengesahan_surat"><strong>
                            Pengesahan Surat
                        </strong>
                    </button>
                </h2>
                <div id="pengesahan_surat" class="accordion-collapse collapse">
                    <div class="accordion-body row g-1">
                        <label for="" class="ps-0">Nama yang bertanda-tangan</label>
                        <input name="" id="" class="form-control mb-3 w-100" type="text">
                        <label for="" class="ps-0">Jabatan Penanda tangan</label>
                        <input name="" id="" class="form-control w-100" type="text">
                    </div>
                </div>
            </div>
        </div>
        <a href="" class="btn btn-primer mt-4">Simpan</a>
    </div>
    <div class="preview w-50 ">
        <div class="m-5">
            <div class="surat">
                {{-- kop-surat --}}
                <div class="kop_surat">
                    <div class="gambar">
                        <img src="/assets/img/metro.png" alt="">
                    </div>
                    <div class="text_kop_surat">
                        <p style="font-size: .8em"> <strong>PT Metro Software Indonesia</strong></p>
                        <p>Jl. Utama Residences, Kelurahan Seberang Padang, Kec. Padang Selatan, Kota
                            Padang, Provinsi Sumatera Barat</p>
                        <div class="kontak">
                            <p>Telp : 0812345678910</p>
                            <p>Email : metrosoftware@gmail.com</p>
                            <p>Website : https://metrosoftware.id</p>
                        </div>
                    </div>
                </div>
                <hr style="">
                {{-- end-kop-surat --}}
                {{-- isi-surat --}}
                <div class="isi_surat">
                    <div class="isi_surat_1">
                        <div class="nomor_surat">
                            <div class="isi_nomor_surat">
                                <p style="width: 45px">Nomor </p>
                                <p id="isi_nomor"> : 01 /SM-US/4/2024</p>
                            </div>
                            <div class="isi_nomor_surat">
                                <p style="width: 45px">Perihal </p>
                                <p id="isi_perihal"></p>
                            </div>
                            <div class="isi_nomor_surat">
                                <p style="width: 45px">Lampiran </p>
                                <p id="isi_lampiran"></p>
                            </div>

                        </div>
                        <div class="tanggal_surat">
                            <p>Senin, 8 April 2024</p>
                        </div>
                    </div>
                    <div class="isi_surat_2">
                        <p>Kepada Yth,</p>
                        <p>Direktur PT Metro Indonesia Properti</p>
                        <p>Ditempat</p>
                    </div>
                    <div class="isi_surat_3">
                        <p>Dengan Hormat,</p>
                        <p>Sehubung Akan Dilaksanakannya Acara Pengesahan Cabang baru PT Metro Indonesia
                            Software,
                            kami bermaksud mengundang Bapak/Ibu untuk dapat menghadiri acara yang akan
                            dilaksanakan pada:
                        </p>
                        <div class="jadwal">
                            <div class="isi_jadwal">
                                <p style="width: 10%">Hari</p>
                                <p>: Selasa, 9 April 2024</p>
                            </div>
                            <div class="isi_jadwal">
                                <p style="width: 10%">Waktu</p>
                                <p>: 09.00 - selesai</p>
                            </div>
                            <div class="isi_jadwal">
                                <p style="width: 12%">Tempat</p>
                                <p>: Jl. Utama Residences, Kelurahan Seberang Padang, Kec. Padang Selatan, Kota
                                    Padang, Provinsi Sumatera Barat</p>
                            </div>
                            <div class="isi_jadwal">
                                <p style="width: 10%">Acara</p>
                                <p>: Pengesahan Cabang baru PT Metro Indonesia
                                    Software</p>
                            </div>
                        </div>
                        <p>Dengan surat undangan ini kami sampaikan, atas perhatian dan kehadiran Bapak/Ibu kami
                            ucapkan terima kasih.</p>
                    </div>
                    <div class="isi_surat_4">
                        <p style="margin-bottom: 50px">Direktur PT Metro Indonesia Software</p>
                        <p><Strong>Daffa Riza Mulya</Strong></p>
                    </div>

                </div>
                {{-- end-isi-surat --}}
            </div>
        </div>
    </div>
@endsection

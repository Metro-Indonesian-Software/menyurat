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
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#isi_surat" aria-expanded="false" aria-controls="isi_surat">
                        <strong>
                            isi Surat
                        </strong>
                    </button>
                </h2>
                <div id="isi_surat" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="" class="ps-0">Paragraf 1</label>
                                <input name="" id="" class="form-control mb-3 w-100" type="text">
                            </div>
                            <div class="col-md-3">
                                <label><strong>Paragraf 2</strong></label>
                            </div>
                            <div class="col-md-9">
                                <label for="">Poin 1</label>
                                <input name="" id="" class="form-control mb-3" type="text">
                                <label for="">Poin 2</label>
                                <input name="" id="" class="form-control mb-3" type="text">
                                <div id="tambah_menimbang"></div>
                                <div class="d-flex">
                                    <button class="btn btn-white-2 w-100 mb-2" id="button_tambah_menimbang">Tambah</button>
                                    <div class="">
                                        <button class="btn btn-danger ms-2" id="hapus_menimbang"
                                            style="display: none; border: 1px solid #fc544b"
                                            onclick="hapusMenimbang()">Hapus</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="" class="ps-0">Paragraf 3</label>
                                <input name="" id="" class="form-control mb-3 w-100" type="text">
                            </div>
                            <div class="col-md-12">
                                <label for="" class="ps-0">Paragraf Penutup</label>
                                <input name="" id="" class="form-control mb-3 w-100" type="text">
                            </div>
                        </div>
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
    <script>
        // tambah paragraf dua
        var nextNumber_menimbang = 3;
        document.getElementById('button_tambah_menimbang').addEventListener('click', function() {
            var tambah_menimbang = document.getElementById('tambah_menimbang');
            var divtambah_menimbang = document.createElement('div');
            divtambah_menimbang.classList.add('mb-3');
            var currentNumber =
                nextNumber_menimbang++;
            divtambah_menimbang.innerHTML = `
            <div class="d-flex justify-content-between test">
                <label for="">Poin ${currentNumber}</label>
            </div>
            <input name="" id="" class="form-control mb-3" type="text">
        `;
            tambah_menimbang.appendChild(divtambah_menimbang);
            document.getElementById('hapus_menimbang').style.display = 'block';
        });

        function hapusMenimbang() {
            var tambah_menimbang = document.getElementById('tambah_menimbang');
            var inputs = tambah_menimbang.querySelectorAll('.mb-3');
            var test = tambah_menimbang.querySelectorAll('.test');
            // Hapus elemen input dan label terakhir jika ada
            if (inputs.length > 0) {
                var lastInputContainer = inputs[inputs.length - 1].parentNode;
                tambah_menimbang.removeChild(lastInputContainer);
                nextNumber_menimbang--; // Kurangi nomor urut
            }
            // Jika tidak ada input lagi, sembunyikan tombol hapus
            if (test.length === 1) {
                document.getElementById('hapus_menimbang').style.display = 'none';
            }
        }
    </script>
@endsection

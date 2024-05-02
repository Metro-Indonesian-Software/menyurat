@extends('layouts.letter_main')
@section('letter_content')
    <div class="create w-50 p-5 ">
        <div class="accordion  accordion-flush" id="accordionFlushExample">
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header  ">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#tempat_tanggal"
                        aria-expanded="true" aria-controls="tempat_tanggal"><strong>
                            Tempat dan Tanggal Surat
                        </strong>
                    </button>
                </h2>
                <div id="tempat_tanggal" class="accordion-collapse collapse show">
                    <div class="accordion-body row ">
                        <div class="col-md-6">
                            <label for="tempat">Tempat</label>
                            <input name="tempat" id="tempat" class="form-control mb-3 w-100" type="text">
                        </div>
                        <div class="col-md-6">
                            <label for="tanggal">Tanggal</label>
                            <input name="tanggal" id="tanggal" class="form-control w-100" type="date">
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#informasi_surat" aria-expanded="false" aria-controls="informasi_surat">
                        <strong>
                            Informasi Surat
                        </strong>
                    </button>
                </h2>
                <div id="informasi_surat" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <label for="">Nama Karyawan</label>
                        <input name="" id="" class="form-control mb-3" type="text">
                        <label for="">Jabatan (semula)</label>
                        <input name="" id="" class="form-control mb-3" type="text">
                        <label for="">Gaji Pokok (semula)</label>
                        <input name="" id="" class="form-control mb-3" type="text">
                        <label for="">Lokasi kantor yang baru</label>
                        <input name="" id="" class="form-control mb-3" type="text">
                        <div id="tambah_informasi_surat_1"></div>
                        <div class="d-flex">
                            <button class="btn btn-white-2 w-100 mb-2" id="button_tambah_informasi_surat_1">Tambah</button>
                        </div>
                        <label for="">jabatan Baru (Menjadi)</label>
                        <input name="" id="" class="form-control mb-3" type="text">
                        <label for="">Gaji Pokok Baru (Menjadi)</label>
                        <input name="" id="" class="form-control mb-3" type="text">
                        <div id="tambah_informasi_surat_2"></div>
                        <div class="d-flex">
                            <button class="btn btn-white-2 w-100" id="button_tambah_informasi_surat_2">Tambah</button>
                        </div>
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
                            <div class="col-md-3">
                                <label><strong>Menimbang</strong></label>
                            </div>
                            <div class="col-md-9">
                                <label for="">Poin 1</label>
                                <input name="" id="" class="form-control mb-3" type="text">
                                <label for="">Poin 2</label>
                                <input name="" id="" class="form-control mb-3" type="text">
                                <label for="">Poin 3</label>
                                <input name="" id="" class="form-control mb-3" type="text">
                                <div id="tambah_menimbang"></div>
                                <div class="d-flex">
                                    <button class="btn btn-white-2 w-100 mb-2"
                                        id="button_tambah_menimbang">Tambah</button>
                                    <div class="">
                                        <button class="btn btn-danger ms-2" id="hapus_menimbang"
                                            style="display: none; border: 1px solid #fc544b"
                                            onclick="hapusMenimbang()">Hapus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label><strong>Mengingatkan</strong></label>
                            </div>
                            <div class="col-md-9">
                                <label for="">Poin 1</label>
                                <input name="" id="" class="form-control mb-3" type="text">
                                <label for="">Poin 2</label>
                                <input name="" id="" class="form-control mb-3" type="text">
                                <label for="">Poin 3</label>
                                <input name="" id="" class="form-control mb-3" type="text">
                                <div id="tambah_mengingatkan"></div>
                                <div class="d-flex">
                                    <button class="btn btn-white-2 w-100 mb-2"
                                        id="button_tambah_mengingatkan">Tambah</button>
                                    <div class="">
                                        <button class="btn btn-danger ms-2" id="hapus_mengingatkan"
                                            style="display: none; border: 1px solid #fc544b"
                                            onclick="hapusMengingatkan()">Hapus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label><strong>Memutuskan</strong></label>
                            </div>
                            <div class="col-md-9">
                                <label for="">Pertama</label>
                                <input name="" id="" class="form-control mb-3" type="text">
                                <label for="">Kedua</label>
                                <input name="" id="" class="form-control mb-3" type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#informasi_surat_2" aria-expanded="false" aria-controls="informasi_surat_2">
                        <strong>
                            Informasi Surat
                        </strong>
                    </button>
                </h2>
                <div id="informasi_surat_2" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <label for="">Nama Penanda Tangan</label>
                        <input name="" id="" class="form-control mb-3" type="text">
                        <label for="">Jabatan Penanda Tangan</label>
                        <input name="" id="" class="form-control mb-3" type="text">
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
        // tambah informasi surat 1
        document.getElementById('button_tambah_informasi_surat_1').addEventListener('click', function() {
            var tambah_informasi_surat_1 = document.getElementById('tambah_informasi_surat_1');
            var divInputan1 = document.createElement('div');
            divInputan1.classList.add('mb-3');
            divInputan1.setAttribute('id', 'tambah_inputan_baru');
            divInputan1.innerHTML = `
                <div class="d-flex gap-2">
                    <input name="judul" class="form-control mb-3 fw-bold" type="text" placeholder="Masukkan judul">
                    <div>
                        <button class="btn btn-danger" onclick="hapus_informasi_surat_1(this)">Hapus</button>
                    </div>
                </div>
                <input name="isi" class="form-control mb-3" type="text" placeholder="Masukkan Isi">
            `;
            tambah_informasi_surat_1.appendChild(divInputan1);
        });

        function hapus_informasi_surat_1(button) {
            var divInputan1 = button.parentNode.parentNode.parentNode;
            divInputan1.parentNode.removeChild(divInputan1);
        }

        // tambah informasi surat 2
        document.getElementById('button_tambah_informasi_surat_2').addEventListener('click', function() {
            var tambah_informasi_surat_2 = document.getElementById('tambah_informasi_surat_2');
            var divInputan2 = document.createElement('div');
            divInputan2.classList.add('mb-3');
            divInputan2.setAttribute('id', 'tambah_inputan_baru');
            divInputan2.innerHTML = `
                <div class="d-flex gap-2">
                    <input name="judul" class="form-control mb-3 fw-bold" type="text" placeholder="Masukkan judul">
                    <div>
                        <button class="btn btn-danger" onclick="hapus_informasi_surat_2(this)">Hapus</button>
                    </div>
                </div>
                <input name="isi" class="form-control mb-3" type="text" placeholder="Masukkan Isi">
            `;
            tambah_informasi_surat_2.appendChild(divInputan2);
        });

        function hapus_informasi_surat_2(button) {
            var divInputan2 = button.parentNode.parentNode.parentNode;
            divInputan2.parentNode.removeChild(divInputan2);
        }

        // tambah menimbang
        var nextNumber_menimbang = 4;
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

        // tambah mengingatkan
        var nextNumber_mengingatkan = 4;
        document.getElementById('button_tambah_mengingatkan').addEventListener('click', function() {
            var tambah_mengingatkan = document.getElementById('tambah_mengingatkan');
            var divtambah_mengingatkan = document.createElement('div');
            divtambah_mengingatkan.classList.add('mb-3');
            var currentNumber =
                nextNumber_mengingatkan++;
            divtambah_mengingatkan.innerHTML = `
        <div class="d-flex justify-content-between test">
            <label for="">Poin ${currentNumber}</label>
        </div>
        <input name="" id="" class="form-control mb-3" type="text">
    `;
            tambah_mengingatkan.appendChild(divtambah_mengingatkan);
            document.getElementById('hapus_mengingatkan').style.display = 'block';
        });

        function hapusMengingatkan() {
            var tambah_mengingatkan = document.getElementById('tambah_mengingatkan');
            var inputs = tambah_mengingatkan.querySelectorAll('.mb-3');
            var test = tambah_mengingatkan.querySelectorAll('.test');
            // Hapus elemen input dan label terakhir jika ada
            if (inputs.length > 0) {
                var lastInputContainer = inputs[inputs.length - 1].parentNode;
                tambah_mengingatkan.removeChild(lastInputContainer);
                nextNumber_mengingatkan--; // Kurangi nomor urut
            }
            // Jika tidak ada input lagi, sembunyikan tombol hapus
            if (test.length === 1) {
                document.getElementById('hapus_mengingatkan').style.display = 'none';
            }
        }
    </script>
@endsection

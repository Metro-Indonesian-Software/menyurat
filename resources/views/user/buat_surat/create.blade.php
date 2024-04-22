<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/button.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/background_color.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/text_custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/buat_surat_create.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/surat.css') }}">

    <script src="https://kit.fontawesome.com/82ebf8392e.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="bg-white">
        {{-- nav --}}
        @include("layouts.navbar_input_surat")
        {{-- end-nav --}}

        {{-- main --}}
        <div class="d-flex min-vh-100 ">
            <div class="create w-50 p-5 ">
                <div class="accordion bg-white" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item border-bottom">
                        <h2 class="accordion-header  ">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#informasi_surat" aria-expanded="true"
                                aria-controls="informasi_surat"><strong>
                                    Informasi Surat
                                </strong>
                            </button>
                        </h2>
                        <div id="informasi_surat" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <label for="lampiran">Lampiran</label>
                                <input name="lampiran" id="lampiran" class="form-control mb-3" type="text">
                                <label for="perihal">Perihal</label>
                                <input name="perihal" id="perihal" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#isi_surat" aria-expanded="false" aria-controls="isi_surat">
                                <strong>
                                    Isi Surat
                                </strong>
                            </button>
                        </h2>
                        <div id="isi_surat" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <label for="isi">Isi Surat</label>
                                <textarea name="isi" class="form-control" id="isi" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#tujuan" aria-expanded="false" aria-controls="tujuan">
                                <strong>
                                    Tujuan
                                </strong>
                            </button>
                        </h2>
                        <div id="tujuan" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <label for="tujuan">Tujuan</label>
                                <textarea name="tujuan" class="form-control" id="tujuan" cols="30" rows="10"></textarea>
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
        </div>
    </div>

    @include("layouts.toast")
    @include("layouts.alert")
    <script>
        // perihal
        const perihal = document.getElementById("perihal");
        const isi_perihal = document.getElementById("isi_perihal");
        perihal.addEventListener("input", function() {
            const nilai_perihal = perihal.value.trim();

            isi_perihal.textContent = " : " + nilai_perihal;
        })
        //  lampiran
        const lampiran = document.getElementById("lampiran");
        const isi_lampiran = document.getElementById("isi_lampiran");
        lampiran.addEventListener("input", function() {
            const nilai_lampiran = lampiran.value.trim();

            isi_lampiran.textContent = " : " + nilai_lampiran;
        })
    </script>
    <script src="{{ asset('assets/js/sidebar.js') }}" crossorigin="anonymous"></script>
</body>
{{-- <script>
    function slugifylampiran(lampiran) {
        return lampiran.toLowerCase().replace(/[^\w\s-]/g, '').trim().replace(/\s+/g, '-');
    }

    document.getElementById('lampiran').addEventListener('input', function() {
        var lampiran = this.value;
        var lampiran2 = slugifylampiran(lampiran);
        document.getElementById('lampiran2').value = lampiran2;
    });
</script> --}}

</html>

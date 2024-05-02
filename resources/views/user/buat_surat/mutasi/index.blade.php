@extends('layouts.letter_main')
@section('letter_content')
    <div class="create w-50 p-5 ">
        <div class="accordion  accordion-flush" id="accordionFlushExample">
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header  ">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#informasi_surat"
                        aria-expanded="true" aria-controls="informasi_surat"><strong>
                            Tempat dan Tanggal Surat
                        </strong>
                    </button>
                </h2>
                <div id="informasi_surat" class="accordion-collapse collapse show">
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
                        data-bs-target="#isi_surat" aria-expanded="false" aria-controls="isi_surat">
                        <strong>
                            Isi Surat
                        </strong>
                    </button>
                </h2>
                <div id="isi_surat" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <label for="">Nama yang dimutasi</label>
                        <input name="" id="" class="form-control mb-3" type="text">
                        <label for="">Jabatan yang dimutasi</label>
                        <input name="" id="" class="form-control mb-3" type="text">
                        <label for="">Jabatan Baru</label>
                        <input name="" id="" class="form-control mb-3" type="text">
                        <label for="">Lokasi kantor yang baru</label>
                        <input name="" id="" class="form-control mb-3" type="text">
                        <label for="">Tanggal efektif berlaku</label>
                        <input name="" id="" class="form-control mb-3" type="text">
                    </div>
                </div>
            </div>
            <div class="accordion-item border-bottom">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#tujuan" aria-expanded="false" aria-controls="tujuan">
                        <strong>
                            Pengesahan Surat
                        </strong>
                    </button>
                </h2>
                <div id="tujuan" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <label for="">Nama yang bertanda-tangan</label>
                        <input name="" id="" class="form-control mb-3" type="text">
                        <label for="">Jabatan Penanda tangan</label>
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
@endsection

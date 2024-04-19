@extends('user.layouts.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/style_profil_perusahaan.css') }}">

    <div class="content px-5 py-3 mb-3 bg-white">
        <h2 class="fw-bold mb-3 mt-1" style="font-size: 20px;"><Strong>Profil Perusahaan</Strong></h2>

        <div class="d-flex flex-column">
            <p class="mb-1"><Strong>Logo Perusahaan</Strong></p>
            <div class="image-container rounded">
                <img src="/assets/img/profil2.png" class="img-preview rounded"
                    style="width: 215px;height:215px;margin:0;object-fit: cover">
                <input type="file" id="image" name="gambar" accept="image/*"
                    class="form-control @error('gambar') is-invalid @enderror" onchange="previewImage()">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6 mb-2 ">
                <label for="nama" class="mb-1"><strong>Nama Perusahaan</strong></label>
                <input type="text" class="form-control" id="nama" placeholder="nama perusahaan">
            </div>
            <div class="col-md-6 mb-2">
                <label for="alamat" class="mb-1"><strong>Alamat</strong></label>
                <input type="text" class="form-control" id="alamat" placeholder="alamat">
            </div>
            <div class="col-md-6 mb-2">
                <label for="email" class="mb-1"><strong>Email</strong></label>
                <input type="email" class="form-control" id="email" placeholder="email">
            </div>
            <div class="col-md-6 mb-2">
                <label for="no_telp" class="mb-1"><strong>Nomor Telepon</strong></label>
                <input type="number" class="form-control" id="no_telp" placeholder="0895...">
            </div>
            <div class="col-md-6 mb-2">
                <label for="website" class="mb-1"><strong>Website</strong></label>
                <input type="text" class="form-control" id="website" placeholder="website.com">
            </div>
            <div class="col-md-6 mb-2">
                <label for="kode_pos" class="mb-1"><strong>Kode Pos</strong></label>
                <input type="text" class="form-control" id="kode_pos" placeholder="Kode Pos">
            </div>
        </div>
        <div class="d-flex justify-content-end mt-2">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        <div class="row bg-primer p-3 rounded mt-5">
            <h1 class="text-white">Ubah Password</h1>
            <div class="row mt-3">
                <div class="col-md-6 mb-2 ">
                    <label for="password" class="mb-1 text-white"><strong>Password</strong></label>
                    <input type="password" class="form-control" id="password" placeholder="">
                </div>
                <div class="col-md-6 mb-2">
                    <label for="konfirmasi_password" class="mb-1 text-white"><strong>Konfirmasi Password</strong></label>
                    <input type="password" class="form-control" id="konfirmasi_password" placeholder="">
                </div>
                <div class="col-md-6 mb-2">
                    <label for="password_baru" class="mb-1 text-white"><strong>Password Baru</strong></label>
                    <input type="password" class="form-control" id="password_baru" placeholder="">
                </div>
            </div>
            <div class="d-flex justify-content-start mt-2">
                <button type="submit" class="btn btn-white">Ubah</button>
            </div>
        </div>


    </div>
    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFRevent) {
                imgPreview.src = oFRevent.target.result;
            }
        }
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault()
        });
    </script>
@endsection

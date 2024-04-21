@extends('layouts.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/style_kelola_surat.css') }}">

    <div class="content px-5 py-3 ">
        <h2 class="fw-bold mb-4 mt-1" style="font-size: 20px;"><Strong>Kelola Surat</Strong></h2>
        <form action="{{ route("letter.common.index", ["search" => Request::input("search") ]) }}" method="get">
            <div class="d-flex gap-2">
                <div class="form-group ">
                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input class="form-field" name="search" value="{{ Request::input("search") }}" type="text" placeholder="Cari surat disini">
                </div>
                <button type="submit" class="btn btn-primary text-center my-auto px-3 ">Cari</button>
            </div>
        </form>
        <div class="row ">
            <div class="row pt-4  ">
                @foreach ($letters as $name => $value)
                    <div class="col-lg-3 mb-5 pb-4">
                        <a href="{{ route("letter.common.show", ["slug" => Str::slug($name)]) }}">
                            <div class="card card-border" style="width: 200px;; height:260px">
                                <img src="{{ $value["image"] }}" alt="Avatar" class=""
                                    style=" width: 100%; height: 100%;">
                                <p class="text-center mt-3">{{ $name }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach

                @if (count($letters) === 0)
                    <p class="h5 fw-bold text-center mt-5">Data tidak ditemukan</p>
                    <p class="h6 fw-normal text-center">Tidak ditemukan hasil pencarian "<span class="fw-bold">{{ Request::input("search") }}</span>".</p>
                    <p class="h6 fw-normal text-center">Periksa kembali kata kunci yang anda masukkan.</p>
                @endif
            </div>
        </div>

    </div>
    </div>
@endsection

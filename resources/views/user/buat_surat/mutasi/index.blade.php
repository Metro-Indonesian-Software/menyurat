@extends('layouts.letter_main')

@section('letter_content')
    <div class="row vh-100">
        <div class="col-lg-6 create p-5">
            <form action="{{ route('letter.log.store', ['commonLetterLog' => $commonLog->id]) }}" method="post" id="input-letter-form">
                @csrf
                <div class="accordion" id="accordionParent">
                    <div class="accordion-item border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#informasi_surat" aria-expanded="true" aria-controls="informasi_surat">
                                <strong>
                                    Tempat dan Tanggal Surat
                                </strong>
                            </button>
                        </h2>
                        <div id="informasi_surat" class="accordion-collapse collapse show" data-bs-parent="#accordionParent">
                            <div class="accordion-body row">
                                <div class="col-md-6 mb-3">
                                    <label for="signed_place">Tempat</label>
                                    <input type="text" name="signed_place" id="signed_place" class="form-control @error('signed_place') is-invalid @enderror" value="{{ old('signed_place') ?? $logs['signed_place'] }}">

                                    @error("signed_place")
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="signed_date">Tanggal</label>
                                    <input type="date" name="signed_date" id="signed_date" class="form-control @error('signed_date') is-invalid @enderror" value="{{ old('signed_date') ?? $logs['signed_date'] }}">

                                    @error("signed_date")
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#isi_surat" aria-expanded="false" aria-controls="isi_surat">
                                <strong>
                                    Isi Surat
                                </strong>
                            </button>
                        </h2>
                        <div id="isi_surat" class="accordion-collapse collapse" data-bs-parent="#accordionParent">
                            <div class="accordion-body">
                                <div class="mb-3">
                                    <label for="mutated_name">Nama yang dimutasi</label>
                                    <input type="text" name="mutated_name" id="mutated_name" class="form-control @error('mutated_name') is-invalid @enderror" value="{{ old('mutated_name') ?? $logs['mutated_name'] }}">

                                    @error("mutated_name")
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="mutated_position">Jabatan yang dimutasi</label>
                                    <input type="text" name="mutated_position" id="mutated_position" class="form-control @error('mutated_position') is-invalid @enderror" value="{{ old('mutated_position') ?? $logs['mutated_position'] }}">

                                    @error("mutated_position")
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="new_position">Jabatan Baru</label>
                                    <input type="text" name="new_position" id="new_position" class="form-control @error('new_position') is-invalid @enderror" value="{{ old('new_position') ?? $logs['new_position'] }}">

                                    @error("new_position")
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="new_office_location">Lokasi kantor yang baru</label>
                                    <input type="text" name="new_office_location" id="new_office_location" class="form-control @error('new_office_location') is-invalid @enderror" value="{{ old('new_office_location') ?? $logs['new_office_location'] }}">

                                    @error("new_office_location")
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="effective_date">Tanggal efektif berlaku</label>
                                    <input type="date" name="effective_date" id="effective_date" class="form-control @error('effective_date') is-invalid @enderror" value="{{ old('effective_date') ?? $logs['effective_date'] }}">

                                    @error("effective_date")
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
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
                        <div id="tujuan" class="accordion-collapse collapse" data-bs-parent="#accordionParent">
                            <div class="accordion-body">
                                <div class="mb-3">
                                    <label for="signed_name">Nama yang bertanda-tangan</label>
                                    <input type="text" name="signed_name" id="signed_name" class="form-control @error('signed_name') is-invalid @enderror" value="{{ old('signed_name') ?? $logs['signed_name'] }}">

                                    @error("signed_name")
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="signed_position">Jabatan Penanda tangan</label>
                                    <input type="text" name="signed_position" id="signed_position" class="form-control @error('signed_position') is-invalid @enderror" value="{{ old('signed_position') ?? $logs['signed_position'] }}">

                                    @error("signed_position")
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primer mt-4">Simpan</button>
            </form>
        </div>

        <div class="col-lg-6 preview p-5">
            <div class="surat mx-5">
                {{-- kop-surat --}}
                @include("components.buat_surat.kop")
                {{-- end-kop-surat --}}

                {{-- isi-surat --}}
                <div class="mt-3">
                    <div class="letter_header text-center">
                        <p style="font-size: .8em;" class="fw-bold"><u>SURAT MUTASI</u></p>
                        <p>No. {{ $commonLog->number_of_letter ?? "[Nomor surat]" }}</p>
                    </div>

                    <div class="letter_body mt-4">
                        <p>Yang bertanda tangan dibawah ini:</p>
                        <p>
                            <span>Nama</span>
                            <span style="margin-left: 18px">: </span>
                            <span class="fw-bold" id="signed_name_data">{{ $logs["signed_name"] ?? "[Nama yang bertanda tangan]" }}</span>
                        </p>
                        <p>
                            <span>Jabatan</span>
                            <span style="margin-left: 8px">: </span>
                            <span id="signed_position_data">{{ $logs["signed_position"] ?? "[Jabatan yang bertanda tangan]" }}</span>
                        </p>

                        <p class="mt-2">&emsp;&emsp;&emsp;Memutuskan untuk melakukan mutasi terhadap karyawan {{ $user->name }} yang tersebut di bawah ini:</p>
                        <p>
                            <span>Nama</span>
                            <span style="margin-left: 18px">: </span>
                            <span class="fw-bold" id="mutated_name_data">{{ $logs["mutated_name"] ?? "[Nama yang dimutasi]" }}</span>
                        </p>
                        <p>
                            <span>Jabatan</span>
                            <span style="margin-left: 8px">: </span>
                            <span id="mutated_position_data">{{ $logs["mutated_position"] ?? "[Jabatan yang dimutasi]" }}</span>
                        </p>

                        <p class="mt-2">Jabatan serta lokasi kantor yang baru adalah sebagai berikut:</p>
                        <p>
                            <span>Jabatan</span>
                            <span style="margin-left: 8px">: </span>
                            <span id="new_position_data">{{ $logs["new_position"] ?? "[Jabatan baru]" }}</span>
                        </p>
                        <p>
                            <span>Kantor</span>
                            <span style="margin-left: 16px">: </span>
                            <span id="new_office_location_data">{{ $logs["new_office_location"] ?? "[Lokasi kantor baru]" }}</span>
                        </p>

                        <p class="mt-2">&emsp;&emsp;&emsp;Surat Keputusan Mutasi ini mulai efektif pada <span id="effective_date_data">[hari, tanggal, bulan, tahun]</span>. Oleh karena itu, kepada yang bersangkutan untuk dapat mempersiapkan segala sesuatunya sebelum tanggal tersebut.</p>
                        <p>&emsp;&emsp;&emsp;Demikian Surat Keputusan Mutasi ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</p>
                    </div>

                    <div class="letter_footer text-end mt-4">
                        <p>
                            <span id="signed_place_data">[Tempat</span>
                            <span id="signed_date_data">tanggal, bulan tahun]</span>
                        </p>
                        <p class="mb-5">{{ $user->name }}</p>
                        <p class="fw-bold"><u id="signed_name_data_2">{{ $logs["signed_name"] ?? "[Nama yang bertanda tangan]" }}</u></p>
                        <p id="signed_position_data_2">{{ $logs["signed_position"] ?? "[Jabatan yang bertanda tangan]" }}</p>
                    </div>
                </div>
                {{-- end-isi-surat --}}
            </div>
        </div>
    </div>

    <script src="{{ asset("assets/js/date.js") }}"></script>
    <script src="{{ asset("assets/js/buat_surat/mutasi.js") }}"></script>
@endsection

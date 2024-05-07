@extends('layouts.letter_main')
@section('letter_content')
    <div class="create w-50 p-5 ">
        <form action="{{ route('letter.log.store', ['commonLetterLog' => $commonLog->id]) }}" method="post"
            id="input-letter-form">
            @csrf
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item border-bottom">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#tempat_tanggal"
                            aria-expanded="true" aria-controls="tempat_tanggal"><strong>
                                Tempat dan Tanggal Surat
                            </strong>
                        </button>
                    </h2>

                    <div id="tempat_tanggal" class="accordion-collapse collapse show">
                        <div class="accordion-body row mb-3">
                            <div class="col-md-6">
                                <label for="signed_place">Tempat</label>
                                <input type="text" name="signed_place" value="{{ old('signed_place') ?? $logs['signed_place'] }}"
                                    class="form-control @error('signed_place') is-invalid @enderror" id="signed_place">

                                @error('signed_place')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="signed_date">Tanggal</label>
                                <input type="date" name="signed_date" value="{{ old('signed_date') ?? $logs['signed_date'] }}"
                                    class="form-control @error('signed_date') is-invalid @enderror" id="signed_date">

                                @error('signed_date')
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
                            data-bs-target="#informasi_surat" aria-expanded="false" aria-controls="informasi_surat">
                            <strong>
                                Informasi Surat
                            </strong>
                        </button>
                    </h2>

                    <div id="informasi_surat" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <div class="mb-3">
                                <label for="employee_name">Nama Karyawan</label>
                                <input type="text" name="employee_name"
                                    value="{{ old('employee_name') ?? $logs['employee_name'] }}"
                                    class="form-control @error('employee_name') is-invalid @enderror" id="employee_name">

                                @error('employee_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="position">Jabatan (semula)</label>
                                <input type="text" name="position" value="{{ old('position') ?? $logs['position'] }}"
                                    class="form-control @error('position') is-invalid @enderror" id="position">

                                @error('position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="salary">Gaji Pokok (semula)</label>
                                <input type="number" name="salary" value="{{ old('salary') ?? $logs['salary'] }}"
                                    class="form-control @error('salary') is-invalid @enderror" id="salary">

                                @error('salary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div id="optional_data">
                                @if(old("optionals"))
                                    @foreach (old("optionals") as $index => $item)
                                        <div class="mb-3">
                                            <div class="d-flex gap-2">
                                                <div class="w-100">
                                                    <input type="text" name="{{ sprintf('optionals[%s][key]', $index) }}"
                                                        value="{{ old(sprintf('optionals.%s.key', $index)) }}"
                                                        class="form-control fw-bold
                                                            @error(sprintf("optionals.%s.key", $index)) is-invalid @enderror"
                                                        id="{{ sprintf('optionals-%s-key', $index) }}"
                                                        placeholder="Masukkan judul..." required>

                                                    @error(sprintf("optionals.%s.key", $index))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div>
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="removeOldOptionalData(this)">Hapus</button>
                                                </div>
                                            </div>

                                            <input type="text" name="{{ sprintf('optionals[%s][value]', $index) }}"
                                                value="{{ old(sprintf('optionals.%s.value', $index)) }}"
                                                class="form-control mt-3
                                                    @error(sprintf("optionals.%s.value", $index)) is-invalid @enderror"
                                                id="{{ sprintf('optionals-%s-value', $index) }}"
                                                placeholder="Masukkan Isi..." required>

                                            @error(sprintf("optionals.%s.value", $index))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    @endforeach

                                @else
                                    @foreach ($logs["optionals"] as $index => $item)
                                        <div class="mb-3">
                                            <div class="d-flex gap-2 mb-3">
                                                <input type="text" name="{{ sprintf('optionals[%s][key]', $index) }}"
                                                    value="{{ $item["key"] }}" class="form-control fw-bold"
                                                    id="{{ sprintf('optionals-%s-key', $index) }}"
                                                    placeholder="Masukkan judul..." required>

                                                <button type="button" class="btn btn-danger"
                                                    onclick="removeOptionalData(this)">Hapus</button>
                                            </div>

                                            <input type="text" name="{{ sprintf('optionals[%s][value]', $index) }}"
                                                value="{{ $item["value"] }}" class="form-control"
                                                id="{{ sprintf('optionals-%s-value', $index) }}"
                                                placeholder="Masukkan Isi..." required>
                                        </div>
                                    @endforeach

                                @endif
                            </div>

                            <div class="d-flex mb-3">
                                <button type="button" class="btn btn-white-2 w-100" id="button_add_optional_data"
                                    onclick="addOptionalData()">Tambah</button>
                            </div>

                            <div class="mb-3">
                                <label for="new_position">Jabatan Baru (Menjadi)</label>
                                <input type="text" name="new_position" value="{{ old('new_position') ?? $logs['new_position'] }}"
                                    class="form-control @error('new_position') is-invalid @enderror" id="new_position">

                                @error('new_position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="new_salary">Gaji Pokok Baru (Menjadi)</label>
                                <input type="number" name="new_salary" value="{{ old('new_salary') ?? $logs['new_salary'] }}"
                                    class="form-control @error('new_salary') is-invalid @enderror" id="new_salary">

                                @error('new_salary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div id="new_optional_data">
                                @if(old("new_optionals"))
                                    @foreach (old("new_optionals") as $index => $item)
                                        <div class="mb-3">
                                            <div class="d-flex gap-2">
                                                <div class="w-100">
                                                    <input type="text" name="{{ sprintf('new_optionals[%s][key]', $index) }}"
                                                        value="{{ old(sprintf('new_optionals.%s.key', $index)) }}"
                                                        class="form-control fw-bold
                                                            @error(sprintf("new_optionals.%s.key", $index)) is-invalid @enderror"
                                                        id="{{ sprintf('new_optionals-%s-key', $index) }}"
                                                        placeholder="Masukkan judul..." required>

                                                    @error(sprintf("new_optionals.%s.key", $index))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div>
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="removeOldNewOptionalData(this)">Hapus</button>
                                                </div>
                                            </div>

                                            <input type="text" name="{{ sprintf('new_optionals[%s][value]', $index) }}"
                                                value="{{ old(sprintf('new_optionals.%s.value', $index)) }}"
                                                class="form-control mt-3
                                                    @error(sprintf("new_optionals.%s.value", $index)) is-invalid @enderror"
                                                id="{{ sprintf('new_optionals-%s-value', $index) }}"
                                                placeholder="Masukkan Isi..." required>

                                            @error(sprintf("new_optionals.%s.value", $index))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    @endforeach

                                @else
                                    @foreach ($logs["new_optionals"] as $index => $item)
                                        <div class="mb-3">
                                            <div class="d-flex gap-2 mb-3">
                                                <input type="text" name="{{ sprintf('new_optionals[%s][key]', $index) }}"
                                                    value="{{ $item["key"] }}" class="form-control fw-bold"
                                                    id="{{ sprintf('new_optionals-%s-key', $index) }}"
                                                    placeholder="Masukkan judul..." required>

                                                <button type="button" class="btn btn-danger"
                                                    onclick="removeNewOptionalData(this)">Hapus</button>
                                            </div>

                                            <input type="text" name="{{ sprintf('new_optionals[%s][value]', $index) }}"
                                                value="{{ $item["value"] }}" class="form-control"
                                                id="{{ sprintf('new_optionals-%s-value', $index) }}"
                                                placeholder="Masukkan Isi..." required>
                                        </div>
                                    @endforeach

                                @endif
                            </div>

                            <div class="d-flex mb-3">
                                <button type="button" class="btn btn-white-2 w-100" id="button_add_new_optional_data"
                                    onclick="addNewOptionalData()">Tambah</button>
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
                                    <div id="considerings_data">
                                        @foreach ($logs["considerings"] as $index => $item)
                                            <div class="mb-3">
                                                <label for="{{ sprintf('considerings-%s', $index) }}">Poin {{ $loop->iteration }}</label>
                                                <textarea name="considerings[]" class="form-control"
                                                    id="{{ sprintf('considerings-%s', $index) }}" rows="3" required>{{ $item }}</textarea>
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="d-flex">
                                        <button type="button" class="btn btn-white-2 w-100"
                                            id="button_add_considerings_data" onclick="addConsiderings()">Tambah</button>
                                        <button type="button"
                                            class="btn btn-danger ms-2 @if(count($logs['considerings']) <= 1) d-none @endif"
                                            id="button_remove_considerings_data"
                                            onclick="removeConsiderings()">Hapus</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label><strong>Mengingatkan</strong></label>
                                </div>
                                <div class="col-md-9">
                                    <div id="rememberings_data">
                                        @foreach ($logs["rememberings"] as $index => $item)
                                            <div class="mb-3">
                                                <label for="{{ sprintf('rememberings-%s', $index) }}">Poin {{ $loop->iteration }}</label>
                                                <textarea name="rememberings[]" class="form-control"
                                                    id="{{ sprintf('rememberings-%s', $index) }}" rows="3">{{ $item }}</textarea>
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="d-flex">
                                        <button type="button" class="btn btn-white-2 w-100"
                                            id="button_add_rememberings_data" onclick="addRememberings()">Tambah</button>
                                        <button type="button"
                                            class="btn btn-danger ms-2 @if(count($logs['rememberings']) <= 1) d-none @endif"
                                            id="button_remove_rememberings_data"
                                            onclick="removeRememberings()">Hapus</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label><strong>Memutuskan</strong></label>
                                </div>
                                <div class="col-md-9">
                                    <div class="mb-3">
                                        <label for="decidings_first">Pertama</label>
                                        <textarea name="decidings[first]"
                                            class="form-control @error('decidings.first') is-invalid @enderror"
                                            id="decidings_first" rows="3">{{ old('decidings.first') ?? $logs["decidings"]["first"] }}</textarea>

                                        @error('decidings.first')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="decidings_second">Kedua</label>
                                        <textarea name="decidings[second]"
                                            class="form-control @error('decidings.second') is-invalid @enderror"
                                            id="decidings_second" rows="3">{{ old('decidings.second') ?? $logs["decidings"]["second"] }}</textarea>

                                        @error('decidings.second')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
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
                            <div class="mb-3">
                                <label for="signed_name">Nama Penanda Tangan</label>
                                <input type="text" name="signed_name" value="{{ old('signed_name') ?? $logs['signed_name'] }}"
                                    class="form-control @error('signed_name') is-invalid @enderror" id="signed_name">

                                @error('signed_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="signed_position">Jabatan Penanda Tangan</label>
                                <input type="text" name="signed_position"
                                    value="{{ old('signed_position') ?? $logs['signed_position'] }}"
                                    class="form-control @error('signed_position') is-invalid @enderror" id="signed_position">

                                @error('signed_position')
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


    <script src="{{ asset('assets/js/buat_surat/promosi.js') }}"></script>
@endsection

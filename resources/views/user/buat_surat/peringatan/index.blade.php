@extends('layouts.letter_main')

@section('letter_content')
    <div class="row vh-100">
        <div class="col-lg-6 create p-5">
            <form action="{{ route('letter.log.store', ['commonLetterLog' => $commonLog->id]) }}" method="post" id="input-letter-form">
                @csrf
                <div class="accordion" id="accordionParent">
                    <div class="accordion-item border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#subject_of_letter" aria-expanded="true" aria-controls="subject_of_letter"><strong>
                                    Pokok Surat
                                </strong>
                            </button>
                        </h2>
                        <div id="subject_of_letter" class="accordion-collapse collapse show" data-bs-parent="#accordionParent">
                            <div class="accordion-body">
                                <div class="mb-3">
                                    <label for="subject">Perihal</label>
                                    <input type="text" name="subject" id="subject" class="form-control @error('subject') is-invalid @enderror" value="{{ old('subject') ?? $logs['subject'] }}">

                                    @error('subject')
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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#information_letter" aria-expanded="false" aria-controls="information_letter">
                                <strong>
                                    Informasi Surat
                                </strong>
                            </button>
                        </h2>
                        <div id="information_letter" class="accordion-collapse collapse" data-bs-parent="#accordionParent">
                            <div class="accordion-body">
                                <div class="mb-3">
                                    <label for="recipient_name">Nama Penerima</label>
                                    <input type="text" name="recipient_name" id="recipient_name" class="form-control @error('recipient_name') is-invalid @enderror" value="{{ old('recipient_name') ?? $logs['recipient_name'] }}">

                                    @error('recipient_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="recipient_position">Jabatan Penerima</label>
                                    <input type="text" name="recipient_position" id="recipient_position" class="form-control @error('recipient_position') is-invalid @enderror" value="{{ old('recipient_position') ?? $logs['recipient_position'] }}">

                                    @error('recipient_position')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="violation_date">Tanggal Pelanggaran</label>
                                    <input type="date" name="violation_date" id="violation_date" class="form-control @error('violation_date') is-invalid @enderror" value="{{ old('violation_date') ?? $logs['violation_date'] }}">

                                    @error('violation_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="violation_description">Deskripsi Pelanggaran</label>
                                    <textarea name="violation_description" id="violation_description" class="form-control @error('violation_description') is-invalid @enderror" rows="3">{{ old('violation_description') ?? $logs["violation_description"]}}</textarea>

                                    @error('violation_description')
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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#letter_validation" aria-expanded="false" aria-controls="letter_validation">
                                <strong>
                                    Pengesahan Surat
                                </strong>
                            </button>
                        </h2>
                        <div id="letter_validation" class="accordion-collapse collapse" data-bs-parent="#accordionParent">
                            <div class="accordion-body">
                                <div class="mb-3">
                                    <label for="signed_place">Tempat</label>
                                    <input type="text" name="signed_place" id="signed_place" class="form-control @error('signed_place') is-invalid @enderror" value="{{ old('signed_place') ?? $logs['signed_place'] }}">

                                    @error('signed_place')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="signed_date">Tanggal</label>
                                    <input type="date" name="signed_date" id="signed_date" class="form-control @error('signed_date') is-invalid @enderror" value="{{ old('signed_date') ?? $logs['signed_date'] }}">

                                    @error('signed_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="signed_name">Nama yang bertanda tangan</label>
                                    <input type="text" name="signed_name" id="signed_name" class="form-control @error('signed_name') is-invalid @enderror" value="{{ old('signed_name') ?? $logs['signed_name'] }}">

                                    @error('signed_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="signed_position">jabatan Penanda tangan</label>
                                    <input type="text" name="signed_position" id="signed_position" class="form-control @error('signed_position') is-invalid @enderror" value="{{ old('signed_position') ?? $logs['signed_position'] }}">

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
                <button type="submit" class="btn btn-primary mt-4">Simpan</button>
            </form>
        </div>

        <div class="col-lg-6 preview p-5 d-md-none d-lg-block">
            <div class="surat mx-5">
                {{-- kop-surat --}}
                @include("components.buat_surat.kop")
                {{-- end-kop-surat --}}

                {{-- isi-surat --}}
                <div class="mt-3">
                    <div class="letter_header">
                        <p>Perihal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span id="subject_data">{{ old("subject") ?? $logs["subject"] ?? "[Perihal]" }}</span></p>

                        <div class="text-center mt-2">
                            <h1 class="fw-bold text-dark text-8"><u>SURAT PERINGATAN</u></h1>
                            <p class="mt-n7">No. {{ $commonLog->number_of_letter ?? "[Nomor surat]" }}</p>
                        </div>
                    </div>

                    <div class="letter_body mt-4">
                        <p>Surat peringatan ini ditujukan kepada:</p>
                        <p>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span id="recipient_name_data">{{ old("recipient_name") ?? $logs["recipient_name"] ?? "[Nama penerima]" }}</span></p>
                        <p>Jabatan &nbsp;&nbsp;: <span id="recipient_position_data">{{ old("recipient_position") ?? $logs["recipient_position"] ?? "[Jabatan penerima]" }}</span></p>

                        <p>&emsp;&emsp;&emsp;Dengan ini kami sampaikan bahwa pada tanggal <span id="violation_date_data">{{ old("violation_date") ?? $logs["violation_date"] ?? "[tanggal pelanggaran]" }}</span>, Saudara telah melanggar kebijakan perusahaan terkait <span id="violation_description_data">{{ old("violation_description") ?? $logs["violation_description"] ?? "[deskripsi pelanggaran]" }}</span>. Pelanggaran tersebut kami identifikasi sebagai tindakan yang tidak sesuai dengan norma-norma yang telah ditetapkan oleh perusahaan.</p>
                        <p>&emsp;&emsp;&emsp;Dengan diterbitkannya surat peringatan ini, kami ingin mengingatkan Saudara bahwa melanggar kebijakan perusahaan memiliki konsekuensi serius dan dapat merusak citra dan reputasi perusahaan. Sebagai langkah pertama, surat peringatan ini kami berikan sebagai upaya untuk memberi kesempatan kepada Saudara untuk memperbaiki perilaku Saudara.</p>
                        <p>&emsp;&emsp;&emsp;Surat peringatan ini terhitung sejak tanggal dikeluarkannya surat peringatan ini dan apabila yang bersangkutan melakukan kesalahan yang sama atau lebih berat, maka akan diberian peringatan selanjutnya. Demikian surat peringatan ini dibuat untuk dapat diperhatikan dan dilaksanakan sebaik mungkin kepada yang bersangkutan.</p>
                    </div>

                    <div class="letter_footer text-end mt-5">
                        <p>
                            <span id="signed_place_data">{{ old("signed_place") ?? $logs["signed_place"] ?? "[Tempat" }}</span>,
                            <span id="signed_date_data">
                                @if(old("signed_date"))
                                    {{ date("d", strtotime(old("signed_date"))) }}
                                    {{ config(sprintf("central.months.%s", date("F", strtotime(old("signed_date"))))) }}
                                    {{ date("Y", strtotime(old("signed_date"))) }}
                                @elseif ($logs["signed_date"])
                                    {{ date("d", strtotime($logs["signed_date"])) }}
                                    {{ config(sprintf("central.months.%s", date("F", strtotime($logs["signed_date"])))) }}
                                    {{ date("Y", strtotime($logs["signed_date"])) }}
                                @else
                                    tanggal, bulan, tahun]
                                @endif
                            </span>
                        </p>
                        <p class="mb-5">{{ $user->name }}</p>

                        <p class="fw-bold"><u id="signed_name_data">{{ old("signed_name") ?? $logs["signed_name"] ?? "[Nama yang bertanda tangan]" }}</u></p>
                        <p id="signed_position_data">{{ old("signed_position") ?? $logs["signed_position"] ?? "[Jabatan yang bertanda tangan]" }}</p>
                    </div>
                </div>
                {{-- end-isi-surat --}}

                <div class="page-break"></div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/date.js') }}"></script>
    <script src="{{ asset('assets/js/page_break.js') }}"></script>
    <script src="{{ asset('assets/js/buat_surat/warning.js') }}"></script>
@endsection

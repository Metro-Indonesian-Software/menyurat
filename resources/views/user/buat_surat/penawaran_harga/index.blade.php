@extends('layouts.letter_main')

@section('letter_content')
    <div class="row vh-100">
        <div class="col-lg-6 create p-5">
            <form action="{{ route('letter.log.store', ['commonLetterLog' => $commonLog->id]) }}" method="post" id="input-letter-form">
                @csrf
                <div class="accordion" id="accordionParent">
                    <div class="accordion-item border-bottom">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#subject_of_letter" aria-expanded="true" aria-controls="subject_of_letter">
                                <strong>
                                    Pokok Surat
                                </strong>
                            </button>
                        </h2>
                        <div id="subject_of_letter" class="accordion-collapse collapse show" data-bs-parent="#accordionParent">
                            <div class="accordion-body">
                                <div class="mb-3">
                                    <label for="attachment">Lampiran</label>
                                    <input type="text" name="attachment" id="attachment" class="form-control @error('attachment') is-invalid @enderror" value="{{ old('attachment') ?? $logs['attachment'] }}">

                                    @error('attachment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="subject">Perihal</label>
                                    <input type="text" name="subject" id="subject" class="form-control @error('subject') is-invalid @enderror" value="{{ old('subject') ?? $logs['subject'] }}">

                                    @error('subject')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

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
                                    <label for="recipient_address">Alamat Penerima</label>
                                    <input type="text" name="recipient_address" id="recipient_address" class="form-control @error('recipient_address') is-invalid @enderror" value="{{ old('recipient_address') ?? $logs['recipient_address'] }}">

                                    @error('recipient_address')
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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#content_of_letter" aria-expanded="false" aria-controls="content_of_letter">
                                <strong>
                                    Isi Surat
                                </strong>
                            </button>
                        </h2>
                        <div id="content_of_letter" class="accordion-collapse collapse" data-bs-parent="#accordionParent">
                            <div class="accordion-body">
                                <div class="mb-3">
                                    <label for="contents_first">Paragraf Satu</label>
                                    <textarea name="contents[first]" id="contents_first" class="form-control @error('contents.first') is-invalid @enderror" rows="3">{{ old('contents.first') ?? $logs["contents"]["first"] }}</textarea>

                                    @error('contents.first')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3 d-flex justify-content-between">
                                    <label class="align-self-center">Deskripsi Penawaran</label>
                                    <button type="button" class="btn btn-primary" id="button_add_service_description_data" onclick="addDescriptionOffering()"><i class="fa-solid fa-plus"></i></button>
                                </div>

                                <div id="contents_second_list">
                                    @if (old("contents.second"))
                                        @foreach (old("contents.second") as $index => $item)
                                            <div class="mb-3" id="{{ sprintf('contents_second_%s', $index) }}">
                                                <div class="d-flex gap-2 mb-3">
                                                    <div class="w-100">
                                                        <input type="text" name="{{ sprintf('contents[second][%s][key]', $index) }}" id="{{ sprintf('contents_second_%s_key', $index) }}" class="form-control fw-bold @error(sprintf("contents.second.%s.key", $index)) is-invalid @enderror" value="{{ $item['key'] }}" placeholder="Masukkan kata kunci..." required oninput="onInputDescriptionOffering('{{ $index }}', this, 'key')">

                                                        @error(sprintf("contents.second.%s.key", $index))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div>
                                                        <button type="button" class="btn btn-danger" id="{{ sprintf('button_remove_contents_second_%s_key', $index) }}" onclick="removeDescriptionOffering('{{ $index }}')"><i class="fa-solid fa-trash"></i></button>
                                                    </div>
                                                </div>

                                                <textarea name="{{ sprintf('contents[second][%s][value]', $index) }}" id="{{ sprintf('contents_second_%s_value', $index) }}" class="form-control @error(sprintf("contents.second.%s.value", $index)) is-invalid @enderror" rows="3"  oninput="onInputDescriptionOffering('{{ $index }}', this, 'value')">{{ $item["value"] }}</textarea>

                                                @error(sprintf("contents.second.%s.value", $index))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        @endforeach

                                    @else
                                        @foreach ($logs["contents"]["second"] as $index => $item)
                                            <div class="mb-3" id="{{ sprintf('contents_second_%s', $index) }}">
                                                <div class="d-flex gap-2 mb-3">
                                                    <input type="text" name="{{ sprintf('contents[second][%s][key]', $index) }}" id="{{ sprintf('contents_second_%s_key', $index) }}" class="form-control fw-bold" value="{{ $item['key'] }}" placeholder="Masukkan kata kunci..." required oninput="onInputDescriptionOffering('{{ $index }}', this, 'key')">

                                                    <button type="button" class="btn btn-danger" id="{{ sprintf('button_remove_contents_second_%s', $index) }}" onclick="removeDescriptionOffering('{{ $index }}')"><i class="fa-solid fa-trash"></i></button>
                                                </div>

                                                <textarea name="{{ sprintf('contents[second][%s][value]', $index) }}" id="{{ sprintf('contents_second_%s_value', $index) }}" class="form-control" rows="3" oninput="onInputDescriptionOffering('{{ $index }}', this, 'value')">{{ $item["value"] }}</textarea>
                                            </div>
                                        @endforeach

                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="contents_third">Paragraf Ketiga</label>
                                    <textarea name="contents[third]" id="contents_third" class="form-control @error('contents.third') is-invalid @enderror" rows="3">{{ old('contents.third') ?? $logs["contents"]["third"] }}</textarea>

                                    @error('contents.third')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="contents_fourth">Penutup</label>
                                    <textarea name="contents[fourth]" id="contents_fourth" class="form-control @error('contents.fourth') is-invalid @enderror" rows="3">{{ old('contents.fourth') ?? $logs["contents"]["fourth"] }}</textarea>

                                    @error('contents.fourth')
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
                                    <label for="signed_date">Tanggal</label>
                                    <input type="date" name="signed_date" id="signed_date" class="form-control @error('signed_date') is-invalid @enderror" value="{{ old('signed_date') ?? $logs['signed_date'] }}">

                                    @error('signed_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="signed_name">Nama Penanda Tangan</label>
                                    <input type="text" name="signed_name" id="signed_name" class="form-control @error('signed_name') is-invalid @enderror" value="{{ old('signed_name') ?? $logs['signed_name'] }}">

                                    @error('signed_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="signed_position">Jabatan Penanda Tangan</label>
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
                        <div class="d-flex gap-2 justify-content-between">
                            <p>Nomor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $commonLog->number_of_letter ?? "[Nomor surat]" }}</p>
                            <p id="signed_date_data">{{ old("signed_date") ?? $logs["signed_date"] ?? "[Tanggal]" }}</p>
                        </div>
                        <p>Lampiran &nbsp;&nbsp;&nbsp;: <span id="attachment_data">{{ old("attachment") ?? $logs["attachment"] ?? "[Lampiran]" }}</span></p>
                        <p>Perihal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span id="subject_data">{{ old("subject") ?? $logs["subject"] ?? "[Perihal]" }}</span></p>

                        <p class="mt-3">Kepada Yth,</p>
                        <p class="fw-bold" id="recipient_name_data">{{ old("recipient_name") ?? $logs["recipient_name"] ?? "[Tujuan surat]" }}</p>
                        <p id="recipient_address_data">{{ old("recipient_address") ?? $logs["recipient_address"] }}</p>
                        <p>Di tempat</p>
                    </div>

                    <div class="letter-body mt-4">
                        <p>Dengan hormat,</p>
                        <p>&emsp;&emsp;&emsp;<span id="contents_first_data">{{ old("contents.first") ?? $logs["contents"]["first"] }}</span></p>
                        <ol id="contents_second_data">
                            @if (old("contents.second"))
                                @foreach (old("contents.second") as $index => $item)
                                    <div id="{{ sprintf('contents_second_%s_data', $index) }}">
                                        <li class="decimal-number fw-bold" id="{{ sprintf('contents_second_%s_key_data', $index) }}">{{ $item["key"] }}</li>
                                        <span class="d-block" id="{{ sprintf('contents_second_%s_value_data', $index) }}">{{ $item["value"] }}</span>
                                    </div>
                                @endforeach

                            @else
                                @foreach ($logs["contents"]["second"] as $index => $item)
                                    <div id="{{ sprintf('contents_second_%s_data', $index) }}">
                                        <li class="decimal-number fw-bold" id="{{ sprintf('contents_second_%s_key_data', $index) }}">{{ $item["key"] }}</li>
                                        <span class="d-block" id="{{ sprintf('contents_second_%s_value_data', $index) }}">{{ $item["value"] }}</span>
                                    </div>
                                @endforeach
                            @endif
                        </ol>
                        <p style="margin-top: -15px;">&emsp;&emsp;&emsp;<span id="contents_third_data">{{ old("contents.third") ?? $logs["contents"]["third"] }}</span></p>
                        <p>&emsp;&emsp;&emsp;<span id="contents_fourth_data">{{ old("contents.fourth") ?? $logs["contents"]["fourth"] }}</span></p>
                    </div>

                    <div class="letter_footer text-end mt-5">
                        <p>Hormat kami,</p>
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
@endsection

@section("javascript")
    <script src="{{ asset('assets/js/date.js') }}"></script>
    <script src="{{ asset('assets/js/page_break.js') }}"></script>
    <script src="{{ asset('assets/js/buat_surat/quotation.js') }}"></script>
@endsection

@extends('layouts.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/style_kelola_surat.css') }}">
    <div class="content px-5 py-3 ">
        <div class="d-flex justify-content-between">
            <h2 class="fw-bold mb-4 mt-1" style="font-size: 20px;"><strong>{{ $title }}</strong></h2>
            <div class="">
                <button class="btn btn-primary my-auto" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-plus me-2"></i>Tambah</button>
            </div>
        </div>

        <form action="{{ route('letter.common.show', ['slug' => request()->slug]) }}" method="get">
            <div class="d-flex gap-2">
                <div class="form-group ">
                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input class="form-field" value="{{ Request::input('search') }}" name="search" type="text" placeholder="Cari">
                </div>

                @if (Request::input('published') !== null)
                    <input type="text" name="published" id="hidden-published" class="d-none" value="{{ Request::input('published') }}">
                @endif

                @if (Request::input('orderBy') !== null)
                    <input type="text" name="orderBy" id="hidden-published" class="d-none" value="{{ Request::input('orderBy') }}">
                @endif

                <button type="submit" class="btn btn-primary text-center  my-auto px-3 ">Cari</button>

                <select class="form-select form-select-order filter" aria-label="Default select example">
                    <option value="latest" @if (Request::input("orderBy") === "latest") selected @endif>Terbaru</option>
                    <option value="oldest" @if (Request::input("orderBy") === "oldest") selected @endif>Terlama</option>
                </select>
            </div>
        </form>

        <div class="d-flex gap-4 mt-3 mb-3 filter-table-dashboard">
            <a href="{{ route('letter.common.show', ['slug' => request()->slug, 'search' => Request::input("search"),
                'orderBy' => Request::input('orderBy')]) }}"
                class="border-bottom p-1 border-2 @if (Request::input("published") === null) filter-active-table @endif">
                    <small><i class="fa-solid fa-file me-1"></i>Semua Surat</small>
            </a>

            <a href="{{ route('letter.common.show', ['slug' => request()->slug, 'published' => 0,
                'search' => Request::input("search"), 'orderBy' => Request::input('orderBy')]) }}"
                class="border-bottom p-1 border-2 @if (Request::input("published") !== null && Request::input("published") == 0) filter-active-table @endif">
                    <small><i class="fa-regular fa-clock me-1"></i>Belum Diterbitkan</small>
            </a>

            <a href="{{ route('letter.common.show', ['slug' => request()->slug, 'published' => 1,
                'search' => Request::input("search"), 'orderBy' => Request::input('orderBy')]) }}"
                class="border-bottom p-1 border-2 @if (Request::input("published") !== null && Request::input("published") == 1) filter-active-table @endif">
                    <small><i class="fa-solid fa-check me-1"></i>Sudah Diterbitkan</small>
            </a>
        </div>

        <div class="table-responsive mt-2">
            <table class="table">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Judul Surat</th>
                        <th>Jenis</th>
                        <th>No. Surat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-white">
                    @foreach ($commons as $common)
                        <tr>
                            <td>{{ $commons->firstItem() + $loop->iteration -1 }}</td>
                            <td>{{ date_format($common->updated_at, "d-m-Y H:m") }}</td>
                            <td>{{ $common->title }}</td>
                            <td>{{ $common->type }}</td>
                            <td>{{ $common->number_of_letter ?? "-" }}</td>
                            <td>
                                @if ($common->number_of_letter)
                                    <small class="bg-success-2 px-2 py-1 rounded">Sudah Diterbitkan</small>
                                @else
                                    <small class="bg-warning-2 px-2 py-1 rounded">Belum Diterbitkan</small>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown dropstart">
                                    <button type="button" class="btn border-0 " data-bs-toggle="dropdown"
                                        aria-expanded="false" aria-haspopup="true">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        @if ($common->number_of_letter)
                                            <li>
                                                <a class="dropdown-item text-black" href="#">
                                                    <i class="fa-solid fa-download me-2"></i>Download
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item text-black" href="#">
                                                    <i class="fa-regular fa-eye me-2"></i>Lihat
                                                </a>
                                            </li>
                                        @else
                                            <li>
                                                <a class="dropdown-item text-warning"
                                                    href="{{ route('letter.log.create', ['commonLetterLog' => $common->id]) }}">
                                                    <i class="fa-regular fa-pen-to-square me-2"></i>Edit
                                                </a>
                                            </li>
                                            <li>
                                                <form action="{{ route('letter.common.destroy', ['commonLetterLog' => $common->id]) }}" method="post" onsubmit="return confirmDelete(this)">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button type="submit" class="dropdown-item text-danger btn">
                                                        <i class="fa-solid fa-trash me-2"></i>Hapus
                                                    </button>
                                                </form>
                                            </li>
                                            <li>
                                                <button type="button" class="dropdown-item text-primer" data-bs-toggle="modal" data-bs-target="#updateNumberOfLetter" onclick="updateNumberOfLetter('{{ $common->id }}')">
                                                    <i class="fa-solid fa-file-import me-2"></i>Terbitkan
                                                </button>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    @if (count($commons) === 0)
                        <tr>
                            <td colspan="7" class="text-center fw-bold">
                                Data tidak ditemukan
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>

            <div class="d-flex justify-content-end">
                {{ $commons->links() }}
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade mt-5" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-body my-4 mx-3">
                <form action="{{ route('letter.common.store.slug', ['slug' => request()->slug]) }}" method="post">
                    @csrf
                    <div class="text-center mb-4">
                        <label for="name" class="mb-3">
                            <h2 class="modal-title fs-5" id="staticBackdropLabel">Masukan Judul Surat</h2>
                        </label>
                        <input type="text" name="title" class="form-control" id="title"
                            placeholder="Judul surat..." required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Buat Surat</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal Update Nomor Surat -->
    <div class="modal fade mt-5" id="updateNumberOfLetter" tabindex="-1" aria-labelledby="updateNumberOfLetterLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-body my-4 mx-3">
                <form action="{{ route('letter.common.update', ['commonLetterLog' => 0]) }}" method="post"
                    id="update-number-of-letter">
                    @csrf
                    @method("PUT")
                    <div class="text-center mb-4">
                        <label for="name" class="mb-3">
                            <h2 class="modal-title fs-5" id="staticBackdropLabel">Silahkan Masukan Nomor Surat</h2>
                        </label>
                        <input type="text" name="number_of_letter" class="form-control" id="number_of_letter"
                            placeholder="Nomor surat..." required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Terbitkan Surat</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/child_manage_letter.js') }}"></script>
@endsection

@extends('layouts.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/style_pengguna.css') }}">
    <div class="content px-5 py-4 ">
        <div class="d-flex justify-content-between">
            <h1>Daftar Pengguna</h1>
            <button class="btn btn-primer" data-bs-toggle="modal" data-bs-target="#createSelectedModal"><i
                    class="fa-solid fa-plus me-2"></i>Tambah</button>
        </div>
        <form action="{{ route('user.index') }}" method="get">
            <div class="d-flex justify-content-between mt-3">
                <div class="form-group ">
                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input class="form-field" value="{{ Request::input('search') }}" name="search" type="text" placeholder="Cari">
                </div>

                @if (Request::input('active') !== null)
                    <input type="text" name="active" id="hidden-published" class="d-none"
                        value="{{ Request::input('active') }}">
                @endif

                @if (Request::input('orderBy') !== null)
                    <input type="text" name="orderBy" id="hidden-published" class="d-none"
                        value="{{ Request::input('orderBy') }}">
                @endif

                <button type="submit" class="btn d-none">Submit</button>

                <select class="form-select form-select-status" aria-label="Default select example">
                    <option value="">Status</option>
                    <option value="1"
                        @if (Request::input("active") !== null && Request::input("active") == 1) selected @endif>Aktif
                    </option>
                    <option value="0"
                        @if (Request::input("active") !== null && Request::input("active") == 0) selected @endif>Tidak Aktif
                    </option>
                </select>

                <select class="form-select form-select-order" aria-label="Default select example">
                    <option value="latest" @if (Request::input("orderBy") === "latest") selected @endif>Terbaru</option>
                    <option value="oldest" @if (Request::input("orderBy") === "oldest") selected @endif>Terlama</option>
                </select>
            </div>
        </form>
        <div class="table-responsive mt-3">
            <table class="table">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Email</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tbody class="table-white">
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $users->firstItem() + $loop->iteration - 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>
                                @if($user->active)
                                    <small class="bg-success-2 px-2 py-1 rounded">Aktif</small>
                                @else
                                    <small class="bg-warning-2 px-2 py-1 rounded">Tidak Aktif</small>
                                @endif
                            </td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <div class="dropdown dropstart">
                                    <button type="button" class="btn border-0 " data-bs-toggle="dropdown"
                                        aria-expanded="false" aria-haspopup="true">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="post" onsubmit="return confirmDelete(this)">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="dropdown-item text-danger btn">
                                                    <i class="fa-solid fa-trash me-2"></i>Hapus
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    @if (count($users) === 0)
                        <tr>
                            <td colspan="5" class="text-center fw-bold">
                                Data tidak ditemukan
                            </td>
                        </tr>
                    @endif

                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                {{ $users->links() }}
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade mt-5" id="createSelectedModal" tabindex="-1" aria-labelledby="createSelectedModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body my-4 mx-3">
                    <form action="{{ route('user.store') }}" method="post" id="create-selected-letter">
                        @csrf
                        <div class="text-center mb-5">
                            <h2 class="modal-title fs-5" id="staticBackdropLabel">Silahkan Buat Akun user</h2>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="mb-1 text-black"><strong>Nama Perusahaan</strong></label>
                            <input type="text" name="name" class="form-control" placeholder="Nama perusahaan..." required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="mb-1 text-black"><strong>Email</strong></label>
                            <input type="email" name="email" class="form-control" placeholder="Email..." required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary ">Buat</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/manage_user.js') }}"></script>
@endsection

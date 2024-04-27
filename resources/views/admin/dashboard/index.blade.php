@extends('layouts.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/style_pengguna.css') }}">

    <div class="content px-5 py-3 ">
        <div class="pt-4 row  gap-3">
            <div class="col-md-3-5 py-2 rounded"style="background-color: rgb(240, 231, 252) !important;">
                <div class="row ">
                    <div class="col-md-3-5  d-flex  justify-content-center  ">
                        <i class="fa-solid fa-users  m-auto text-primer" style="font-size: 3em"></i>
                    </div>
                    <div class="col-md-8 mt-3">
                        <p class="text-primer">Jumlah Pengguna</p>
                        <p class="text-primer" style="font-size: 3em !important"><strong>{{ $totalUser }}</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3-5 py-2 rounded"style="background-color: rgb(194, 252, 173) !important;">
                <div class="row ">
                    <div class="col-md-3-5  d-flex  justify-content-center  ">
                        <i class="fa-solid fa-user-check m-auto text-hijau" style="font-size: 3em"></i>
                    </div>
                    <div class="col-md-8 mt-3">
                        <p class="text-hijau">Jumlah Pengguna Aktif</p>
                        <p class="text-hijau" style="font-size: 3em !important"><strong>{{ $activeUser }}</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3-5 py-2 rounded"style="background-color: rgb(254, 243, 222) !important;">
                <div class="row ">
                    <div class="col-md-3-5  d-flex  justify-content-center ">
                        <i class="fa-solid fa-user-xmark m-auto text-kuning" style="font-size: 3em"></i>
                    </div>
                    <div class="col-md-8 mt-3">
                        <p class="text-kuning">Jumlah Pengguna NonAktif</p>
                        <p class="text-kuning" style="font-size: 3em !important"><strong>{{ $inActiveUser }}</strong></p>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mt-5 mb-4">Pengguna Baru Baru Ini</h2>
        <div class="table-responsive mt-2">
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
                            <td>{{ $loop->iteration }}</td>
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
                </tbody>
            </table>
        </div>
    </div>
@endsection

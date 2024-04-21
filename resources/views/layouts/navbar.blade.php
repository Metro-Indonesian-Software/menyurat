<link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
{{-- navbar --}}
<div class=" navbar w-100 align-items-center py-3 px-5">
    <div class=" d-flex align-items-center  justify-content-between ">
        <button id="toggle-btn" type="button" class="border">
            <i class="fa-solid fa-bars"></i>
        </button>

        {{-- <div class="">

            <h1 class="m-auto ms-2" style="color: rgb(77, 77, 77)">Dashboard</h3>
        </div> --}}
    </div>

    <div class="btn-group gap-3">
        <h5 class="text-primer my-auto"><strong>{{ auth()->user()->name }}</strong></h5>
        <button class="btn border rounded rounded-circle text-white " style="background-color: rgb(133, 56, 234)"><i
                class="fa-solid fa-user"></i></button>

        {{-- <div class="form-group">
            <input class="form-field" type="email" placeholder="Search">
            <span><i class="fa-solid fa-magnifying-glass"></i></span>
        </div> --}}

        {{-- <button type="button" class="user border ms-3  dropdown-toggle" data-bs-toggle="dropdown"
            data-bs-display="static" aria-expanded="false">
            Rafli Haikal
        </button>
        <ul class="dropdown-menu dropdown-menu-lg-end">
            <li><a class="dropdown-item" href="#">Menu item</a></li>
            <li><a class="dropdown-item" href="#">Menu item</a></li>
            <li><a class="dropdown-item" href="#">Menu item</a></li>
        </ul> --}}
    </div>

</div>
{{-- end-navbar --}}

<link rel="stylesheet" href="{{ asset('assets/css/style_sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/text_custom.css') }}">
<aside id="sidebar" class="add-scrollbar">
    <div class="sidebar-logo-1 d-flex align-items-center mt-4">
        <div class="sidebar-logo-sm ">
            <a href="#" class=" text-primer"><span class="">MT</span></a>
        </div>
        <div class="sidebar-logo ">
            <a href="#"><span class=" text-primer">Menyurat</span></a>
        </div>
    </div>
    <ul class="sidebar-nav ">

        <li class="sidebar-item mb-2">
            <a href="/dashboard" class="sidebar-link 
            {{ Request::is('dashboard*') ? 'active' : '' }}"> <i
                    class="fa-solid fa-table-cells-large"></i> <span>Dashboard</span></a>
        </li>
        <li class="sidebar-item mb-2">
            <a href="/kelola_surat"
                class="sidebar-link 
            {{ Request::is('kelola_surat*') ? 'active' : '' }}"> <i
                    class="fa-regular fa-folder"></i> <span>Kelola Surat</span></a>
        </li>
        <li class="sidebar-item mb-2">
            <a href="/dashboard"
                class="sidebar-link 
            {{ Request::is('profil_perusahaan*') ? 'active' : '' }}"> <i
                    class="fa-regular fa-user"></i> <span>Profil Perusahaan</span></a>
        </li>


    </ul>
    <div class="sidebar-footer mb-2 ">
        <a href="" class="sidebar-link ">
            <i class="fa-solid fa-share-from-square"></i> <span>logout</span>
        </a>
    </div>
</aside>

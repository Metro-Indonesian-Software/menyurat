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
    <ul class="sidebar-nav">
        <li class="sidebar-item mb-2">
            <a href="/dashboard" class="sidebar-link
            {{ Route::currentRouteName() === "dashboard" ? 'active' : '' }}"> <i
                    class="fa-solid fa-table-cells-large"></i> <span>Dashboard</span></a>
        </li>

        @can("users_manage")
            <li class="sidebar-item mb-2">
                <a href="{{ route("user.index") }}"
                    class="sidebar-link
                {{ Str::startsWith(Route::currentRouteName(), 'user') ? 'active' : '' }}"> <i
                        class="fa-regular fa-user"></i> <span>Pengguna</span></a>
            </li>
        @endcan

        @can("letters_manage")
            <li class="sidebar-item mb-2">
                <a href="{{ route("letter.common.index") }}"
                    class="sidebar-link
                {{ Str::startsWith(Route::currentRouteName(), 'letter.common') ? 'active' : '' }}"> <i
                        class="fa-regular fa-folder"></i> <span>Kelola Surat</span></a>
            </li>
        @endcan

        <li class="sidebar-item mb-2">
            <a href="{{ route("profile.edit") }}"
                class="sidebar-link
            {{ Route::currentRouteName() === "profile.edit" ? 'active' : '' }}"> <i
                    class="fa-regular fa-user"></i> <span>Profil Perusahaan</span></a>
        </li>

    </ul>
    <div class="sidebar-footer mb-2">
        <p class="sidebar-link" onclick="logout()">
            <i class="fa-solid fa-share-from-square"></i> <span>Logout</span>
        </p>

        <form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none">
            @csrf
        </form>
    </div>
</aside>

<script>
    function logout(e) {
        document.getElementById('logout-form').submit();
    }
</script>

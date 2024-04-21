<link rel="stylesheet" href="{{ asset("assets/css/sweetalert2/sweetalert2.min.css") }}">
<script src="{{ asset("assets/js/sweetalert2/sweetalert2.all.min.js") }}"></script>
<script src="{{ asset("assets/js/toast.js") }}"></script>

@if (session()->has("success"))
    <script>
        success("{{ session('success') }}")
    </script>
@elseif (session()->has("error"))
    <script>
        error("{{ session('error') }}")
    </script>
@elseif (session()->has("info"))
    <script>
        info("{{ session('info') }}")
    </script>
@elseif (session()->has("warning"))
    <script>
        warning("{{ session('warning') }}")
    </script>
@endif

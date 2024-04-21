<script src="{{ asset("assets/js/alert.js") }}"></script>

@if (session()->has("alert-success"))
    <script>
        alertSuccess("{{ session('alert-success') }}")
    </script>
@elseif (session()->has("alert-error"))
    <script>
        alertError("{{ session('alert-error') }}")
    </script>
@elseif (session()->has("alert-info"))
    <script>
        alertInfo("{{ session('alert-info') }}")
    </script>
@elseif (session()->has("alert-warning"))
    <script>
        alertWarning("{{ session('alert-warning') }}")
    </script>
@endif

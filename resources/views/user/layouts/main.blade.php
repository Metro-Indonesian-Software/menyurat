<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/button.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/background_color.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/text_custom.css') }}">
    <script src="https://kit.fontawesome.com/82ebf8392e.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper  ">
        @include('user.layouts.sidebar')
        <div class="main ">
            @include('user.layouts.navbar')
            {{-- content --}}
            <div class="content  ">
                <div style="">
                    @yield('content')
                </div>
            </div>
            {{-- end-content --}}
        </div>
    </div>

    <script src="{{ asset('assets/js/sidebar.js') }}" crossorigin="anonymous"></script>
</body>

</html>

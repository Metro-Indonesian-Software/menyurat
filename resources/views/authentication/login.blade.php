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
    <style>
        a {
            font-weight: 600;
        }

        a:hover {}

        small {
            color: rgb(122, 122, 122);

        }

        small:hover {
            color: rgb(133, 56, 234);
        }
    </style>
</head>

<body class="bg-login">


    <div class="card w-30 mb-3 m-auto " style="margin-top: 20vh !important">
        <div class="row p-3 bg-white m-1">
            <div class="col-md-12 mt-4">
                <h1 class="text-center  text-primer">Masuk</h1>
                <div class="d-flex flex-column">
                    <small class="text-center m-auto">Selamat datang di Menyurat</small>
                    <small class="text-center m-auto">Silahkan Masukan Email dan Password dibawah ini</small>
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <div class="d-flex flex-column mb-3 mt-4">
                    <label for="email" class="mb-1"><strong>Email</strong></label>
                    <input type="text" class="form-control" id="email" placeholder="metro@gmail.com">
                </div>
                <div class="d-flex flex-column  ">
                    <label for="password" class="mb-1"><strong>Password</strong></label>
                    <input type="password" class="form-control" id="password" placeholder="">
                </div>
                <div class="d-flex justify-content-end">
                    <a href=""><small>Lupa Password</small></a>
                </div>
                <a href="/dashboard" class="w-100 btn btn-primer mt-3 ">Masuk</a>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/sidebar.js') }}" crossorigin="anonymous"></script>
</body>

</html>
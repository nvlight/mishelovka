<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - catalog</title>

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <!--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    -->
    <link rel="stylesheet" href="{{ asset('js/bootstrap/5.0.2/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/catalog/main.css')}}">

    <!-- Shortcut icon -->
    <link rel="shortcut icon" href="{{asset('imgs/common/__.ico')}}" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="{{asset('imgs/common/3.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('imgs/common/3.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('imgs/common/3.png')}}">
    <link rel="apple-touch-startup-image" href="{{asset('imgs/common/3.png')}}">

    <style>
        .t-body{
            /*min-height: 900px;*/
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <div class="t-body">
        <div class="admin_header">
            <div class="text-center pt-1 pb-5" style="background-color: {{$colors[0]}};">
                <h4 class="text-uppercase">Stok Second-Luxe / Цена от 30 до 500 рублей </h4>
                <h1 class="pt-4" style="font-size: 64px; font-weight: bold; color: {{$colors[1]}}; font-family: 'Roboto',Arial,sans-serif;">
                    {{$parentCatRuss}}
                </h1>
                <h4 class="mt-4">
                    Если вас что-то заинтересовало:
                    <ol>
                        <li>Делайте СКРИН</li>
                        <li>Пишите нам (иконка в углу, отвечает НЕ РОБОТ, а мы)</li>
                        <li>Мы пришлем Вам больше фото и видео по запросу</li>
                    </ol>
                </h4>
            </div>
        </div>

        <div id="app">
            @yield('content')
        </div>
    </div>

    @include('catalog.parts.footer')

    <!-- Scripts -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="{{asset('js/bootstrap/5.0.2/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('js/catalog/main.js') }}" ></script>
</body>
</html>
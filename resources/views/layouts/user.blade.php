<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <link rel="stylesheet" href="{{ asset('css/bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material-dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material-dashboard.min.css') }}">
    <script src="https://kit.fontawesome.com/42d5adcbca.js"></script>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <script src="{{ asset('js/bootstrap-notify.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/chartjs.min.js') }}"></script>
    <script src="{{ asset('js/material-dashboard.js') }}"></script>
    <script src="{{ asset('js/material-dashboard.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/smooth-scrollbar.min,.js') }}"></script>
</head>

<body>



    <div class="g-sidenav-show  bg-gray-200">
        @include('layouts.include.sidebar')
        <div class="main-content position-relative max-height-vh-100 h-100 border-radius-lg mt-4">
            @include('layouts.include.navbar')
            <div class="content">
                @yield('content')
            </div>
            @include('layouts.include.footer')
        </div>
    </div>




</body>

</html>

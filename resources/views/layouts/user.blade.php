<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
    .sidebar {
        width: 200px;
        height: 100vh;
        position: fixed;
        top: 0;
        overflow-y: auto;
    }

    .main {
        margin-left: 200px;
        margin-right: 200px;
    }

    .sidebar a {
        display: block;
        padding: 10px;
        text-align: center;
        margin-bottom: 10px;
    }

    .navbar {
        height: 50px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .right-sidebar {
        width: 200px;
        height: 100vh;
        position: fixed;
        top: 0;
        right: 0;
        overflow-y: auto;
    }
</style>

<body>



    <div>
        @include('layouts.include.leftSidebar')
        @include('layouts.include.navbar')
        <div class="main mt-5 p-4 bg-danger rounded">
            @include('user.dashboard')
        </div>
        <div class="right-sidebar" style="margin-top: 80px">
            @include('layouts.include.rightSidebar')
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script script src="https://kit.fontawesome.com/42d5adcbca.js"></script>`
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"></script>


</body>

</html>

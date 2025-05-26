<!DOCTYPE html>
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="{{ asset('images/veLogo.png') }}" />
    <title>@yield('title')</title>

    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('assets/lib/jquery-3.6.1.min.js') }}"></script>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/lib/Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Datatables-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/DataTables/datatables.min.css') }}" />
    <script type="text/javascript" src="{{ asset('assets/lib/DataTables/datatables.min.js') }}"></script>


    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>


    <!-- Animate CSS -->
    <link href="{{ asset('assets/lib/animate.min.css') }}" rel="stylesheet">


    <!-- Font Awesome JS -->
    <link href="{{ asset('assets/lib/fontawesome/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/fontawesome/css/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/fontawesome/css/solid.css') }}" rel="stylesheet">

    <!-- Our CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

</head>

<body class="scrolly">
    <div class="loader-page"></div>

    <div class="wrapper">
        <!-- Sidebar  -->
        @include('components.sidebar')

        <div id="content">
            <!-- Menú del top -->
            @include('components.navbar')

            <!-- Inicio contenido -->
            <div class="row m-2">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/lib/Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/hbMenu.js') }}"></script>
    <script src="{{ asset('js/spinner.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>

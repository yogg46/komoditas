<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ config('title_nav') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('displayFileBe/' . config('logo_nav')) }}" rel="icon">

    <!-- Google Fonts or Local Font-->
    {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}
    <link href="{{ asset('support/font/font.css') }}" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('be/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('be/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('be/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('be/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('be/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('be/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('be/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('be/assets/css/style.css') }}" rel="stylesheet">
    <!-- carousal CSS Files-->
    <link rel="stylesheet" type="text/css" href="{{ asset('support/prism/prism.css') }}">

    <!-- sweetalert CSS Files-->
    <link rel="stylesheet" href="{{ asset('support/sweetalert/dist/sweetalert2.min.css') }}">
    <!-- select2 CSS Files-->
    <link rel="stylesheet" type="text/css" href="{{ asset('support/select2/dist/css/select2.min.css') }}">

    <style>
        .bg-sidebar {
            background-image: url(../support/img/bg-login.png),linear-gradient(180deg,#0aa7af, #0e5662);
            background-size:cover;
        }
        .bg-footer {
            background-image: url(../support/img/bg-login.png),linear-gradient(180deg,#d7f0f0, #d7f0f0);
            background-size:cover;
        }
    </style>

    @livewireStyles
    @stack('style')

</head>

<body>
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            @include('layouts.be.left-logo')
        </div>

        <div class="search-bar">
            {{-- @include('layouts.be.search') --}}
        </div>

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item d-block d-lg-none"></li>
                <li class="nav-item dropdown">
                    @include('layouts.be.notification')
                </li>
                <li class="nav-item dropdown pe-3">
                    @include('layouts.be.profile')
                </li>
            </ul>
        </nav>
    </header>

    <aside id="sidebar" class="sidebar bg-sidebar">
        @include('layouts.be.left-menu')
    </aside>

    <main id="main" class="main" style="background: #f1fcfc">
        <section class="section">
            {{ $slot }}
        </section>
    </main>

    <footer id="footer" class="footer bg-footer">
        @include('layouts.be.footer')
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('be/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('be/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('be/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('be/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('be/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>

    <!-- Template Main JS Files -->
    <script src="{{ asset('be/assets/js/main.js') }}"></script>
    <!-- Moment & Material Datepicker JS Files-->
    <script src="{{ asset('support/moment/moment.js') }}"></script>
    <!-- carousal JS Files-->
    <script src="{{ asset('support/prism/prism.js') }}"></script>

    <!-- sweetalert JS Files -->
    <script type="text/javascript" src="{{ asset('support/sweetalert/js/jquery_3.3.1_jquery.min.js') }}"></script>
    <script src="{{ asset('support/sweetalert/dist/sweetalert2.all.min.js') }}"></script>
    <!-- select2 JS Files-->
    <script src="{{ asset('support/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('support/dist/js/pages/forms/select2/select2.init.js') }}"></script>

    @livewireScripts
    @stack('script')

</body>

</html>

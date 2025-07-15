<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>404 - Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('displayFileFe/' . config('logo_nav')) }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="" crossorigin>
    <link rel="stylesheet" type="text/css" href="{{ asset('404/css2.css') }}">
    {{-- <link href="404/css2.css" rel="stylesheet"> --}}

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('404/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('404/bootstrap-icons.css') }}">
    {{-- <link href="404/all.min.css" rel="stylesheet">
    <link href="404/bootstrap-icons.css" rel="stylesheet"> --}}

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('404/bootstrap.css') }}">
    {{-- <link href="404/bootstrap.css" rel="stylesheet"> --}}

    <!-- Template Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('404/style.css') }}">
    {{-- <link href="404/style.css" rel="stylesheet"> --}}
</head>
    <body style="height:100% !important;" class="background-404">
       {{ $slot }}

    <!-- JavaScript fe/assets/Libraries -->
    <script src="{{ asset('"404/jquery-3.4.1.min.js')}}"></script>
    {{-- <script src="404/jquery-3.4.1.min.js"></script> --}}
    {{-- <script src="404/bootstrap.bundle.min.js"></script> --}}

    <!-- Template Javascript -->
    {{-- <script src="404/main.js"></script> --}}
</body>

</html>

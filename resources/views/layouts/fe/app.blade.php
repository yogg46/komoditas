<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('title_nav') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="{{ config('akronim') }}">
    <meta content="" name="{{ config('deskripsi') }}">

    <!-- Favicon -->
    <link href="{{ asset('displayFileFe/' . config('logo_nav')) }}" rel="icon">

    <!-- Google Fonts or Local Font-->
    {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}
    <link href="{{ asset('support/font/font.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('fe/assets/css/font.css') }}" rel="stylesheet"> --}}

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="{{ asset('fe/assets/lib/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('fe/assets/lib/fontawesome/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('fe/assets/lib/fontawesome/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('fe/assets/lib/fontawesome/css/solid.css') }}">
    <link rel="stylesheet" href="{{ asset('fe/assets/lib/fontawesome/css/v5-font-face.css') }}">
    <link href="{{ asset('fe/assets/css/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('fe/assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fe/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fe/assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- select2 CSS Files-->
    <link rel="stylesheet" type="text/css" href="{{ asset('support/select2/dist/css/select2.min.css') }}">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('fe/assets/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('fe/assets/css/style.css') }}" rel="stylesheet">

    @livewireStyles
    @stack('style')
</head>

<body>
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>

    <div class="container-fluid bg-dark text-light px-0 py-2">
        @livewire('fe.part.header.sosmed.sosmed')
    </div>
    @livewire('fe.part.header.menu.menu')
    {{ $slot }}
    @livewire('fe.part.footer.footer')
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="fas fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('fe/assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('fe/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('fe/assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('fe/assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('fe/assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('fe/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('fe/assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('fe/assets/lib/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('fe/assets/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('fe/assets/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('fe/assets/js/main.js') }}"></script>
    <!-- select2 JS Files-->
    <script src="{{ asset('support/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('support/dist/js/pages/forms/select2/select2.init.js') }}"></script>

    <script src="{{ asset('support/animate/lottie-player.js')}}"></script>

    <script>
        (function(d){
        var s = d.createElement("script");
        s.setAttribute("data-account", "rHWz88tYR2");
        s.setAttribute("src", "https://cdn.userway.org/widget.js");
        (d.body || d.head).appendChild(s);
        })(document)
    </script>
    <noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>

    <script src="https://code.responsivevoice.org/responsivevoice.js?key=WUNNbqX0"></script>

    @livewireScripts
    @stack('script')
</body>

</html>

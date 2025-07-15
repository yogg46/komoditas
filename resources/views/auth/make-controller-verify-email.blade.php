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
    <link href="{{ asset('displayFileFe/' . config('logo_nav')) }}" rel="icon">
    <!-- Google Fonts or Local Font-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->
    <link href="{{ asset('support/font/font.css') }}" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('be/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('be/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('be/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('be/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('be/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('be/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('be/assets/css/style.css') }}" rel="stylesheet">
    <!-- sweetalert CSS Files-->
    <link rel="stylesheet" href="{{ asset('support/sweetalert/dist/sweetalert2.min.css') }}">

    <style>
        .bg-verifikasi {
            background-image: url({{ asset('support/img/bg-login.png') }}),linear-gradient(180deg,#0aa7af, #0e5662);
        }
    </style>

</head>

<body class="bg-verifikasi">
    <main>
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('support/img/linkreset.png') }}" class="img-fluid rounded-start" alt="Picture" style="width:250px">
                                </div>
                                <div class="col-md-8 col mb-3">
                                    <div class="card-body">
                                        <span style="font-size: 14px">
                                            <h5 class="card-title"> <i class="bi bi-info-circle"></i> Berhasil Membuat Akun</h5>
                                            <p class="card-text">Silahkan melakukan verifikasi melalui link yang terkirim di e-Mail anda.</p>
                                        </span>
                                    </div>
                                    <form method="POST" action="{{ route('verification.send') }}" class="text-center">
                                        @csrf
                                        <button type="submit" class="btn btn-success" onclick="kirimUlang()"><i class="bi bi-cursor"></i>&nbsp;Kirim ulang e-Mail</button>
                                        <a class="btn btn-dark" href="{{ route('login') }}"><i class="bi bi-arrow-counterclockwise"></i>&nbsp;Back to Login</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="credits">
                    <span style="color: white">Designed by</span> <span style="color: yellow">BootstrapMade</span>
                </div>
            </section>
        </div>
    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('be/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('be/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('be/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('be/assets/js/main.js') }}"></script>
    <!-- Captcha JSS Files & sweetalert JS Files -->
    <script type="text/javascript" src="{{ asset('support/jquery-captcha/js/jquery_3.3.1_jquery.min.js') }}"></script>
    <script src="{{ asset('support/sweetalert/dist/sweetalert2.all.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        })

        function kirimUlang() {
            var showLoading = function() {
                Swal.fire({
                    icon: 'info',
                    title: '<span style=font-size:20px>' + 'Proses Kirim ulang link' + '</span>',
                    text: 'Mohon Tunggu ...',
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    timer: 10000,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                        const b = Swal.getHtmlContainer().querySelector('b')
                        timerInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft()
                        }, 100)
                    },
                    willClose: () => {
                        clearInterval(timerInterval)
                    }
                });
            }
            showLoading();
        }

    </script>
</body>

</html>

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
        .bg-reset {
            background-image: url({{ asset('support/img/bg-login.png') }}),linear-gradient(180deg,#0aa7af, #0e5662);
        }
    </style>

</head>

<body class="bg-reset">
    <main>
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('support/img/resetpas.png') }}" class="img-fluid rounded-start" alt="Picture" style="padding-top: 40px; width:500px">
                                    {{-- <img src="{{ asset('support/img/verifikasi.png') }}" class="img-fluid rounded-start" alt="Picture" style="width:150px"> --}}
                                </div>
                                <div class="col-md-8 col mb-3">
                                    <div class="card-body">
                                        <span style="font-size: 14px">
                                            <h5 class="card-title"> <i class="bi bi-info-circle"></i> Reset Password</h5>
                                            <p class="card-text">Silahkan masukkan e-Mail anda.</p>
                                        </span>
                                        <br>
                                        <form class="row g-3 needs-validation" novalidate action="{{ route('password.update') }}" method="post" enctype="multipart/form-data">
                                            @csrf

                                            <input type="hidden" name="token" value="{{ request()->route('token') }}">

                                            <div class="row mb-3">
                                                <label for="email" class="col-sm-3 col-form-label">e-Mail</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="email" id="email" class="form-control" autocomplete="off" value="{{ request()->email ?? old('email') }}" readonly>
                                                    @error('email')
                                                        <span style="color: #e25a67;; font-size:14px">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="password" class="col-sm-3 col-form-label">Password</label>
                                                <div class="col-sm-6">
                                                    <div class="input-group has-validation">
                                                        <input type="password" name="password" id="password" class="form-control" autocomplete="off">
                                                        <span class="input-group-text" id="inputGroupPrepend" onclick="password_show_hide()">
                                                            <i class="bi-eye" id="show_eye"></i>
                                                            <i class="bi-eye-slash d-none" id="hide_eye"></i>
                                                        </span>
                                                    </div>
                                                    @error('password')
                                                        <span style="color: #e25a67;; font-size:14px">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="password-confirm" class="col-sm-3 col-form-label">Konfirmasi Password</label>
                                                <div class="col-sm-6">
                                                    <div class="input-group has-validation">
                                                        <input type="password" name="password_confirmation" id="password-confirm" class="form-control" autocomplete="off">
                                                        <span class="input-group-text" id="inputGroupPrepend" onclick="password_show_hide_confirm()">
                                                            <i class="bi-eye" id="show_eye_x"></i>
                                                            <i class="bi-eye-slash d-none" id="hide_eye_x"></i>
                                                        </span>
                                                    </div>
                                                    @error('password_confirmation')
                                                        <span style="color: #e25a67;; font-size:14px">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <button type="submit" class="btn btn-success" onclick="simpanPassword()"><i class="bi bi-bootstrap-reboot"></i>&nbsp;Reset Password</button>
                                            </div>
                                        </form>
                                    </div>
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

        function simpanPassword() {
            Swal.fire({
                    icon: 'info',
                    title: '<span style=font-size:20px>' + 'Proses Reset Password' + '</span>',
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
    </script>

    <script>
        function password_show_hide() {
        var x = document.getElementById("password");
        var show_eye = document.getElementById("show_eye");
        var hide_eye = document.getElementById("hide_eye");
        hide_eye.classList.remove("d-none");
        if (x.type === "password") {
            x.type = "text";
            show_eye.style.display = "none";
            hide_eye.style.display = "block";
        } else {
            x.type = "password";
            show_eye.style.display = "block";
            hide_eye.style.display = "none";
        }
    }

    function password_show_hide_confirm() {
        var xx = document.getElementById("password-confirm");
        var show_eye_x = document.getElementById("show_eye_x");
        var hide_eye_x = document.getElementById("hide_eye_x");
        hide_eye_x.classList.remove("d-none");
        if (xx.type === "password") {
            xx.type = "text";
            show_eye_x.style.display = "none";
            hide_eye_x.style.display = "block";
        } else {
            xx.type = "password";
            show_eye_x.style.display = "block";
            hide_eye_x.style.display = "none";
        }
    }
    </script>
</body>

</html>

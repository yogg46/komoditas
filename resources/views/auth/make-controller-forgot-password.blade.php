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
            background-image: url(support/img/bg-login.png),linear-gradient(180deg,#0aa7af, #0e5662);
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
                                    <img src="{{ asset('support/img/linkreset.png') }}" class="img-fluid rounded-start" alt="Picture" style="padding-top: 20px; width:500px">
                                </div>
                                <div class="col-md-8 col mb-3">
                                    <div class="card-body">
                                        <span style="font-size: 14px">
                                            <h5 class="card-title"> <i class="bi bi-info-circle"></i> Reset Password</h5>
                                            <p class="card-text" style="font-size: 16px">Silahkan masukkan e-Mail anda.</p>
                                        </span>
                                        <br>

                                        <form action="{{ route('password.email') }}" method="post" onSubmit="validasi()" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
                                            @csrf

                                            <div class="row mb-3">
                                                <label for="email" class="col-sm-2 col-form-label">e-Mail</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="email" id="email" class="form-control" autocomplete="off" value="{{ old('email') }}" placeholder="Masukkan e-Mail" required>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="captcha" class="col-sm-2 col-form-label">Captcha</label>
                                                <div class="col-md-3">
                                                    <canvas id="canvas"></canvas>
                                                    <input type="hidden" name="captchaReload" id="captchaReload" class="form-control" readonly>
                                                </div>
                                                <div class="col-md-2">
                                                    <button id="reloadCaptcha" type="button" class="btn btn-dark">
                                                        <i class="bi bi-arrow-clockwise"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-2"></div>
                                                <div class="col-md-4">
                                                    <div class="input-group has-validation">
                                                        <input type="text" name="captcha" id="captcha" class="form-control" autocomplete="off" placeholder="Masukkan Captcha" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>
                                            <div class="col-md-8">
                                                <button type="submit" class="btn btn-success mb-1" style="width:150px"><i class="bi bi-cursor"></i>&nbsp;Kirim e-Mail</button>
                                                <a class="btn btn-dark mb-1" href="{{ route('login') }}" style="width:150px"><i class="bi bi-arrow-counterclockwise"></i>&nbsp;To Login</a>
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
       <script type="text/javascript" src="{{ asset('support/jquery-captcha/js/jquery-captcha.min.js') }}"></script>
       <script src="{{ asset('support/sweetalert/dist/sweetalert2.all.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            const captcha = new Captcha($('#canvas'), {
                length: 4,
                width: 160,
                height: 50,
                font: 'bold 23px Arial',
                resourceType: 'aA0',
                resourceExtra: [],
                clickRefresh: false,
                autoRefresh: true,
                caseSensitive: true
            });
            document.getElementById("captchaReload").value = captcha.getCode();

            $('#reloadCaptcha').on('click', function() {
                captcha.refresh();
                document.getElementById("captchaReload").value = captcha.getCode();
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        })

        function validasi() {
            let email = document.getElementById("email").value;
            let captcha = document.getElementById("captcha").value;
            let captchaReload = document.getElementById("captchaReload").value;

            let atps=email.indexOf("@");
            let dots=email.lastIndexOf(".");

            if (email == "") {
                Swal.fire({
                    icon: 'info',
                    title: '<span style=font-size:20px>' + 'e-Mail belum diisi' + '</span>',
                    text: 'Silahkan isi terlebih dahulu',
                    showConfirmButton: true,
                    allowOutsideClick: false
                });
                return false;
            }else{

                if (atps < 1 || dots < atps + 2 || dots+2 >= email.length) {
                    Swal.fire({
                            icon: 'warning',
                            title: '<span style=font-size:20px>' + 'Alamat e-Mail tidak valid !' + '</span>',
                            text: 'Silahkan cek terlebih dahulu',
                            showConfirmButton: true,
                            allowOutsideClick: false
                    });
                    return false;
                } else {
                    if (captcha == "") {
                        Swal.fire({
                            icon: 'warning',
                            title: '<span style=font-size:20px>' + 'Captcha belum diisi !' + '</span>',
                            text: 'Silahkan isi terlebih dahulu',
                            showConfirmButton: true,
                            allowOutsideClick: false
                        });
                        return false;
                    }else{
                        if (captcha != captchaReload) {
                            Swal.fire({
                                icon: 'error',
                                title: '<span style=font-size:20px>' + 'Captcha tidak sesuai !' + '</span>',
                                text: 'Silahkan cek terlebih dahulu',
                                showConfirmButton: true,
                                allowOutsideClick: false
                            });
                            event.preventDefault();
                        }else{
                            Swal.fire({
                                icon: 'info',
                                title: '<span style=font-size:20px>' + 'Proses Kirim e-Mail' + '</span>',
                                text: 'Mohon Tunggu Sampai Pesan Ini Hilang lalu Cek e-Mail Anda',
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
                    }
                }
            }
        }
    </script>
</body>

</html>

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

    <style>
        .bg-daftar {
            background-image: url(support/img/bg-login.png),linear-gradient(180deg,#0aa7af, #0e5662);
            background-size:cover;
        }
    </style>

</head>

<body class="bg-daftar">
    <main>
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-md-12 d-flex flex-column align-items-center justify-content-center">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                        <p class="text-center small">Enter your personal details to create account
                                        </p>
                                    </div>
                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                        <p>Ketentuan pembuatan password akun</p>
                                        <ul>
                                            <li>Panjang minimal password adalah <b>8 karakter</b>.</li>
                                            <li>Password minimal harus mengandung setidaknya <b>satu angka, satu huruf kecil, satu huruf besar, satu karakter khusus (@%!$#)</b>.</li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <form action="{{ route('register') }}" method="post" class="row g-3" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row mb-3">
                                                        <label for="username" class="col-sm-4 col-form-label">Username</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="username" id="username" class="form-control" autocomplete="off" value="{{ old('username') }}">
                                                            @error('username')
                                                                <span style="color: #e25a67;; font-size:14px">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="password" class="col-sm-4 col-form-label">Password</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group">
                                                                <input type="password" name="password" id="password" class="form-control" autocomplete="off">
                                                                <span class="input-group-text" id="inputGroupPrepend" onclick="password_show_hide();">
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
                                                        <label for="password_confirmation" class="col-sm-4 col-form-label">Konfirmasi Password</label>
                                                        <div class="col-sm-8">
                                                            <div class="input-group">
                                                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" autocomplete="off">
                                                                    <span class="input-group-text" id="inputGroupPrepend" onclick="password_show_hide_confirm();">
                                                                        <i class="bi-eye" id="show_eye_x"></i>
                                                                        <i class="bi-eye-slash d-none" id="hide_eye_x"></i>
                                                                    </span>
                                                            </div>
                                                            @error('password_confirmation')
                                                                <span style="color: #e25a67;; font-size:14px">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="row mb-3">
                                                        <label for="name" class="col-sm-4 col-form-label">Nama</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="name" id="name" class="form-control" autocomplete="off" value="{{ old('name') }}">
                                                            @error('name')
                                                                <span style="color: #e25a67;; font-size:14px">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="email" id="email" class="form-control" autocomplete="off" value="{{ old('email') }}">
                                                            @error('email')
                                                                <span style="color: #e25a67;; font-size:14px">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12" style="text-align: center">
                                                <button class="btn btn-success w-10" type="submit"><i class="bi bi-person-circle"></i>&nbsp;Create Account</button>
                                            </div>
                                            <div class="col-12">
                                                <h6 class="mb-0">Already have an account ? <a href="{{ route('login') }}">Log in</a></h6>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="credits">
                                <span style="color: white">Designed by</span> <span style="color: yellow">BootstrapMade</span>
                            </div>
                        </div>
                    </div>
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
        var xx = document.getElementById("password_confirmation");
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

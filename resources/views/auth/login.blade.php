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
        .bg-login {
            background-image: url(support/img/bg-login.png), linear-gradient(180deg, #0aa7af, #0e5662);
            background-size: cover;
        }
    </style>

    <!-- sweetalert CSS Files-->
    <link rel="stylesheet" href="{{ asset('support/sweetalert/dist/sweetalert2.min.css') }}">

    {{-- @livewireStyles
    @stack('style') --}}

</head>

<body class="bg-login">
    <main>
        <div class="container">
            {{-- @livewire('auth.login') --}}
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body pt-3">
                                <div class="row">

                                    <div class="col-xl-7"
                                        style="padding-top: 50px; padding-bottom: 50px; padding-left:20px">
                                        <span style="color:rgb(20, 5, 55)">
                                            {!! config('deskripsi') !!}
                                        </span>
                                    </div>

                                    <div class="col-xl-1"></div>

                                    <div class="col-xl-4">
                                        <h5 class="card-title text-center pb-0 fs-6">
                                            <img src="{{ asset('displayFileFe/' . config('logo_page_login')) }}"
                                                alt="no-image" style="width:90px" />
                                            <br>{{ config('unit') }}
                                            <br>{{ config('sub_unit') }}
                                        </h5>
                                        <p class="text-center small">{{ config('name_apps') }}</p>

                                        <form action="{{ route('login.post') }}" method="post" class="row g-3 needs-validation" novalidate>
                                            @csrf
                                            <div class="col-12">
                                                <label for="username" class="form-label">Username</label>
                                                <div class="input-group">
                                                    <div class="input-group has-validation">
                                                        <input name="username" id="username" type="text"
                                                            class="form-control" value="{{ old('username') }}"
                                                            autocomplete="off" placeholder="Masukkan Username" required>
                                                        <span class="input-group-text">
                                                            <i class="bi bi-person"></i>
                                                        </span>
                                                        <div class="invalid-feedback">Masukkan Username</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="password" class="form-label">Password</label>
                                                <div class="input-group">
                                                    <div class="input-group has-validation">
                                                        <input name="password" id="password" type="password"
                                                            class="form-control" autocomplete="off"
                                                            placeholder="Masukkan Password" required>
                                                        <span class="input-group-text" onclick="password_show_hide()">
                                                            <i class="bi bi-eye" id="show_eye"></i>
                                                            <i class="bi bi-eye-slash d-none" id="hide_eye"></i>
                                                        </span>
                                                        <div class="invalid-feedback">Masukkan Password</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-12" style="text-align: center">Masukkan Captcha</div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-5" style="text-align: center">
                                                    <canvas id="canvas"></canvas>
                                                    <input type="hidden" name="captchaReload" id="captchaReload"
                                                        class="form-control" readonly>
                                                </div>
                                                <div class="col-md-7 mt-2">
                                                    <div class="input-group has-validation">
                                                        <input name="captcha" id="captcha" type="text"
                                                            class="form-control" autocomplete="off"
                                                            placeholder="Captcha" required>
                                                        <button id="reloadCaptcha" type="button" class="btn btn-danger">
                                                            <i class="bi bi-arrow-clockwise"></i>
                                                        </button>
                                                        <div class="invalid-feedback">Masukkan Captcha</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-success"><i
                                                        class="bi bi-arrow-bar-right"></i>&nbsp;Masuk</button>
                                            </div>
                                            {{--
                                            <div class="row mt-3">
                                                <h6 class="mb-1">Belum punya akun ? <a href="{{ route('daftar') }}">Buat
                                                        Akun</a></h6>
                                                <h6 class="mb-1">Lupa Password ? <a
                                                        href="{{ route('password.request') }}">Lupa Password</a></h6>
                                            </div>
                                            --}}
                                        </form>
                                    </div>
                                </div>
                                <div class=" row text-center">
                                    <lottie-player src="{{ asset('support/animate/solo.json') }}"
                                        background="transparent" speed="1" loop autoplay></lottie-player>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('be/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('be/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('be/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('be/assets/js/main.js') }}"></script>
    <!-- Template Animate JS File -->
    <script src="{{ asset('support/animate/lottie-player.js')}}"></script>

    <!-- Captcha JSS Files & sweetalert JS Files -->
    <script type="text/javascript" src="{{ asset('support/jquery-captcha/js/jquery_3.3.1_jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('support/jquery-captcha/js/jquery-captcha.min.js') }}"></script>
    <script src="{{ asset('support/sweetalert/dist/sweetalert2.all.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            const captcha = new Captcha($('#canvas'), {
                length: 5,
                width: 160,
                height: 70,
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

            @if(Session::has('msgGagalLogin'))
                //
                Swal.fire({
                    icon: 'warning',
                    title: '{{ Session::get('msgGagalLogin') }}',
                    text: 'User/Password/Captcha Tidak Sesuai',
                    showConfirmButton: true,
                    allowOutsideClick: false
                    // timer: 3000
                });
            @endif

            @if(Session::has('notifLogout'))
                //
                Swal.fire({
                    icon: 'success',
                    title: '{{ Session::get('notifLogout') }}',
                    text: 'Terima Kasih',
                    showConfirmButton: true,
                    allowOutsideClick: false
                    // timer: 3000
                });
            @endif

            @if(Session::has('notifSession'))
                //
                Swal.fire({
                    icon: 'warning',
                    title: '{{ Session::get('notifSession') }}',
                    text: 'Silahkan Login Kembali',
                    showConfirmButton: true,
                    allowOutsideClick: false
                    // timer: 3000
                });
            @endif

            @if(Session::has('status'))
                //
                Swal.fire({
                    icon: 'info',
                    title: '<span style=font-size:20px>' + 'Kata sandi berhasil direset/dirubah !' + '</span>',
                    text: 'Silahkan Login dengan password baru',
                    showConfirmButton: true,
                    allowOutsideClick: false
                    // timer: 3000
                });
            @endif
        });

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
    </script>

    {{-- @livewireScripts
    @stack('script') --}}

</body>

</html>

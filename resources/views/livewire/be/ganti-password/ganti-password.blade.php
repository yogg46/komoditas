<div>
    <div class="pagetitle">
        <h1>Ganti Password</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Ganti Password</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title card-header">Ganti Password</h5>
                    <p>
                    <form class="form-horizontal" method="post" wire:submit.prevent="SavePassword">
                        @csrf
                        <div class="row">
                            <div class="row mb-3">
                                <label for="password" class="col-sm-3 col-form-label">Password Baru
                                    <span style="color: red">*</span>
                                </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="password" name="password" id="password" wire:model.defer="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            autocomplete="off">
                                        <div class="input-group-append">
                                            <span class="input-group-text" onclick="password_show_hide();">
                                                <i class="bi-eye-fill" id="show_eye"></i>
                                                <i class="bi-eye-slash-fill d-none" id="hide_eye"></i>
                                            </span>
                                        </div>
                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password_confirmation" class="col-sm-3 col-form-label">Konfirmasi Password Baru
                                    <span style="color: red">*</span>
                                </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="password" name="password_confirmation" id="password_confirmation"
                                            wire:model.defer="password_confirmation"
                                            class="form-control @error('password_confirmation') is-invalid @enderror"
                                            autocomplete="off">
                                        <div class="input-group-append">
                                            <span class="input-group-text" onclick="password_show_hide_confirm();">
                                                <i class="bi-eye-fill" id="show_eye_x"></i>
                                                <i class="bi-eye-slash-fill d-none" id="hide_eye_x"></i>
                                            </span>
                                        </div>
                                        @error('password_confirmation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer" style="text-align:left">
                            <div wire:loading.remove wire:target="SavePassword">
                                <button type="submit" class="btn btn-success"><i
                                        class="bi bi-save"></i>&nbsp;Simpan</button>
                            </div>
                            <div wire:loading wire:target="SavePassword">
                                <button type="button" class="btn btn-success" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status"
                                        aria-hidden="true"></span>
                                    Progres...
                                </button>
                            </div>
                        </div>
                    </form>
                    </p>
                </div>
            </div>
        </div>
    </div>

    @push('script')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            window.addEventListener('msgSuksesSimpan', function(){
                Swal.fire({
                    icon: 'success',
                    title: 'Proses Berhasil',
                    text: 'Data Berhasil Disimpan',
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    timer: 2000
                });
            });

            window.addEventListener('msgError', function(){
                Swal.fire({
                    icon: 'error',
                    title: 'Proses Gagal',
                    text: 'Data Gagal Diproses',
                    showConfirmButton: true,
                    allowOutsideClick: false,
                    // timer: 2000
                });
            });

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
    @endpush

</div>

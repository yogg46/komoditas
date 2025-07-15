<div>
    <div class="pagetitle">
        <h1>Profile Pengguna</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Profile Pengguna</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title card-header">Profile Pengguna</h5>
                    <form class="form-horizontal" method="post" wire:submit.prevent="SaveProfile">
                        @csrf
                        <div class="row mt-3">
                            <div class="row mb-3">
                                <label for="nama" class="col-sm-2 col-form-label">Nama <span style="color: red">*</span>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" id="nama" wire:model.defer="nama"
                                        class="form-control @error('nama') is-invalid @enderror" autocomplete="off">
                                    @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">email <span
                                        style="color: red">*</span>
                                </label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" id="email" wire:model.defer="email"
                                        class="form-control @error('email') is-invalid @enderror" autocomplete="off">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="footer" style="text-align:left">
                            <div wire:loading.remove wire:target="SaveProfile">
                                <button type="submit" class="btn btn-success"><i
                                        class="bi bi-save"></i>&nbsp;Simpan</button>
                            </div>
                            <div wire:loading wire:target="SaveProfile">
                                <button type="button" class="btn btn-success" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status"
                                        aria-hidden="true"></span>
                                    Progres...
                                </button>
                            </div>
                        </div>
                    </form>
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

            window.addEventListener('msgCekEmail', function(){
                Swal.fire({
                    icon: 'info',
                    title: 'e-Mail Sudah Digunakan',
                    text: 'Proses Cek e-Mail',
                    showConfirmButton: true,
                    allowOutsideClick: false,
                    // timer: 2000
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
    </script>
    @endpush
</div>

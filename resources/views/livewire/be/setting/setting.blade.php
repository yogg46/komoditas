<div>
    @push('style')
    <!-- summernote CSS Files-->
    <link href="{{ asset('support/summernote/summernote-lite.min.css') }}" rel="stylesheet">
    @endpush

    <div class="pagetitle">
        <h1>Setting</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Setting</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title card-header">Form Setting</h5>
                    <p>
                    <form class="form-horizontal" method="post" wire:submit.prevent="SaveSetting" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row mb-3">
                                    <label for="title_nav" class="col-sm-3 col-form-label">Judul Navigasi <span style="color: red">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title_nav" id="title_nav" wire:model="title_nav" class="form-control" autocomplete="off">
                                        @error('title_nav')
                                            <span style="color: #e25a67;; font-size:14px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="unit" class="col-sm-3 col-form-label">Pemerintah Kota</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="unit" id="unit" wire:model="unit" class="form-control" autocomplete="off">
                                        @error('unit')
                                            <span style="color: #e25a67;; font-size:14px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="sub_unit" class="col-sm-3 col-form-label">Perangkat Daerah</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="sub_unit" id="sub_unit" wire:model="sub_unit" class="form-control" autocomplete="off">
                                        @error('sub_unit')
                                            <span style="color: #e25a67;; font-size:14px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="appweb" class="col-sm-3 col-form-label">Nama Aplikasi/Website <span style="color: red">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="appweb" id="appweb" wire:model="appweb" class="form-control" autocomplete="off">
                                        @error('appweb')
                                            <span style="color: #e25a67;; font-size:14px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="akronim" class="col-sm-3 col-form-label">Akronim</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="akronim" id="akronim" wire:model="akronim" class="form-control" autocomplete="off">
                                        @error('akronim')
                                            <span style="color: #e25a67;; font-size:14px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div wire:ignore class="row mb-3">
                                    <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                                    <div class="col-sm-9">
                                        <textarea name="deskripsi" id="deskripsi" wire:model="deskripsi" class="form-control" autocomplete="off" style="resize:none" rows="8">
                                        </textarea>
                                        @error('deskripsi')
                                            <span style="color: #e25a67;; font-size:14px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div wire:ignore class="row mb-3">
                                    <label for="alamat" class="col-sm-3 col-form-label">Jam Layanan</label>
                                    <div class="col-sm-9">
                                        <textarea name="jam_layanan" id="jam_layanan" wire:model="jam_layanan" class="form-control" style="height: 80px; max-height:100px" autocomplete="off"></textarea>
                                        @error('jam_layanan')
                                            <span style="color: #e25a67;; font-size:14px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="row mb-3">
                                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <textarea name="alamat" id="alamat" wire:model="alamat" class="form-control" style="height: 80px; max-height:100px" autocomplete="off"></textarea>
                                        @error('alamat')
                                            <span style="color: #e25a67;; font-size:14px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="telp" class="col-sm-3 col-form-label">Telp</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="telp" id="telp" wire:model="telp" class="form-control" autocomplete="off">
                                    </div>
                                </div>
                                {{-- <div class="row mb-3">
                                    <label for="instagram" class="col-sm-3 col-form-label">Instagram</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="instagram" id="instagram" wire:model="instagram"class="form-control" autocomplete="off" placeholder="https://instagram.com/namaakun">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="facebook" class="col-sm-3 col-form-label">Facebook</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="facebook" id="facebook" wire:model="facebook" class="form-control" autocomplete="off" placeholder="https://facebook.com/namaakun">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="twitter" class="col-sm-3 col-form-label">Twitter</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="twitter" id="twitter" wire:model="twitter" class="form-control" autocomplete="off" placeholder="https://twitter.com/namaakun">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="youtube" class="col-sm-3 col-form-label">Youtube</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="youtube" id="youtube" wire:model="youtube" class="form-control" autocomplete="off" placeholder="https://youtube.com/@namaakun">
                                    </div>
                                </div> --}}
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" id="email" wire:model="email" class="form-control" autocomplete="off">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="website" class="col-sm-3 col-form-label">Website</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="website" id="website" wire:model="website" class="form-control" autocomplete="off">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3 col-form-label">Logo Navbar <span style="color: red">*</span></div>
                                    <div class="col-sm-9">
                                        <input type="file" name="nav" id="nav{{ $navIter }}" wire:model="nav" class="form-control" accept="image/*" autocomplete="off">
                                        <span style="font-size: 11px">*) jpg, jpeg, png, Maksimal 2000 kb</span>
                                        <div wire:loading wire:target="nav">
                                            <small class="form-text text-muted">
                                                <div class="progress mt-1">
                                                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <em>Sedang Upload File...</em>
                                                    </div>
                                                </div>
                                            </small>
                                        </div>
                                        @error('nav')
                                            <span style="color: #e25a67;; font-size:14px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3 col-form-label">Logo Login <span style="color: red">*</span>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="file" name="logo" id="logo{{ $logoIter }}" wire:model="logo" class="form-control" accept="image/*" autocomplete="off">
                                        <span style="font-size: 11px">*) jpg, jpeg, png, Maksimal 2000 kb</span>
                                        <div wire:loading wire:target="logo">
                                            <small class="form-text text-muted">
                                                <div class="progress mt-1">
                                                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><em>Sedang Upload File...</em>
                                                    </div>
                                                </div>
                                            </small>
                                        </div>
                                        @error('logo')
                                            <span style="color: #e25a67;; font-size:14px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3 col-form-label">Logo Branding <span style="color: red">*</span>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="file" name="branding" id="branding{{ $brandingIter }}" wire:model="branding" class="form-control" accept="image/*" autocomplete="off">
                                        <span style="font-size: 11px">*) jpg, jpeg, png, Maksimal 2000 kb</span>
                                        <div wire:loading wire:target="branding">
                                            <small class="form-text text-muted">
                                                <div class="progress mt-1">
                                                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><em>Sedang Upload File...</em>
                                                    </div>
                                                </div>
                                            </small>
                                        </div>
                                        @error('branding')
                                            <span style="color: #e25a67;; font-size:14px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-6" style="text-align: right">
                                        <p style="font-size: 12px; font-style: italic">Logo Navbar Saat Ini :
                                            <img src="{{ asset('displayFileBe/' . $dataConfigView->logo_nav ?? '') }}" style="width:150px; height:auto; box-shadow: 1px 1px 0px 0px">
                                        </p>
                                    </div>
                                    <div class="col-sm-6" style="text-align: left">
                                        <p style="font-size: 12px; font-style: italic">Logo Login Saat Ini :
                                            <img src="{{ asset('displayFileBe/' . $dataConfigView->logo_page_login ?? '') }}" style="width:150px; height:auto; box-shadow: 1px 1px 0px 0px">
                                        </p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12" style="text-align: left">
                                        <p style="font-size: 12px; font-style: italic">Logo Branding Saat Ini :
                                            <img src="{{ asset('displayFileBe/' . $dataConfigView->logo_branding ?? '') }}" style="width:250px; height:auto; box-shadow: 1px 1px 0px 0px">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <div wire:loading.remove wire:target="SaveSetting">
                                <button type="submit" class="btn btn-success"><i class="bi bi-save"></i>&nbsp;Simpan</button>
                            </div>
                            <div wire:loading wire:target="SaveSetting">
                                <button type="button" class="btn btn-success" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
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
    <!-- summernote JS Files-->
    <script src="{{ asset('support/summernote/summernote-lite.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            window.addEventListener('msgSuksesSimpan', function(){
                //
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
                //
                Swal.fire({
                    icon: 'error',
                    title: 'Proses Gagal',
                    text: 'Data Gagal Disimpan',
                    showConfirmButton: true,
                    allowOutsideClick: false,
                    timer: 2000
                });
            });
        });

        $(document).ready(function() {
            $('#deskripsi').summernote({
                placeholder: 'Deskripsi Singkat',
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'italic', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    // ['view', ['fullscreen', 'codeview', 'help']],
                    ['fontname', ['fontname']],
                    ['height', ['height']]

                ],
                lineHeights: ['1.0', '1.5','2.0', '3.0', '4.0', '5.0'],
                tabsize: 2,
                height: 200,
                minHeight: 200,
                maxHeight: 300,
                width : 'auto',
                minWidth : 350,
                maxWidth : 'auto',
                focus: false,
                disableDragAndDrop: true,
                codeviewFilter: false,
                codeviewIframeFilter: true,
                callbacks: {
                    onChange: function(e) {
                        @this.set('deskripsi', e);
                    },
                }
            });
        });

        $(document).ready(function() {
            $('#jam_layanan').summernote({
                placeholder: 'Jam Layanan',
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'italic', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    // ['view', ['fullscreen', 'codeview', 'help']],
                    ['fontname', ['fontname']],
                    ['height', ['height']]

                ],
                lineHeights: ['1.0', '1.5','2.0', '3.0', '4.0', '5.0'],
                tabsize: 2,
                height: 200,
                minHeight: 200,
                maxHeight: 300,
                width : 'auto',
                minWidth : 350,
                maxWidth : 'auto',
                focus: false,
                disableDragAndDrop: true,
                codeviewFilter: false,
                codeviewIframeFilter: true,
                callbacks: {
                    onChange: function(e) {
                        @this.set('jam_layanan', e);
                    },
                }
            });
        });
    </script>

    <script>
        window.addEventListener('set-deskripsi', event => {
            $("#deskripsi").val(event.detail[0].deskripsi);
        });
        window.addEventListener('set-jam_layanan', event => {
            $("#jam_layanan").val(event.detail[0].jam_layanan);
        });
    </script>
    @endpush
</div>

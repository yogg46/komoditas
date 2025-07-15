<a href="" class="logo d-flex align-items-center">
    {{-- <img src="{{ Storage::url(config('logo_page_login')) }}" alt="img-left-menu"> --}}
    <img src="{{ asset('displayFileBe/' . config('logo_page_login')) }}" alt="img-left-menu">
    <span class="d-none d-lg-block">{{ Auth::user()->toRoleModels->role ?? "" }}</span>
</a>
<i class="bi bi-list toggle-sidebar-btn"></i>

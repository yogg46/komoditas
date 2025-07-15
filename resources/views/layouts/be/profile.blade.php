<a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
    {{-- <img src="{{ Storage::url(config('logo_page_login')) }}" alt="img-profile" class="rounded-circle"> --}}
    <img src="{{ asset('displayFileBe/' . config('logo_page_login')) }}" alt="img-profile" class="rounded-circle">
    <span class="d-none d-md-block dropdown-toggle ps-2" style="color: white">{{ Auth::user()->name ?? "" }}</span>
</a>

<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
    <li class="dropdown-header">
        <h6>{{ Auth::user()->toRoleModels->role ?? "" }}</h6>
    </li>
    <li>
        <hr class="dropdown-divider">
    </li>
    <li>
        <a class="dropdown-item d-flex align-items-center" href="{{ route('profile') }}">
            <i class="bi bi-person"></i>
            <span>Profile</span>
        </a>
    </li>
    <li>
        <hr class="dropdown-divider">
    </li>
    <li>
        <a class="dropdown-item d-flex align-items-center" href="{{ route('ganti-password') }}">
            <i class="bi bi-gear"></i>
            <span>Ganti Password</span>
        </a>
    </li>
    <li>
        <hr class="dropdown-divider">
    </li>
    <li>
        <form method="post" action="{{ route('logout') }}">
            @csrf
            <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                onclick="event.preventDefault(); this.closest('form').submit();" aria-expanded="false">
                <i class="bi bi-box-arrow-left"></i>
                <span>Logout</span>
            </a>
        </form>
    </li>
</ul>

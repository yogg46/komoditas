<ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
        <a class="nav-link {{ Route::current()->getName() == 'dashboard' ? '':'collapsed'}}"
            href="{{ route('dashboard') }}">
            <i class="bi bi-speedometer2"></i>
            <span>Dashboard</span>
        </a>
    </li>

    @if(Auth::user()->roles == 1)
    <li class="nav-item">
        <a class="nav-link {{ Route::current()->getName() == 'setting' ? '':'collapsed'}}"
            href="{{ route('setting') }}">
            <i class="bi bi-gear"></i>
            <span>Setting Web/App</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#data-master" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Data Master</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        {{-- <ul id="data-master" class="nav-content collapse
                    {{ Route::current()->getName() == 'kelembagaan' ? 'show':''}}
                    {{ Route::current()->getName() == 'kategori-instansi' ? 'show':''}}
                    {{ Route::current()->getName() == 'perangkat-daerah' ? 'show':''}}
                    {{ Route::current()->getName() == 'akun-internal' ? 'show':''}}
                    {{ Route::current()->getName() == 'akun-eksternal' ? 'show':''}}
                    " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('kelembagaan') }}"
                    class="{{ Route::current()->getName() == 'kelembagaan' ? 'active':''}}">
                    <i class="bi bi-layers-half"></i>Kelembagaan PPID
                </a>
            </li>
            <li>
                <a href="{{ route('kategori-instansi') }}"
                    class="{{ Route::current()->getName() == 'kategori-instansi' ? 'active':''}}">
                    <i class="bi bi-server"></i>Kategori Perangkat Daerah
                </a>
            </li>
            <li>
                <a href="{{ route('perangkat-daerah') }}"
                    class="{{ Route::current()->getName() == 'perangkat-daerah' ? 'active':''}}">
                    <i class="bi bi-house"></i>Perangkat Daerah/Instansi
                </a>
            </li>
            <li>
                <a href="{{ route('akun-internal') }}"
                    class="{{ Route::current()->getName() == 'akun-internal' ? 'active':''}}">
                    <i class="bi bi-people"></i>Akun Internal
                </a>
            </li>
            <li>
                <a href="{{ route('akun-eksternal') }}"
                    class="{{ Route::current()->getName() == 'akun-eksternal' ? 'active':''}}">
                    <i class="bi bi-people"></i>Akun Eksternal
                </a>
            </li>
        </ul> --}}
    </li>

    <li class="nav-item">

        <a class="nav-link collapsed" data-bs-target="#data-komoditas" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Data Komoditas</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>

        <ul id="data-komoditas" class="nav-content collapse
                    {{ Route::current()->getName() == 'komoditas' ? 'show':''}}
                    {{ Route::current()->getName() == 'stok-komoditas' ? 'show':''}}
                    {{ Route::current()->getName() == 'harga-komoditas' ? 'show':''}}
                    " data-bs-parent="#sidebar-nav">

            <li>
                <a href="{{ route('komoditas') }}"
                    class="{{ Route::current()->getName() == 'komoditas' ? 'active':''}}">
                    <i class="bi bi-egg-fried"></i>Komoditas
                </a>
            </li>

            <li>
                <a href="{{ route('harga-komoditas') }}"
                    class="{{ Route::current()->getName() == 'harga-komoditas' ? 'active':''}}">
                    <i class="bi bi-plus-square"></i>Harga Komoditas
                </a>
            </li>
            <li>
                <a href="{{ route('stok-komoditas') }}"
                    class="{{ Route::current()->getName() == 'stok-komoditas' ? 'active':''}}">
                    <i class="bi bi-egg-fried"></i>Stok Komoditas
                </a>
            </li>

        </ul>

    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#data-verifikasi" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Verifikasi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="data-verifikasi" class="nav-content collapse
                    {{ Route::current()->getName() == 'verifikasi-komoditas' ? 'show':''}}
                    {{ Route::current()->getName() == 'verifikasi-stok' ? 'show':''}}
                    " data-bs-parent="#sidebar-nav">

            <li>
                <a href="{{ route('verifikasi-komoditas') }}"
                    class="{{ Route::current()->getName() == 'verifikasi-komoditas' ? 'active':''}}">
                    <i class="bi bi-egg-fried"></i>Verifikasi Komoditas
                </a>
            </li>

            <li>
                <a href="{{ route('verifikasi-stok') }}"
                    class="{{ Route::current()->getName() == 'verifikasi-stok' ? 'active':''}}">
                    <i class="bi bi-plus-square"></i>Verifikasi Stok
                </a>
            </li>
        </ul>
    </li>

    @elseif(Auth::user()->roles == 2)

    {{-- <li class="nav-item">
        <a class="nav-link {{ Route::current()->getName() == 'setting' ? '':'collapsed'}}"
            href="{{ route('setting') }}">
            <i class="bi bi-gear"></i>
            <span>Setting Web/App</span>
        </a>
    </li> --}}

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#data-master" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Data Master</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        {{-- <ul id="data-master" class="nav-content collapse

                    {{ Route::current()->getName() == 'kategori-instansi' ? 'show':''}}
                    {{ Route::current()->getName() == 'perangkat-daerah' ? 'show':''}}
                    {{ Route::current()->getName() == 'akun-internal' ? 'show':''}}

                    " data-bs-parent="#sidebar-nav">

            <li>
                <a href="{{ route('kategori-instansi') }}"
                    class="{{ Route::current()->getName() == 'kategori-instansi' ? 'active':''}}">
                    <i class="bi bi-server"></i>Kategori Perangkat Daerah
                </a>
            </li>
            <li>
                <a href="{{ route('perangkat-daerah') }}"
                    class="{{ Route::current()->getName() == 'perangkat-daerah' ? 'active':''}}">
                    <i class="bi bi-house"></i>Perangkat Daerah/Instansi
                </a>
            </li>
            <li>
                <a href="{{ route('akun-internal') }}"
                    class="{{ Route::current()->getName() == 'akun-internal' ? 'active':''}}">
                    <i class="bi bi-people"></i>Akun Internal
                </a>
            </li>
        </ul> --}}
    </li>





    <li class="nav-item">
        <a class="nav-link {{ Route::current()->getName() == 'logactivity' ? '':'collapsed'}}"
            href="{{ route('logactivity') }}">
            <i class="bi bi-info-circle"></i>
            <span>Log Activity</span>
        </a>
    </li>


    @elseif(Auth::user()->roles == 3)
    {{-- <li class="nav-item">
        <a class="nav-link {{ Route::current()->getName() == 'penghargaan' ? '':'collapsed'}}"
            href="{{ route('penghargaan') }}">
            <i class="bi bi-award"></i>
            <span>Penghargaan</span>
        </a>
    </li> --}}
    @elseif(Auth::user()->roles == 4)
    {{-- <li class="nav-item">
        <a class="nav-link {{ Route::current()->getName() == 'news' ? '':'collapsed'}}" href="{{ route('news') }}">
            <i class="bi bi-newspaper"></i>
            <span>Berita</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Route::current()->getName() == 'penghargaan' ? '':'collapsed'}}"
            href="{{ route('penghargaan') }}">
            <i class="bi bi-award"></i>
            <span>Penghargaan</span>
        </a>
    </li> --}}
    @endif

    <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a class="nav-link collapsed" href="{{ route('logout') }}"
                onclick="event.preventDefault(); this.closest('form').submit();" aria-expanded="false">
                <i class="bi bi-box-arrow-left"></i>
                <span>Logout</span>
            </a>
        </form>
    </li>
</ul>
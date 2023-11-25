<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container py-2">
        <a class="navbar-brand" href="#">
            <img src="{{ asset(getWebConfiguration()->logo) }}" alt="logo">
        </a>

        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
            <ul class="navbar-nav   mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? ' active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('guru') ? ' active' : '' }}" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tentang Kami
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ request()->is('guru') ? ' active' : '' }}"
                                href="{{ route('teacher') }}">Guru</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle {{ request()->is('prestasi', 'ekstrakurikuler') ? ' active' : '' }}"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Akademik
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end border-0 shadow-sm p-1" role="menu">
                        <li><a class="dropdown-item rounded-1 {{ request()->is('prestasi') ? ' active' : '' }}"
                                href="{{ route('achievement') }}">Prestasi</a></li>
                        <li><a class="dropdown-item rounded-1 {{ request()->is('ekstrakurikuler') ? ' active' : '' }}"
                                href="{{ route('extracurricular') }}">Ekstarkulikuler</a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('gallery') ? ' active' : '' }}"
                        href="{{ route('gallery') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('kelulusan') ? ' active' : '' }}"
                        href="{{ route('graduation') }}">Pengumuman Kelulusan</a>
                </li>

            </ul>

        </div>
    </div>
</nav>

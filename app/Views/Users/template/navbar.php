<!-- navigation -->
<nav class="navbar navbar-expand-lg bg-white fixed-top navbar-container navbar-shadow">
    <div class="container-fluid">
        <!-- brand -->
        <a class="navbar-brand fw-bold" href="./index.html"><img src="/homepage/assets/svg/warga-letter-logo.svg" alt="warga-letter-icon" /></a>
        <!-- toggle mobile navbar -->
        <button class="navbar-toggler navbar-toggling shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- link -->
        <div class="collapse navbar-collapse navbar-collapsing" id="navbarSupportedContent">
            <!-- left -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item nav-items dropdown nav-item-dropdown">
                    <a class="nav-link navbar-link dropdown-toggle  <?php if ($navbar == 'administrasi' || $navbar == 'pelaporan' || $navbar == 'keluarga') echo ' active'; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Warga
                    </a>
                    <ul class="dropdown-menu nav-dropdown-menu shadow">
                        <li>
                            <a class="dropdown-item nav-dropdown-item <?php if ($navbar == 'administrasi') echo ' active'; ?>" href="/users/administrasi"><span><i class="fa-solid fa-rocket"></i></span>Administrasi</a>
                        </li>
                        <li>
                            <a class="dropdown-item nav-dropdown-item <?php if ($navbar == 'pelaporan') echo ' active'; ?>" href="/users/pelaporan"><span><i class="fa-solid fa-house-signal"></i></span>Pelaporan</a>
                        </li>
                        <li>
                            <a class="dropdown-item nav-dropdown-item <?php if ($navbar == 'keluarga') echo ' active'; ?>" href="/users/keluarga"><span><i class="fa-solid fa-seedling"></i></span>Menu
                                keluarga</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-items">
                    <a class="nav-link navbar-link <?php if ($navbar == 'galeri') echo ' active'; ?>" href="/users/galeri">Galeri</a>
                </li>
                <li class="nav-item nav-items">
                    <a class="nav-link navbar-link <?php if ($navbar == 'pengumuman') echo ' active'; ?>" href="/users/pengumuman">Pengumuman</a>
                </li>
            </ul>
            <!-- right -->
            <a class="btn btn-main-outline-sm w-full-xl" role="button" href="./signin.html">Masuk</a>
        </div>
    </div>
</nav>
<!-- end of navigation -->
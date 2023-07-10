<!-- navigation -->
<nav class="navbar navbar-expand-lg bg-white fixed-top navbar-container navbar-shadow">
    <div class="container-fluid flex-nowrap">
        <!-- brand -->
        <a class="navbar-brand fw-bold" href="/home"><img src="/homepage/assets/svg/warga-letter-logo.svg" alt="warga-letter-icon" /></a>

        <!-- toggle mobile navbar -->
        <div class="toggle-nav-mobile">
            <button class="btn-nav-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                <i class="fa-solid fa-bars" style="font-size: 1.25rem"></i>
            </button>
        </div>

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
                            <a class="dropdown-item nav-dropdown-item <?php if ($navbar == 'administrasi') echo ' active'; ?>" href="/users/administrasi">
                                <span><i class="fa-solid fa-rocket"></i></span>Administrasi
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item nav-dropdown-item <?php if ($navbar == 'pelaporan') echo ' active'; ?>" href="/users/pelaporan">
                                <span><i class="fa-solid fa-house-signal"></i></span>Pelaporan
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item nav-dropdown-item <?php if ($navbar == 'keluarga') echo ' active'; ?>" href="/users/keluarga">
                                <span><i class="fa-solid fa-seedling"></i></span> Menu keluarga
                            </a>
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
            <?php if ($isLoggedin == true && $isLoggedin) { ?>
                <!-- right -->
                <a class="btn btn-main-sm w-full-xl d-flex align-items-center justify-content-center" role="button" href="/home/profile"><i class="fa-solid fa-id-badge me-2"></i>Profile</a>
            <?php } else { ?>
                <!-- right -->
                <a class="btn btn-main-outline-sm w-full-xl" role="button" href="/home/signin">Masuk</a>
            <?php } ?>
        </div>
    </div>
</nav>
<!-- end of navigation -->
<?php
// Define the $user array with sample data (replace with actual user data)
$user = [
    'nama' => session()->get('nama'),
    'foto' => session()->get('foto'),
];
?>

<!-- navigation -->
<nav class="navbar navbar-expand-lg bg-white fixed-top navbar-container navbar-shadow">
    <div class="container-fluid flex-nowrap">
        <!-- brand -->
        <a class="navbar-brand fw-bold" href="<?= $isLoggedin ? '/users' : '/home'; ?>">
            <img src="/homepage/assets/svg/warga-letter-logo.svg" alt="warga letter icon" />
        </a>

        <!-- toggle mobile navbar -->
        <div class="toggle-nav-mobile">
            <a class="nav-mobile-profile" href="/users/profile">
                <img src="<?= $profilePhotoPath .  (($user['foto']) ? $user['foto'] : 'default.png') ?>" alt="Profile <?= $user['nama'] ?>" class="nav-mobile-profile-img" />
            </a>
            <button class="btn-nav-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop" title="Menu">
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
                    <a class="nav-link navbar-link <?php if ($navbar == 'galeri') echo ' active'; ?>" href="<?= ($isLoggedin) ?  '/users/galeri' :  '/home/galeri'; ?>">Galeri</a>
                </li>
                <li class="nav-item nav-items">
                    <a class="nav-link navbar-link <?php if ($navbar == 'pengumuman') echo ' active'; ?>" href="<?= ($isLoggedin) ?  '/users/pengumuman' :  '/home/pengumuman'; ?>">Pengumuman</a>
                </li>
            </ul>
            <?php if ($isLoggedin == true && $isLoggedin) { ?>
                <!-- right -->
                <a class="btn btn-main-sm w-full-xl d-flex align-items-center justify-content-center" role="button" href="/users/profile"><i class="fa-solid fa-id-badge me-2"></i>Profile</a>
                <button class="btn btn-logout-sm w-full-xl d-flex align-items-center justify-content-center" role="button" onclick="logout()" style="height: 41px; margin-left: 12px">
                    <i class="fa-solid fa-sign-out"></i>
                </button>
            <?php } else { ?>
                <!-- right -->
                <a class="btn btn-main-outline-sm w-full-xl" role="button" href="/login">Masuk</a>
            <?php } ?>
        </div>
    </div>
</nav>
<!-- end of navigation -->

<!-- offcanvas navbar mobile -->
<div class="offcanvas offcanvas-top offcanvas-custom" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header">
        <a id="offcanvasTopLabel" class="navbar-brand-mobile" href="<?= $isLoggedin ? '/users' : '/home'; ?>"><img src="/homepage/assets/svg/warga-letter-logo.svg" alt="warga letter icon" class="h-100" /></a>
        <button type="button" class="btn-close text-sm" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="list-nav-link">
            <li class="w-100">
                <a class="w-100 d-block mb-1 py-2 nav-collapse d-flex justify-content-between align-items-center <?php if ($navbar == 'administrasi' || $navbar == 'pelaporan' || $navbar == 'keluarga') echo ' active'; ?>" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Warga
                    <i class="fa-solid fa-angle-down text-sm"></i>
                </a>
                <div class="collapse" id="collapseExample">
                    <div class="">
                        <ul class="list-nav-collapse">
                            <li class="list-nav-collapse-item">
                                <a href="/users/administrasi" class="<?php if ($navbar == 'administrasi') echo ' active'; ?>">Administrasi</a>
                            </li>
                            <li class="list-nav-collapse-item">
                                <a href="/users/pelaporan" class="<?php if ($navbar == 'pelaporan') echo ' active'; ?>">Pelaporan</a>
                            </li>
                            <li class="list-nav-collapse-item">
                                <a href="/users/keluarga" class="<?php if ($navbar == 'keluarga') echo ' active'; ?>">Menu Keluarga</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="list-nav-link-item">
                <a href="/users/galeri" class="<?php if ($navbar == 'galeri') echo ' active'; ?>">Galeri</a>
            </li>
            <li class="list-nav-link-item">
                <a href="/users/pengumuman" class="<?php if ($navbar == 'pengumuman') echo ' active'; ?>">Pengumuman</a>
            </li>
            <?php if ($isLoggedin == true && $isLoggedin) { ?>
                <!-- logout -->
                <li class="list-nav-link-item">
                    <button onclick="logout()" role="link" class="btn-anchor logout-btn">Logout</button>
                </li>
        </ul>
        <a href="/users/profile" class="btn btn-main w-100 shadow"><i class="fa-solid fa-id-badge me-2"></i>Profile</a>
    <?php } else { ?>
        </ul>
        <a href="/signin" class="btn btn-main w-100 shadow">Masuk</a>
    <?php } ?>
    </div>
</div>

<script>
    const logout = () => {
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Anda akan keluar dari akun ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Keluar!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                setTimeout(function() {
                    window.location.href = "/logout";
                }, 3000);
                Swal.fire(
                    'Berhasil!',
                    'Anda telah keluar dari akun ini.',
                    'success'
                ).then(function() {
                    window.location.href = "/logout";
                });
            }
        });

    }
</script>
<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            <!-- Nama -->
                            Hizrian
                            <!-- Role -->
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item <?php if ($active == 'dashboard') echo 'active' ?>">
                    <a href="/admin/">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item <?php if ($active == 'penduduk') echo 'active' ?>">
                    <a data-toggle="collapse" href="#penduduk">
                        <i class="fas fa-user-friends"></i>
                        <p>Penduduk</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="penduduk">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="/admin/families">
                                    <span class="sub-item">Daftar Keluarga</span>
                                </a>
                            </li>
                            <li>
                                <a href="/admin/people">
                                    <span class="sub-item">Daftar Penduduk</span>
                                </a>
                            </li>
                            <li>
                                <a href="/admin/addfamily">
                                    <span class="sub-item">Tambah Keluarga</span>
                                </a>
                            </li>
                            <li>
                                <a href="/admin/addpeople">
                                    <span class="sub-item">Tambah Penduduk</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item <?php if ($active == 'administrasi') echo 'active' ?>">
                    <a href="/admin/administrasi">
                        <i class="fas fa-file-signature"></i>
                        <p>Administrasi</p>
                        <span class="badge badge-success">
                            <?php if ($reqAdministrasi != 0 || $reqAdministrasi != null) {
                                echo $reqAdministrasi;
                            } else {
                                echo 0;
                            } ?>
                        </span>
                    </a>
                </li>
                <li class="nav-item <?php if ($active == 'pelaporan') echo 'active' ?>">
                    <a href="/admin/pelaporan">
                        <i class="fas fa-pen-square"></i>
                        <p>Laporan</p>
                        <span class="badge badge-success">
                            <?php if ($reqLaporan != 0 || $reqLaporan != null) {
                                echo $reqLaporan;
                            } else {
                                echo 0;
                            } ?>
                        </span>
                    </a>
                </li>
                <li class="nav-item <?php if ($active == 'galeri') echo 'active' ?>">
                    <a data-toggle="collapse" href="#galeri">
                        <i class="fas fa-images"></i>
                        <p>Galeri</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="galeri">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="/admin/galeri">
                                    <span class="sub-item">Daftar Galeri</span>
                                </a>
                            </li>
                            <li>
                                <a href="/admin/foto">
                                    <span class="sub-item">Daftar Foto</span>
                                </a>
                            </li>
                            <li>
                                <a href="/admin/addgaleri">
                                    <span class="sub-item">Tambah Galeri</span>
                                </a>
                            </li>
                            <li>
                                <a href="/admin/addfoto">
                                    <span class="sub-item">Tambah Foto</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item <?php if ($active == 'pengumuman') echo 'active' ?>">
                    <a data-toggle="collapse" href="#pengumuman">
                        <i class="fas fa-bullhorn"></i>
                        <p>Pengumuman</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="pengumuman">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="/admin/pengumuman">
                                    <span class="sub-item">Riwayat Pengumuman</span>
                                </a>
                            </li>
                            <li>
                                <a href="/admin/addpengumuman">
                                    <span class="sub-item">Buat Pengumuman</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
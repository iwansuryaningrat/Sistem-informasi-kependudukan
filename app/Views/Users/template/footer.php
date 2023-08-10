<!-- footer -->
<footer class="big-footer">
    <section class="container">
        <div class="row footer-container-top">
            <!-- left -->
            <div class="col-md-4">
                <div class="footer-top__left">
                    <a href="<?= $isLoggedin ? '/users' : '/home'; ?>" class="footer-logo-link">
                        <figure class="footer-logo-wrapper">
                            <img src="/homepage/assets/svg/warga-letter-logo.svg" alt="warga-letter-icon" />
                        </figure>
                    </a>
                    <p class="text-basic">
                        Selamat datang di Website Warga! Kami adalah platform pengelolaan data keluarga untuk desa.<br />
                        Jl. Raya Kebayoran Lama Bl A-5/194, DKI Jakarta, Kota Jakarta 12240
                    </p>
                    <a class="btn btn-main" role="button" href="<?= ($isLoggedin) ?  '/users/contact' :  '/home/contact'; ?>">
                        Kontak Kami
                    </a>
                </div>
            </div>
            <!-- right -->
            <div class="col-md-8">
                <div class="footer-menu-link">
                    <div class="footer-menu-wrapper">
                        <ul class="ps-0 ps-md-5">
                            <li class="footer-menu__header">Warga</li>
                            <li><a href="<?= ($isLoggedin) ?  '/users/pengumuman' :  '/home/pengumuman'; ?>">Pengumuman</a></li>
                            <li><a href="<?= ($isLoggedin) ?  '/users/galeri' :  '/home/galeri'; ?>">Galeri</a></li>
                        </ul>
                    </div>
                    <div class="footer-menu-wrapper">
                        <ul class="ps-0 ps-md-5">
                            <li class="footer-menu__header">Layanan</li>
                            <li>
                                <a href="/users/administrasi">Pengajuan Administrasi</a>
                            </li>
                            <li><a href="/users/pelaporan">Pelaporan</a></li>
                            <li>
                                <a href="/users/keluarga">Menu Keluarga</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr class="" />
        <div class="footer-floor">
            <p>
                @<span id="yearNow"></span> Warga | Platform Pengelolaan Data Keluarga untuk Desa
                Memudahkan pencatatan dan pengelolaan informasi keluarga desa secara efisien.
            </p>
            <div class="footer-social-media">
                <a title="Facebook" href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a>
                <a title="Instagram" href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                <a title="Twitter" href="https://www.twitter.com/" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </section>
</footer>
<!-- end of footer -->
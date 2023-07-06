<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Styles -->
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom -->
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link rel="stylesheet" href="./assets/css/responsiveness.css" />

    <!-- favicon -->
    <link rel="shortcut icon" href="./public/favicon.ico" type="image/x-icon" />
    <!-- title -->
    <title>Galeri | Warga Site</title>
</head>

<body>
    <div>
        <!-- navigation -->
        <nav class="navbar navbar-expand-lg bg-white fixed-top navbar-container navbar-shadow">
            <div class="container-fluid flex-nowrap">
                <!-- brand -->
                <a class="navbar-brand fw-bold" href="./index.html"><img src="./assets/svg/warga-letter-logo.svg" alt="warga-letter-icon" /></a>
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
                            <a class="nav-link navbar-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Warga
                            </a>
                            <ul class="dropdown-menu nav-dropdown-menu shadow">
                                <li>
                                    <a class="dropdown-item nav-dropdown-item" href="./pages/administration/administration.html"><span><i class="fa-regular fa-folder-open"></i></span>Administrasi</a>
                                </li>
                                <li>
                                    <a class="dropdown-item nav-dropdown-item" href="./pages/report/report.html"><span><i class="fa-solid fa-bullhorn"></i></span>Pelaporan</a>
                                </li>
                                <li>
                                    <a class="dropdown-item nav-dropdown-item" href="./pages/family/family.html"><span><i class="fa-solid fa-house-chimney-window"></i></span>Menu keluarga</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-items">
                            <a class="nav-link navbar-link active" href="./galery.html">Galeri</a>
                        </li>
                        <li class="nav-item nav-items">
                            <a class="nav-link navbar-link" href="./pages/news/news.html">Pengumuman</a>
                        </li>
                    </ul>
                    <!-- right -->
                    <a class="btn btn-main-outline-sm w-full-xl" role="button" href="./pages/auth/signin.html">Masuk</a>
                </div>
            </div>
        </nav>
        <!-- end of navigation -->

        <!-- header -->
        <header class="container">
            <div class="header-container-mini">
                <h1 class="mb-3">Hubungi Kami</h1>
                <p class="text-basic text-center mb-0 max-w-80">
                    Terima kasih atas minat Anda untuk menghubungi kami. Kami sangat
                    menghargai umpan balik, saran, dan pertanyaan Anda.
                </p>
            </div>
        </header>
        <!-- end of header -->

        <!-- main -->
        <main>
            <!-- get in touch -->
            <section class="container container-space">
                <div class="contact-container mb-4 row">
                    <div class="col-md-6 mb-5 mb-md-0">
                        <div class="me-md-3">
                            <form action="#" id="contactForm">
                                <!-- fullname -->
                                <div class="mb-3">
                                    <label for="namaLengkap" class="form-label forms-label">Nama Lengkap</label>
                                    <input type="text" class="form-control input-control" id="namaLengkap" name="namaLengkap" placeholder="Masukkan Nama Lengkap" />
                                </div>
                                <!-- email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label forms-label">Email</label>
                                    <input type="email" class="form-control input-control" id="email" name="email" placeholder="username@email.com" />
                                </div>
                                <!-- subject -->
                                <div class="mb-3">
                                    <label for="subjek" class="form-label forms-label">Subjek</label>
                                    <select class="form-select select-control" id="subjek" name="subjek">
                                        <option selected value="">
                                            Pilih Subjek
                                        </option>
                                        <option value="1">Pertanyaan</option>
                                        <option value="2">Saran</option>
                                        <option value="3">Lainnya</option>
                                    </select>
                                </div>
                                <!-- message -->
                                <div class="mb-3">
                                    <label for="pesan" class="form-label forms-label">Pesan</label>
                                    <textarea class="form-control input-control" id="pesan" name="pesan" rows="5" placeholder="Masukkan Pesan Anda"></textarea>
                                </div>
                                <button type="submit" class="btn btn-main-sm w-full-xl" id="contactFormButton">
                                    Kirim
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ms-md-3">
                            <div class="mb-3">
                                <label class="form-label forms-label mb-3">Temukan Kami</label>
                                <div class="w-100">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31678.921973903864!2d110.41484533590068!3d-7.0251215486177605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c02787187c9%3A0x29bcf60b2c20aec!2sUniversitas%20Diponegoro!5e0!3m2!1sid!2sid!4v1688513570084!5m2!1sid!2sid" width="100" height="270" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-100 pb-0 mb-0"></iframe>
                                </div>
                            </div>
                            <div class="">
                                <label class="form-label forms-label mb-3">Detil Kontak</label>
                                <!-- address -->
                                <p class="">
                                    <i class="fas fa-map-marker-alt text-basic me-2"></i>
                                    <span class="text-basic">
                                        Jl. Prof. Soedarto, S.H. Tembalang, Semarang, Jawa Tengah
                                        50275
                                    </span>
                                </p>
                                <!-- email -->
                                <p class="">
                                    <i class="fas fa-envelope text-basic me-2"></i>
                                    <span>
                                        <a href="mailto:warga.supprot@gmail.com" class="text-decoration-none text-basic">
                                            warga.support@gmail.com
                                        </a>
                                    </span>
                                </p>
                                <!-- phone -->
                                <p class="">
                                    <i class="fas fa-phone-alt text-basic me-2"></i>
                                    <span>
                                        <a href="tel:+6281234567890" class="text-decoration-none text-basic">+62 812-3456-7890</a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- end of main -->

        <!-- footer -->
        <footer class="big-footer">
            <section class="container">
                <div class="row footer-container-top">
                    <!-- left -->
                    <div class="col-md-4">
                        <div class="footer-top__left">
                            <a href="./index.html" class="footer-logo-link">
                                <figure class="footer-logo-wrapper">
                                    <img src="./assets/svg/warga-letter-logo.svg" alt="warga-letter-icon" />
                                </figure>
                            </a>
                            <p class="text-basic">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. In
                                assumenda.<br />
                                Jl. Raya Kebayoran Lama Bl A-5/194, DKI Jakarta, Kota Jakarta
                                12240
                            </p>
                            <a class="btn btn-main" role="button" href="./contact.html">
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
                                    <li><a href="./pages/news/news.html">Pengumuman</a></li>
                                    <li><a href="./galery.html">Galeri</a></li>
                                </ul>
                            </div>
                            <div class="footer-menu-wrapper">
                                <ul class="ps-0 ps-md-5">
                                    <li class="footer-menu__header">Layanan</li>
                                    <li>
                                        <a href="./pages/administration/administration.html">Pengajuan Administrasi</a>
                                    </li>
                                    <li><a href="./pages/report/report.html">Pelaporan</a></li>
                                    <li>
                                        <a href="./pages/family/family.html">Menu Keluarga</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="" />
                <div class="footer-floor">
                    <p>
                        @<span id="yearNow"></span> Warga | Warga neque consequatur nemo
                        fugit voluptatem mollitia minima tempore.
                    </p>
                    <div class="footer-social-media">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </section>
        </footer>
        <!-- end of footer -->
    </div>

    <!-- offcanvas navbar mobile -->
    <div class="offcanvas offcanvas-top offcanvas-custom" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <a id="offcanvasTopLabel" class="navbar-brand-mobile" href="./index.html"><img src="./assets/svg/warga-letter-logo.svg" alt="warga-letter-icon" class="h-100" /></a>
            <button type="button" class="btn-close text-sm" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-nav-link">
                <li class="w-100">
                    <a class="w-100 d-block mb-1 py-2 nav-collapse d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Warga
                        <i class="fa-solid fa-angle-down text-sm"></i>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <div class="">
                            <ul class="list-nav-collapse">
                                <li class="list-nav-collapse-item">
                                    <a href="./pages/administration/administration.html">Administrasi</a>
                                </li>
                                <li class="list-nav-collapse-item">
                                    <a href="./pages/report/report.html">Pelaporan</a>
                                </li>
                                <li class="list-nav-collapse-item">
                                    <a href="./pages/family/family.html">Menu Keluarga</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="list-nav-link-item">
                    <a href="./galery.html" class="active">Galeri</a>
                </li>
                <li class="list-nav-link-item">
                    <a href="./pages/news/news.html" class="">Pengumuman</a>
                </li>
            </ul>
            <a href="./pages/auth/signin.html" class="btn btn-main w-100 shadow">Masuk</a>
        </div>
    </div>

    <!-- scripts -->
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jquery validate -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <!-- fontawesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- custom -->
    <script src="./assets/js/scripts.js"></script>

    <!-- script internal -->
    <script>
        // validate
        $(document).ready(function() {
            $('#contactForm').validate({
                rules: {
                    namaLengkap: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true,
                    },
                    subjek: {
                        required: true,
                    },
                    pesan: {
                        required: true,
                    },
                },
                messages: {
                    namaLengkap: {
                        required: 'Nama lengkap tidak boleh kosong.',
                    },
                    email: {
                        required: 'Email tidak boleh kosong.',
                        email: 'Email tidak valid.',
                    },
                    subjek: {
                        required: 'Subjek tidak boleh kosong.',
                    },
                    pesan: {
                        required: 'Pesan tidak boleh kosong.',
                    },
                },
            });
            $('#contactFormButton').on('click', () => {
                console.log($('#contactForm').valid());
            });
        });
    </script>
</body>

</html>
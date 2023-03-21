<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Style -->
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom -->
    <link rel="stylesheet" href="/homepage/assets/css/styles.css" />
    <link rel="stylesheet" href="/homepage/assets/css/responsiveness.css" />

    <!-- favicon -->
    <link rel="shortcut icon" href="/homepage/public/favicon.ico" type="image/x-icon" />
    <!-- title -->
    <title>Warga Site</title>
</head>

<body>
    <div>
        <!-- navigation -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top navbar-container">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="./index.html">Warga</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- left -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                    <!-- right -->
                    <a class="btn btn-success" role="button" href="./signin.html">Masuk</a>
                </div>
            </div>
        </nav>
        <!-- end of navigation -->
        <!-- header -->
        <header class="container d-none">
            <div class="row header-container">
                <!-- left -->
                <div class="col">
                    <h1>We love helping you to safe the earth🍀</h1>
                    <p class="text-basic">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia
                        suscipit mollitia quas eveniet sit, vitae repellendus deleniti,
                        placeat impedit doloribus magnam assumenda consequatur sequi
                        pariatur deserunt et. Eos, modi dolorem.
                    </p>
                    <button class="btn btn-main shadow" type="button">
                        Get in touch
                    </button>
                </div>
                <!-- right -->
                <div class="col">
                    <h3>gambar</h3>
                </div>
            </div>
        </header>
        <section style="height: 80vh"></section>
        <!-- end of header -->
        <!-- main -->
        <main>
            <!-- features -->
            <section class="container container-space d-none">
                <!-- header -->
                <div class="d-flex">
                    <p class="head-badge">proyek</p>
                </div>
                <div class="row align-items-center justify-content-between mb-5">
                    <div class="d-flex flex-column align-items-start col-4">
                        <h2>Quibusdam cum cupiditate maxime eum accusamus.</h2>
                    </div>
                    <div class="col-6">
                        <p class="text-basic mb-0">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et
                            iste facere reprehenderit eum illum quisquam temporibus culpa
                            minima ad deserunt.
                        </p>
                    </div>
                </div>
                <!-- content -->
                <div class="project-container">
                    <div class="project-card">
                        <div class="d-flex mb-3">
                            <div class="project-badge">
                                <i class="fa-solid fa-rocket project-badge__icon"></i>
                            </div>
                        </div>
                        <h5>Administrasi fugiat quam dolores</h5>
                        <p class="text-basic mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi
                            dolorem quasi quos repellendus exercitationem.
                        </p>
                        <button class="btn btn-main-outline shadow" type="button" id="administration" onclick="location.href='./administration.html'">
                            Lebih Banyak
                        </button>
                    </div>
                    <div class="project-card">
                        <div class="d-flex mb-3">
                            <div class="project-badge">
                                <i class="fa-solid fa-house-signal project-badge__icon"></i>
                            </div>
                        </div>
                        <h5>Pelaporan amet officia ducimus temporibus</h5>
                        <p class="text-basic mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi
                            dolorem quasi quos repellendus exercitationem nobis.
                        </p>
                        <button class="btn btn-main-outline shadow" type="button" id="report" onclick="location.href='./report.html'">
                            Lebih Banyak
                        </button>
                    </div>
                    <div class="project-card">
                        <div class="d-flex mb-3">
                            <div class="project-badge">
                                <i class="fa-solid fa-seedling project-badge__icon"></i>
                            </div>
                        </div>
                        <h5>Keluarga perspiciatis voluptate</h5>
                        <p class="text-basic mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi
                            dolorem quasi quos repellendus exercitationem nobis.
                        </p>
                        <button class="btn btn-main-outline shadow" type="button" id="family" onclick="location.href='./family.html'">
                            Lebih Banyak
                        </button>
                    </div>
                </div>
            </section>
            <!-- penjelasan umum -->
            <section class="container container-space d-none">
                <div class="row">
                    <div class="col">
                        <!-- header -->
                        <div class="d-flex align-items-sm-start flex-column mb-4">
                            <p class="head-badge">warga</p>
                            <h2>
                                Consequuntur autem soluta sint expedita sint nulla veniam enim
                                optio.
                            </h2>
                            <p class="text-basic">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Distinctio commodi, optio dolorum saepe, atque omnis mollitia
                                ratione accusamus, repudiandae repellendus perferendis ex
                                temporibus voluptatum enim alias laudantium illum quo
                                doloribus!
                            </p>
                            <button class="btn btn-main-outline shadow" type="button">
                                Lebih Banyak
                            </button>
                        </div>
                        <!-- content -->
                    </div>
                    <div class="col">
                        <p>gambar</p>
                    </div>
                </div>
            </section>

            <!-- galery -->
            <section class="container container-space d-none">
                <!-- header -->
                <div class="d-flex align-items-center flex-column mb-4">
                    <p class="head-badge">GALERI</p>
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit</h2>
                </div>
                <!-- content -->
                <div class="galery-container mb-5">
                    <div class="galery-warp">
                        <figure class="galery-item__warp">
                            <img src="/homepage/assets/img/image-1.jpg" alt="documentation-1" class="galery-item__photo" />
                            <div class="galery-item__desc">
                                <p class="mb-2 text-sm">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Quam pariatur officiis consequatur et odio quas laborum.
                                </p>
                                <p class="text-xs mb-2 fst-italic text-gray-200">
                                    Iwan Suryaningrat - 13 Januari 2023
                                </p>
                            </div>
                        </figure>
                    </div>
                    <div class="galery-warp">
                        <figure class="galery-item__warp">
                            <img src="/homepage/assets/img/image-2.jpg" alt="documentation-2" class="galery-item__photo" />
                            <div class="galery-item__desc">
                                <p class="mb-2 text-sm">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Quam pariatur officiis consequatur et odio quas laborum.
                                    Laborum quaerat laboriosam aspernatur quo voluptatibus aut!
                                    Inventore corrupti architecto provident tempore ad velit!
                                </p>
                                <p class="text-xs mb-2 fst-italic text-gray-200">
                                    Iwan Suryaningrat - 13 Januari 2023
                                </p>
                            </div>
                        </figure>
                    </div>
                    <div class="galery-warp">
                        <figure class="galery-item__warp">
                            <img src="/homepage/assets/img/image-3.jpg" alt="documentation-3" class="galery-item__photo" />
                            <div class="galery-item__desc">
                                <p class="mb-2 text-sm">
                                    Consequatur et odio quas laborum. Laborum quaerat laboriosam
                                    aspernatur quo voluptatibus aut! Inventore corrupti
                                    architecto provident tempore ad velit!
                                </p>
                                <p class="text-xs mb-2 fst-italic text-gray-200">
                                    Iwan Suryaningrat - 13 Januari 2023
                                </p>
                            </div>
                        </figure>
                    </div>
                    <div class="galery-warp">
                        <figure class="galery-item__warp">
                            <img src="/homepage/assets/img/image-4.jpg" alt="documentation-4" class="galery-item__photo" />
                            <div class="galery-item__desc">
                                <p class="mb-2 text-sm">
                                    Laboriosam aspernatur quo voluptatibus aut! Inventore
                                    corrupti architecto provident tempore ad velit!
                                </p>
                                <p class="text-xs mb-2 fst-italic text-gray-200">
                                    Iwan Suryaningrat - 13 Januari 2023
                                </p>
                            </div>
                        </figure>
                    </div>
                    <div class="galery-warp">
                        <figure class="galery-item__warp">
                            <img src="/homepage/assets/img/image-5.jpg" alt="documentation-5" class="galery-item__photo" />
                            <div class="galery-item__desc">
                                <p class="mb-2 text-sm">
                                    Pariatur officiis consequatur et odio quas laborum. Laborum
                                    quaerat laboriosam aspernatur quo voluptatibus aut!
                                    Inventore corrupti architecto provident tempore ad velit!
                                </p>
                                <p class="text-xs mb-2 fst-italic text-gray-200">
                                    Suryaningrat - 13 Januari 2023
                                </p>
                            </div>
                        </figure>
                    </div>
                    <div class="galery-warp">
                        <figure class="galery-item__warp">
                            <img src="/homepage/assets/img/image-6.jpg" alt="documentation-6" class="galery-item__photo" />
                            <div class="galery-item__desc">
                                <p class="mb-2 text-sm">
                                    Quaerat laboriosam aspernatur quo voluptatibus aut!
                                    Inventore corrupti architecto provident tempore ad velit!
                                </p>
                                <p class="text-xs mb-2 fst-italic text-gray-200">
                                    Iwan - 13 Januari 2023
                                </p>
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="./galery.html" class="btn btn-main shadow" role="button">Lebih Banyak</a>
                </div>
            </section>

            <!-- pengumuman -->
            <section class="w-100 bg-main-500__05">
                <div class="container container-space">
                    <!-- header -->
                    <div class="d-flex align-items-center flex-column mb-4">
                        <p class="head-badge">pengumuman</p>
                        <h2 class="text-center">
                            Itaque nobis explicabo voluptas cum nulla.
                        </h2>
                    </div>
                    <!-- content -->
                    <div class="news-container mb-5">
                        <div class="news-card">
                            <figure class="news-image__wrap">
                                <img src="/homepage/assets/img/image-7.jpg" alt="news-1" class="news-image__photo" />
                            </figure>
                            <p class="news-title mb-2">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Deserunt nostrum alias fugit. Vel nulla quaerat, nisi, facere
                                minima impedit culpa iure cumque ratione dolorum debitis
                                dolores, modi quia quis iste?
                            </p>
                            <p class="text-basic news-desc mb-2">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Deserunt nostrum alias fugit. Vel nulla quaerat, nisi, facere
                                minima impedit culpa iure cumque ratione dolorum debitis
                                dolores, modi quia quis iste?
                            </p>
                            <div class="d-flex align-items-center mb-3">
                                <p class="d-flex align-items-center me-3 mb-0">
                                    <i class="fa-solid fa-circle-user me-1 d-block fill-gray"></i><span class="text-sm d-block text-gray">Abimanyu</span>
                                </p>
                                <p class="d-flex align-items-center mb-0">
                                    <i class="fa-solid fa-clock me-1 d-block fill-gray"></i><span class="text-sm d-block text-gray">50 menit</span>
                                </p>
                            </div>
                            <a href="./read-news.html" class="btn btn-main-outline shadow" role="button">
                                Kunjungi Berita
                            </a>
                        </div>
                        <div class="news-card">
                            <figure class="news-image__wrap">
                                <img src="/homepage/assets/img/image-8.jpg" alt="news-1" class="news-image__photo" />
                            </figure>
                            <p class="news-title mb-2">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est
                                error aut enim placeat eius a ratione, asperiores fugit
                                maiores laborum atque. Doloremque facilis magni, perspiciatis
                                maiores ullam nam labore dolores?
                            </p>
                            <p class="text-basic news-desc mb-2">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Deserunt nostrum alias fugit. Vel nulla quaerat, nisi, facere
                                minima impedit culpa iure cumque ratione dolorum debitis
                                dolores, modi quia quis iste?
                            </p>
                            <div class="d-flex align-items-center mb-3">
                                <p class="d-flex align-items-center me-3 mb-0">
                                    <i class="fa-solid fa-circle-user me-1 d-block fill-gray"></i><span class="text-sm d-block text-gray">Abimanyu</span>
                                </p>
                                <p class="d-flex align-items-center mb-0">
                                    <i class="fa-solid fa-clock me-1 d-block fill-gray"></i><span class="text-sm d-block text-gray">15 jam</span>
                                </p>
                            </div>
                            <a href="./read-news.html" class="btn btn-main-outline shadow" role="button">
                                Kunjungi Berita
                            </a>
                        </div>
                        <div class="news-card">
                            <figure class="news-image__wrap">
                                <img src="/homepage/assets/img/image-9.png" alt="news-1" class="news-image__photo" />
                            </figure>
                            <p class="news-title mb-2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure
                                sequi quasi vel debitis quo. Modi commodi facere, quia
                                explicabo obcaecati veniam recusandae consequatur, placeat
                                repellat provident fugiat officiis optio repudiandae!
                            </p>
                            <p class="text-basic news-desc mb-2">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Deserunt nostrum alias fugit. Vel nulla quaerat, nisi, facere
                                minima impedit culpa iure cumque ratione dolorum debitis
                                dolores, modi quia quis iste?
                            </p>
                            <div class="d-flex align-items-center mb-3">
                                <p class="d-flex align-items-center me-3 mb-0">
                                    <i class="fa-solid fa-circle-user me-1 d-block fill-gray"></i><span class="text-sm d-block text-gray">Abimanyu</span>
                                </p>
                                <p class="d-flex align-items-center mb-0">
                                    <i class="fa-solid fa-clock me-1 d-block fill-gray"></i><span class="text-sm d-block text-gray">10 Feb 2023</span>
                                </p>
                            </div>
                            <a href="./read-news.html" class="btn btn-main-outline shadow" role="button">
                                Kunjungi Berita
                            </a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center pt-1 pt-sm-3">
                        <a href="./news.html" class="btn btn-main shadow" role="button">Lebih Banyak</a>
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
                                    <img src="/homepage/assets/svg/warga-letter-logo.svg" alt="warga-letter-icon" />
                                </figure>
                            </a>
                            <p class="text-basic">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. In
                                assumenda.<br />
                                Jl. Raya Kebayoran Lama Bl A-5/194, DKI Jakarta, Kota Jakarta
                                12240
                            </p>
                            <button class="btn btn-main" type="button">
                                Kontak Kami
                            </button>
                        </div>
                    </div>
                    <!-- right -->
                    <div class="col-md-8">
                        <div class="footer-menu-link">
                            <div class="footer-menu-wrapper">
                                <ul class="ps-0 ps-md-5">
                                    <li class="footer-menu__header">Warga</li>
                                    <li><a href="./news.html">Pengumuman</a></li>
                                    <li><a href="./galery.html">Galeri</a></li>
                                </ul>
                            </div>
                            <div class="footer-menu-wrapper">
                                <ul class="ps-0 ps-md-5">
                                    <li class="footer-menu__header">Layanan</li>
                                    <li>
                                        <a href="./administration.html">Pengajuan Administrasi</a>
                                    </li>
                                    <li><a href="./report.html">Pelaporan</a></li>
                                    <li><a href="./family.html">Menu Keluarga</a></li>
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

    <!-- scripts -->
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <!-- fontawesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- custom -->
    <script src="/homepage/assets/js/scripts.js"></script>
</body>

</html>
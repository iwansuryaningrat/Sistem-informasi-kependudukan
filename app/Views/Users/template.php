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
  <!-- datatables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" />
  <!-- fancybox -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
  <!-- custom -->
  <link rel="stylesheet" href="./assets/css/styles.css" />
  <link rel="stylesheet" href="./assets/css/responsiveness.css" />

  <!-- favicon -->
  <link rel="shortcut icon" href="./public/favicon.ico" type="image/x-icon" />
  <!-- title -->
  <title>Template</title>
</head>

<body>
  <div>
    <!-- navigation profile -->
    <nav class="navbar navbar-expand-lg bg-white fixed-top navbar-container navbar-shadow">
      <div class="container-fluid">
        <!-- brand -->
        <a class="navbar-brand fw-bold" href="./index.html"><img src="./assets/svg/warga-letter-logo.svg" alt="warga letter icon" /></a>
        <!-- toggle mobile navbar -->
        <button class="navbar-toggler navbar-toggling shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
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
                  <a class="dropdown-item nav-dropdown-item" href="./administration.html"><span><i class="fa-solid fa-rocket"></i></span>Administrasi</a>
                </li>
                <li>
                  <a class="dropdown-item nav-dropdown-item" href="./report.html"><span><i class="fa-solid fa-house-signal"></i></span>Pelaporan</a>
                </li>
                <li>
                  <a class="dropdown-item nav-dropdown-item" href="./family.html"><span><i class="fa-solid fa-seedling"></i></span>Menu
                    keluarga</a>
                </li>
              </ul>
            </li>
            <li class="nav-item nav-items">
              <a class="nav-link navbar-link" href="./galery.html">Galeri</a>
            </li>
            <li class="nav-item nav-items">
              <a class="nav-link navbar-link" href="./news.html">Pengumuman</a>
            </li>
          </ul>
          <!-- right -->
          <a class="btn btn-main-sm w-full-xl d-flex align-items-center justify-content-center" role="button" href="./profile.html"><i class="fa-solid fa-id-badge me-2"></i>Profile</a>
        </div>
      </div>
    </nav>
    <!-- end of navigation -->
    <!-- header -->
    <header class="container px-0"></header>
    <!-- end of header -->
    <!-- main -->
    <main>
      <section class="container container-space">
        <div class="empty-container"></div>
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
                  <img src="./assets/svg/warga-letter-logo.svg" alt="warga letter icon" />
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

    <!-- scroll to top button -->
    <div id="scroll-to-top">
      <div class="btn btn-main shadow">
        <i class="fa-solid fa-arrow-up"></i>
      </div>
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
  <!-- datatables -->
  <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
  <!-- fancybox -->
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
  <!-- custom -->
  <script src="./assets/js/scripts.js"></script>

  <!-- internal script -->
  <script></script>
</body>

</html>
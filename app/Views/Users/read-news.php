<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1"
    />

    <!-- Styles -->
    <!-- font -->
    <link
      rel="preconnect"
      href="https://fonts.googleapis.com"
    />
    <link
      rel="preconnect"
      href="https://fonts.gstatic.com"
      crossorigin
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <!-- fontawesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- custom -->
    <link
      rel="stylesheet"
      href="./assets/css/styles.css"
    />
    <link
      rel="stylesheet"
      href="./assets/css/responsiveness.css"
    />

    <!-- favicon -->
    <link
      rel="shortcut icon"
      href="./public/favicon.ico"
      type="image/x-icon"
    />
    <!-- title -->
    <title>Barita 1 : Portal Berita | Warga Site</title>
  </head>
  <body>
    <div>
      <!-- navigation -->
      <nav
        class="navbar navbar-expand-lg bg-white fixed-top navbar-container navbar-shadow"
      >
        <div class="container-fluid">
          <!-- brand -->
          <a
            class="navbar-brand fw-bold"
            href="./index.html"
            ><img
              src="./assets/svg/warga-letter-logo.svg"
              alt="warga-letter-icon"
          /></a>
          <!-- toggle mobile navbar -->
          <button
            class="navbar-toggler navbar-toggling shadow-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- link -->
          <div
            class="collapse navbar-collapse navbar-collapsing"
            id="navbarSupportedContent"
          >
            <!-- left -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item nav-items dropdown nav-item-dropdown">
                <a
                  class="nav-link navbar-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Warga
                </a>
                <ul class="dropdown-menu nav-dropdown-menu shadow">
                  <li>
                    <a
                      class="dropdown-item nav-dropdown-item"
                      href="./administration.html"
                      ><span><i class="fa-solid fa-rocket"></i></span
                      >Administrasi</a
                    >
                  </li>
                  <li>
                    <a
                      class="dropdown-item nav-dropdown-item"
                      href="./report.html"
                      ><span><i class="fa-solid fa-house-signal"></i></span
                      >Pelaporan</a
                    >
                  </li>
                  <li>
                    <a
                      class="dropdown-item nav-dropdown-item"
                      href="./family.html"
                      ><span><i class="fa-solid fa-seedling"></i></span>Menu
                      keluarga</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item nav-items">
                <a
                  class="nav-link navbar-link"
                  href="./galery.html"
                  >Galeri</a
                >
              </li>
              <li class="nav-item nav-items">
                <a
                  class="nav-link navbar-link active"
                  href="./news.html"
                  >Pengumuman</a
                >
              </li>
            </ul>
            <!-- right -->
            <a
              class="btn btn-main-outline-sm w-full-xl"
              role="button"
              href="./signin.html"
              >Masuk</a
            >
          </div>
        </div>
      </nav>
      <!-- end of navigation -->
      <!-- header -->
      <header class="container ps-0">
        <div class="header-container-back">
          <button
            class="btn btn-main-outline-xs"
            type="button"
            onclick="goBack()"
          >
            <i class="fa-solid fa-arrow-left me-2"></i>Kembali
          </button>
        </div>
      </header>
      <!-- end of header -->
      <!-- main -->
      <main>
        <section class="container container-space pt-2">
          <div class="row">
            <!-- left -->
            <div class="col-12 col-lg-8">
              <div class="pe-0 pe-lg-2">
                <figure class="news-image-container">
                  <img
                    src="./assets/img/image-1.jpg"
                    alt="news-cover"
                    class="news-image-cover"
                  />
                </figure>
                <div class="">
                  <h4 class="mb-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Inventore error eaque esse consectetur optio minus, tempora
                    eveniet
                  </h4>
                  <p class="mb-4 fst-italic text-basic">
                    <span>by Malik Ibrahim</span> . <span>20 Maret 2023</span>
                  </p>
                </div>
                <div class="">
                  <p class="">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Quaerat odio labore tempore delectus qui. Totam quos ducimus
                    nemo alias id. Ad beatae perspiciatis necessitatibus hic
                    nostrum distinctio, corrupti deleniti asperiores?
                  </p>
                  <p class="">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Nostrum quas mollitia aut sit, laboriosam optio culpa minima
                    magni molestiae ad provident quod debitis aspernatur
                    excepturi ipsa quos voluptatem! Placeat, a. Lorem ipsum
                    dolor, sit amet consectetur adipisicing elit. Nostrum natus
                    maxime animi totam adipisci itaque recusandae excepturi
                    earum expedita ad porro, sunt sequi dolor, alias facere hic
                    officia distinctio amet.
                  </p>
                </div>
                <p class="">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Impedit dignissimos voluptatibus sapiente magni nobis
                  molestiae fugiat ducimus maxime sed error. Explicabo
                  voluptatum modi esse rem aspernatur, optio illo aperiam
                  nesciunt.
                </p>
              </div>
            </div>
            <!-- right -->
            <div class="col-12 col-lg-4">
              <hr class="divide-related-news" />
              <div class="ps-0 ps-lg-2">
                <div class="mb-4">
                  <h5 class="text-center text-lg-start">Berita Terkait</h5>
                </div>
                <div class="related-news-container">
                  <a
                    href="./read-news.html"
                    class="related-news-card"
                  >
                    <figure class="news-image__wrap">
                      <img
                        src="./assets/img/image-7.jpg"
                        alt="news-1"
                        class="news-image__photo"
                      />
                    </figure>
                    <p class="news-title-card mb-2">
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                      Deserunt nostrum alias fugit.
                    </p>
                    <div class="d-flex align-items-center">
                      <p class="d-flex align-items-center me-3 mb-0">
                        <i
                          class="fa-solid fa-circle-user me-1 d-block fill-gray"
                        ></i
                        ><span class="text-sm d-block text-gray">Abimanyu</span>
                      </p>
                      <p class="d-flex align-items-center mb-0">
                        <i class="fa-solid fa-clock me-1 d-block fill-gray"></i
                        ><span class="text-sm d-block text-gray">50 menit</span>
                      </p>
                    </div>
                  </a>
                  <a
                    href="./read-news.html"
                    class="related-news-card"
                  >
                    <figure class="news-image__wrap">
                      <img
                        src="./assets/img/image-7.jpg"
                        alt="news-1"
                        class="news-image__photo"
                      />
                    </figure>
                    <p class="news-title-card mb-2">
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                      Deserunt nostrum alias fugit.
                    </p>
                    <div class="d-flex align-items-center">
                      <p class="d-flex align-items-center me-3 mb-0">
                        <i
                          class="fa-solid fa-circle-user me-1 d-block fill-gray"
                        ></i
                        ><span class="text-sm d-block text-gray">Abimanyu</span>
                      </p>
                      <p class="d-flex align-items-center mb-0">
                        <i class="fa-solid fa-clock me-1 d-block fill-gray"></i
                        ><span class="text-sm d-block text-gray">50 menit</span>
                      </p>
                    </div>
                  </a>
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
                <a
                  href="./index.html"
                  class="footer-logo-link"
                >
                  <figure class="footer-logo-wrapper">
                    <img
                      src="./assets/svg/warga-letter-logo.svg"
                      alt="warga-letter-icon"
                    />
                  </figure>
                </a>
                <p class="text-basic">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. In
                  assumenda.<br />
                  Jl. Raya Kebayoran Lama Bl A-5/194, DKI Jakarta, Kota Jakarta
                  12240
                </p>
                <button
                  class="btn btn-main"
                  type="button"
                >
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
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
      integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!-- jquery validate -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"
      integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <!-- bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
      integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
      crossorigin="anonymous"
    ></script>
    <!-- fontawesome -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"
      integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!-- custom -->
    <script src="./assets/js/scripts.js"></script>
    <script>
      //   onclick back to previous page
      function goBack() {
        window.history.back();
      }
    </script>
  </body>
</html>

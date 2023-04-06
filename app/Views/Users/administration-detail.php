<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Styles -->
    <!-- info -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
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
    <!-- datatables -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css"
    />
    <!-- custom -->
    <link rel="stylesheet" href="/homepage/assets/css/styles.css" />
    <link rel="stylesheet" href="/homepage/assets/css/responsiveness.css" />

    <!-- favicon -->
    <link
      rel="shortcut icon"
      href="/homepage/public/favicon.ico"
      type="image/x-icon"
    />
    <!-- title -->
    <title>Detail Pengajuan Administrasi | Warga Site</title>
  </head>
  <body>
    <div>
      <!-- navigation -->
      <nav
        class="navbar navbar-expand-lg bg-white fixed-top navbar-container navbar-shadow"
      >
        <div class="container-fluid">
          <!-- brand -->
          <a class="navbar-brand fw-bold" href="./index.html"
            ><img
              src="/homepage/assets/svg/warga-letter-logo.svg"
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
                  class="nav-link navbar-link dropdown-toggle active"
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
                      class="dropdown-item nav-dropdown-item active"
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
                <a class="nav-link navbar-link" href="./galery.html">Galeri</a>
              </li>
              <li class="nav-item nav-items">
                <a class="nav-link navbar-link" href="./news.html"
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
      <header class="container px-0">
        <div class="header-container-dashboard">
          <div class="mb-3">
            <button
              class="btn btn-main-outline-xs"
              type="button"
              onclick="goBack()"
            >
              <i class="fa-solid fa-arrow-left me-2"></i>Kembali
            </button>
          </div>
          <h2 class="mb-3">Selamat Datang di Dashboard Warga</h2>
          <p class="text-basic mb-0">
            Pengajuan permohonan administrasi Voluptate facere modi provident
            eum quae fugit quo doloremque nulla adipisci.
          </p>
        </div>
      </header>
      <!-- end of header -->
      <!-- main -->
      <main>
        <section class="container container-space pt-3">
          <form
            class="card-form-container card shadow"
            id="adminFormDetail"
            action="#"
            enctype="multipart/form-data"
            method="POST"
          >
            <div class="card-header">
              <p class="mb-0">Detail Pengajuan Permohonan Administrasi</p>
            </div>
            <div class="card-form-container card-body">
              <div>
                <!-- nama pemohon -->
                <div class="row mb-3">
                  <label
                    for="nama_pemohon"
                    class="col-sm-2 col-form-label forms-label"
                    >Nama Pemohon</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text"
                      class="form-control"
                      id="nama_pemohon"
                      name="nama_pemohon"
                      value="Nama Pemohon"
                      disabled
                    />
                  </div>
                </div>
                <!-- kategori -->
                <div class="row mb-3">
                  <label
                    for="kategori"
                    class="col-sm-2 col-form-label forms-label"
                    >Kategori</label
                  >
                  <div class="col-sm-10">
                    <select
                      id="kategori"
                      name="kategori"
                      required
                      class="form-select select-control"
                      disabled
                    >
                      <option value="">Pilih Kategori</option>
                      <option value="1">Kategori 1</option>
                      <option value="2">Kategori 2</option>
                      <option value="3">Kategori 3</option>
                    </select>
                  </div>
                </div>
                <!-- no surat -->
                <div class="row mb-3">
                  <label
                    for="no_surat"
                    class="col-sm-2 col-form-label forms-label"
                    >No Surat</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text"
                      id="no_surat"
                      name="no_surat"
                      class="form-control input-control"
                      placeholder="Masukkan No Surat"
                      required
                      value="0712032023/UNDIP/FSM/IF/RPL"
                      disabled
                    />
                  </div>
                </div>
                <!-- keperluan -->
                <div class="row mb-3">
                  <label
                    for="keperluan"
                    class="col-sm-2 col-form-label forms-label"
                    >Keperluan</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text"
                      id="keperluan"
                      name="keperluan"
                      class="form-control input-control"
                      placeholder="Masukkan Keperluan"
                      required
                      disabled
                      value="Keperluan Bersama"
                    />
                  </div>
                </div>
                <!-- deskripsi -->
                <div class="row mb-3">
                  <label
                    for="deskripsi"
                    class="col-sm-2 col-form-label forms-label"
                    >Deskripsi</label
                  >
                  <div class="col-sm-10">
                    <textarea
                      id="deskripsi"
                      name="deskripsi"
                      class="form-control input-control"
                      placeholder="Masukkan Deskripsi"
                      required
                      disabled
                    >
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem et assumenda corporis veritatis? Necessitatibus ullam commodi, iusto nostrum esse numquam officia consectetur, dolor sed, dolore voluptate atque nemo adipisci blanditiis?</textarea
                    >
                  </div>
                </div>
                <!-- status -->
                <div class="row mb-3">
                  <label
                    for="status"
                    class="col-sm-2 col-form-label forms-label"
                    >Status</label
                  >
                  <div class="col-sm-10">
                    <select
                      id="status"
                      name="status"
                      required
                      class="form-select select-control"
                      disabled
                    >
                      <option value="">Pilih Status</option>
                      <option value="1" selected>Diterima</option>
                      <option value="2">Ditolak</option>
                    </select>
                  </div>
                </div>
                <!-- berkas -->
                <div class="row mb-3">
                  <label
                    for="berkas"
                    class="col-sm-2 col-form-label forms-label"
                    >Berkas</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="file"
                      id="berkas"
                      name="berkas"
                      class="form-control input-control"
                      required
                    />
                  </div>
                </div>
                <!-- tanggal pengajuan -->
                <div class="row mb-3">
                  <label
                    for="tanggal_pengajuan"
                    class="col-sm-2 col-form-label forms-label"
                    >Tanggal Pengajuan</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="date"
                      id="tanggal_pengajuan"
                      name="tanggal_pengajuan"
                      class="form-control input-control"
                      required
                      disabled
                      value="2021-09-01"
                    />
                  </div>
                </div>
                <!-- tanggal penerimaan -->
                <div class="row mb-3">
                  <label
                    for="tanggal_penerimaan"
                    class="col-sm-2 col-form-label forms-label"
                    >Tanggal Penerimaan</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="date"
                      id="tanggal_penerimaan"
                      name="tanggal_penerimaan"
                      class="form-control input-control"
                      required
                      disabled
                      value="2021-09-01"
                    />
                  </div>
                </div>
              </div>
            </div>
          </form>
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
                    <img
                      src="/homepage/assets/svg/warga-letter-logo.svg"
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
                <button class="btn btn-main" type="button">Kontak Kami</button>
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
    <!-- jquery validation -->
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
    <!-- datatable -->
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"
    ></script>
    <!-- custom -->
    <script src="/homepage/assets/js/scripts.js"></script>

    <!-- script internal -->
    <script>
      //   onclick back to previous page
      function goBack() {
        window.history.back();
      }
    </script>
  </body>
</html>

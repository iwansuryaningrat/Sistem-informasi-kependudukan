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
    <title>Mahmudin Profile | Warga Site</title>
  </head>
  <body>
    <div>
      <!-- navigation profile -->
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
                  class="nav-link navbar-link"
                  href="./news.html"
                  >Pengumuman</a
                >
              </li>
            </ul>
            <!-- right -->
            <a
              class="btn btn-main-sm w-full-xl d-flex align-items-center justify-content-center"
              role="button"
              href="./profile.html"
              ><i class="fa-solid fa-id-badge me-2"></i>Profile</a
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
              onclick="location.href='./index.html'"
            >
              <i class="fa-solid fa-house me-2"></i>Beranda
            </button>
          </div>
          <h2 class="mb-3">Selamat Datang di Dashboard Profile</h2>
          <p class="text-basic mb-0">
            Voluptate facere modi provident eum quae fugit quo doloremque nulla
            adipisci.
          </p>
        </div>
      </header>
      <!-- end of header -->
      <!-- main -->
      <main>
        <section class="container container-space pt-3">
          <form
            class="card-form-container card shadow"
            id="profileForm"
            action="#"
            enctype="multipart/form-data"
            method="POST"
          >
            <div class="card-header">
              <p class="mb-0">Profile</p>
            </div>
            <div class="card-form-container card-body">
              <div>
                <!-- nik -->
                <div class="row mb-3">
                  <label
                    for="nik"
                    class="col-sm-2 col-form-label forms-label"
                    >NIK</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text"
                      class="form-control input-control"
                      id="nik"
                      name="nik"
                      required
                      placeholder="Masukkan NIK"
                      value=""
                    />
                  </div>
                </div>
                <!-- nama -->
                <div class="row mb-3">
                  <label
                    for="nama"
                    class="col-sm-2 col-form-label forms-label"
                    >Nama</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text"
                      class="form-control input-control"
                      id="nama"
                      name="nama"
                      required
                      placeholder="Masukkan Nama"
                      value=""
                    />
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
                    >
                      <option value="">Pilih Status</option>
                      <option value="1">Status 1</option>
                      <option value="2">Status 2</option>
                      <option value="3">Status 3</option>
                    </select>
                  </div>
                </div>
                <!-- jenis kelamin -->
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label forms-label"
                    >Jenis Kelamin</label
                  >
                  <div
                    class="col-sm-10"
                    id="radioFormGender"
                  >
                    <div class="d-flex align-items-center">
                      <div class="form-check me-4">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="jenis_kelamin"
                          id="pria"
                        />
                        <label
                          class="form-check-label"
                          for="pria"
                        >
                          Laki-laki
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="jenis_kelamin"
                          id="wanita"
                        />
                        <label
                          class="form-check-label"
                          for="wanita"
                        >
                          Perempuan
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- tempat lahir -->
                <div class="row mb-3">
                  <label
                    for="tempat_lahir"
                    class="col-sm-2 col-form-label forms-label"
                    >Tempat Lahir</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text"
                      class="form-control input-control"
                      id="tempat_lahir"
                      name="tempat_lahir"
                      required
                      placeholder="Masukkan Tempat Lahir"
                      value=""
                    />
                  </div>
                </div>
                <!-- tanggal lahir -->
                <div class="row mb-3">
                  <label
                    for="tanggal_lahir"
                    class="col-sm-2 col-form-label forms-label"
                    >Tanggal Lahir</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="date"
                      class="form-control input-control"
                      id="tanggal_lahir"
                      name="tanggal_lahir"
                      required
                    />
                  </div>
                </div>
                <!-- status perkawinan -->
                <div class="row mb-3">
                  <label
                    for="status_perkawinan"
                    class="col-sm-2 col-form-label forms-label"
                    >Status Perkawinan</label
                  >
                  <div class="col-sm-10">
                    <select
                      id="status_perkawinan"
                      name="status_perkawinan"
                      required
                      class="form-select select-control"
                    >
                      <option value="">Pilih Status Perkawinan</option>
                      <option value="1">Status Perkawinan 1</option>
                      <option value="2">Status Perkawinan 2</option>
                      <option value="3">Status Perkawinan 3</option>
                    </select>
                  </div>
                </div>
                <!-- agama -->
                <div class="row mb-3">
                  <label
                    for="agama"
                    class="col-sm-2 col-form-label forms-label"
                    >Agama</label
                  >
                  <div class="col-sm-10">
                    <select
                      id="agama"
                      name="agama"
                      required
                      class="form-select select-control"
                    >
                      <option value="">Pilih Agama</option>
                      <option value="1">Agama 1</option>
                      <option value="2">Agama 2</option>
                      <option value="3">Agama 3</option>
                    </select>
                  </div>
                </div>
                <!-- pendidikan -->
                <div class="row mb-3">
                  <label
                    for="pendidikan"
                    class="col-sm-2 col-form-label forms-label"
                    >Pendidikan</label
                  >
                  <div class="col-sm-10">
                    <select
                      id="pendidikan"
                      name="pendidikan"
                      required
                      class="form-select select-control"
                    >
                      <option value="">Pilih Pendidikan</option>
                      <option value="1">Pendidikan 1</option>
                      <option value="2">Pendidikan 2</option>
                      <option value="3">Pendidikan 3</option>
                    </select>
                  </div>
                </div>
                <!-- pekerjaan -->
                <div class="row mb-3">
                  <label
                    for="pekerjaan"
                    class="col-sm-2 col-form-label forms-label"
                    >Pekerjaan</label
                  >
                  <div class="col-sm-10">
                    <select
                      id="pekerjaan"
                      name="pekerjaan"
                      required
                      class="form-select select-control"
                    >
                      <option value="">Pilih Pekerjaan</option>
                      <option value="1">Pekerjaan 1</option>
                      <option value="2">Pekerjaan 2</option>
                      <option value="3">Pekerjaan 3</option>
                    </select>
                  </div>
                </div>
                <!-- no. hp -->
                <div class="row mb-3">
                  <label
                    for="no_hp"
                    class="col-sm-2 col-form-label forms-label"
                    >No. HP</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="text"
                      class="form-control input-control"
                      id="no_hp"
                      name="no_hp"
                      required
                      placeholder="Masukkan No. HP"
                      value=""
                    />
                  </div>
                </div>
                <!-- email -->
                <div class="row mb-3">
                  <label
                    for="email"
                    class="col-sm-2 col-form-label forms-label"
                    >Email</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="email"
                      class="form-control input-control"
                      id="email"
                      name="email"
                      required
                      placeholder="Masukkan Email"
                      value=""
                    />
                  </div>
                </div>
                <!-- foto -->
                <div class="row mb-3">
                  <label
                    for="foto"
                    class="col-sm-2 col-form-label forms-label"
                    >Foto</label
                  >
                  <div class="col-sm-10">
                    <input
                      type="file"
                      class="form-control input-control"
                      id="foto"
                      name="foto"
                      required
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="w-100 d-flex justify-content-end">
                <button
                  type="submit"
                  form="profileForm"
                  class="btn btn-main btn-submit"
                  id="profileFormButton"
                >
                  Perbarui
                </button>
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

    <!-- internal script -->
    <script>
      // add method validation only letters
      $.validator.addMethod('alphabetOnly', function (value, element) {
        return this.optional(element) || value == value.match(/^[A-Za-z\s']+$/);
      });
      // validate
      $(document).ready(function () {
        $('#profileForm').validate({
          rules: {
            nik: {
              required: true,
              number: true,
              minlength: 16,
              maxlength: 16,
            },
            nama: {
              required: true,
              alphabetOnly: true,
            },
            status: {
              required: true,
            },
            jenis_kelamin: {
              required: true,
            },
            tampat_lahir: {
              required: true,
              alphabetOnly: true,
            },
            tanggal_lahir: {
              required: true,
            },
            status_perkawinan: {
              required: true,
            },
            agama: {
              required: true,
            },
            pendidikan: {
              required: true,
            },
            pekerjaan: {
              required: true,
            },
            no_hp: {
              required: true,
              number: true,
              minlength: 10,
              maxlength: 13,
            },
            email: {
              required: true,
              email: true,
            },
            foto: {
              required: true,
              extension: 'jpg|jpeg|png',
            },
          },
          messages: {
            nik: {
              required: 'NIK tidak boleh kosong.',
              number: 'NIK harus berupa angka.',
              minlength: 'NIK harus berjumlah 16 digit.',
              maxlength: 'NIK harus berjumlah 16 digit.',
            },
            nama: {
              required: 'Nama tidak boleh kosong.',
            },
            status: {
              required: 'Status tidak boleh kosong.',
            },
            jenis_kelamin: {
              required: 'Jenis kelamin tidak boleh kosong.',
            },
            tempat_lahir: {
              required: 'Tempat lahir tidak boleh kosong.',
            },
            tanggal_lahir: {
              required: 'Tanggal lahir tidak boleh kosong.',
            },
            status_perkawinan: {
              required: 'Status perkawinan tidak boleh kosong.',
            },
            agama: {
              required: 'Agama tidak boleh kosong.',
            },
            pendidikan: {
              required: 'Pendidikan tidak boleh kosong.',
            },
            pekerjaan: {
              required: 'Pekerjaan tidak boleh kosong.',
            },
            no_hp: {
              required: 'No. HP tidak boleh kosong.',
              number: 'No. HP harus berupa angka.',
              minlength: 'No. HP harus berjumlah 10-13 digit.',
              maxlength: 'No. HP harus berjumlah 10-13 digit.',
            },
            email: {
              required: 'Email tidak boleh kosong.',
              email: 'Email tidak valid.',
            },
            foto: {
              required: 'Foto tidak boleh kosong.',
              extension: 'Foto harus berupa file gambar.',
            },
          },
          errorPlacement: function (error, element) {
            if (element.is(':radio')) {
              error.appendTo('#radioFormGender');
            } else {
              error.insertAfter(element);
            }
          },
        });
        $('#profileFormButton').on('click', () => {
          console.log($('#profileForm').valid());
        });
      });
    </script>
  </body>
</html>

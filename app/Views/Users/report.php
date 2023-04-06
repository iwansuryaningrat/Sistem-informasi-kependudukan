<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- styles -->
  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- datatables bootstrap -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" />
  <!-- custom styles -->
  <link rel="stylesheet" href="./assets/css/styles.css" />
  <link rel="stylesheet" href="./assets/css/responsiveness.css" />

  <!-- favicon -->
  <link rel="shortcut icon" href="./public/favicon.ico" type="image/x-icon" />
  <!-- title -->
  <title>Menu Pelaporan | Warga Site</title>
</head>

<body>
  <div>
    <!-- navigation -->
    <nav class="navbar navbar-expand-lg bg-white fixed-top navbar-container navbar-shadow">
      <div class="container-fluid">
        <!-- brand -->
        <a class="navbar-brand fw-bold" href="./index.html"><img src="./assets/svg/warga-letter-logo.svg" alt="warga-letter-icon" /></a>
        <!-- toggle mobile navbar -->
        <button class="navbar-toggler navbar-toggling shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- link -->
        <div class="collapse navbar-collapse navbar-collapsing" id="navbarSupportedContent">
          <!-- left -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item nav-items dropdown nav-item-dropdown">
              <a class="nav-link navbar-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Warga
              </a>
              <ul class="dropdown-menu nav-dropdown-menu shadow">
                <li>
                  <a class="dropdown-item nav-dropdown-item" href="./administration.html"><span><i class="fa-solid fa-rocket"></i></span>Administrasi</a>
                </li>
                <li>
                  <a class="dropdown-item nav-dropdown-item active" href="./report.html"><span><i class="fa-solid fa-house-signal"></i></span>Pelaporan</a>
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
          <a class="btn btn-main-outline-sm w-full-xl" role="button" href="./signin.html">Masuk</a>
        </div>
      </div>
    </nav>
    <!-- end of navigation -->
    <!-- header -->
    <header class="container px-0">
      <div class="header-container-dashboard">
        <h2 class="mb-3">Selamat Datang di Dashboard Warga</h2>
        <p class="text-basic mb-0">
          Riwayat pelaporan lorem ipsum dolor sit amet consectetur adipisicing
          elit. Aut natus dolores nam vero ullam.
        </p>
      </div>
    </header>
    <!-- end of header -->
    <!-- main -->
    <main>
      <section class="container container-space pt-3">
        <div class="card-table-container shadow">
          <!-- table -->
          <div class="table-container">
            <div class="table-responsive">
              <table id="tableReport" class="table table-custom w-100">
                <thead class="heading-table">
                  <tr>
                    <th>No</th>
                    <th class="filter-none">Nama Pelapor</th>
                    <th class="filter-none">NIK Pelapor</th>
                    <th class="filter-none">Nama Terlapor</th>
                    <th class="filter-none">NIK Terlapor</th>
                    <th class="filter-none">Kategori</th>
                    <th class="filter-none">Laporan</th>
                    <th>Tanggal Pelaporan</th>
                    <th class="filter-none">Status</th>
                    <th class="filter-none"></th>
                  </tr>
                </thead>
                <tbody class="body-table">
                  <tr>
                    <td>1</td>
                    <td>Khoeru Roziqin</td>
                    <td>3325060204010001</td>
                    <td>Bambang Sujatmiko</td>
                    <td>3325010203005</td>
                    <td>Kategori 3</td>
                    <td>Laporan 1</td>
                    <td>10 Maret 2023</td>
                    <td>
                      <div class="d-flex justify-content-start">
                        <div class="status-badge badge-accepted">
                          <i class="fa-solid fa-circle"></i>Diterima
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="dropdown dropdown-table pe-3">
                        <button class="btn dropdown-table-icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-ellipsis"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-table shadow">
                          <li>
                            <a class="dropdown-item dropdown-table-item" href="./report-form-edit.html"><i class="fa-solid fa-pen-to-square me-2"></i>Edit</a>
                          </li>
                          <li>
                            <a class="dropdown-item dropdown-table-item" href="./report-detail.html"><i class="fa-regular fa-folder-open me-2"></i>Detail</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Iwan Suryaningrat</td>
                    <td>3325060204010006</td>
                    <td>Ronaldo Syyui</td>
                    <td>3325010203002</td>
                    <td>Kategori 2</td>
                    <td>Laporan 2</td>
                    <td>14 Maret 2023</td>
                    <td>
                      <div class="d-flex justify-content-start">
                        <div class="status-badge badge-onproccess">
                          <i class="fa-solid fa-circle"></i>Dalam Proses
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="dropdown dropdown-table pe-3">
                        <button class="btn dropdown-table-icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-ellipsis"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-table shadow">
                          <li>
                            <a class="dropdown-item dropdown-table-item" href="./report-form-edit.html"><i class="fa-solid fa-pen-to-square me-2"></i>Edit</a>
                          </li>
                          <li>
                            <a class="dropdown-item dropdown-table-item" href="./report-detail.html"><i class="fa-regular fa-folder-open me-2"></i>Detail</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Rafli Ferdian Ramadhan</td>
                    <td>3325060204010004</td>
                    <td>Maman Abdurrahman</td>
                    <td>3325010203001</td>
                    <td>Kategori 1</td>
                    <td>Laporan 3</td>
                    <td>20 Maret 2023</td>
                    <td>
                      <div class="d-flex justify-content-start">
                        <div class="status-badge badge-done">
                          <i class="fa-solid fa-circle"></i>Selesai
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="dropdown dropdown-table pe-3">
                        <button class="btn dropdown-table-icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-ellipsis"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-table shadow">
                          <li>
                            <a class="dropdown-item dropdown-table-item" href="./report-form-edit.html"><i class="fa-solid fa-pen-to-square me-2"></i>Edit</a>
                          </li>
                          <li>
                            <a class="dropdown-item dropdown-table-item" href="./report-detail.html"><i class="fa-regular fa-folder-open me-2"></i>Detail</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Lathifa Inayah Sari</td>
                    <td>3325060204010005</td>
                    <td>Mumun Murdiyanti</td>
                    <td>3325010203012</td>
                    <td>Kategori 1</td>
                    <td>Laporan 1</td>
                    <td>25 Juni 2023</td>
                    <td>
                      <div class="d-flex justify-content-start">
                        <div class="status-badge badge-rejected">
                          <i class="fa-solid fa-circle"></i>Ditolak
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="dropdown dropdown-table pe-3">
                        <button class="btn dropdown-table-icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-ellipsis"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-table shadow">
                          <li>
                            <a class="dropdown-item dropdown-table-item" href="./report-form-edit.html"><i class="fa-solid fa-pen-to-square me-2"></i>Edit</a>
                          </li>
                          <li>
                            <a class="dropdown-item dropdown-table-item" href="./report-detail.html"><i class="fa-regular fa-folder-open me-2"></i>Detail</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
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

    <!-- scroll to top button -->
    <div id="scroll-to-top">
      <div class="btn btn-main shadow">
        <i class="fa-solid fa-arrow-up"></i>
      </div>
    </div>
  </div>
  <!-- end of footer -->

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
  <!-- custom script -->
  <script src="./assets/js/scripts.js"></script>

  <!-- script internal -->
  <script>
    $(document).ready(function() {
      // display tables
      $('#tableReport').dataTable({
        order: [],
        columnDefs: [{
          targets: 'filter-none',
          orderable: false,
        }, ],
        language: {
          searchPlaceholder: 'Cari pelaporan',
          search: '',
          sLengthMenu: '_MENU_',
          sInfo: 'Menampilkan _START_ - _END_ dari _TOTAL_ data',
          sInfoFiltered: '(dari _MAX_ total data)',
          sInfoEmpty: 'Menampilkan 0 data',
          sZeroRecords: 'Tidak ada data yang sesuai',
          oPaginate: {
            sPrevious: '<i class="fa-solid fa-chevron-left text-sm"></i>',
            sNext: '<i class="fa-solid fa-chevron-right text-sm"></i>',
          },
        },
        lengthMenu: [5, 10, 25, 50, 100],
        pageLength: 10, // default page length
        dom: "<'row pb-2'<'col-12 col-md-5 mb-3 mb-md-0'f><'col-12 col-sm-6 col-md-2 pl-md-0 mb-3 mb-sm-0'l>>" +
          "<'row'<'col-sm-12'tr>>" +
          "<'row pt-2'<'col-sm-12 col-md-5 info-table mb-3 mb-md-0'i><'col-sm-12 col-md-7'p>>",
      });

      // add button create report
      $('#tableReport_wrapper .row:first-child').append(
        '<div class="col-12 col-sm-6 col-md-5"><div class="d-flex justify-content-end pe-2"><a href="./report-form-add.html" class="btn btn-main-xs w-full-md" role="button"><i class="fa-solid fa-plus me-2"></i>Buat Laporan</a></div></div>'
      );

      // change class of datatable reportTable
      $('#tableReport_wrapper').addClass('pt-3 pb-2');
      $('#tableReport_filter .form-control').addClass(
        'input-control-sm w-100'
      );
      $('#tableReport_filter label').addClass(
        'w-100 d-block position-relative'
      );
      $('#tableReport_filter label').append(
        '<i class="fa-solid fa-magnifying-glass search-input-icon"></i>'
      );
      $('#tableReport_length label').addClass(
        'w-100 d-block position-relative'
      );
      $('#tableReport_length label').append(
        '<i class="fa-solid fa-layer-group filter-input-icon"></i>'
      );
      $('#tableReport_length .form-select').addClass(
        'select-control-sm select-length-table w-full-md'
      );
      $('#tableReport_info').addClass(
        'text-basic d-flex align-items-center ps-2 pt-0'
      );
      $('#tableReport_wrapper .row .info-table').prepend(
        '<i class="fa-solid fa-table-list ps-2 text-basic"></i>'
      );
    });
  </script>
</body>

</html>
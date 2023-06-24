<?php $this->extend('users/template/layout'); ?>
<?php $this->section('homepage'); ?>

<!-- header -->
<header class="container px-0">
  <div class="header-container-dashboard">
    <h2 class="mb-3">Selamat Datang di Dashboard Warga</h2>
    <p class="text-basic mb-0">
      Daftar anggota keluarga oluptate facere modi provident eum quae
      fugit quo doloremque nulla adipisci.
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
          <table id="tableFamily" class="table table-custom w-100">
            <thead class="heading-table">
              <tr>
                <th>No</th>
                <th class="filter-none">Nama Lengkap</th>
                <th class="filter-none">NIK</th>
                <th class="filter-none">Jenis Kelamin</th>
                <th class="filter-none">Tempat Lahir</th>
                <th class="filter-none">Tanggal Lahir</th>
                <th class="filter-none">Agama</th>
                <th class="filter-none">Pendidikan</th>
                <th class="filter-none">Jenis Pekerjaan</th>
                <th class="filter-none"></th>
              </tr>
            </thead>
            <tbody class="body-table">
              <tr>
                <td>1</td>
                <td>Khoeru Roziqin</td>
                <td>3325080702010001</td>
                <td>Laki-laki</td>
                <td>Bandung</td>
                <td>07 Februari 2001</td>
                <td>Islam</td>
                <td>SLTA/Sederajat</td>
                <td>Pelajar/Mahasiswa</td>
                <td>
                  <div class="dropdown dropdown-table pe-3">
                    <button class="btn dropdown-table-icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa-solid fa-ellipsis"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-table shadow">
                      <li>
                        <a class="dropdown-item dropdown-table-item" href="/users/formeditkeluarga"><i class="fa-solid fa-pen-to-square me-2"></i>Edit</a>
                      </li>
                      <li>
                        <a class="dropdown-item dropdown-table-item" href="/users/detailkeluarga"><i class="fa-regular fa-folder-open me-2"></i>Detail</a>
                      </li>
                    </ul>
                  </div>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Iwan Suryaningrat</td>
                <td>3325080702010001</td>
                <td>Laki-laki</td>
                <td>Bandung</td>
                <td>07 Juni 2001</td>
                <td>Islam</td>
                <td>SLTA/Sederajat</td>
                <td>Pelajar/Mahasiswa</td>
                <td>
                  <div class="dropdown dropdown-table pe-3">
                    <button class="btn dropdown-table-icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa-solid fa-ellipsis"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-table shadow">
                      <li>
                        <a class="dropdown-item dropdown-table-item" href="/users/formeditkeluarga"><i class="fa-solid fa-pen-to-square me-2"></i>Edit</a>
                      </li>
                      <li>
                        <a class="dropdown-item dropdown-table-item" href="/users/detailkeluarga"><i class="fa-regular fa-folder-open me-2"></i>Detail</a>
                      </li>
                    </ul>
                  </div>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Rafli Ferdian Ramadhan</td>
                <td>3325080702010001</td>
                <td>Laki-laki</td>
                <td>Bandung</td>
                <td>07 Januari 2010</td>
                <td>Islam</td>
                <td>SLTA/Sederajat</td>
                <td>Pelajar/Mahasiswa</td>
                <td>
                  <div class="dropdown dropdown-table pe-3">
                    <button class="btn dropdown-table-icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa-solid fa-ellipsis"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-table shadow">
                      <li>
                        <a class="dropdown-item dropdown-table-item" href="/users/formeditkeluarga"><i class="fa-solid fa-pen-to-square me-2"></i>Edit</a>
                      </li>
                      <li>
                        <a class="dropdown-item dropdown-table-item" href="/users/detailkeluarga"><i class="fa-regular fa-folder-open me-2"></i>Detail</a>
                      </li>
                    </ul>
                  </div>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>Lathifa Inayah Sari</td>
                <td>3325080702010001</td>
                <td>Perempuan</td>
                <td>Bandung</td>
                <td>06 Juni 2002</td>
                <td>Islam</td>
                <td>SLTA/Sederajat</td>
                <td>Pelajar/Mahasiswa</td>
                <td>
                  <div class="dropdown dropdown-table pe-3">
                    <button class="btn dropdown-table-icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa-solid fa-ellipsis"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-table shadow">
                      <li>
                        <a class="dropdown-item dropdown-table-item" href="/users/formeditkeluarga"><i class="fa-solid fa-pen-to-square me-2"></i>Edit</a>
                      </li>
                      <li>
                        <a class="dropdown-item dropdown-table-item" href="/users/detailkeluarga"><i class="fa-regular fa-folder-open me-2"></i>Detail</a>
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

<?= $this->endSection(); ?>

<?php $this->section('script'); ?>

<!-- script internal -->
<script>
  $(document).ready(function() {
    // display tables
    $('#tableFamily').dataTable({
      order: [],
      columnDefs: [{
        targets: 'filter-none',
        orderable: false,
      }, ],
      language: {
        searchPlaceholder: 'Cari anggota keluarga',
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
    $('#tableFamily_wrapper .row:first-child').append(
      '<div class="col-12 col-sm-6 col-md-5"><div class="d-flex justify-content-end pe-2"><a href="/users/formtambahkeluarga" class="btn btn-main-xs w-full-md" role="button"><i class="fa-solid fa-plus me-2"></i>Tambah Keluarga</a></div></div>'
    );

    // change class of datatable familyTable
    $('#tableFamily_wrapper').addClass('pt-3 pb-2');
    $('#tableFamily_filter .form-control').addClass(
      'input-control-sm w-100'
    );
    $('#tableFamily_filter label').addClass(
      'w-100 d-block position-relative'
    );
    $('#tableFamily_filter label').append(
      '<i class="fa-solid fa-magnifying-glass search-input-icon"></i>'
    );
    $('#tableFamily_length label').addClass(
      'w-100 d-block position-relative'
    );
    $('#tableFamily_length label').append(
      '<i class="fa-solid fa-layer-group filter-input-icon"></i>'
    );
    $('#tableFamily_length .form-select').addClass(
      'select-control-sm select-length-table w-full-md'
    );
    $('#tableFamily_info').addClass(
      'text-basic d-flex align-items-center ps-2 pt-0'
    );
    $('#tableFamily_wrapper .row .info-table').prepend(
      '<i class="fa-solid fa-table-list ps-2 text-basic"></i>'
    );
  });
</script>

<?= $this->endSection(); ?>
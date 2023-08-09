<?php $this->extend('users/template/layout'); ?>
<?php $this->section('homepage'); ?>

<!-- header -->
<header class="container px-0">
  <div class="header-container-dashboard">
    <h3 class="mb-2">Daftar Anggota Keluarga</h3>
  </div>
</header>
<!-- end of header -->

<!-- main -->
<main>
  <section class="container container-space pt-0">
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
              <?php $i = 1;
              foreach ($anggotaKeluarga as $keluarga) : ?>
                <tr>
                  <td><?= $i ?></td>
                  <td><?= $keluarga['nama'] ?></td>
                  <td><?= $keluarga['nik'] ?></td>
                  <td><?= $keluarga['jenis_kelamin'] ?></td>
                  <td><?= $keluarga['tempat_lahir'] ?></td>
                  <td><?= $keluarga['tgl_lahir'] ?></td>
                  <td><?= $keluarga['agama'] ?></td>
                  <td><?= $keluarga['pendidikan'] ?></td>
                  <td><?= $keluarga['pekerjaan'] ?></td>
                  <td>
                    <div class="dropdown dropdown-table pe-3">
                      <button class="btn dropdown-table-icon" type="button" data-bs-toggle="dropdown" aria-expanded="false" title="Other Option">
                        <i class="fa-solid fa-ellipsis"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-table shadow">
                        <li>
                          <a class="dropdown-item dropdown-table-item" href="/users/formEditKeluarga/<?= $keluarga['nik'] ?>"><i class="fa-solid fa-pen-to-square me-2"></i>Edit</a>
                        </li>
                        <li>
                          <a class="dropdown-item dropdown-table-item" href="/users/detailkeluarga/<?= $keluarga['nik'] ?>"><i class="fa-regular fa-folder-open me-2"></i>Detail</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
              <?php $i++;
              endforeach ?>
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
    $("#tableFamily").dataTable({
      order: [],
      columnDefs: [{
        targets: "filter-none",
        orderable: false,
      }, ],
      language: {
        searchPlaceholder: "Cari anggota keluarga",
        search: "",
        sLengthMenu: "_MENU_",
        sInfo: "Menampilkan _START_ - _END_ dari _TOTAL_ data",
        sInfoFiltered: "(dari _MAX_ total data)",
        sInfoEmpty: "Menampilkan 0 data",
        sZeroRecords: "Tidak ada data yang sesuai",
        oPaginate: {
          sPrevious: '<i class="fa-solid fa-chevron-left text-sm"></i>',
          sNext: '<i class="fa-solid fa-chevron-right text-sm"></i>',
        },
      },
      lengthMenu: [5, 10, 25, 50, 100],
      pageLength: 10, // default page length
      dom: "<'row pb-2'<'col-12 col-md-5 mb-3 mb-md-0'f><'col-6 col-md-2 pl-md-0 mb-3 mb-sm-0'l>>" +
        "<'row'<'col-sm-12'tr>>" +
        "<'row pt-2'<'col-sm-12 col-md-5 info-table mb-3 mb-md-0'i><'col-sm-12 col-md-7'p>>",
    });

    // add button create report
    $("#tableFamily_wrapper .row:first-child").append(
      `<div class="col-6 col-md-5">
        <div class="d-flex align-items-center justify-content-end">
          <div class="d-flex justify-content-end pe-3">
            <a href="/users/formTambahKeluarga" class="btn btn-main-xs w-full-md" role="button" style="height: 36px;">
              <i class="fa-solid fa-plus me-sm-2"></i><span class="d-none d-sm-inline-block me-1">Tambah</span><span class="d-none d-xl-inline-block">Keluarga</span>
            </a>
          </div>
          <div class="d-flex justify-content-end pe-2">
            <a href="/users/editKeluarga/<?= $kk ?>" class="btn btn-main-xs w-full-md" role="button" style="height: 36px;">
              <i class="fa-solid fa-pen-to-square me-sm-2"></i><span class="d-none d-sm-inline-block me-1">Edit</span><span class="d-none d-xl-inline-block">Keluarga</span>
            </a>
          </div>
        </div>
      </div>`
    );

    // change class of datatable familyTable
    $("#tableFamily_wrapper").addClass("pt-3 pb-2");
    $("#tableFamily_filter .form-control").addClass(
      "input-control-sm w-100"
    );
    $("#tableFamily_filter label").addClass(
      "w-100 d-block position-relative"
    );
    $("#tableFamily_filter label").append(
      '<i class="fa-solid fa-magnifying-glass search-input-icon"></i>'
    );
    $("#tableFamily_length label").addClass(
      "w-100 d-block position-relative"
    );
    $("#tableFamily_length label").append(
      '<i class="fa-solid fa-layer-group filter-input-icon"></i>'
    );
    $("#tableFamily_length .form-select").addClass(
      "select-control-sm select-length-table w-full-md"
    );
    $("#tableFamily_info").addClass(
      "text-basic d-flex align-items-center ps-2 pt-0"
    );
    $("#tableFamily_wrapper .row .info-table").prepend(
      '<i class="fa-solid fa-table-list ps-2 text-basic"></i>'
    );
  });
</script>

<script>
  //== Class definition
  var SweetAlert2Demo = function() {

    //== Demos
    var initDemos = function() {

      <?php if (session()->getFlashdata('error')) : ?>
        swal("Ups!", "<?= session()->getFlashdata('error') ?>", {
          icon: "error",
          buttons: {
            confirm: {
              className: 'btn btn-danger'
            }
          },
        });
      <?php endif; ?>

      <?php if (session()->getFlashdata('success')) : ?>
        swal("Selamat!", "<?= session()->getFlashdata('success') ?>", {
          icon: "success",
          buttons: {
            confirm: {
              className: 'btn btn-success'
            }
          },
        });
      <?php endif; ?>
    };

    return {
      //== Init
      init: function() {
        initDemos();
      },
    };
  }();

  //== Class Initialization
  jQuery(document).ready(function() {
    SweetAlert2Demo.init();
  });
</script>

<?= $this->endSection(); ?>
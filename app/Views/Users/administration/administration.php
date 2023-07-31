<?php $this->extend('users/template/layout'); ?>
<?php $this->section('homepage'); ?>

<!-- header -->
<header class="container px-0">
  <div class="header-container-dashboard">
    <h3 class="mb-2">Riwayat Pengajuan Administrasi</h3>
  </div>
</header>
<!-- end of header -->

<!-- main -->
<main>
  <section class="container container-space pt-0">
    <div class="card-table-container shadow">

      <!-- get flashdata message -->
      <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?= session()->getFlashdata('success') ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>

      <!-- get flashdata message -->
      <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <?= session()->getFlashdata('error') ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>

      <!-- table -->
      <div class="table-container">
        <div class="table-responsive">
          <table id="tableAdmin" class="table table-custom w-100">
            <thead class="heading-table">
              <tr>
                <th>No</th>
                <th class="filter-none">Nama Pemohon</th>
                <th class="filter-none">Kategori</th>
                <th class="filter-none">Nomor Surat</th>
                <th class="filter-none">Status</th>
                <th class="">Tangal Pengajuan</th>
                <th class="">Tanggal Penerimaan</th>
                <th class="filter-none"></th>
              </tr>
            </thead>
            <tbody class="body-table">
              <?php $i = 1;
              foreach ($administrasiData as $data) : ?>
                <tr>
                  <td><?= $i ?></td>
                  <td><?= $data['nama'] ?></td>
                  <td><?= $data['kategori'] ?></td>
                  <td><?= $data['no_surat'] ?></td>
                  <td>
                    <div class="d-flex justify-content-start">
                      <div class="status-badge badge-accepted">
                        <i class="fa-solid fa-circle"></i>Diterima
                      </div>
                    </div>
                  </td>
                  <td><?= $data['created_at'] ?></td>
                  <td><?= $data['tgl_penerimaan'] ?></td>
                  <td>
                    <div class="dropdown dropdown-table pe-3">
                      <button class="btn dropdown-table-icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-ellipsis"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-table shadow">
                        <li>
                          <a class="dropdown-item dropdown-table-item" href="./administration-form-edit.html"><i class="fa-solid fa-pen-to-square me-2"></i>Edit</a>
                        </li>
                        <li>
                          <a class="dropdown-item dropdown-table-item" href="./administration-detail.html"><i class="fa-regular fa-folder-open me-2"></i>Detail</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
              <?php $i++;
              endforeach; ?>
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
    $("#tableAdmin").dataTable({
      order: [],
      columnDefs: [{
        targets: "filter-none",
        orderable: false,
      }, ],
      language: {
        searchPlaceholder: "Cari riwayat pengajuan",
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
    $("#tableAdmin_wrapper .row:first-child").append(
      '<div class="col-6 col-md-5 ps-2 ps-sm-3"><div class="d-flex justify-content-end pe-2"><a href="./administration-form-add.html" class="btn btn-main-xs w-full-md" role="button" style="height: 36px;"><i class="fa-solid fa-plus me-2"></i>Buat Pengajuan</a></div></div>'
    );

    // change class of datatable adminTable
    $("#tableAdmin_wrapper").addClass("pt-3 pb-2");
    $("#tableAdmin_filter .form-control").addClass(
      "input-control-sm w-100"
    );
    $("#tableAdmin_filter label").addClass(
      "w-100 d-block position-relative"
    );
    $("#tableAdmin_filter label").append(
      '<i class="fa-solid fa-magnifying-glass search-input-icon"></i>'
    );
    $("#tableAdmin_length label").addClass(
      "w-100 d-block position-relative"
    );
    $("#tableAdmin_length label").append(
      '<i class="fa-solid fa-layer-group filter-input-icon"></i>'
    );
    $("#tableAdmin_length .form-select").addClass(
      "select-control-sm select-length-table w-full-md"
    );
    $("#tableAdmin_info").addClass(
      "text-basic d-flex align-items-center ps-2 pt-0"
    );
    $("#tableAdmin_wrapper .row .info-table").prepend(
      '<i class="fa-solid fa-table-list ps-2 text-basic"></i>'
    );
  });
</script>

<?= $this->endSection(); ?>
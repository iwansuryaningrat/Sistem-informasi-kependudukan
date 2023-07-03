<!-- Detail Pelaporan | Warga Site -->
<?php $this->extend('users/template/layout'); ?>
<?php $this->section('homepage'); ?>

<!-- header -->
<header class="container px-0">
  <div class="header-container-dashboard-form">
    <div class="mb-4">
      <button class="btn btn-main-outline-xs" type="button" onclick="goBack()">
        <i class="fa-solid fa-arrow-left me-2"></i>Kembali
      </button>
    </div>
    <h3 class="mb-2">Riwayat Pelaporan</h3>
  </div>
</header>
<!-- end of header -->

<!-- main -->
<main>
  <section class="container container-space pt-0">
    <form class="card-form-container card" id="reportFormDetail" action="#" enctype="multipart/form-data" method="POST">
      <!-- header -->
      <div class="card-header card-form-header">
        <p class="mb-0 fw-semibold">Detail Pelaporan</p>
      </div>
      <!-- main -->
      <div class="card-body card-form-body">
        <div>
          <!-- nama pelapor -->
          <div class="row mb-3">
            <label for="nama_pelapor" class="col-md-2 form-label forms-label mt-md-2">Nama Pelapor <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="nama_pelapor" name="nama_pelapor" value="Nama Pelapor" disabled />
            </div>
          </div>
          <!-- nik pelapor -->
          <div class="row mb-3">
            <label for="nik_pelapor" class="col-md-2 form-label forms-label mt-md-2">NIK Pelapor <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="nik_pelapor" name="nik_pelapor" value="1234567890123456" disabled />
            </div>
          </div>
          <!-- nama terlapor -->
          <div class="row mb-3">
            <label for="nama_terlapor" class="col-md-2 form-label forms-label mt-md-2">Nama Terlapor <span class="text-important">*</span></label>
            <div class="col-md-10">
              <select id="nama_terlapor" name="nama_terlapor" required class="form-select select-control" disabled>
                <option value="">Pilih Nama Terlapor</option>
                <option value="1">Nama Terlapor 1</option>
                <option value="2" selected>Nama Terlapor 2</option>
                <option value="3">Nama Terlapor 3</option>
              </select>
            </div>
          </div>
          <!-- nik terlapor -->
          <div class="row mb-3">
            <label for="nik_terlapor" class="col-md-2 form-label forms-label mt-md-2">NIK Terlapor <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="nik_terlapor" name="nik_terlapor" value="1234567890123456" disabled />
            </div>
          </div>
          <!-- kategori -->
          <div class="row mb-3">
            <label for="kategori" class="col-md-2 form-label forms-label mt-md-2">Kategori <span class="text-important">*</span></label>
            <div class="col-md-10">
              <select id="kategori" name="kategori" class="form-select select-control" required disabled>
                <option value="">Pilih Kategori</option>
                <option value="1">Kategori 1</option>
                <option value="2">Kategori 2</option>
                <option value="3" selected>Kategori 3</option>
              </select>
            </div>
          </div>
          <!-- laporan -->
          <div class="row mb-3">
            <label for="laporan" class="col-md-2 form-label forms-label mt-md-2">Laporan <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="text" id="laporan" name="laporan" class="form-control input-control" placeholder="Masukkan Laporan" required value="Laporan Bersama" disabled />
            </div>
          </div>
          <!-- tanggal pelaporan -->
          <div class="row mb-3">
            <label for="tanggal_pelaporan" class="col-md-2 form-label forms-label mt-md-2">Tanggal Pelaporan
              <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="date" id="tanggal_pelaporan" name="tanggal_pelaporan" class="form-control input-control" required value="2021-08-01" disabled />
            </div>
          </div>
          <!-- status -->
          <div class="row mb-3">
            <label for="status" class="col-md-2 form-label forms-label mt-md-2">Status <span class="text-important">*</span></label>
            <div class="col-md-10">
              <select id="status" name="status" class="form-select select-control" required disabled>
                <option value="">Pilih Status</option>
                <option value="1">Status 1</option>
                <option value="2">Status 2</option>
                <option value="3" selected>Status 3</option>
              </select>
            </div>
          </div>
          <!-- deskripsi laporan -->
          <div class="row mb-3">
            <label for="deskripsi_laporan" class="col-md-2 form-label forms-label mt-md-2">Deskripsi Laporan
              <span class="text-important">*</span></label>
            <div class="col-md-10">
              <textarea id="deskripsi_laporan" name="deskripsi_laporan" class="form-control input-control" placeholder="Masukkan Deskripsi Laporan" required rows="4" disabled>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis itaque odit omnis dolorum voluptates necessitatibus, velit est. Voluptatibus, doloremque molestias ducimus qui, est aliquam aspernatur doloribus iure eveniet facilis repudiandae!</textarea>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
</main>
<!-- end of main -->

<?= $this->endSection(); ?>

<?php $this->section('script'); ?>

<!-- script internal -->
<script>
  //   onclick back to previous page
  function goBack() {
    window.history.back();
  }
</script>

<?= $this->endSection(); ?>
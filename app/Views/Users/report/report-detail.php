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
            <label for="nama_pelapor" class="col-md-2 form-label forms-label mt-md-2">Nama Pelapor </label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="nama_pelapor" name="nama_pelapor" value="Nama Pelapor" disabled />
            </div>
          </div>
          <!-- nik pelapor -->
          <div class="row mb-3">
            <label for="nik_pelapor" class="col-md-2 form-label forms-label mt-md-2">NIK Pelapor </label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="nik_pelapor" name="nik_pelapor" value="1234567890123456" disabled />
            </div>
          </div>
          <!-- nama terlapor -->
          <div class="row mb-3">
            <label for="nama_terlapor" class="col-md-2 form-label forms-label mt-md-2">Nama Terlapor </label>
            <div class="col-md-10">
              <input type="text" id="nama_terlapor" name="nama_terlapor" class="form-control input-control" value="2021-08-01" disabled />
            </div>
          </div>
          <!-- nik terlapor -->
          <div class="row mb-3">
            <label for="nik_terlapor" class="col-md-2 form-label forms-label mt-md-2">NIK Terlapor </label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="nik_terlapor" name="nik_terlapor" value="1234567890123456" disabled />
            </div>
          </div>
          <!-- kategori -->
          <div class="row mb-3">
            <label for="kategori" class="col-md-2 form-label forms-label mt-md-2">Kategori </label>
            <div class="col-md-10">
              <input type="text" id="kategori" name="kategori" class="form-control input-control" value="2021-08-01" disabled />
            </div>
          </div>
          <!-- laporan -->
          <div class="row mb-3">
            <label for="laporan" class="col-md-2 form-label forms-label mt-md-2">Laporan </label>
            <div class="col-md-10">
              <input type="text" id="laporan" name="laporan" class="form-control input-control" placeholder="Masukkan Laporan" value="Laporan Bersama" disabled />
            </div>
          </div>
          <!-- tanggal pelaporan -->
          <div class="row mb-3">
            <label for="tanggal_pelaporan" class="col-md-2 form-label forms-label mt-md-2">Tanggal Pelaporan
            </label>
            <div class="col-md-10">
              <input type="text" id="tanggal_pelaporan" name="tanggal_pelaporan" class="form-control input-control" value="2021-08-01" disabled />
            </div>
          </div>
          <!-- status -->
          <div class="row mb-3">
            <label for="status" class="col-md-2 form-label forms-label mt-md-2">Status </label>
            <div class="col-md-10">
              <input type="text" id="status" name="status" class="form-control input-control" value="2021-08-01" disabled />
            </div>
          </div>
          <!-- deskripsi laporan -->
          <div class="row mb-3">
            <label for="deskripsi_laporan" class="col-md-2 form-label forms-label mt-md-2">Deskripsi Laporan
            </label>
            <div class="col-md-10">
              <textarea id="deskripsi_laporan" name="deskripsi_laporan" class="form-control input-control" placeholder="Masukkan Deskripsi Laporan" rows="4" disabled></textarea>
            </div>
          </div>
          <!-- Hapus -->
          <div class="card-footer card-form-footer">
            <a href="/pelaporancontroller/hapuslaporan/<?= $dataLaporan['pelaporan_id'] ?>">
              <div class="w-100 d-flex justify-content-end">
                <button type="submit" form="reportFormEdit" class="btn btn-logout-sm btn-submit px-4" id="reportFormEditButton">
                  Hapus Laporan
                </button>
              </div>
            </a>
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
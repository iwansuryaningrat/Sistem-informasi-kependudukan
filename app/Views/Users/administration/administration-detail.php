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
    <h3 class="mb-2">Riwayat Pengajuan Administrasi</h3>
  </div>
</header>
<!-- end of header -->

<!-- main -->
<main>
  <section class="container container-space pt-0">
    <form class="card-form-container card" id="adminFormDetail" action="#" enctype="multipart/form-data" method="POST">
      <div class="card-header card-form-header">
        <p class="mb-0 fw-semibold">
          Detail Pengajuan Permohonan Administrasi
        </p>
      </div>
      <div class="card-body card-form-body">
        <div>
          <!-- no surat -->
          <div class="row mb-3">
            <label for="no_surat" class="col-md-2 form-label forms-label mt-md-2">No Surat</label>
            <div class="col-md-10">
              <input type="text" id="no_surat" name="no_surat" class="form-control input-control" placeholder="Masukkan No Surat" value="<?= ($dataAdministrasi['no_surat']) ? $dataAdministrasi['no_surat'] : '-' ?>" disabled />
            </div>
          </div>
          <!-- nama pemohon -->
          <div class="row mb-3">
            <label for="nama_pemohon" class="col-md-2 form-label forms-label mt-md-2">Nama Pemohon</label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="nama_pemohon" name="nama_pemohon" value="<?= $dataAdministrasi['nama']  ?>" disabled />
            </div>
          </div>
          <!-- kategori -->
          <div class="row mb-3">
            <label for="kategori" class="col-md-2 form-label forms-label mt-md-2">Kategori</label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="kategori" name="kategori" value="<?= $dataAdministrasi['kategori']  ?>" disabled />
            </div>
          </div>
          <!-- keperluan -->
          <div class="row mb-3">
            <label for="keperluan" class="col-md-2 form-label forms-label mt-md-2">Keperluan</label>
            <div class="col-md-10">
              <input type="text" id="keperluan" name="keperluan" class="form-control input-control" placeholder="Masukkan Keperluan" disabled value="<?= $dataAdministrasi['keperluan']  ?>" />
            </div>
          </div>
          <!-- deskripsi -->
          <div class="row mb-3">
            <label for="deskripsi" class="col-md-2 form-label forms-label mt-md-2">Deskripsi</label>
            <div class="col-md-10">
              <textarea id="deskripsi" name="deskripsi" class="form-control input-control" placeholder="Masukkan Deskripsi" disabled rows="3"><?= $dataAdministrasi['deskripsi'] ?></textarea>
            </div>
          </div>
          <!-- catatan -->
          <div class="row mb-3">
            <label for="catatan" class="col-md-2 form-label forms-label mt-md-2">Catatan</label>
            <div class="col-md-10">
              <textarea id="catatan" name="catatan" class="form-control input-control" placeholder="Masukkan Catatan" disabled rows="3"><?= ($dataAdministrasi['catatan']) ? $dataAdministrasi['catatan'] : '-' ?></textarea>
            </div>
          </div>
          <!-- status -->
          <div class="row mb-3">
            <label for="status" class="col-md-2 form-label forms-label mt-md-2"><?= $dataAdministrasi['administrasi_status'] ?></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="status" name="status" value="Diterima" disabled />
            </div>
          </div>
          <!-- tanggal pengajuan -->
          <div class="row mb-3">
            <label for="tanggal_pengajuan" class="col-md-2 form-label forms-label mt-md-2">Tanggal Pengajuan
            </label>
            <div class="col-md-10">
              <input type="text" id="tanggal_pengajuan" name="tanggal_pengajuan" class="form-control input-control" disabled value="<?= $dataAdministrasi['created_at'] ?>" />
            </div>
          </div>
          <!-- tanggal penerimaan -->
          <div class="row mb-3">
            <label for="tanggal_penerimaan" class="col-md-2 form-label forms-label mt-md-2">Tanggal Penerimaan
            </label>
            <div class="col-md-10">
              <input type="text" id="tanggal_penerimaan" name="tanggal_penerimaan" class="form-control input-control" disabled value="<?= $dataAdministrasi['tgl_penerimaan'] ?>" />
            </div>
          </div>
          <!-- berkas -->
          <div class="row mb-3">
            <label for="berkas" class="col-md-2 form-label forms-label mt-md-2">Berkas</label>
            <div class="col-md-10">
              <div class="input-group">
                <input type="text" class="form-control input-control" id="berkas" name="berkas" disabled value="<?= $dataAdministrasi['berkas'] ?>" />
                <?php if ($dataAdministrasi['administrasi_status'] == 'Selesai') : ?>
                  <a href="/administrasicontroller/download/<?= $dataAdministrasi['administrasi_id'] ?>">
                    <button class="btn btn-main-outline-sm" type="button" id="button-foto-profil">
                      <i class="fa-solid fa-download me-2"></i>Download
                    </button>
                  </a>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <!-- Hapus -->
          <div class="card-footer card-form-footer">
            <a href="/administrasicontroller/hapus/<?= $dataAdministrasi['administrasi_id'] ?>">
              <div class="w-100 d-flex justify-content-end">
                <button type="submit" form="reportFormEdit" class="btn btn-logout-sm btn-submit px-4" id="reportFormEditButton">
                  Hapus Administrasi
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

<script>
  document.foo.submit();
</script>

<?= $this->endSection(); ?>
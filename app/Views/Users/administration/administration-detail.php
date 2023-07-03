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
            <label for="no_surat" class="col-md-2 form-label forms-label mt-md-2">No Surat <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="text" id="no_surat" name="no_surat" class="form-control input-control" placeholder="Masukkan No Surat" required value="0712032023/UNDIP/FSM/IF/RPL" disabled />
            </div>
          </div>
          <!-- nama pemohon -->
          <div class="row mb-3">
            <label for="nama_pemohon" class="col-md-2 form-label forms-label mt-md-2">Nama Pemohon <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="nama_pemohon" name="nama_pemohon" value="Nama Pemohon" disabled />
            </div>
          </div>
          <!-- kategori -->
          <div class="row mb-3">
            <label for="kategori" class="col-md-2 form-label forms-label mt-md-2">Kategori <span class="text-important">*</span></label>
            <div class="col-md-10">
              <select id="kategori" name="kategori" required class="form-select select-control" disabled>
                <option value="">Pilih Kategori</option>
                <option value="1">Kategori 1</option>
                <option value="2">Kategori 2</option>
                <option value="3">Kategori 3</option>
              </select>
            </div>
          </div>
          <!-- keperluan -->
          <div class="row mb-3">
            <label for="keperluan" class="col-md-2 form-label forms-label mt-md-2">Keperluan <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="text" id="keperluan" name="keperluan" class="form-control input-control" placeholder="Masukkan Keperluan" required disabled value="Keperluan Bersama" />
            </div>
          </div>
          <!-- status -->
          <div class="row mb-3">
            <label for="status" class="col-md-2 form-label forms-label mt-md-2">Status <span class="text-important">*</span></label>
            <div class="col-md-10">
              <select id="status" name="status" required class="form-select select-control" disabled>
                <option value="">Pilih Status</option>
                <option value="1" selected>Diterima</option>
                <option value="2">Ditolak</option>
              </select>
            </div>
          </div>
          <!-- tanggal pengajuan -->
          <div class="row mb-3">
            <label for="tanggal_pengajuan" class="col-md-2 form-label forms-label mt-md-2">Tanggal Pengajuan
              <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="date" id="tanggal_pengajuan" name="tanggal_pengajuan" class="form-control input-control" required disabled value="2021-09-01" />
            </div>
          </div>
          <!-- tanggal penerimaan -->
          <div class="row mb-3">
            <label for="tanggal_penerimaan" class="col-md-2 form-label forms-label mt-md-2">Tanggal Penerimaan
              <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="date" id="tanggal_penerimaan" name="tanggal_penerimaan" class="form-control input-control" required disabled value="2021-09-01" />
            </div>
          </div>
          <!-- berkas -->
          <div class="row mb-3">
            <label for="berkas" class="col-md-2 form-label forms-label mt-md-2">Berkas <span class="text-important">*</span></label>
            <div class="col-md-10">
              <div class="input-group">
                <input type="file" class="form-control input-control" id="berkas" name="berkas" required accept="image/*" />
                <button class="btn btn-main-outline-sm" type="button" id="button-foto-profil">
                  <i class="fa-solid fa-upload me-2"></i>Unggah
                </button>
              </div>
            </div>
          </div>
          <!-- deskripsi -->
          <div class="row mb-3">
            <label for="deskripsi" class="col-md-2 form-label forms-label mt-md-2">Deskripsi <span class="text-important">*</span></label>
            <div class="col-md-10">
              <textarea id="deskripsi" name="deskripsi" class="form-control input-control" placeholder="Masukkan Deskripsi" required disabled rows="3">
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem et assumenda corporis veritatis? Necessitatibus ullam commodi, iusto nostrum esse numquam officia consectetur, dolor sed, dolore voluptate atque nemo adipisci blanditiis?</textarea>
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
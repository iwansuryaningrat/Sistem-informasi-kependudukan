<?php $this->extend('users/template/layout'); ?>
<?php $this->section('homepage'); ?>


<!-- header -->
<header class="container px-0">
  <div class="header-container-dashboard">
    <div class="mb-3">
      <button class="btn btn-main-outline-xs" type="button" onclick="goBack()">
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
    <form class="card-form-container card shadow" id="adminFormDetail" action="#" enctype="multipart/form-data" method="POST">
      <div class="card-header">
        <p class="mb-0">Detail Pengajuan Permohonan Administrasi</p>
      </div>
      <div class="card-form-container card-body">
        <div>
          <!-- nama pemohon -->
          <div class="row mb-3">
            <label for="nama_pemohon" class="col-sm-2 col-form-label forms-label">Nama Pemohon</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" value="Nama Pemohon" disabled />
            </div>
          </div>
          <!-- kategori -->
          <div class="row mb-3">
            <label for="kategori" class="col-sm-2 col-form-label forms-label">Kategori</label>
            <div class="col-sm-10">
              <select id="kategori" name="kategori" required class="form-select select-control" disabled>
                <option value="">Pilih Kategori</option>
                <option value="1">Kategori 1</option>
                <option value="2">Kategori 2</option>
                <option value="3">Kategori 3</option>
              </select>
            </div>
          </div>
          <!-- no surat -->
          <div class="row mb-3">
            <label for="no_surat" class="col-sm-2 col-form-label forms-label">No Surat</label>
            <div class="col-sm-10">
              <input type="text" id="no_surat" name="no_surat" class="form-control input-control" placeholder="Masukkan No Surat" required value="0712032023/UNDIP/FSM/IF/RPL" disabled />
            </div>
          </div>
          <!-- keperluan -->
          <div class="row mb-3">
            <label for="keperluan" class="col-sm-2 col-form-label forms-label">Keperluan</label>
            <div class="col-sm-10">
              <input type="text" id="keperluan" name="keperluan" class="form-control input-control" placeholder="Masukkan Keperluan" required disabled value="Keperluan Bersama" />
            </div>
          </div>
          <!-- deskripsi -->
          <div class="row mb-3">
            <label for="deskripsi" class="col-sm-2 col-form-label forms-label">Deskripsi</label>
            <div class="col-sm-10">
              <textarea id="deskripsi" name="deskripsi" class="form-control input-control" placeholder="Masukkan Deskripsi" required disabled>
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem et assumenda corporis veritatis? Necessitatibus ullam commodi, iusto nostrum esse numquam officia consectetur, dolor sed, dolore voluptate atque nemo adipisci blanditiis?</textarea>
            </div>
          </div>
          <!-- status -->
          <div class="row mb-3">
            <label for="status" class="col-sm-2 col-form-label forms-label">Status</label>
            <div class="col-sm-10">
              <select id="status" name="status" required class="form-select select-control" disabled>
                <option value="">Pilih Status</option>
                <option value="1" selected>Diterima</option>
                <option value="2">Ditolak</option>
              </select>
            </div>
          </div>
          <!-- berkas -->
          <div class="row mb-3">
            <label for="berkas" class="col-sm-2 col-form-label forms-label">Berkas</label>
            <div class="col-sm-10">
              <input type="file" id="berkas" name="berkas" class="form-control input-control" required />
            </div>
          </div>
          <!-- tanggal pengajuan -->
          <div class="row mb-3">
            <label for="tanggal_pengajuan" class="col-sm-2 col-form-label forms-label">Tanggal Pengajuan</label>
            <div class="col-sm-10">
              <input type="date" id="tanggal_pengajuan" name="tanggal_pengajuan" class="form-control input-control" required disabled value="2021-09-01" />
            </div>
          </div>
          <!-- tanggal penerimaan -->
          <div class="row mb-3">
            <label for="tanggal_penerimaan" class="col-sm-2 col-form-label forms-label">Tanggal Penerimaan</label>
            <div class="col-sm-10">
              <input type="date" id="tanggal_penerimaan" name="tanggal_penerimaan" class="form-control input-control" required disabled value="2021-09-01" />
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
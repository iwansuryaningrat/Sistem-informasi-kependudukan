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
    <form class="card-form-container card shadow" id="adminFormAdd" action="#" enctype="multipart/form-data" method="POST">
      <div class="card-header">
        <p class="mb-0">Form Pengajuan Permohonan Administrasi</p>
      </div>
      <div class="card-form-container card-body">
        <div>
          <!-- kategori -->
          <div class="row mb-3">
            <label for="kategori" class="col-sm-2 col-form-label forms-label">Kategori</label>
            <div class="col-sm-10">
              <select id="kategori" name="kategori" required class="form-select select-control">
                <option value="">Pilih Kategori</option>
                <option value="1">Kategori 1</option>
                <option value="2">Kategori 2</option>
                <option value="3">Kategori 3</option>
              </select>
            </div>
          </div>
          <!-- keperluan -->
          <div class="row mb-3">
            <label for="keperluan" class="col-sm-2 col-form-label forms-label">Keperluan</label>
            <div class="col-sm-10">
              <input type="text" id="keperluan" name="keperluan" class="form-control input-control" placeholder="Masukkan Keperluan" required />
            </div>
          </div>
          <!-- deskripsi -->
          <div class="row mb-3">
            <label for="deskripsi" class="col-sm-2 col-form-label forms-label">Deskripsi</label>
            <div class="col-sm-10">
              <textarea id="deskripsi" name="deskripsi" class="form-control input-control" placeholder="Masukkan Deskripsi" required></textarea>
            </div>
          </div>
          <!-- berkas -->
          <div class="row mb-3">
            <label for="berkas" class="col-sm-2 col-form-label forms-label">Berkas</label>
            <div class="col-sm-10">
              <input type="file" id="berkas" name="berkas" class="form-control input-control" required />
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <div class="w-100 d-flex justify-content-end">
          <button type="submit" form="adminFormAdd" class="btn btn-main btn-submit" id="adminFormAddButton">
            Kirim
          </button>
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
  // add method validation only letters
  $.validator.addMethod("alphabetOnly", function(value, element) {
    return this.optional(element) || value == value.match(/^[A-Za-z\s']+$/);
  });
  // validate
  $(document).ready(function() {
    $("#adminFormAdd").validate({
      rules: {
        kategori: {
          required: true,
        },
        keperluan: {
          required: true,
        },
        deskripsi: {
          required: true,
        },
        berkas: {
          required: true,
        },
      },
      messages: {
        kategori: {
          required: "Kategori tidak boleh kosong.",
        },
        keperluan: {
          required: "Laporan tidak boleh kosong.",
        },
        deskripsi: {
          required: "Deskripsi laporan tidak boleh kosong.",
        },
        berkas: {
          required: "Berkas tidak boleh kosong.",
        },
      },
    });
    $("#adminFormAddButton").on("click", () => {
      console.log($("#adminFormAdd").valid());
    });
  });

  //   onclick back to previous page
  function goBack() {
    window.history.back();
  }
</script>

<?= $this->endSection(); ?>
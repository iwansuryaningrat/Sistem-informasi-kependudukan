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
    <h3 class="mb-2">Anggota Keluarga</h3>
  </div>
</header>
<!-- end of header -->

<!-- main -->
<main>
  <section class="container container-space pt-0">
    <form class="card-form-container card" id="familyFormDetail" action="#" enctype="multipart/form-data" method="POST">
      <div class="card-header card-form-header">
        <p class="mb-0 fw-semibold">Detail Keluarga</p>
      </div>
      <div class="card-body card-form-body">
        <div>
          <!-- nama -->
          <div class="row mb-3">
            <label for="nama" class="col-md-2 form-label forms-label mt-md-2">Nama <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="nama" name="nama" required placeholder="Masukkan Nama" value="Mahmudin Suyono Sudrajad" disabled />
            </div>
          </div>
          <!-- nik -->
          <div class="row mb-3">
            <label for="nik" class="col-md-2 form-label forms-label mt-md-2">NIK <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="nik" name="nik" required placeholder="Masukkan NIK" value="1234567890123456" disabled />
            </div>
          </div>
          <!-- jenis kelamin -->
          <div class="row mb-3">
            <label for="jenis_kelamin" class="col-md-2 form-label forms-label mt-md-2">Jenis Kelamin <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="jenis_kelamin" name="jenis_kelamin" required placeholder="Masukkan Jenis Kelamin" value="Laki-laki" disabled />
            </div>
          </div>
          <!-- tempat lahir -->
          <div class="row mb-3">
            <label for="tempat_lahir" class="col-md-2 form-label forms-label mt-md-2">Tempat Lahir <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="tempat_lahir" name="tempat_lahir" required placeholder="Masukkan Tempat Lahir" value="Bandung" disabled />
            </div>
          </div>
          <!-- tanggal lahir -->
          <div class="row mb-3">
            <label for="tanggal_lahir" class="col-md-2 form-label forms-label mt-md-2">Tanggal Lahir <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="date" class="form-control input-control" id="tanggal_lahir" name="tanggal_lahir" required value="1990-01-01" disabled />
            </div>
          </div>
          <!-- status perkawinan -->
          <div class="row mb-3">
            <label for="status_perkawinan" class="col-md-2 form-label forms-label mt-md-2">Status Perkawinan
              <span class="text-important">*</span></label>
            <div class="col-md-10">
              <select id="status_perkawinan" name="status_perkawinan" required class="form-select select-control" disabled>
                <option value="">Pilih Status Perkawinan</option>
                <option value="1">Status Perkawinan 1</option>
                <option value="2" selected>Status Perkawinan 2</option>
                <option value="3">Status Perkawinan 3</option>
              </select>
            </div>
          </div>
          <!-- status hubungan dalam keluarga -->
          <div class="row mb-3">
            <label for="hubungan_keluarga" class="col-md-2 form-label forms-label mt-md-2">Status Hubungan Keluarga
              <span class="text-important">*</span></label>
            <div class="col-md-10">
              <select id="hubungan_keluarga" name="hubungan_keluarga" required class="form-select select-control" disabled>
                <option value="">
                  Pilih Status Hubungan Dalam Keluarga
                </option>
                <option value="1">Kepala keluarga</option>
                <option value="2" selected>Istri</option>
                <option value="3">Anak</option>
              </select>
            </div>
          </div>
          <!-- agama -->
          <div class="row mb-3">
            <label for="agama" class="col-md-2 form-label forms-label mt-md-2">Agama <span class="text-important">*</span></label>
            <div class="col-md-10">
              <select id="agama" name="agama" required class="form-select select-control" disabled>
                <option value="">Pilih Agama</option>
                <option value="1" selected>Agama 1</option>
                <option value="2">Agama 2</option>
                <option value="3">Agama 3</option>
              </select>
            </div>
          </div>
          <!-- pendidikan -->
          <div class="row mb-3">
            <label for="pendidikan" class="col-md-2 form-label forms-label mt-md-2">Pendidikan <span class="text-important">*</span></label>
            <div class="col-md-10">
              <select id="pendidikan" name="pendidikan" required class="form-select select-control" disabled>
                <option value="">Pilih Pendidikan</option>
                <option value="1">Pendidikan 1</option>
                <option value="2">Pendidikan 2</option>
                <option value="3" selected>Pendidikan 3</option>
              </select>
            </div>
          </div>
          <!-- pekerjaan -->
          <div class="row mb-3">
            <label for="pekerjaan" class="col-md-2 form-label forms-label mt-md-2">Pekerjaan <span class="text-important">*</span></label>
            <div class="col-md-10">
              <select id="pekerjaan" name="pekerjaan" required class="form-select select-control" disabled>
                <option value="">Pilih Pekerjaan</option>
                <option value="1" selected>Pekerjaan 1</option>
                <option value="2">Pekerjaan 2</option>
                <option value="3">Pekerjaan 3</option>
              </select>
            </div>
          </div>
          <!-- no. hp -->
          <div class="row mb-3">
            <label for="no_hp" class="col-md-2 form-label forms-label mt-md-2">No. HP <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="no_hp" name="no_hp" required placeholder="Masukkan No. HP" value="08123456789" disabled />
            </div>
          </div>
          <!-- email -->
          <div class="row mb-3">
            <label for="email" class="col-md-2 form-label forms-label mt-md-2">Email <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="email" class="form-control input-control" id="email" name="email" required placeholder="Masukkan Email" value="mahmudinss@gmail.com" disabled />
            </div>
          </div>
          <!-- foto -->
          <div class="row mb-3">
            <label for="foto" class="col-md-2 form-label forms-label mt-md-2">Foto <span class="text-important">*</span></label>
            <div class="col-md-10">
              <div class="input-group">
                <input type="file" class="form-control input-control" id="foto" name="foto" required accept="image/*" />
                <button class="btn btn-main-outline-sm" type="button" id="button-foto-profil">
                  <i class="fa-solid fa-upload me-2"></i>Unggah
                </button>
              </div>
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

<!-- internal script -->
<script>
  //   onclick back to previous page
  function goBack() {
    window.history.back();
  }
</script>

<?= $this->endSection(); ?>
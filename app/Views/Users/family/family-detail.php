<?php $this->extend('users/template/layout'); ?>
<?php $this->section('homepage'); ?>

<!-- header -->
<header class="container px-0">
  <div class="header-container-dashboard-form">
    <div class="mb-4">
      <a class="btn btn-main-outline-xs" href="/users/keluarga">
        <i class="fa-solid fa-arrow-left me-2"></i>Kembali
      </a>
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
            <label for="nama" class="col-md-2 form-label forms-label mt-md-2">Nama <span class="text-important"></span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="nama" name="nama" required placeholder="Masukkan Nama" value="<?= $dataKeluarga['nama'] ?>" disabled />
            </div>
          </div>
          <!-- nik -->
          <div class="row mb-3">
            <label for="nik" class="col-md-2 form-label forms-label mt-md-2">NIK <span class="text-important"></span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="nik" name="nik" required value="<?= $dataKeluarga['nik'] ?>" disabled />
            </div>
          </div>
          <!-- jenis kelamin -->
          <div class="row mb-3">
            <label for="jenis_kelamin" class="col-md-2 form-label forms-label mt-md-2">Jenis Kelamin <span class="text-important"></span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="jenis_kelamin" name="jenis_kelamin" required value="<?= $dataKeluarga['jenis_kelamin'] ?>" disabled />
            </div>
          </div>
          <!-- tempat lahir -->
          <div class="row mb-3">
            <label for="tempat_lahir" class="col-md-2 form-label forms-label mt-md-2">Tempat Lahir <span class="text-important"></span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="tempat_lahir" name="tempat_lahir" required value="<?= $dataKeluarga['tempat_lahir'] ?>" disabled />
            </div>
          </div>
          <!-- tanggal lahir -->
          <div class="row mb-3">
            <label for="tgl_lahir" class="col-md-2 form-label forms-label mt-md-2">Tanggal Lahir <span class="text-important"></span></label>
            <div class="col-md-10">
              <input type="date" class="form-control input-control" id="tgl_lahir" name="tgl_lahir" required value="<?= $dataKeluarga['tgl_lahir'] ?>" disabled />
            </div>
          </div>
          <!-- status perkawinan -->
          <div class="row mb-3">
            <label for="status_perkawinan" class="col-md-2 form-label forms-label mt-md-2">Status Perkawinan
              <span class="text-important"></span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="status_perkawinan" name="status_perkawinan" required value="<?= $dataKeluarga['status_perkawinan'] ?>" disabled />
            </div>
          </div>
          <!-- status hubungan dalam keluarga -->
          <div class="row mb-3">
            <label for="hubungan_keluarga" class="col-md-2 form-label forms-label mt-md-2">Status Hubungan Keluarga
              <span class="text-important"></span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="hubungan_keluarga" name="hubungan_keluarga" required value="<?= $dataKeluarga['status'] ?>" disabled />
            </div>
          </div>
          <!-- agama -->
          <div class="row mb-3">
            <label for="agama" class="col-md-2 form-label forms-label mt-md-2">Agama <span class="text-important"></span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="agama" name="agama" required value="<?= $dataKeluarga['agama'] ?>" disabled />
            </div>
          </div>
          <!-- pendidikan -->
          <div class="row mb-3">
            <label for="pendidikan" class="col-md-2 form-label forms-label mt-md-2">Pendidikan <span class="text-important"></span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="pendidikan" name="pendidikan" required value="<?= $dataKeluarga['pendidikan'] ?>" disabled />
            </div>
          </div>
          <!-- pekerjaan -->
          <div class="row mb-3">
            <label for="pekerjaan" class="col-md-2 form-label forms-label mt-md-2">Pekerjaan <span class="text-important"></span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="pekerjaan" name="pekerjaan" required value="<?= $dataKeluarga['pekerjaan'] ?>" disabled />
            </div>
          </div>
          <!-- no. hp -->
          <div class="row mb-3">
            <label for="no_hp" class="col-md-2 form-label forms-label mt-md-2">No. HP <span class="text-important"></span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="no_hp" name="no_hp" required value="<?= $dataKeluarga['no_hp'] ?>" disabled />
            </div>
          </div>
          <!-- email -->
          <div class="row mb-3">
            <label for="email" class="col-md-2 form-label forms-label mt-md-2">Email <span class="text-important"></span></span></label>
            <div class="col-md-10">
              <input type="email" class="form-control input-control" id="email" name="email" required value="<?= $dataKeluarga['email'] ?>" disabled />
            </div>
          </div>
          <!-- foto -->
          <div class="row mb-3">
            <label for="foto_rumah" class="col-md-2 form-label forms-label mt-md-2">Foto</label>
            <div class="col-md-10">
              <div class="mb-3">
                <figure class="">
                  <img src="/upload/photos/profile/<?= $dataKeluarga['foto'] ?>" id="thumbnailImage" alt="Pas Foto <?= $dataKeluarga['nama'] ?>" class="img-fluid img-thumbnail img-preview pas-foto-form" />
                </figure>
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
</script>

<?= $this->endSection(); ?>
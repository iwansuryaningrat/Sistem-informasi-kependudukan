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
  <section class="container container-space pt-3">
    <form class="card-form-container card shadow" id="adminFormEdit" action="/administrasicontroller/edit/<?= $dataAdministrasi['administrasi_id'] ?>" enctype="multipart/form-data" method="POST">
      <div class="card-header">
        <p class="mb-0">Form Edit Pengajuan Permohonan Administrasi</p>
      </div>
      <div class="card-form-container card-body">
        <div>
          <!-- nama -->
          <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label forms-label">Nama Pemohon</label>
            <div class="col-sm-10">
              <input type="text" id="nama" name="nama" class="form-control input-control" placeholder="Masukkan Nama" disabled value="<?= $dataAdministrasi['nama'] ?>" />
            </div>
          </div>
          <!-- kategori -->
          <div class="row mb-3">
            <label for="kategori" class="col-sm-2 col-form-label forms-label">Kategori</label>
            <div class="col-sm-10">
              <select id="kategori" name="kategori" required class="form-select select-control">
                <option value="" disabled>Pilih Kategori</option>
                <option value="KTP" <?= ($dataAdministrasi['kategori'] == 'KTP') ? 'selected' : '' ?>>KTP</option>
                <option value="KK" <?= ($dataAdministrasi['kategori'] == 'KK') ? 'selected' : '' ?>>KK</option>
                <option value="Surat Pindah" <?= ($dataAdministrasi['kategori'] == 'Surat Pindah') ? 'selected' : '' ?>>Surat Pindah</option>
                <option value="Surat Kematian" <?= ($dataAdministrasi['kategori'] == 'Surat Kematian') ? 'selected' : '' ?>>Surat Kematian</option>
                <option value="Surat Kelahiran" <?= ($dataAdministrasi['kategori'] == 'Surat Kelahiran') ? 'selected' : '' ?>>Surat Kelahiran</option>
                <option value="Surat Keterangan" <?= ($dataAdministrasi['kategori'] == 'Surat Keterangan') ? 'selected' : '' ?>>Surat Keterangan</option>
                <option value="Surat Pengantar" <?= ($dataAdministrasi['kategori'] == 'Surat Pengantar') ? 'selected' : '' ?>>Surat Pengantar</option>
                <option value="Lainnya" <?= ($dataAdministrasi['kategori'] == 'Lainnya') ? 'selected' : '' ?>>Lainnya</option>
              </select>
            </div>
          </div>
          <!-- keperluan -->
          <div class="row mb-3">
            <label for="keperluan" class="col-sm-2 col-form-label forms-label">Keperluan</label>
            <div class="col-sm-10">
              <input type="text" id="keperluan" name="keperluan" class="form-control input-control" placeholder="Masukkan Keperluan" required value="<?= $dataAdministrasi['keperluan'] ?>" />
            </div>
          </div>
          <!-- deskripsi -->
          <div class="row mb-3">
            <label for="deskripsi" class="col-sm-2 col-form-label forms-label">Deskripsi</label>
            <div class="col-sm-10">
              <textarea id="deskripsi" name="deskripsi" class="form-control input-control" placeholder="Masukkan Deskripsi" required><?= $dataAdministrasi['deskripsi'] ?></textarea>
            </div>
          </div>
          <!-- no_surat -->
          <div class="row mb-3">
            <label for="no_surat" class="col-sm-2 col-form-label forms-label">Nomor Surat</label>
            <div class="col-sm-10">
              <input type="text" id="no_surat" name="no_surat" class="form-control input-control" placeholder="Nomor Surat" disabled value="<?= ($dataAdministrasi['no_surat']) ? $dataAdministrasi['no_surat'] : '-' ?>" />
            </div>
          </div>
          <!-- catatan -->
          <div class="row mb-3">
            <label for="catatan" class="col-sm-2 col-form-label forms-label">Catatan</label>
            <div class="col-sm-10">
              <textarea id="catatan" name="catatan" class="form-control input-control" placeholder="Masukkan Catatan" disabled><?= ($dataAdministrasi['catatan']) ? $dataAdministrasi['catatan'] : '-' ?></textarea>
            </div>
          </div>
          <!-- status -->
          <div class="row mb-3">
            <label for="status" class="col-sm-2 col-form-label forms-label">Status</label>
            <div class="col-sm-10">
              <input type="text" id="status" name="status" class="form-control input-control" placeholder="Nomor Surat" disabled value="<?= $dataAdministrasi['administrasi_status'] ?>" />
            </div>
          </div>
          <!-- berkas -->
          <div class="row mb-3">
            <label for="berkas" class="col-sm-2 col-form-label forms-label">Berkas</label>
            <div class="col-sm-10">
              <input type="file" id="berkas" name="berkas" class="form-control input-control" accept="application/pdf" />
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <div class="w-100 d-flex justify-content-end">
          <button type="submit" form="adminFormEdit" class="btn btn-main btn-submit" id="adminFormEditButton" <?= ($dataAdministrasi['administrasi_status'] == 'Selesai') ? 'disabled' : '' ?>>
            Perbarui
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
    $("#adminFormEdit").validate({
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
    $("#adminFormEditButton").on("click", () => {
      console.log($("#adminFormEdit").valid());
    });
  });

  //   onclick back to previous page
  function goBack() {
    window.history.back();
  }
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
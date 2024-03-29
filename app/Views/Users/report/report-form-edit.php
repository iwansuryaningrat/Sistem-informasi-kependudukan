<!-- Form Edit Pelaporan | Warga Site -->
<?php $this->extend('users/template/layout'); ?>
<?php $this->section('homepage'); ?>

<!-- end of navigation -->
<!-- header -->
<header class="container px-0">
  <div class="header-container-dashboard-form">
    <div class="mb-4">
      <a class="btn btn-main-outline-xs" href="/users/pelaporan">
        <i class="fa-solid fa-arrow-left me-2"></i>Kembali
      </a>
    </div>
    <h3 class="mb-2">Riwayat Pelaporan</h3>
  </div>
</header>
<!-- end of header -->

<!-- main -->
<main>
  <section class="container container-space pt-0">
    <form class="card-form-container card" id="reportFormEdit" action="/pelaporancontroller/editlaporan/<?= $dataLaporan['pelaporan_id'] ?>" enctype="multipart/form-data" method="POST">
      <!-- header -->
      <div class="card-header card-form-header">
        <p class="mb-0 fw-semibold">Form Edit Pelaporan</p>
      </div>
      <!-- main -->
      <div class="card-body card-form-body">
        <div>
          <!-- nama terlapor -->
          <div class="row mb-3">
            <label for="nama_terlapor" class="col-md-2 form-label forms-label mt-md-2">Nama Terlapor <span class="text-important">*</span></label>
            <div class="col-md-10">
              <select id="nama_terlapor" name="nama_terlapor" disabled class="form-select select-control">
                <option value="">Pilih Nama Terlapor</option>
                <?php foreach ($users as $user) : ?>
                  <option value="<?= $user['nik'] ?>" <?= ($dataLaporan['nik_terlapor'] == $user['nik']) ? 'selected' : '' ?>><?= $user['nama'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <!-- kategori -->
          <div class="row mb-3">
            <label for="kategori" class="col-md-2 form-label forms-label mt-md-2">Kategori <span class="text-important">*</span></label>
            <div class="col-md-10">
              <select id="kategori" name="kategori" class="form-select select-control" required>
                <option value="">Pilih Kategori</option>
                <?php foreach ($pelaporanKategori as $kategori) : ?>
                  <option value="<?= $kategori ?>" <?= ($dataLaporan['kategori'] == $kategori) ? 'selected' : '' ?>><?= $kategori ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <!-- laporan -->
          <div class="row mb-3">
            <label for="laporan" class="col-md-2 form-label forms-label mt-md-2">Laporan <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="text" id="laporan" name="laporan" class="form-control input-control" placeholder="Masukkan Laporan" required value="<?= $dataLaporan['laporan'] ?>" />
            </div>
          </div>
          <!-- deskripsi laporan -->
          <div class="row mb-3">
            <label for="deskripsi_laporan" class="col-md-2 form-label forms-label mt-md-2">Deskripsi Laporan
              <span class="text-important">*</span></label>
            <div class="col-md-10">
              <textarea id="deskripsi_laporan" name="deskripsi_laporan" class="form-control input-control" placeholder="Masukkan Deskripsi Laporan" required rows="3"><?= $dataLaporan['deskripsi_pelaporan'] ?></textarea>
            </div>
          </div>
        </div>
      </div>
      <!-- footer -->
      <div class="card-footer card-form-footer">
        <div class="w-100 d-flex justify-content-end">
          <button type="submit" form="reportFormEdit" class="btn btn-main-sm btn-submit px-4" id="reportFormEditButton">
            Perbarui Laporan
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
    $("#reportFormEdit").validate({
      rules: {
        nama_terlapor: {
          required: true,
        },
        kategori: {
          required: true,
        },
        laporan: {
          required: true,
        },
        deskripsi_laporan: {
          required: true,
        },
      },
      messages: {
        nama_terlapor: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nama terlapor tidak boleh kosong.',
        },
        kategori: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Kategori tidak boleh kosong.',
        },
        laporan: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Laporan tidak boleh kosong.',
        },
        deskripsi_laporan: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Deskripsi laporan tidak boleh kosong.',
        },
      },
    });
  });
</script>

<script>
  //== Class definition
  var SweetAlert = function() {

    //== Demos
    var initSweatAlert = function() {

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

      <?php if (session()->getFlashdata('warning')) : ?>
        swal("Ups!", "<?= session()->getFlashdata('warning') ?>", {
          icon: "warning",
          buttons: {
            confirm: {
              className: 'btn btn-warning'
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
        initSweatAlert();
      },
    };
  }();

  //== Class Initialization
  jQuery(document).ready(function() {
    SweetAlert.init();
  });
</script>

<?= $this->endSection(); ?>
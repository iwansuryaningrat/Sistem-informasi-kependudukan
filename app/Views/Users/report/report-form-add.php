<!-- Form Tambah Pelaporan | Warga Site -->
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
    <div class="row">
      <div class="col-12 col-lg-8 mb-5 mb-lg-0">
        <form class="card-form-container card" id="reportFormAdd" action="/pelaporancontroller/lapor" enctype="multipart/form-data" method="POST">
          <!-- header -->
          <div class="card-header card-form-header">
            <p class="mb-0 fw-semibold">Form Pelaporan</p>
          </div>
          <!-- body -->
          <div class="card-body card-form-body">
            <div>
              <!-- nama terlapor -->
              <div class="mb-3">
                <label for="nik_terlapor" class="form-label forms-label">Nama Terlapor
                  <span class="text-important">*</span></label>

                <select id="nik_terlapor" name="nik_terlapor" required class="form-select select-control">
                  <option value="">Pilih Nama Terlapor</option>
                  <?php foreach ($users as $user) : ?>
                    <option value="<?= $user['nik'] ?>"><?= $user['nama'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <!-- kategori -->
              <div class="mb-3">
                <label for="kategori" class="form-label forms-label">Kategori <span class="text-important">*</span></label>

                <select id="kategori" name="kategori" class="form-select select-control" required>
                  <option value="">Pilih Kategori</option>
                  <?php foreach ($pelaporanKategori as $kategori) : ?>
                    <option value="<?= $kategori ?>"><?= $kategori ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <!-- laporan -->
              <div class="mb-3">
                <label for="laporan" class="form-label forms-label">Laporan <span class="text-important">*</span></label>

                <input type="text" id="laporan" name="laporan" class="form-control input-control" placeholder="Masukkan Laporan" required />
              </div>
              <!-- deskripsi laporan -->
              <div class="mb-3">
                <label for="deskripsi_laporan" class="form-label forms-label">Deskripsi Laporan
                  <span class="text-important">*</span></label>

                <textarea id="deskripsi_laporan" name="deskripsi_laporan" class="form-control input-control" placeholder="Masukkan Deskripsi Laporan" required rows="3"></textarea>
              </div>
            </div>
          </div>
          <!-- footer -->
          <div class="card-footer card-form-footer">
            <div class="w-100 d-flex justify-content-end">
              <button type="submit" form="reportFormAdd" class="btn btn-main-sm btn-submit px-4" id="reportFormAddButton">
                Kirim Laporan
              </button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-12 col-lg-4">
        <h5 class="mb-2">FAQ</h5>
        <div class="accordion">
          <div class="accordion-item accordion-box">
            <h2 class="accordion-header" id="panelsStayOpen-heading1">
              <button class="accordion-button accordion-btn shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="true" aria-controls="panelsStayOpen-collapse1">
                <span class="text-secondaries fw-semibold me-1">Q:</span>
                <span class="fw-medium">Apa itu Lorem Ipsum?</span>
              </button>
            </h2>
            <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading1">
              <div class="accordion-body accordion-text">
                <span class="text-secondaries fw-semibold me-1">A:</span>
                <span class="text-gray">
                  It is shown by default, until the collapse plugin adds
                  the appropriate classes that we use to style each
                  element.</span>
              </div>
            </div>
          </div>
          <div class="accordion-item accordion-box">
            <h2 class="accordion-header" id="panelsStayOpen-heading2">
              <button class="accordion-button accordion-btn shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="false" aria-controls="panelsStayOpen-collapse2">
                <span class="text-secondaries fw-semibold me-1">Q:</span>
                <span class="fw-medium">Mengapa kita menggunakan Lorem Ipsum?</span>
              </button>
            </h2>
            <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading2">
              <div class="accordion-body accordion-text">
                <span class="text-secondaries fw-semibold me-1">A:</span>
                <span class="text-gray">
                  It is shown by default, until the collapse plugin adds
                  the appropriate classes that we use to style each
                  element.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- end of main -->

<?= $this->endSection(); ?>

<?php $this->section('script'); ?>

<!-- internal script -->
<script>
  // add method validation only letters
  $.validator.addMethod("alphabetOnly", function(value, element) {
    return this.optional(element) || value == value.match(/^[A-Za-z\s']+$/);
  });
  // validate
  $(document).ready(function() {
    $("#reportFormAdd").validate({
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
          required: "Nama terlapor tidak boleh kosong.",
        },
        kategori: {
          required: "Kategori tidak boleh kosong.",
        },
        laporan: {
          required: "Laporan tidak boleh kosong.",
        },
        deskripsi_laporan: {
          required: "Deskripsi laporan tidak boleh kosong.",
        },
      },
    });
    $("#reportFormAddButton").on("click", () => {
      console.log($("#reportFormAdd").valid());
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
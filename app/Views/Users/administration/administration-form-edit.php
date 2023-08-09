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
    <form class="card-form-container card shadow" id="adminFormEdit" action="#" enctype="multipart/form-data" method="POST">
      <div class="card-header">
        <p class="mb-0">Form Edit Pengajuan Permohonan Administrasi</p>
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
                <option value="2" selected>Kategori 2</option>
                <option value="3">Kategori 3</option>
              </select>
            </div>
          </div>
          <!-- keperluan -->
          <div class="row mb-3">
            <label for="keperluan" class="col-sm-2 col-form-label forms-label">Keperluan</label>
            <div class="col-sm-10">
              <input type="text" id="keperluan" name="keperluan" class="form-control input-control" placeholder="Masukkan Keperluan" required value="Keperluan Berencana" />
            </div>
          </div>
          <!-- deskripsi -->
          <div class="row mb-3">
            <label for="deskripsi" class="col-sm-2 col-form-label forms-label">Deskripsi</label>
            <div class="col-sm-10">
              <textarea id="deskripsi" name="deskripsi" class="form-control input-control" placeholder="Masukkan Deskripsi" required>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum deserunt ut molestias maiores similique ex maxime itaque officiis. Tenetur, temporibus atque eum pariatur doloribus quasi. Perferendis sed fugiat veritatis nesciunt.</textarea>
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
          <button type="submit" form="adminFormEdit" class="btn btn-main btn-submit" id="adminFormEditButton">
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
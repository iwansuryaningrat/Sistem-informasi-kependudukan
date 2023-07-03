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
    <div class="row">
      <div class="col-12 col-lg-8 mb-5 mb-lg-0">
        <form class="card-form-container card" id="adminFormAdd" action="#" enctype="multipart/form-data" method="POST">
          <div class="card-header card-form-header">
            <p class="mb-0 fw-semibold">
              Form Pengajuan Permohonan Administrasi
            </p>
          </div>
          <div class="card-body card-form-body">
            <div>
              <!-- keperluan -->
              <div class="mb-3">
                <label for="keperluan" class="form-label forms-label">Keperluan <span class="text-important">*</span></label>
                <input type="text" id="keperluan" name="keperluan" value="" required placeholder="Masukkan Keperluan" class="form-control input-control" />
              </div>
              <div class="row mb-3">
                <!-- kategori -->
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                  <label for="kategori" class="form-label forms-label">Kategori <span class="text-important">*</span></label>
                  <select id="kategori" name="kategori" required class="form-select select-control">
                    <option value="">Pilih Kategori</option>
                    <option value="1">Kategori 1</option>
                    <option value="2">Kategori 2</option>
                    <option value="3">Kategori 3</option>
                  </select>
                </div>
                <!-- berkas -->
                <div class="col-12 col-md-6">
                  <label for="berkas" class="form-label forms-label">Berkas <span class="text-important">*</span></label>
                  <div class="input-group">
                    <input type="file" class="form-control input-control" id="berkas" name="berkas" required accept="image/*" />
                    <button class="btn btn-main-outline-sm" type="button" id="button-foto-profil">
                      <i class="fa-solid fa-upload me-2"></i>Unggah
                    </button>
                  </div>
                </div>
              </div>
              <!-- deskripsi -->
              <div class="mb-3">
                <label for="deskripsi" class="form-label forms-label">Deskripsi <span class="text-important">*</span></label>
                <textarea id="deskripsi" name="deskripsi" class="form-control input-control" placeholder="Masukkan Deskripsi" required rows="3"></textarea>
              </div>
            </div>
          </div>
          <div class="card-footer card-form-footer">
            <div class="w-100 d-flex justify-content-end">
              <button type="submit" form="adminFormAdd" class="btn btn-main-sm btn-submit px-4" id="adminFormAddButton">
                Kirim Pengajuan
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
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
    <div class="row">
      <div class="col-12 col-lg-8 mb-5 mb-lg-0">
        <form class="card-form-container card" id="familyFormAdd" action="/usercontroller/saveUser" enctype="multipart/form-data" method="POST">
          <div class="card-header card-form-header">
            <p class="mb-0 fw-semibold">Form Tambah Keluarga</p>
          </div>
          <div class="card-body card-form-body">
            <div>
              <div class="row mb-3">
                <!-- nama -->
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                  <label for="nama" class="form-label forms-label">Nama <span class="text-important">*</span></label>
                  <input type="text" class="form-control input-control" id="nama" name="nama" required placeholder="Masukkan Nama" />
                </div>
                <!-- nik -->
                <div class="col-12 col-md-6">
                  <label for="nik" class="form-label forms-label">NIK <span class="text-important">*</span></label>
                  <input type="text" class="form-control input-control" id="nik" name="nik" required placeholder="Masukkan NIK" />
                </div>
              </div>

              <!-- jenis kelamin -->
              <div class="mb-3">
                <label class="form-label forms-label">Jenis Kelamin
                  <span class="text-important">*</span></label>
                <div class="col-sm-10" id="radioFormGender">
                  <div class="d-flex align-items-center">
                    <div class="form-check me-4">
                      <input class="form-check-input" type="radio" name="pria" id="pria" />
                      <label class="form-check-label" for="pria">Laki-laki</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="wanita" id="wanita" />
                      <label class="form-check-label" for="wanita">Perempuan</label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <!-- Status -->
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                  <label for="status" class="form-label forms-label">Status <span class="text-important">*</span></label>

                  <select id="status" name="status" required class="form-select select-control">
                    <option value="">Pilih Status</option>
                    <option value="Kepala Keluarga">Kepala Keluarga</option>
                    <option value="Istri">Istri</option>
                    <option value="Anak">Anak</option>
                  </select>
                </div>
                <!-- agama -->
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                  <label for="agama" class="form-label forms-label">Agama <span class="text-important">*</span></label>

                  <select id="agama" name="agama" required class="form-select select-control">
                    <option value="">Pilih Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Khatolik">Khatolik</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <!-- tempat lahir -->
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                  <label for="tempat_lahir" class="form-label forms-label">Tempat Lahir
                    <span class="text-important">*</span></label>
                  <input type="text" class="form-control input-control" id="tempat_lahir" name="tempat_lahir" required placeholder="Masukkan Tempat Lahir" />
                </div>
                <!-- tanggal lahir -->
                <div class="col-12 col-md-6">
                  <label for="tgl_lahir" class="form-label forms-label">Tanggal Lahir <span class="text-important">*</span></label>

                  <input type="date" class="form-control input-control" id="tgl_lahir" name="tgl_lahir" required />
                </div>
              </div>

              <div class="row mb-3">
                <!-- Status Kependudukan -->
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                  <label for="status_kependudukan" class="form-label forms-label">Status Kependudukan <span class="text-important">*</span></label>
                  <select id="status_kependudukan" name="status_kependudukan" required class="form-select select-control">
                    <option value="">Pilih Status Kependudukan</option>
                    <option value="Tetap">Penduduk Tetap</option>
                    <option value="Sementara">Penduduk Sementara</option>
                    <option value="Pendatang">Penduduk Pendatang</option>
                    <option value="Pindahan">Penduduk Pindahan</option>
                  </select>
                </div>
                <!-- status perkawinan -->
                <div class="col-12 col-md-6">
                  <label for="status_perkawinan" class="form-label forms-label">Status Perkawinan
                    <span class="text-important">*</span></label>

                  <select id="status_perkawinan" name="status_perkawinan" required class="form-select select-control">
                    <option value="">Pilih Status Perkawinan</option>
                    <option value="Belum Kawin">Belum Kawin</option>
                    <option value="Kawin">Kawin</option>
                    <option value="Cerai Hidup">Cerai Hidup</option>
                    <option value="Cerai Mati">Cerai Mati</option>
                  </select>
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <!-- pendidikan -->
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                  <label for="pendidikan" class="form-label forms-label">Pendidikan
                    <span class="text-important">*</span></label>

                  <select id="pendidikan" name="pendidikan" required class="form-select select-control">
                    <option value="">Pilih Pendidikan</option>
                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                  </select>
                </div>
                <!-- pekerjaan -->
                <div class="col-12 col-md-6">
                  <label for="pekerjaan" class="form-label forms-label">Pekerjaan
                    <span class="text-important">*</span></label>

                  <input type="text" class="form-control input-control" id="pekerjaan" name="pekerjaan" required placeholder="Masukkan Pekerjaan" />
                </div>
              </div>

              <div class="row mb-3">
                <!-- no. hp -->
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                  <label for="no_hp" class="form-label forms-label">No. HP <span class="text-important">*</span></label>

                  <input type="text" class="form-control input-control" id="no_hp" name="no_hp" required placeholder="Masukkan No. HP" />
                </div>
                <!-- email -->
                <div class="col-12 col-md-6">
                  <label for="email" class="form-label forms-label">Email <span class="text-important">*</span></label>

                  <input type="email" class="form-control input-control" id="email" name="email" required placeholder="Masukkan Email" />
                </div>
              </div>

              <!-- foto -->
              <div class="mb-3">
                <label for="foto" class="form-label forms-label">Foto <span class="text-important">*</span></label>

                <div class="input-group">
                  <input type="file" class="form-control input-control" id="foto" name="foto" required accept="image/*" />
                  <button class="btn btn-main-outline-sm" type="button" id="button-foto-profil">
                    <i class="fa-solid fa-upload me-2"></i>Unggah
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer card-form-footer">
            <div class="w-100 d-flex justify-content-end">
              <button type="submit" form="familyFormAdd" class="btn btn-main-sm btn-submit px-4" id="familyFormAddButton">
                Kirim
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
    $("#familyFormAdd").validate({
      rules: {
        nik: {
          required: true,
          number: true,
          minlength: 16,
          maxlength: 16,
        },
        nama: {
          required: true,
          alphabetOnly: true,
        },
        jenis_kelamin: {
          required: true,
        },
        tampat_lahir: {
          required: true,
        },
        tanggal_lahir: {
          required: true,
        },
        status_perkawinan: {
          required: true,
        },
        agama: {
          required: true,
        },
        pendidikan: {
          required: true,
        },
        pekerjaan: {
          required: true,
        },
        no_hp: {
          required: true,
          number: true,
          minlength: 10,
          maxlength: 13,
        },
        email: {
          required: true,
          email: true,
        },
        foto: {
          required: true,
          extension: "jpg|jpeg|png",
        },
      },
      messages: {
        nik: {
          required: "NIK tidak boleh kosong.",
          number: "NIK harus berupa angka.",
          minlength: "NIK harus berjumlah 16 digit.",
          maxlength: "NIK harus berjumlah 16 digit.",
        },
        nama: {
          required: "Nama tidak boleh kosong.",
          alphabetOnly: "Nama harus berupa huruf.",
        },
        jenis_kelamin: {
          required: "Jenis kelamin tidak boleh kosong.",
        },
        tempat_lahir: {
          required: "Tempat lahir tidak boleh kosong.",
        },
        tanggal_lahir: {
          required: "Tanggal lahir tidak boleh kosong.",
        },
        status_perkawinan: {
          required: "Status perkawinan tidak boleh kosong.",
        },
        agama: {
          required: "Agama tidak boleh kosong.",
        },
        pendidikan: {
          required: "Pendidikan tidak boleh kosong.",
        },
        pekerjaan: {
          required: "Pekerjaan tidak boleh kosong.",
        },
        no_hp: {
          required: "No. HP tidak boleh kosong.",
          number: "No. HP harus berupa angka.",
          minlength: "No. HP harus berjumlah 10-13 digit.",
          maxlength: "No. HP harus berjumlah 10-13 digit.",
        },
        email: {
          required: "Email tidak boleh kosong.",
          email: "Email tidak valid.",
        },
        foto: {
          required: "Foto tidak boleh kosong.",
          extension: "Foto harus berupa file gambar.",
        },
      },
      errorPlacement: function(error, element) {
        if (element.is(":radio")) {
          error.appendTo("#radioFormGender");
        } else {
          error.insertAfter(element);
        }
      },
    });
    $("#familyFormAddButton").on("click", () => {
      console.log($("#familyFormAdd").valid());
    });
  });

  //   onclick back to previous page
  function goBack() {
    window.history.back();
  }
</script>

<?= $this->endSection(); ?>
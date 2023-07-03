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
    <form class="card-form-container card" id="familyFormEdit" action="#" enctype="multipart/form-data" method="POST">
      <div class="card-header card-form-header">
        <p class="mb-0 fw-semibold">Form Edit Anggota Keluarga</p>
      </div>
      <div class="card-body card-form-body">
        <div>
          <!-- nama -->
          <div class="row mb-3">
            <label for="nama" class="col-md-2 form-label forms-label mt-md-2">Nama <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="nama" name="nama" required placeholder="Masukkan Nama" value="Mahmudin Suyono Sudrajad" />
            </div>
          </div>
          <!-- nik -->
          <div class="row mb-3">
            <label for="nik" class="col-md-2 form-label forms-label mt-md-2">NIK <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="nik" name="nik" required placeholder="Masukkan NIK" value="1234567890123456" />
            </div>
          </div>
          <!-- jenis kelamin -->
          <div class="row mb-3">
            <label class="col-md-2 form-label forms-label mt-md-2">Jenis Kelamin <span class="text-important">*</span></label>
            <div class="col-sm-10" id="radioFormGender">
              <div class="d-flex align-items-center">
                <div class="form-check me-4">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="pria" checked />
                  <label class="form-check-label" for="pria">Laki-laki</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="wanita" />
                  <label class="form-check-label" for="wanita">Perempuan</label>
                </div>
              </div>
            </div>
          </div>
          <!-- tempat lahir -->
          <div class="row mb-3">
            <label for="tempat_lahir" class="col-md-2 form-label forms-label mt-md-2">Tempat Lahir <span class="text-important">*</span></label>
            <div class="col-md-10">
              <select id="tempat_lahir" name="tempat_lahir" required class="form-select select-control">
                <option value="">Pilih Kabupaten/Kota</option>
                <option value="1">Kota 1</option>
                <option value="2">Kota 2</option>
                <option value="3">Kota 3</option>
                <option value="4" selected>Kota 4</option>
              </select>
            </div>
          </div>
          <!-- tanggal lahir -->
          <div class="row mb-3">
            <label for="tanggal_lahir" class="col-md-2 form-label forms-label mt-md-2">Tanggal Lahir <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="date" class="form-control input-control" id="tanggal_lahir" name="tanggal_lahir" required value="1990-01-01" />
            </div>
          </div>
          <!-- agama -->
          <div class="row mb-3">
            <label for="agama" class="col-md-2 form-label forms-label mt-md-2">Agama <span class="text-important">*</span></label>
            <div class="col-md-10">
              <select id="agama" name="agama" required class="form-select select-control">
                <option value="">Pilih Agama</option>
                <option value="1" selected>Agama 1</option>
                <option value="2">Agama 2</option>
                <option value="3">Agama 3</option>
              </select>
            </div>
          </div>
          <!-- status perkawinan -->
          <div class="row mb-3">
            <label for="status_perkawinan" class="col-md-2 form-label forms-label mt-md-2">Status Perkawinan
              <span class="text-important">*</span></label>
            <div class="col-md-10">
              <select id="status_perkawinan" name="status_perkawinan" required class="form-select select-control">
                <option value="">Pilih Status Perkawinan</option>
                <option value="1">Status Perkawinan 1</option>
                <option value="2" selected>Status Perkawinan 2</option>
                <option value="3">Status Perkawinan 3</option>
              </select>
            </div>
          </div>
          <!-- pendidikan -->
          <div class="row mb-3">
            <label for="pendidikan" class="col-md-2 form-label forms-label mt-md-2">Pendidikan <span class="text-important">*</span></label>
            <div class="col-md-10">
              <select id="pendidikan" name="pendidikan" required class="form-select select-control">
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
              <select id="pekerjaan" name="pekerjaan" required class="form-select select-control">
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
              <input type="text" class="form-control input-control" id="no_hp" name="no_hp" required placeholder="Masukkan No. HP" value="08123456789" />
            </div>
          </div>
          <!-- email -->
          <div class="row mb-3">
            <label for="email" class="col-md-2 form-label forms-label mt-md-2">Email <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="email" class="form-control input-control" id="email" name="email" required placeholder="Masukkan Email" value="mahmudinss@gmail.com" />
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
      <div class="card-footer card-form-footer">
        <div class="w-100 d-flex justify-content-end">
          <button type="submit" form="familyFormEdit" class="btn btn-main-sm btn-submit px-4" id="familyFormEditButton">
            Perbarui Keluarga
          </button>
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
  // add method validation only letters
  $.validator.addMethod("alphabetOnly", function(value, element) {
    return this.optional(element) || value == value.match(/^[A-Za-z\s']+$/);
  });
  // validate
  $(document).ready(function() {
    $("#familyFormEdit").validate({
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
    $("#familyFormEditButton").on("click", () => {
      console.log($("#familyFormEdit").valid());
    });
  });

  //   onclick back to previous page
  function goBack() {
    window.history.back();
  }
</script>

<?= $this->endSection(); ?>
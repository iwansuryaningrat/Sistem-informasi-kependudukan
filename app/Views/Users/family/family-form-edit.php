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

    <!-- get flashdata message -->
    <?php if (session()->getFlashdata('success')) : ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <!-- get flashdata message -->
    <?php if (session()->getFlashdata('error')) : ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('error') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <form class="card-form-container card" id="familyFormEdit" action="/usercontroller/editdatakeluarga/<?= $dataKeluarga['nik'] ?>" enctype="multipart/form-data" method="POST">
      <div class="card-header card-form-header">
        <p class="mb-0 fw-semibold">Form Edit Anggota Keluarga</p>
      </div>
      <div class="card-body card-form-body">
        <div>
          <!-- nama -->
          <div class="row mb-3">
            <label for="nama" class="col-md-2 form-label forms-label mt-md-2">Nama <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="nama" name="nama" required placeholder="Masukkan Nama" value="<?= $dataKeluarga['nama'] ?>" />
            </div>
          </div>
          <!-- nik -->
          <div class="row mb-3">
            <label for="nik" class="col-md-2 form-label forms-label mt-md-2">NIK <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="nik" name="nik" required placeholder="Masukkan NIK" value="<?= $dataKeluarga['nik'] ?>" disabled />
            </div>
          </div>
          <!-- jenis kelamin -->
          <div class="row mb-3">
            <label class="col-md-2 form-label forms-label mt-md-2">Jenis Kelamin <span class="text-important">*</span></label>
            <div class="col-sm-10" id="radioFormGender">
              <div class="d-flex align-items-center">
                <div class="form-check me-4">
                  <input class="form-check-input" type="radio" name="pria" id="pria" checked />
                  <label class="form-check-label" for="pria">Laki-laki</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="wanita" id="wanita" />
                  <label class="form-check-label" for="wanita">Perempuan</label>
                </div>
              </div>
            </div>
          </div>
          <!-- tempat lahir -->
          <div class="row mb-3">
            <label for="tempat_lahir" class="col-md-2 form-label forms-label mt-md-2">Tempat Lahir <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="tempat_lahir" name="tempat_lahir" required placeholder="Masukkan Tempat Lahir" value="<?= $dataKeluarga['tempat_lahir'] ?>" />
            </div>
          </div>
          <!-- tanggal lahir -->
          <div class="row mb-3">
            <label for="tanggal_lahir" class="col-md-2 form-label forms-label mt-md-2">Tanggal Lahir <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="date" class="form-control input-control" id="tanggal_lahir" name="tanggal_lahir" required value="<?= $dataKeluarga['tgl_lahir'] ?>" />
            </div>
          </div>
          <!-- agama -->
          <div class="row mb-3">
            <label for="agama" class="col-md-2 form-label forms-label mt-md-2">Agama <span class="text-important">*</span></label>
            <div class="col-md-10">
              <select id="agama" name="agama" required class="form-select select-control">
                <option value="">Pilih Agama</option>
                <option value="Islam" <?= $dataKeluarga['agama'] === 'Islam' ? 'selected' : '' ?>>Islam</option>
                <option value="Khatolik" <?= $dataKeluarga['agama'] === 'Khatolik' ? 'selected' : '' ?>>Khatolik</option>
                <option value="Kristen" <?= $dataKeluarga['agama'] === 'Kristen' ? 'selected' : '' ?>>Kristen</option>
                <option value="Hindu" <?= $dataKeluarga['agama'] === 'Hindu' ? 'selected' : '' ?>>Hindu</option>
                <option value="Budha" <?= $dataKeluarga['agama'] === 'Budha' ? 'selected' : '' ?>>Budha</option>
                <option value="Konghucu" <?= $dataKeluarga['agama'] === 'Konghucu' ? 'selected' : '' ?>>Konghucu</option>
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
                <option value="Belum Kawin" <?= ($dataKeluarga['status_perkawinan'] == 'belum_kawin' || $dataKeluarga['status_perkawinan'] == 'Belum Kawin') ? 'selected' : '' ?>>Belum Kawin</option>
                <option value="Kawin" <?= ($dataKeluarga['status_perkawinan'] == 'kawin' || $dataKeluarga['status_perkawinan'] == 'Kawin') ? 'selected' : '' ?>>Kawin</option>
                <option value="Cerai Hidup" <?= ($dataKeluarga['status_perkawinan'] == 'cerai_hidup' || $dataKeluarga['status_perkawinan'] == 'Cerai Hidup') ? 'selected' : '' ?>>Cerai Hidup</option>
                <option value="Cerai Mati" <?= ($dataKeluarga['status_perkawinan'] == 'cerai_mati' || $dataKeluarga['status_perkawinan'] == 'Cerai Mati') ? 'selected' : '' ?>>Cerai Mati</option>
              </select>
            </div>
          </div>
          <!-- status perkawinan -->
          <div class="row mb-3">
            <label for="status" class="col-md-2 form-label forms-label mt-md-2">Status Hubungan Keluarga
              <span class="text-important">*</span></label>
            <div class="col-md-10">
              <select id="status" name="status" required class="form-select select-control">
                <option value="">Pilih Status Hubungan Keluarga</option>
                <option value="Kepala Keluarga" <?= ($dataKeluarga['status'] == 'Kepala Keluarga') ? 'selected' : '' ?>>Kepala Keluarga</option>
                <option value="Istri" <?= ($dataKeluarga['status'] == 'Istri') ? 'selected' : '' ?>>Istri</option>
                <option value="Anak" <?= ($dataKeluarga['status'] == 'Anak') ? 'selected' : '' ?>>Anak</option>
              </select>
            </div>
          </div>
          <!-- pendidikan -->
          <div class="row mb-3">
            <label for="pendidikan" class="col-md-2 form-label forms-label mt-md-2">Pendidikan <span class="text-important">*</span></label>
            <div class="col-md-10">
              <select id="pendidikan" name="pendidikan" required class="form-select select-control">
                <option value="">Pilih Pendidikan</option>
                <option value="Tidak Sekolah" <?= $dataKeluarga['pendidikan'] === "Tidak Sekolah" ? 'selected' : '' ?>>Tidak Sekolah</option>
                <option value="SD" <?= $dataKeluarga['pendidikan'] === "SD" ? 'selected' : '' ?>>SD</option>
                <option value="SMP" <?= $dataKeluarga['pendidikan'] === "SMP" ? 'selected' : '' ?>>SMP</option>
                <option value="SMA" <?= $dataKeluarga['pendidikan'] === "SMA" ? 'selected' : '' ?>>SMA</option>
                <option value="D1" <?= $dataKeluarga['pendidikan'] === "D1" ? 'selected' : '' ?>>D1</option>
                <option value="D2" <?= $dataKeluarga['pendidikan'] === "D2" ? 'selected' : '' ?>>D2</option>
                <option value="D3" <?= $dataKeluarga['pendidikan'] === "D3" ? 'selected' : '' ?>>D3</option>
                <option value="D4" <?= $dataKeluarga['pendidikan'] === "D4" ? 'selected' : '' ?>>D4</option>
                <option value="S1" <?= $dataKeluarga['pendidikan'] === "S1" ? 'selected' : '' ?>>S1</option>
                <option value="S2" <?= $dataKeluarga['pendidikan'] === "S2" ? 'selected' : '' ?>>S2</option>
                <option value="S3" <?= $dataKeluarga['pendidikan'] === "S3" ? 'selected' : '' ?>>S3</option>
              </select>
            </div>
          </div>
          <!-- status kependudukan -->
          <div class="row mb-3">
            <label for="status_kependudukan" class="col-md-2 form-label forms-label mt-md-2">Status Kependudukan <span class="text-important">*</span></label>
            <div class="col-md-10">
              <select id="status_kependudukan" name="status_kependudukan" required class="form-select select-control">
                <option value="">Pilih Status Kependudukan</option>
                <option value="Tetap" <?= $dataKeluarga['status_kependudukan'] === 'Tetap' ? 'selected' : '' ?>>Penduduk Tetap</option>
                <option value="Sementara" <?= $dataKeluarga['status_kependudukan'] === 'Sementara' ? 'selected' : '' ?>>Penduduk Sementara</option>
                <option value="Pendatang" <?= $dataKeluarga['status_kependudukan'] === 'Pendatang' ? 'selected' : '' ?>>Penduduk Pendatang</option>
                <option value="Pindahan" <?= $dataKeluarga['status_kependudukan'] === 'Pindahan' ? 'selected' : '' ?>>Penduduk Pindahan</option>
              </select>
            </div>
          </div>
          <!-- pekerjaan -->
          <div class="row mb-3">
            <label for="pekerjaan" class="col-md-2 form-label forms-label mt-md-2">Pekerjaan <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="pekerjaan" name="pekerjaan" required placeholder="Masukkan Pekerjaan" value="<?= $dataKeluarga['pekerjaan'] ?>" />
            </div>
          </div>
          <!-- no. hp -->
          <div class="row mb-3">
            <label for="no_hp" class="col-md-2 form-label forms-label mt-md-2">No. HP <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="no_hp" name="no_hp" required placeholder="Masukkan No. HP" value="<?= $dataKeluarga['no_hp'] ?>" />
            </div>
          </div>
          <!-- email -->
          <div class="row mb-3">
            <label for="email" class="col-md-2 form-label forms-label mt-md-2">Email <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="email" class="form-control input-control" id="email" name="email" required placeholder="Masukkan Email" value="<?= $dataKeluarga['email'] ?>" />
            </div>
          </div>
          <!-- foto -->
          <div class="row mb-3">
            <label for="foto" class="col-md-2 form-label forms-label mt-md-2">Foto</label>
            <div class="col-md-10">
              <div class="input-group">
                <input type="file" class="form-control input-control" id="foto" name="foto" accept="image/*" />
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
  // add method validation only letters with symbol , and .
  $.validator.addMethod("alphabetOnly", function(value, element) {
    return this.optional(element) || /^[a-zA-Z\s\.\,]+$/i.test(value);
  }, "Hanya dapat mengandung huruf, spasi, titik, dan koma.");
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
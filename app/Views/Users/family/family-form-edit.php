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
            <label for="jenis_kelamin" class="col-md-2 form-label forms-label mt-md-2">Jenis Kelamin <span class="text-important">*</span></label>
            <div class="col-sm-10" id="radioFormGender">
              <div class="d-flex align-items-center">
                <div class="form-check me-4">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_pria" <?= $dataKeluarga['jenis_kelamin'] === 'Laki-laki' ? 'checked ' : '' ?> value="Laki-laki" />
                  <label class="form-check-label" for="jenis_kelamin_pria">
                    Laki-laki
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_wanita" <?= $dataKeluarga['jenis_kelamin'] === 'Perempuan' ? 'checked ' : '' ?> value="Perempuan" />
                  <label class="form-check-label" for="jenis_kelamin_wanita">
                    Perempuan
                  </label>
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
                <?php foreach ($listAgama as $agama) : ?>
                  <option value="<?= $agama ?>" <?= $dataKeluarga['agama'] === $agama ? 'selected' : '' ?>><?= $agama ?></option>
                <?php endforeach ?>
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
                <?php foreach ($statusPerkawinan as $perkawinan) : ?>
                  <option value="<?= $perkawinan ?>" <?= ($dataKeluarga['status_perkawinan'] == $perkawinan) ? 'selected' : '' ?>><?= $perkawinan ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <!-- status  -->
          <div class="row mb-3">
            <label for="status" class="col-md-2 form-label forms-label mt-md-2">Status Hubungan Keluarga
              <span class="text-important">*</span></label>
            <div class="col-md-10">
              <select id="status" name="status" required class="form-select select-control">
                <option value="">Pilih Status Hubungan Keluarga</option>
                <?php foreach ($statusKeluarga as $status) : ?>
                  <option value="<?= $status ?>" <?= ($dataKeluarga['status'] == $status) ? 'selected' : '' ?>><?= $status ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <!-- pendidikan -->
          <div class="row mb-3">
            <label for="pendidikan" class="col-md-2 form-label forms-label mt-md-2">Pendidikan <span class="text-important">*</span></label>
            <div class="col-md-10">
              <select id="pendidikan" name="pendidikan" required class="form-select select-control">
                <option value="">Pilih Pendidikan</option>
                <?php foreach ($pendidikan as $pendidikanList) : ?>
                  <option value="<?= $pendidikanList ?>" <?= $dataKeluarga['pendidikan'] === $pendidikanList ? 'selected' : '' ?>><?= $pendidikanList ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <!-- status kependudukan -->
          <div class="row mb-3">
            <label for="status_kependudukan" class="col-md-2 form-label forms-label mt-md-2">Status Kependudukan <span class="text-important">*</span></label>
            <div class="col-md-10">
              <select id="status_kependudukan" name="status_kependudukan" required class="form-select select-control">
                <option value="">Pilih Status Kependudukan</option>
                <?php foreach ($statusKependudukan as $statusPenduduk) : ?>
                  <option value="<?= $statusPenduduk ?>" <?= $dataKeluarga['status_kependudukan'] === $statusPenduduk ? 'selected' : '' ?>>Penduduk <?= $statusPenduduk ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <!-- alamat -->
          <div class="row mb-3">
            <label for="alamat" class="col-md-2 form-label forms-label mt-md-2">Alamat <span class="text-important">*</span></label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="alamat" name="alamat" required placeholder="Masukkan Alamat" value="<?= $dataKeluarga['alamat'] ?>" describedby="alamatHelp" />
              <div id="alamatHelp" class="form-text input-text" style="line-height: 1.85;">
                Mohon gunakan format berikut: <br />
                <span class="help-describe">Jalan/Desa RT 00 RW 00 Desa/Kelurahan Kecamatan,Kota/Kabupaten Kode Pos, Provinsi</span>
              </div>
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
              <div class="mb-3">
                <figure class="">
                  <img src="<?= $profilePhotoPath .  $dataKeluarga['foto'] ?>" id="thumbnailImage" alt="Pas Foto <?= $dataKeluarga['nama'] ?>" class="img-fluid img-thumbnail img-preview pas-foto-form" />
                </figure>
              </div>
              <div class="mb-2">
                <input type="file" class="form-control-image" id="foto" name="foto" required accept="image/*" />
                <label for="foto" class="btn btn-dark fw-semibold">Unggah Foto</label>
              </div>
              <p class="text-sm text-basic">
                *Foto disarankan berukuran 3x4
              </p>
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
  $('#foto').on('change', function() {
    const file = this.files[0];
    if (file) {
      const reader = new FileReader();

      reader.onload = function(event) {
        $('#thumbnailImage').attr('src', event.target.result);
        $('#thumbnailImage').attr('alt', file.name);
      };

      reader.readAsDataURL(file);
    }
  });
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
        status: {
          required: true,
        },
        status_kependudukan: {
          required: true,
        },
        alamat: {
          required: true,
        },
      },
      messages: {
        nik: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>NIK tidak boleh kosong.',
          number: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>NIK harus berupa angka.',
          minlength: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>NIK harus berjumlah 16 digit.',
          maxlength: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>NIK harus berjumlah 16 digit.',
        },
        nama: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nama tidak boleh kosong.',
          alphabetOnly: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nama harus berupa huruf.',
        },
        jenis_kelamin: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Jenis kelamin tidak boleh kosong.',
        },
        tempat_lahir: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Tempat lahir tidak boleh kosong.',
        },
        tanggal_lahir: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Tanggal lahir tidak boleh kosong.',
        },
        status_perkawinan: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Status perkawinan tidak boleh kosong.',
        },
        agama: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Agama tidak boleh kosong.',
        },
        pendidikan: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Pendidikan tidak boleh kosong.',
        },
        pekerjaan: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Pekerjaan tidak boleh kosong.',
        },
        no_hp: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>No. HP tidak boleh kosong.',
          number: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>No. HP harus berupa angka.',
          minlength: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>No. HP harus berjumlah 10-13 digit.',
          maxlength: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>No. HP harus berjumlah 10-13 digit.',
        },
        email: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Email tidak boleh kosong.',
          email: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Email tidak valid.',
        },
        foto: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Foto tidak boleh kosong.',
          extension: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Foto harus berupa file gambar.',
        },
        status: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Status hubungan keluarga tidak boleh kosong.',
        },
        status_kependudukan: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Status kependudukan tidak boleh kosong.',
        },
        alamat: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Alamat tidak boleh kosong.',
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
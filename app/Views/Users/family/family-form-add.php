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
                <label for="jenis_kelamin" class="form-label forms-label">Jenis Kelamin
                  <span class="text-important">*</span></label>
                <div class="col-sm-10" id="radioFormGender">
                  <div class="d-flex align-items-center">
                    <div class="form-check me-4">
                      <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_pria" value="Laki-laki" />
                      <label class="form-check-label" for="jenis_kelamin_pria">Laki-laki</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_wanita" value="Perempuan" />
                      <label class="form-check-label" for="jenis_kelamin_wanita">Perempuan</label>
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
                    <?php foreach ($statusKeluarga as $status) : ?>
                      <option value="<?= $status ?>"><?= $status ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                <!-- agama -->
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                  <label for="agama" class="form-label forms-label">Agama <span class="text-important">*</span></label>
                  <select id="agama" name="agama" required class="form-select select-control">
                    <option value="">Pilih Agama</option>
                    <?php foreach ($listAgama as $agama) : ?>
                      <option value="<?= $agama ?>"><?= $agama ?></option>
                    <?php endforeach ?>
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
                    <?php foreach ($statusKependudukan as $statusPenduduk) : ?>
                      <option value="<?= $statusPenduduk ?>">Penduduk <?= $statusPenduduk ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                <!-- status perkawinan -->
                <div class="col-12 col-md-6">
                  <label for="status_perkawinan" class="form-label forms-label">Status Perkawinan
                    <span class="text-important">*</span></label>

                  <select id="status_perkawinan" name="status_perkawinan" required class="form-select select-control">
                    <option value="">Pilih Status Perkawinan</option>
                    <?php foreach ($statusPerkawinan as $perkawinan) : ?>
                      <option value="<?= $perkawinan ?>"><?= $perkawinan ?></option>
                    <?php endforeach ?>
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
                    <?php foreach ($pendidikan as $pendidikanList) : ?>
                      <option value="<?= $pendidikanList ?>"><?= $pendidikanList ?></option>
                    <?php endforeach ?>
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
                <label for="foto" class="form-label forms-label">Pas Foto</label>
                <div class="mb-3">
                  <figure class="">
                    <img src="https://www.placehold.it/300x400" id="thumbnailImage" alt="Placeholder 300x400" class="img-fluid img-thumbnail img-preview pas-foto-form" />
                  </figure>
                </div>
                <div class="mb-2">
                  <input type="file" class="form-control-image" id="foto" name="foto" required accept="image/*" />
                  <label for="foto" class="btn btn-dark fw-semibold">Unggah Foto</label>
                </div>
                <p class="text-sm text-basic">
                  *Pas Foto disarankan memiliki rasio 3x4 atau 4x6
                </p>
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
            <h2 class="accordion-header" id="faq-family1">
              <button class="accordion-button accordion-btn shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faq-family-collapse1" aria-expanded="true" aria-controls="faq-family-collapse1">
                <span class="text-secondaries fw-semibold me-1">Q:</span>
                <span class="fw-medium">Apa itu Form Tambah Keluarga?</span>
              </button>
            </h2>
            <div id="faq-family-collapse1" class="accordion-collapse collapse show" aria-labelledby="faq-family1">
              <div class="accordion-body accordion-text">
                <span class="text-secondaries fw-semibold me-1">A:</span>
                <span class="text-gray">
                  Form Tambah Keluarga digunakan untuk memasukkan data anggota keluarga baru ke dalam sistem.</span>
              </div>
            </div>
          </div>
          <div class="accordion-item accordion-box">
            <h2 class="accordion-header" id="faq-family2">
              <button class="accordion-button accordion-btn shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-family-collapse2" aria-expanded="false" aria-controls="faq-family-collapse2">
                <span class="text-secondaries fw-semibold me-1">Q:</span>
                <span class="fw-medium">Bagaimana cara mengisi data di Form Tambah Keluarga?</span>
              </button>
            </h2>
            <div id="faq-family-collapse2" class="accordion-collapse collapse" aria-labelledby="faq-family2">
              <div class="accordion-body accordion-text">
                <span class="text-secondaries fw-semibold me-1">A:</span>
                <span class="text-gray">
                  Anda perlu mengisi semua informasi yang diminta dengan benar sesuai dengan data anggota keluarga yang akan ditambahkan.</span>
              </div>
            </div>
          </div>
          <div class="accordion-item accordion-box">
            <h2 class="accordion-header" id="faq-family3">
              <button class="accordion-button accordion-btn shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-family-collapse3" aria-expanded="false" aria-controls="faq-family-collapse3">
                <span class="text-secondaries fw-semibold me-1">Q:</span>
                <span class="fw-medium">Apakah saya bisa mengubah informasi tersebut nanti?</span>
              </button>
            </h2>
            <div id="faq-family-collapse3" class="accordion-collapse collapse" aria-labelledby="faq-family3">
              <div class="accordion-body accordion-text">
                <span class="text-secondaries fw-semibold me-1">A:</span>
                <span class="text-gray">
                  Ya, Anda dapat mengedit dan memperbarui informasi anggota keluarga kapan saja dengan masuk ke akun Anda dan mengakses bagian profil atau bagian menu keluarga.</span>
              </div>
            </div>
          </div>
          <div class="accordion-item accordion-box">
            <h2 class="accordion-header" id="faq-family4">
              <button class="accordion-button accordion-btn shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-family-collapse4" aria-expanded="false" aria-controls="faq-family-collapse4">
                <span class="text-secondaries fw-semibold me-1">Q:</span>
                <span class="fw-medium">Apakah ada batasan jumlah anggota keluarga yang dapat saya tambahkan?</span>
              </button>
            </h2>
            <div id="faq-family-collapse4" class="accordion-collapse collapse" aria-labelledby="faq-family4">
              <div class="accordion-body accordion-text">
                <span class="text-secondaries fw-semibold me-1">A:</span>
                <span class="text-gray">
                  Tidak ada batasan tertentu. Anda dapat menambahkan semua anggota keluarga inti ke profil Anda menggunakan formulir ini.</span>
              </div>
            </div>
          </div>
          <div class="accordion-item accordion-box">
            <h2 class="accordion-header" id="faq-family5">
              <button class="accordion-button accordion-btn shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-family-collapse5" aria-expanded="false" aria-controls="faq-family-collapse5">
                <span class="text-secondaries fw-semibold me-1">Q:</span>
                <span class="fw-medium">Apakah saya bisa menambahkan anggota keluarga yang lebih luas melalui formulir ini?</span>
              </button>
            </h2>
            <div id="faq-family-collapse5" class="accordion-collapse collapse" aria-labelledby="faq-family5">
              <div class="accordion-body accordion-text">
                <span class="text-secondaries fw-semibold me-1">A:</span>
                <span class="text-gray">
                  Formulir ini terutama digunakan untuk menambahkan anggota keluarga inti (pasangan, anak, orangtua, saudara kandung). Untuk menambahkan anggota keluarga yang lebih luas, silakan hubungi tim dukungan kami.</span>
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
  // add method validation only letters
  $.validator.addMethod("alphabetOnly", function(value, element) {
    return this.optional(element) || value == value.match(/^[A-Za-z\s']+$/);
  });
  // validate
  $(document).ready(function() {
    $("#familyFormAdd").validate({
      rules: {
        nama: {
          required: true,
          alphabetOnly: true,
        },
        nik: {
          required: true,
          number: true,
          minlength: 16,
          maxlength: 16,
        },
        jenis_kelamin: {
          required: true,
        },
        status: {
          required: true,
        },
        agama: {
          required: true,
        },
        tampat_lahir: {
          required: true,
        },
        tanggal_lahir: {
          required: true,
        },
        status_kependudukan: {
          required: true,
        },
        status_perkawinan: {
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
        nama: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nama tidak boleh kosong.',
          alphabetOnly: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nama harus berupa huruf.',
        },
        nik: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>NIK tidak boleh kosong.',
          number: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>NIK harus berupa angka.',
          minlength: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>NIK harus berjumlah 16 digit.',
          maxlength: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>NIK harus berjumlah 16 digit.',
        },
        jenis_kelamin: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Jenis kelamin tidak boleh kosong.',
        },
        status: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Status tidak boleh kosong.',
        },
        agama: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Agama tidak boleh kosong.',
        },
        tempat_lahir: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Tempat lahir tidak boleh kosong.',
        },
        tanggal_lahir: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Tanggal lahir tidak boleh kosong.',
        },
        status_kependudukan: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Status kependudukan tidak boleh kosong.',
        },
        status_perkawinan: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Status perkawinan tidak boleh kosong.',
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
    SweetAlert.init();
  });
</script>

<?= $this->endSection(); ?>
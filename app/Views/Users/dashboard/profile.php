<?php $this->extend('users/template/layout'); ?>
<?php $this->section('homepage'); ?>

<!-- header -->
<header class="container px-0">
  <div class="header-container-dashboard">
    <div class="mb-3">
      <button class="btn btn-main-outline-xs" type="button" onclick="location.href='./index.html'">
        <i class="fa-solid fa-house me-2"></i>Beranda
      </button>
    </div>
    <h2 class="mb-3">Selamat Datang di Dashboard Profile</h2>
    <p class="text-basic mb-0">
      Voluptate facere modi provident eum quae fugit quo doloremque nulla
      adipisci.
    </p>
  </div>
</header>
<!-- end of header -->

<!-- main -->
<main>
  <section class="container container-space pt-3">
    <form class="card-form-container card shadow" id="profileForm" action="#" enctype="multipart/form-data" method="POST">
      <div class="card-header">
        <p class="mb-0">Profile</p>
      </div>
      <div class="card-form-container card-body">
        <div>
          <!-- nik -->
          <div class="row mb-3">
            <label for="nik" class="col-sm-2 col-form-label forms-label">NIK</label>
            <div class="col-sm-10">
              <input type="text" class="form-control input-control" id="nik" name="nik" required placeholder="Masukkan NIK" value="" />
            </div>
          </div>
          <!-- nama -->
          <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label forms-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control input-control" id="nama" name="nama" required placeholder="Masukkan Nama" value="" />
            </div>
          </div>
          <!-- status -->
          <div class="row mb-3">
            <label for="status" class="col-sm-2 col-form-label forms-label">Status</label>
            <div class="col-sm-10">
              <select id="status" name="status" required class="form-select select-control">
                <option value="">Pilih Status</option>
                <option value="1">Status 1</option>
                <option value="2">Status 2</option>
                <option value="3">Status 3</option>
              </select>
            </div>
          </div>
          <!-- jenis kelamin -->
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label forms-label">Jenis Kelamin</label>
            <div class="col-sm-10" id="radioFormGender">
              <div class="d-flex align-items-center">
                <div class="form-check me-4">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="pria" />
                  <label class="form-check-label" for="pria">
                    Laki-laki
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="wanita" />
                  <label class="form-check-label" for="wanita">
                    Perempuan
                  </label>
                </div>
              </div>
            </div>
          </div>
          <!-- tempat lahir -->
          <div class="row mb-3">
            <label for="tempat_lahir" class="col-sm-2 col-form-label forms-label">Tempat Lahir</label>
            <div class="col-sm-10">
              <input type="text" class="form-control input-control" id="tempat_lahir" name="tempat_lahir" required placeholder="Masukkan Tempat Lahir" value="" />
            </div>
          </div>
          <!-- tanggal lahir -->
          <div class="row mb-3">
            <label for="tanggal_lahir" class="col-sm-2 col-form-label forms-label">Tanggal Lahir</label>
            <div class="col-sm-10">
              <input type="date" class="form-control input-control" id="tanggal_lahir" name="tanggal_lahir" required />
            </div>
          </div>
          <!-- status perkawinan -->
          <div class="row mb-3">
            <label for="status_perkawinan" class="col-sm-2 col-form-label forms-label">Status Perkawinan</label>
            <div class="col-sm-10">
              <select id="status_perkawinan" name="status_perkawinan" required class="form-select select-control">
                <option value="">Pilih Status Perkawinan</option>
                <option value="1">Status Perkawinan 1</option>
                <option value="2">Status Perkawinan 2</option>
                <option value="3">Status Perkawinan 3</option>
              </select>
            </div>
          </div>
          <!-- agama -->
          <div class="row mb-3">
            <label for="agama" class="col-sm-2 col-form-label forms-label">Agama</label>
            <div class="col-sm-10">
              <select id="agama" name="agama" required class="form-select select-control">
                <option value="">Pilih Agama</option>
                <option value="1">Agama 1</option>
                <option value="2">Agama 2</option>
                <option value="3">Agama 3</option>
              </select>
            </div>
          </div>
          <!-- pendidikan -->
          <div class="row mb-3">
            <label for="pendidikan" class="col-sm-2 col-form-label forms-label">Pendidikan</label>
            <div class="col-sm-10">
              <select id="pendidikan" name="pendidikan" required class="form-select select-control">
                <option value="">Pilih Pendidikan</option>
                <option value="1">Pendidikan 1</option>
                <option value="2">Pendidikan 2</option>
                <option value="3">Pendidikan 3</option>
              </select>
            </div>
          </div>
          <!-- pekerjaan -->
          <div class="row mb-3">
            <label for="pekerjaan" class="col-sm-2 col-form-label forms-label">Pekerjaan</label>
            <div class="col-sm-10">
              <select id="pekerjaan" name="pekerjaan" required class="form-select select-control">
                <option value="">Pilih Pekerjaan</option>
                <option value="1">Pekerjaan 1</option>
                <option value="2">Pekerjaan 2</option>
                <option value="3">Pekerjaan 3</option>
              </select>
            </div>
          </div>
          <!-- no. hp -->
          <div class="row mb-3">
            <label for="no_hp" class="col-sm-2 col-form-label forms-label">No. HP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control input-control" id="no_hp" name="no_hp" required placeholder="Masukkan No. HP" value="" />
            </div>
          </div>
          <!-- email -->
          <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label forms-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control input-control" id="email" name="email" required placeholder="Masukkan Email" value="" />
            </div>
          </div>
          <!-- foto -->
          <div class="row mb-3">
            <label for="foto" class="col-sm-2 col-form-label forms-label">Foto</label>
            <div class="col-sm-10">
              <input type="file" class="form-control input-control" id="foto" name="foto" required />
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <div class="w-100 d-flex justify-content-end">
          <button type="submit" form="profileForm" class="btn btn-main btn-submit" id="profileFormButton">
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


<!-- internal script -->
<script>
  // add method validation only letters
  $.validator.addMethod('alphabetOnly', function(value, element) {
    return this.optional(element) || value == value.match(/^[A-Za-z\s']+$/);
  });
  // validate
  $(document).ready(function() {
    $('#profileForm').validate({
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
        status: {
          required: true,
        },
        jenis_kelamin: {
          required: true,
        },
        tampat_lahir: {
          required: true,
          alphabetOnly: true,
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
          extension: 'jpg|jpeg|png',
        },
      },
      messages: {
        nik: {
          required: 'NIK tidak boleh kosong.',
          number: 'NIK harus berupa angka.',
          minlength: 'NIK harus berjumlah 16 digit.',
          maxlength: 'NIK harus berjumlah 16 digit.',
        },
        nama: {
          required: 'Nama tidak boleh kosong.',
        },
        status: {
          required: 'Status tidak boleh kosong.',
        },
        jenis_kelamin: {
          required: 'Jenis kelamin tidak boleh kosong.',
        },
        tempat_lahir: {
          required: 'Tempat lahir tidak boleh kosong.',
        },
        tanggal_lahir: {
          required: 'Tanggal lahir tidak boleh kosong.',
        },
        status_perkawinan: {
          required: 'Status perkawinan tidak boleh kosong.',
        },
        agama: {
          required: 'Agama tidak boleh kosong.',
        },
        pendidikan: {
          required: 'Pendidikan tidak boleh kosong.',
        },
        pekerjaan: {
          required: 'Pekerjaan tidak boleh kosong.',
        },
        no_hp: {
          required: 'No. HP tidak boleh kosong.',
          number: 'No. HP harus berupa angka.',
          minlength: 'No. HP harus berjumlah 10-13 digit.',
          maxlength: 'No. HP harus berjumlah 10-13 digit.',
        },
        email: {
          required: 'Email tidak boleh kosong.',
          email: 'Email tidak valid.',
        },
        foto: {
          required: 'Foto tidak boleh kosong.',
          extension: 'Foto harus berupa file gambar.',
        },
      },
      errorPlacement: function(error, element) {
        if (element.is(':radio')) {
          error.appendTo('#radioFormGender');
        } else {
          error.insertAfter(element);
        }
      },
    });
    $('#profileFormButton').on('click', () => {
      console.log($('#profileForm').valid());
    });
  });
</script>

<?= $this->endSection(); ?>
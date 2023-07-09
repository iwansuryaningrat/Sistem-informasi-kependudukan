<?php $this->extend('users/template/layout'); ?>
<?php $this->section('homepage'); ?>

<!-- header -->
<header class="container px-0">
  <div class="header-container-dashboard-form">
    <div class="mb-4">
      <button class="btn btn-main-outline-xs" type="button" onclick="location.href='../../index.html'">
        <i class="fa-solid fa-house me-2"></i>Beranda
      </button>
    </div>
    <h3 class="mb-2">Dashboard Profil</h3>
    <p class="text-basic mb-0">
      Selamat datang di dashboard profil, Iwan Suryaningrat!
    </p>
  </div>
</header>
<!-- end of header -->

<!-- main -->
<main>
  <section class="container container-space pt-3">
    <div class="row">
      <div class="col-md-3 mb-4 mb-md-0">
        <div class="nav flex-column nav-pills pills-tab" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <!-- button detail profile -->
          <button class="nav-link active piils-btn" id="detail-profil-tab" data-bs-toggle="pill" data-bs-target="#detail-profil-content" type="button" role="tab" aria-controls="detail-profil-content" aria-selected="true">
            Detail Profil
          </button>
          <!-- button data pribadi -->
          <button class="nav-link piils-btn" id="data-pribadi-tab" data-bs-toggle="pill" data-bs-target="#data-pribadi-content" type="button" role="tab" aria-controls="data-pribadi-content" aria-selected="false">
            Data Pribadi
          </button>
          <!-- button ubah kata sandi -->
          <button class="nav-link piils-btn" id="ubah-kata-sandi-tab" data-bs-toggle="pill" data-bs-target="#ubah-kata-sandi-content" type="button" role="tab" aria-controls="ubah-kata-sandi-content" aria-selected="false">
            Ubah Kata Sandi
          </button>
        </div>
      </div>
      <div class="col-md-9">
        <div class="tab-content" id="v-pills-tabContent">

          <!-- detail profile content -->
          <div class="tab-pane fade show active" id="detail-profil-content" role="tabpanel" aria-labelledby="detail-profil-tab" tabindex="0">
            <form class="card-form-container card" id="detailProfileForm" action="#" enctype="multipart/form-data" method="POST">
              <div class="card-header card-form-header">
                <p class="mb-0 fw-semibold">Detail Profil</p>
              </div>
              <div class="card-body card-form-body">
                <!-- foto profil -->
                <div class="mb-3">
                  <p class="form-label forms-label">
                    Foto Profil <span class="text-important">*</span>
                  </p>
                  <div class="d-flex align-items-center flex-column flex-sm-row mb-2">
                    <figure class="profile-image-wrapper mb-2 mb-sm-0">
                      <img src="../../assets/img/khoeru1x1.png" alt="photo-profile-iwan" class="profile-image" />
                    </figure>
                    <label for="foto_profil" class="btn btn-dark ms-sm-4 text-sm fw-semibold px-3 py-2">Unggah Foto</label>
                    <input type="file" class="form-control-image" id="foto_profil" name="foto_profil" required accept="image/*" />
                  </div>
                  <p class="text-sm text-basic">
                    Foto profil kamu disarankan memiliki rasio 1 : 1 atau
                    berukuran tidak lebih dari 2MB
                  </p>
                </div>
                <div class="row mb-3">
                  <!-- nama depan -->
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label for="nama_depan" class="form-label forms-label">Nama Depan
                      <span class="text-important">*</span></label>
                    <input type="text" class="form-control input-control" id="nama_depan" name="nama_depan" required placeholder="Masukkan Nama Depan" value="Iwan" />
                  </div>
                  <!-- nama belakang -->
                  <div class="col-md-6">
                    <label for="nama_belakang" class="form-label forms-label">Nama Belakang
                      <span class="text-important">*</span></label>
                    <input type="text" class="form-control input-control" id="nama_belakang" name="nama_belakang" required placeholder="Masukkan Nama Belakang" value="Suryaningrat" />
                  </div>
                </div>
                <!-- email -->
                <div class="mb-3">
                  <label for="email" class="form-label forms-label">Alamat Email
                    <span class="text-important">*</span></label>
                  <input type="email" class="form-control input-control" id="email" name="email" required disabled placeholder="Masukkan Nama Belakang" value="suryaningrat@gmail.com" />
                </div>
                <!-- nik -->
                <div class="mb-3">
                  <label for="nik" class="form-label forms-label">NIK <span class="text-important">*</span></label>
                  <input type="text" class="form-control input-control" id="nik" name="nik" required placeholder="Masukkan NIK" value="3325090602010001" />
                </div>
              </div>
              <div class="card-footer card-form-footer">
                <div class="w-100 d-flex justify-content-end">
                  <button type="submit" form="detailProfileForm" class="btn btn-main btn-submit" id="detailProfileFormButton">
                    Simpan
                  </button>
                </div>
              </div>
            </form>
          </div>

          <!-- data pribadi content -->
          <div class="tab-pane fade" id="data-pribadi-content" role="tabpanel" aria-labelledby="data-pribadi-tab" tabindex="0">
            <form class="card-form-container card" id="profileForm" action="#" enctype="multipart/form-data" method="POST">
              <div class="card-header card-form-header">
                <p class="mb-0 fw-semibold">Profile</p>
              </div>
              <div class="card-body card-form-body">
                <div>
                  <!-- no & jenis kelamin -->
                  <div class="row mb-3">
                    <!-- no. hp -->
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="no_hp" class="form-label forms-label">No. Telp
                        <span class="text-important">*</span></label>

                      <input type="text" class="form-control input-control" id="no_hp" name="no_hp" required placeholder="Masukkan No. HP" value="" />
                    </div>
                    <!-- jenis kelamin -->
                    <div class="col-md-6">
                      <label class="form-label forms-label mb-3">Jenis Kelamin
                        <span class="text-important">*</span></label>
                      <div id="radioFormGender">
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
                  </div>
                  <!-- status -->
                  <div class="row mb-3">
                    <!-- status -->
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="status" class="form-label forms-label">Status
                        <span class="text-important">*</span></label>

                      <select id="status" name="status" required class="form-select select-control">
                        <option value="">Pilih Status</option>
                        <option value="1">Status 1</option>
                        <option value="2">Status 2</option>
                        <option value="3">Status 3</option>
                      </select>
                    </div>
                    <!-- status perkawinan -->
                    <div class="col-md-6">
                      <label for="status_perkawinan" class="form-label forms-label">Status Perkawinan
                        <span class="text-important">*</span></label>

                      <select id="status_perkawinan" name="status_perkawinan" required class="form-select select-control">
                        <option value="">Pilih Status Perkawinan</option>
                        <option value="1">Status Perkawinan 1</option>
                        <option value="2">Status Perkawinan 2</option>
                        <option value="3">Status Perkawinan 3</option>
                      </select>
                    </div>
                  </div>
                  <!-- lahir -->
                  <div class="row mb-3">
                    <!-- tempat lahir -->
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="tempat_lahir" class="form-label forms-label">Tempat Lahir
                        <span class="text-important">*</span></label>

                      <input type="text" class="form-control input-control" id="tempat_lahir" name="tempat_lahir" required placeholder="Masukkan Tempat Lahir" value="" />
                    </div>
                    <!-- tanggal lahir -->
                    <div class="col-md-6">
                      <label for="tanggal_lahir" class="form-label forms-label">Tanggal Lahir
                        <span class="text-important">*</span></label>

                      <input type="date" class="form-control input-control" id="tanggal_lahir" name="tanggal_lahir" required />
                    </div>
                  </div>
                  <!-- alamat -->
                  <div class="mb-3">
                    <label for="alamat" class="form-label forms-label">Alamat <span class="text-important">*</span></label>

                    <input class="form-control input-control" id="alamat" name="alamat" required placeholder="Masukkan Alamat" value="" />
                  </div>
                  <div class="row mb-3">
                    <!-- provinsi -->
                    <div class="col-md-4 mb-3 mb-md-0">
                      <label for="status" class="form-label forms-label">Provinsi
                        <span class="text-important">*</span></label>

                      <select id="provinsi" name="provinsi" required class="form-select select-control">
                        <option value="">Pilih Provinsi</option>
                        <option value="1">Provinsi 1</option>
                        <option value="2">Provinsi 2</option>
                        <option value="3">Provinsi 3</option>
                      </select>
                    </div>
                    <!-- kota atau kabupaten -->
                    <div class="col-md-4 mb-3 mb-md-0">
                      <label for="kota_kabupaten" class="form-label forms-label">Kota/Kabupaten
                        <span class="text-important">*</span></label>

                      <select id="kota_kabupaten" name="kota_kabupaten" required class="form-select select-control">
                        <option value="">Pilih Kota/Kabupaten</option>
                        <option value="1">Kota/Kabupaten 1</option>
                        <option value="2">Kota/Kabupaten 2</option>
                        <option value="3">Kota/Kabupaten 3</option>
                      </select>
                    </div>
                    <!-- kodepos -->
                    <div class="col-md-4">
                      <label for="kodepos" class="form-label forms-label">Kode Pos
                        <span class="text-important">*</span></label>

                      <input type="text" class="form-control input-control" id="kodepos" name="kodepos" required placeholder="Masukkan Kode Pos" value="" />
                    </div>
                  </div>
                  <!-- agama -->
                  <div class="mb-3">
                    <label for="agama" class="form-label forms-label">Agama <span class="text-important">*</span></label>

                    <select id="agama" name="agama" required class="form-select select-control">
                      <option value="">Pilih Agama</option>
                      <option value="1">Agama 1</option>
                      <option value="2">Agama 2</option>
                      <option value="3">Agama 3</option>
                    </select>
                  </div>
                  <!-- pekerjaan -->
                  <div class="row mb-3">
                    <!-- pendidikan -->
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="pendidikan" class="form-label forms-label">Pendidikan
                        <span class="text-important">*</span></label>

                      <select id="pendidikan" name="pendidikan" required class="form-select select-control">
                        <option value="">Pilih Pendidikan</option>
                        <option value="1">Pendidikan 1</option>
                        <option value="2">Pendidikan 2</option>
                        <option value="3">Pendidikan 3</option>
                      </select>
                    </div>
                    <!-- pekerjaan -->
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="pekerjaan" class="form-label forms-label">Pekerjaan
                        <span class="text-important">*</span></label>
                      <select id="pekerjaan" name="pekerjaan" required class="form-select select-control">
                        <option value="">Pilih Pekerjaan</option>
                        <option value="1">Pekerjaan 1</option>
                        <option value="2">Pekerjaan 2</option>
                        <option value="3">Pekerjaan 3</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer card-form-footer">
                <div class="w-100 d-flex justify-content-end">
                  <button type="submit" form="profileForm" class="btn btn-main btn-submit px-3" id="profileFormButton">
                    Simpan
                  </button>
                </div>
              </div>
            </form>
          </div>

          <!-- ubah kata sandi content -->
          <div class="tab-pane fade" id="ubah-kata-sandi-content" role="tabpanel" aria-labelledby="ubah-kata-sandi-tab" tabindex="0">
            <form class="card-form-container card" id="changePasswordForm" action="#" enctype="multipart/form-data" method="POST">
              <div class="card-header card-form-header">
                <p class="mb-0 fw-semibold">Ubah Kata Sandi</p>
              </div>
              <div class="card-body card-form-body">
                <!-- password lama -->
                <div class="mb-3 position-relative">
                  <label for="password_lama" class="form-label forms-label">Password Lama
                    <span class="text-important">*</span></label>
                  <input type="password" id="password_lama" name="password_lama" value="" required placeholder="Masukkan Password Lama" class="form-control input-control-password" />
                  <span id="togglePasswordLama"><i class="fa-solid fa-eye" title="show password"></i></span>
                </div>
                <!-- password baru -->
                <div class="mb-3 position-relative">
                  <label for="password_baru" class="form-label forms-label">Password Baru
                    <span class="text-important">*</span></label>
                  <input type="password" id="password_baru" name="password_baru" value="" required placeholder="Masukkan Password Baru" class="form-control input-control-password" />
                  <span id="togglePasswordBaru"><i class="fa-solid fa-eye" title="show password"></i></span>
                </div>
                <!-- konfirmasi password baru -->
                <div class="mb-3 position-relative">
                  <label for="konfirmasi_password_baru" class="form-label forms-label">Konfirmasi Password Baru
                    <span class="text-important">*</span></label>
                  <input type="password" id="konfirmasi_password_baru" name="konfirmasi_password_baru" value="" required placeholder="Masukkan Konfirmasi Password Baru" class="form-control input-control-password" />
                  <span id="toggleKonfirmasiPasswordBaru"><i class="fa-solid fa-eye" title="show password"></i></span>
                </div>
              </div>
              <div class="card-footer card-form-footer">
                <div class="w-100 d-flex justify-content-end">
                  <button type="submit" form="changePasswordForm" class="btn btn-main btn-submit" id="changePasswordFormButton">
                    Simpan
                  </button>
                </div>
              </div>
            </form>
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
    // detail profile
    $("#detailProfileForm").validate({
      rules: {
        nama_depan: {
          required: true,
          alphabetOnly: true,
        },
        nama_belakang: {
          required: true,
          alphabetOnly: true,
        },
        nik: {
          required: true,
          number: true,
          minlength: 16,
          maxlength: 16,
        },
      },
      messages: {
        nama_depan: {
          required: "Nama depan tidak boleh kosong",
          alphabetOnly: "Nama depan hanya boleh berisi huruf",
        },
        nama_belakang: {
          required: "Nama belakang tidak boleh kosong",
          alphabetOnly: "Nama belakang hanya boleh berisi huruf",
        },
        nik: {
          required: "NIK tidak boleh kosong",
          number: "NIK hanya boleh berisi angka",
          minlength: "NIK harus berisi 16 angka",
          maxlength: "NIK harus berisi 16 angka",
        },
      },
    });
    $("#detailProfileFormButton").on("click", () => {
      console.log($("#detailProfileForm").valid());
    });
    // data pribadi
    $("#profileForm").validate({
      rules: {
        no_hp: {
          required: true,
          number: true,
          minlength: 10,
          maxlength: 13,
        },
        jenis_kelamin: {
          required: true,
        },
        status: {
          required: true,
        },
        status_perkawinan: {
          required: true,
        },
        tampat_lahir: {
          required: true,
          alphabetOnly: true,
        },
        tanggal_lahir: {
          required: true,
        },
        alamat: {
          required: true,
        },
        provinsi: {
          required: true,
        },
        kota_kabupaten: {
          required: true,
        },
        kodepos: {
          required: true,
          number: true,
          minlength: 5,
          maxlength: 5,
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
      },
      messages: {
        no_hp: {
          required: "No. HP tidak boleh kosong.",
          number: "No. HP harus berupa angka.",
          minlength: "No. HP harus berjumlah 10-13 digit.",
          maxlength: "No. HP harus berjumlah 10-13 digit.",
        },
        jenis_kelamin: {
          required: "Jenis kelamin tidak boleh kosong.",
        },
        status: {
          required: "Status tidak boleh kosong.",
        },
        status_perkawinan: {
          required: "Status perkawinan tidak boleh kosong.",
        },
        tempat_lahir: {
          required: "Tempat lahir tidak boleh kosong.",
        },
        tanggal_lahir: {
          required: "Tanggal lahir tidak boleh kosong.",
        },
        alamat: {
          required: "Alamat tidak boleh kosong.",
        },
        provinsi: {
          required: "Provinsi tidak boleh kosong.",
        },
        kota_kabupaten: {
          required: "Kota/Kabupaten tidak boleh kosong.",
        },
        kodepos: {
          required: "Kodepos tidak boleh kosong.",
          number: "Kodepos harus berupa angka.",
          minlength: "Kodepos harus berjumlah 5 digit.",
          maxlength: "Kodepos harus berjumlah 5 digit.",
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
      },
      errorPlacement: function(error, element) {
        if (element.is(":radio")) {
          error.appendTo("#radioFormGender");
        } else {
          error.insertAfter(element);
        }
      },
    });
    $("#profileFormButton").on("click", () => {
      console.log($("#profileForm").valid());
    });
    // ubah kata sandi
    $("#changePasswordForm").validate({
      rules: {
        password_lama: {
          required: true,
        },
        password_baru: {
          required: true,
          minlength: 8,
        },
        konfirmasi_password_baru: {
          required: true,
          minlength: 8,
          equalTo: "#password_baru",
        },
      },
      messages: {
        password_lama: {
          required: "Password lama tidak boleh kosong.",
        },
        password_baru: {
          required: "Password baru tidak boleh kosong.",
          minlength: "Password baru harus berjumlah 8-16 karakter.",
        },
        konfirmasi_password_baru: {
          required: "Konfirmasi password baru tidak boleh kosong.",
          minlength: "Konfirmasi password baru harus berjumlah 8-16 karakter.",
          equalTo: "Konfirmasi password baru harus sama dengan password baru.",
        },
      },
    });
    $("#changePasswordFormButton").on("click", () => {
      console.log($("#changePasswordForm").valid());
    });

    // CHANGE PASSWORD TAB
    // toggle password lama
    $("#togglePasswordLama").click(function() {
      $(this).children().toggleClass("fa-eye-slash");
      $(this).children().toggleClass("fa-eye");

      var type =
        $("#password_lama").attr("type") === "password" ?
        "text" :
        "password";
      $("#password_lama").attr("type", type);
    });
    // toggle password baru
    $("#togglePasswordBaru").click(function() {
      $(this).children().toggleClass("fa-eye-slash");
      $(this).children().toggleClass("fa-eye");

      var type =
        $("#password_baru").attr("type") === "password" ?
        "text" :
        "password";
      $("#password_baru").attr("type", type);
    });
    // toggle konfirmasi password baru
    $("#toggleKonfirmasiPasswordBaru").click(function() {
      $(this).children().toggleClass("fa-eye-slash");
      $(this).children().toggleClass("fa-eye");

      var type =
        $("#konfirmasi_password_baru").attr("type") === "password" ?
        "text" :
        "password";
      $("#konfirmasi_password_baru").attr("type", type);
    });
  });
</script>

<?= $this->endSection(); ?>
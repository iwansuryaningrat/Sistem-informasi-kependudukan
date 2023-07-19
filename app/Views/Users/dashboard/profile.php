<?php $this->extend('users/template/layout'); ?>
<?php $this->section('homepage'); ?>

<!-- header -->
<header class="container px-0">
  <div class="header-container-dashboard-form">
    <div class="mb-4">
      <button class="btn btn-main-outline-xs" type="button" onclick="location.href='/users/'">
        <i class="fa-solid fa-house me-2"></i>Beranda
      </button>
    </div>
    <h3 class="mb-2">Dashboard Profil</h3>
    <p class="text-basic mb-0">
      Selamat datang di dashboard profil, <?= $user['nama'] ?>!
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
            <form class="card-form-container card" id="detailProfileForm" action="/usercontroller/saveDetailProfile" enctype="multipart/form-data" method="POST">
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
                      <img src="/upload/photos/<?= $user['foto'] ?>" alt="photo-profile-iwan" class="profile-image" />
                    </figure>
                    <label for="foto_profil" class="btn btn-dark ms-sm-4 text-sm fw-semibold px-3 py-2">Unggah Foto</label>
                    <input type="file" class="form-control-image" id="foto_profil" name="foto_profil" required accept="image/*" />
                  </div>
                  <p class="text-sm text-basic">
                    Foto profil kamu disarankan memiliki rasio 1 : 1 dan
                    berukuran tidak lebih dari 2MB
                  </p>
                </div>
                <div class="row mb-3">
                  <!-- nama depan -->
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label for="nama" class="form-label forms-label">Nama Lengkap
                      <span class="text-important">*</span></label>
                    <input type="text" class="form-control input-control" id="nama" name="nama" required placeholder="Masukkan Nama Depan" value="<?= $user['nama'] ?>" />
                  </div>
                  <!-- nama belakang -->
                  <div class="col-md-6">
                    <label for="no_hp" class="form-label forms-label">Nomor HP
                      <span class="text-important">*</span></label>
                    <input type="text" class="form-control input-control" id="no_hp" name="no_hp" required placeholder="Masukkan Nomor HP" value="<?= $user['no_hp'] ? $user['no_hp'] : '08xxxxxxxxxx' ?>" />
                  </div>
                </div>
                <!-- email -->
                <div class="mb-3">
                  <label for="email" class="form-label forms-label">Alamat Email
                    <span class="text-important">*</span></label>
                  <input type="email" class="form-control input-control" id="email" name="email" required placeholder="Masukkan Email" value="<?= $user['email'] ?>" />
                </div>
                <!-- kk -->
                <div class="mb-3">
                  <label for="no_kk" class="form-label forms-label">Nomor Kartu Keluarga
                    <span class="text-important">*</span></label>
                  <input type="no_kk" class="form-control input-control" id="no_kk" name="no_kk" required disabled placeholder="Masukkan Nomor Kartu Keluarga" value="<?= $user['no_kk'] ?>" />
                </div>
                <!-- nik -->
                <div class="mb-3">
                  <label for="nik" class="form-label forms-label">NIK <span class="text-important">*</span></label>
                  <input type="text" class="form-control input-control" id="nik" name="nik" required disabled placeholder="Masukkan NIK" value="<?= $user['nik'] ?>" />
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
            <form class="card-form-container card" id="profileForm" action="/usercontroller/editdatapribadi" enctype="multipart/form-data" method="POST">
              <div class="card-header card-form-header">
                <p class="mb-0 fw-semibold">Profile</p>
              </div>
              <div class="card-body card-form-body">
                <div>

                  <div class="row mb-3">
                    <!-- status -->
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="status" class="form-label forms-label">Status
                        <span class="text-important">*</span></label>

                      <select id="status" name="status" required class="form-select select-control">
                        <option value="">Pilih Status</option>
                        <option value="Kepala Keluarga" <?= ($user['status'] == 'kepala_keluarga' || $user['status'] == 'Kepala Keluarga') ? 'selected' : '' ?>>Kepala Keluarga</option>
                        <option value="Istri" <?= ($user['status'] == 'istri' || $user['status'] == 'Istri') ? 'selected' : '' ?>>Istri</option>
                        <option value="Anak" <?= ($user['status'] == 'anak' || $user['status'] == 'Anak') ? 'selected' : '' ?>>Anak</option>
                      </select>
                    </div>

                    <!-- status perkawinan -->
                    <div class="col-md-6">
                      <label for="status_perkawinan" class="form-label forms-label">Status Perkawinan
                        <span class="text-important">*</span></label>

                      <select id="status_perkawinan" name="status_perkawinan" required class="form-select select-control">
                        <option value="">Pilih Status Perkawinan</option>
                        <option value="belum_kawin" <?= ($user['status_perkawinan'] == 'belum_kawin' || $user['status_perkawinan'] == 'Belum Kawin') ? 'selected' : '' ?>>Belum Kawin</option>
                        <option value="kawin" <?= ($user['status_perkawinan'] == 'kawin' || $user['status_perkawinan'] == 'Kawin') ? 'selected' : '' ?>>Kawin</option>
                        <option value="cerai_hidup" <?= ($user['status_perkawinan'] == 'cerai_hidup' || $user['status_perkawinan'] == 'Cerai Hidup') ? 'selected' : '' ?>>Cerai Hidup</option>
                        <option value="cerai_mati" <?= ($user['status_perkawinan'] == 'cerai_mati' || $user['status_perkawinan'] == 'Cerai Mati') ? 'selected' : '' ?>>Cerai Mati</option>
                      </select>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <!-- Agama -->
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="agama" class="form-label forms-label">Agama
                        <span class="text-important">*</span></label>

                      <select id="agama" name="agama" required class="form-select select-control">
                        <option value="">Pilih Agama</option>
                        <option value="Islam" <?= $user['agama'] === 'Islam' ? 'selected' : '' ?>>Islam</option>
                        <option value="Khatolik" <?= $user['agama'] === 'Khatolik' ? 'selected' : '' ?>>Khatolik</option>
                        <option value="Kristen" <?= $user['agama'] === 'Kristen' ? 'selected' : '' ?>>Kristen</option>
                        <option value="Hindu" <?= $user['agama'] === 'Hindu' ? 'selected' : '' ?>>Hindu</option>
                        <option value="Budha" <?= $user['agama'] === 'Budha' ? 'selected' : '' ?>>Budha</option>
                        <option value="Konghucu" <?= $user['agama'] === 'Konghucu' ? 'selected' : '' ?>>Konghucu</option>
                      </select>
                    </div>

                    <!-- jenis kelamin -->
                    <div class="col-md-6">
                      <label class="form-label forms-label mb-3">Jenis Kelamin
                        <span class="text-important">*</span></label>
                      <div id="radioFormGender">
                        <div class="d-flex align-items-center">
                          <div class="form-check me-4">
                            <input class="form-check-input" type="radio" name="pria" id="pria" <?= $user['jenis_kelamin'] === 'Laki-laki' ? 'checked ' : '' ?> />
                            <label class="form-check-label" for="pria">
                              Laki-laki
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="wanita" id="wanita" <?= $user['jenis_kelamin'] === 'Perempuan' ? 'checked ' : '' ?> />
                            <label class="form-check-label" for="wanita">
                              Perempuan
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <!-- tempat lahir -->
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="tempat_lahir" class="form-label forms-label">Tempat Lahir
                        <span class="text-important">*</span></label>

                      <input type="text" class="form-control input-control" id="tempat_lahir" name="tempat_lahir" required placeholder="Masukkan Tempat Lahir" value="<?= $user['tempat_lahir'] ?>" />
                    </div>

                    <!-- tanggal lahir -->
                    <div class="col-md-6">
                      <label for="tanggal_lahir" class="form-label forms-label">Tanggal Lahir
                        <span class="text-important">*</span></label>

                      <input type="date" class="form-control input-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $user['tgl_lahir'] ?>" required />
                    </div>
                  </div>

                  <?php
                  $alamat = explode(',', $user['alamat']);
                  $kota = explode(' ', $alamat[1]);
                  $kodepos = $kota[1];
                  $kota_kabupaten = $kota[0];
                  $provinsi = $alamat[2];
                  $alamat = $alamat[0];
                  ?>

                  <div class="mb-3">
                    <label for="alamat" class="form-label forms-label">Alamat <span class="text-important">*</span></label>

                    <input class="form-control input-control" id="alamat" name="alamat" required placeholder="Masukkan Alamat" value="<?= $alamat ?>" />
                  </div>

                  <div class="row mb-3">
                    <!-- provinsi -->
                    <div class="col-md-4 mb-3 mb-md-0">
                      <label for="provinsi" class="form-label forms-label">Provinsi <span class="text-important">*</span></label>

                      <input class="form-control input-control" id="provinsi" name="provinsi" required placeholder="Masukkan Provinsi" value="<?= $provinsi ?>" />
                    </div>

                    <!-- kota atau kabupaten -->
                    <div class="col-md-4 mb-3 mb-md-0">
                      <label for="kota_kabupaten" class="form-label forms-label">Kota/Kabupaten <span class="text-important">*</span></label>

                      <input class="form-control input-control" id="kota_kabupaten" name="kota_kabupaten" required placeholder="Masukkan Kota/Kabupaten" value="<?= $kota_kabupaten ?>" />
                    </div>

                    <!-- kodepos -->
                    <div class="col-md-4">
                      <label for="kodepos" class="form-label forms-label">Kode Pos
                        <span class="text-important">*</span></label>

                      <input type="text" class="form-control input-control" id="kodepos" name="kodepos" required placeholder="Masukkan Kode Pos" value="<?= $kodepos ?>" />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <!-- pendidikan -->
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="pendidikan" class="form-label forms-label">Pendidikan
                        <span class="text-important">*</span></label>

                      <select id="pendidikan" name="pendidikan" required class="form-select select-control">
                        <option value="">Pilih Pendidikan</option>
                        <option value="Tidak Sekolah" <?= $user['pendidikan'] === "Tidak Sekolah" ? 'selected' : '' ?>>Tidak Sekolah</option>
                        <option value="SD" <?= $user['pendidikan'] === "SD" ? 'selected' : '' ?>>SD</option>
                        <option value="SMP" <?= $user['pendidikan'] === "SMP" ? 'selected' : '' ?>>SMP</option>
                        <option value="SMA" <?= $user['pendidikan'] === "SMA" ? 'selected' : '' ?>>SMA</option>
                        <option value="D1" <?= $user['pendidikan'] === "D1" ? 'selected' : '' ?>>D1</option>
                        <option value="D2" <?= $user['pendidikan'] === "D2" ? 'selected' : '' ?>>D2</option>
                        <option value="D3" <?= $user['pendidikan'] === "D3" ? 'selected' : '' ?>>D3</option>
                        <option value="D4" <?= $user['pendidikan'] === "D4" ? 'selected' : '' ?>>D4</option>
                        <option value="S1" <?= $user['pendidikan'] === "S1" ? 'selected' : '' ?>>S1</option>
                        <option value="S2" <?= $user['pendidikan'] === "S2" ? 'selected' : '' ?>>S2</option>
                        <option value="S3" <?= $user['pendidikan'] === "S3" ? 'selected' : '' ?>>S3</option>
                      </select>
                    </div>

                    <!-- Status Kependudukan -->
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="status_kependudukan" class="form-label forms-label">Status Kependudukan
                        <span class="text-important">*</span></label>
                      <select id="status_kependudukan" name="status_kependudukan" required class="form-select select-control">
                        <option value="">Pilih Status Kependudukan</option>
                        <option value="Tetap" <?= $user['status_kependudukan'] === 'Tetap' ? 'selected' : '' ?>>Penduduk Tetap</option>
                        <option value="Sementara" <?= $user['status_kependudukan'] === 'Sementara' ? 'selected' : '' ?>>Penduduk Sementara</option>
                        <option value="Pendatang" <?= $user['status_kependudukan'] === 'Pendatang' ? 'selected' : '' ?>>Penduduk Pendatang</option>
                        <option value="Pindahan" <?= $user['status_kependudukan'] === 'Pindahan' ? 'selected' : '' ?>>Penduduk Pindahan</option>
                      </select>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <!-- pekerjaan -->
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label for="pekerjaan" class="form-label forms-label">Pekerjaan
                        <span class="text-important">*</span></label>
                      <input type="text" class="form-control input-control" id="pekerjaan" name="pekerjaan" required placeholder="Masukkan Pekerjaan" value="<?= $user['pekerjaan'] ?>" />
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
            <form class="card-form-container card" id="changePasswordForm" action="/auth/ubahsandi" enctype="multipart/form-data" method="POST">
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
  $.validator.addMethod('alphabetOnly', function(value, element) {
    return this.optional(element) || value == value.match(/^[A-Za-z\s']+$/);
  });
  // validate
  $(document).ready(function() {
    // detail profile
    $('#detailProfileForm').validate({
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
          required: 'Nama depan tidak boleh kosong',
          alphabetOnly: 'Nama depan hanya boleh berisi huruf',
        },
        nama_belakang: {
          required: 'Nama belakang tidak boleh kosong',
          alphabetOnly: 'Nama belakang hanya boleh berisi huruf',
        },
        nik: {
          required: 'NIK tidak boleh kosong',
          number: 'NIK hanya boleh berisi angka',
          minlength: 'NIK harus berisi 16 angka',
          maxlength: 'NIK harus berisi 16 angka',
        },
      },
    });
    $('#detailProfileFormButton').on('click', () => {
      console.log($('#detailProfileForm').valid());
    });
    // data pribadi
    $('#profileForm').validate({
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
          required: 'No. HP tidak boleh kosong.',
          number: 'No. HP harus berupa angka.',
          minlength: 'No. HP harus berjumlah 10-13 digit.',
          maxlength: 'No. HP harus berjumlah 10-13 digit.',
        },
        jenis_kelamin: {
          required: 'Jenis kelamin tidak boleh kosong.',
        },
        status: {
          required: 'Status tidak boleh kosong.',
        },
        status_perkawinan: {
          required: 'Status perkawinan tidak boleh kosong.',
        },
        tempat_lahir: {
          required: 'Tempat lahir tidak boleh kosong.',
        },
        tanggal_lahir: {
          required: 'Tanggal lahir tidak boleh kosong.',
        },
        alamat: {
          required: 'Alamat tidak boleh kosong.',
        },
        provinsi: {
          required: 'Provinsi tidak boleh kosong.',
        },
        kota_kabupaten: {
          required: 'Kota/Kabupaten tidak boleh kosong.',
        },
        kodepos: {
          required: 'Kodepos tidak boleh kosong.',
          number: 'Kodepos harus berupa angka.',
          minlength: 'Kodepos harus berjumlah 5 digit.',
          maxlength: 'Kodepos harus berjumlah 5 digit.',
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
    // ubah kata sandi
    $('#changePasswordForm').validate({
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
          equalTo: '#password_baru',
        },
      },
      messages: {
        password_lama: {
          required: 'Password lama tidak boleh kosong.',
        },
        password_baru: {
          required: 'Password baru tidak boleh kosong.',
          minlength: 'Password baru harus berjumlah 8-16 karakter.',
        },
        konfirmasi_password_baru: {
          required: 'Konfirmasi password baru tidak boleh kosong.',
          minlength: 'Konfirmasi password baru harus berjumlah 8-16 karakter.',
          equalTo: 'Konfirmasi password baru harus sama dengan password baru.',
        },
      },
    });
    $('#changePasswordFormButton').on('click', () => {
      console.log($('#changePasswordForm').valid());
    });

    // CHANGE PASSWORD TAB
    // toggle password lama
    $('#togglePasswordLama').click(function() {
      $(this).children().toggleClass('fa-eye-slash');
      $(this).children().toggleClass('fa-eye');

      var type =
        $('#password_lama').attr('type') === 'password' ?
        'text' :
        'password';
      $('#password_lama').attr('type', type);
    });
    // toggle password baru
    $('#togglePasswordBaru').click(function() {
      $(this).children().toggleClass('fa-eye-slash');
      $(this).children().toggleClass('fa-eye');

      var type =
        $('#password_baru').attr('type') === 'password' ?
        'text' :
        'password';
      $('#password_baru').attr('type', type);
    });
    // toggle konfirmasi password baru
    $('#toggleKonfirmasiPasswordBaru').click(function() {
      $(this).children().toggleClass('fa-eye-slash');
      $(this).children().toggleClass('fa-eye');

      var type =
        $('#konfirmasi_password_baru').attr('type') === 'password' ?
        'text' :
        'password';
      $('#konfirmasi_password_baru').attr('type', type);
    });
  });
</script>

<?= $this->endSection(); ?>
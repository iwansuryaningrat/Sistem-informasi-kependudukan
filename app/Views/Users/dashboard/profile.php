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
          <!-- button logout -->
          <button class="nav-link piils-btn logout-btn" type="button" onclick="logout()">
            Logout
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
                      <img src="/upload/photos/profile/<?= $user['foto'] ?>" alt="photo-profile" class="profile-image" id="profileImage" />
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
                  <!-- nama -->
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label for="nama" class="form-label forms-label">Nama Lengkap
                      <span class="text-important">*</span></label>
                    <input type="text" class="form-control input-control" id="nama" name="nama" required placeholder="Masukkan Nama Depan" value="<?= $user['nama'] ?>" />
                  </div>
                  <!-- no hp -->
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
                        <?php foreach ($statusKeluarga as $status) : ?>
                          <option value="<?= $status ?>" <?= ($user['status'] == $status) ? 'selected' : '' ?>><?= $status ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>

                    <!-- status perkawinan -->
                    <div class="col-md-6">
                      <label for="status_perkawinan" class="form-label forms-label">Status Perkawinan
                        <span class="text-important">*</span></label>

                      <select id="status_perkawinan" name="status_perkawinan" required class="form-select select-control">
                        <option value="">Pilih Status Perkawinan</option>
                        <?php foreach ($statusPerkawinan as $perkawinan) : ?>
                          <option value="<?= $perkawinan ?>" <?= ($user['status_perkawinan'] == $perkawinan) ? 'selected' : '' ?>><?= $perkawinan ?></option>
                        <?php endforeach ?>
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
                        <?php foreach ($listAgama as $agama) : ?>
                          <option value="<?= $agama ?>" <?= $user['agama'] === $agama ? 'selected' : '' ?>><?= $agama ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>

                    <!-- jenis kelamin -->
                    <div class="col-md-6">
                      <label class="form-label forms-label mb-3">Jenis Kelamin
                        <span class="text-important">*</span></label>
                      <div id="radioFormGender">
                        <div class="d-flex align-items-center">
                          <div class="form-check me-4">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_pria" <?= $user['jenis_kelamin'] === 'Laki-laki' ? 'checked ' : '' ?> value="pria" />
                            <label class="form-check-label" for="jenis_kelamin_pria">
                              Laki-laki
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_wanita" <?= $user['jenis_kelamin'] === 'Perempuan' ? 'checked ' : '' ?> value="wanita" />
                            <label class="form-check-label" for="jenis_kelamin_wanita">
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
                  $kota_kabupaten = null;
                  $kodepos = null;
                  $provinsi = null;
                  $alamat = $user['alamat'];
                  if ($alamat != null) {
                    $alamat = explode(',', $user['alamat']);
                    $kota = explode(' ', $alamat[1]);
                    $kodepos = $kota[1];
                    $kota_kabupaten = $kota[0];
                    $provinsi = $alamat[2];
                    $alamat = $alamat[0];
                  }
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
                        <?php foreach ($pendidikan as $pendidikanList) : ?>
                          <option value="<?= $pendidikanList ?>" <?= $user['pendidikan'] === $pendidikanList ? 'selected' : '' ?>><?= $pendidikanList ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>

                    <!-- Status Kependudukan -->
                    <div class="col-md-6">
                      <label for="status_kependudukan" class="form-label forms-label">Status Kependudukan
                        <span class="text-important">*</span></label>
                      <select id="status_kependudukan" name="status_kependudukan" required class="form-select select-control">
                        <option value="">Pilih Status Kependudukan</option>
                        <?php foreach ($statusKependudukan as $statusPenduduk) : ?>
                          <option value="<?= $statusPenduduk ?>" <?= $user['status_kependudukan'] === $statusPenduduk ? 'selected' : '' ?>>Penduduk <?= $statusPenduduk ?></option>
                        <?php endforeach ?>
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
  $('#foto_profil').on('change', function() {
    const file = this.files[0];
    if (file) {
      const reader = new FileReader();

      reader.onload = function(event) {
        $('#profileImage').attr('src', event.target.result);
      };

      reader.readAsDataURL(file);
    }
  });

  // add method validation only letters
  $.validator.addMethod('alphabetOnly', function(value, element) {
    return this.optional(element) || value == value.match(/^[A-Za-z\s']+$/);
  });
  // validate
  $(document).ready(function() {
    // detail profile
    $('#detailProfileForm').validate({
      rules: {
        nama: {
          required: true,
          alphabetOnly: true,
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
        no_kk: {
          required: true,
          number: true,
          minlength: 16,
          maxlength: 16,
        },
        nik: {
          required: true,
          number: true,
          minlength: 16,
          maxlength: 16,
        },
      },
      messages: {
        nama: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nama tidak boleh kosong',
          alphabetOnly: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nama hanya boleh berisi huruf',
        },
        no_hp: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nomor HP tidak boleh kosong',
          number: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nomor HP hanya boleh berisi angka',
          minlength: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nomor HP minimal 10 karakter',
          maxlength: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nomor HP maksimal 13 karakter',
        },
        email: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Email tidak boleh kosong',
          email: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Email tidak valid',
        },
        no_kk: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nomor KK tidak boleh kosong',
          number: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nomor KK hanya boleh berisi angka',
          minlength: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nomor KK minimal 16 karakter',
          maxlength: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nomor KK maksimal 16 karakter',
        },
        nik: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>NIK tidak boleh kosong',
          number: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>NIK hanya boleh berisi angka',
          minlength: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>NIK minimal 16 karakter',
          maxlength: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>NIK maksimal 16 karakter',
        },
      },
    });

    // data pribadi
    $('#profileForm').validate({
      rules: {
        status: {
          required: true,
        },
        status_perkawinan: {
          required: true,
        },
        agama: {
          required: true,
        },
        jenis_kelamin: {
          required: true,
        },
        tempat_lahir: {
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
        pendidikan: {
          required: true,
        },
        status_kependudukan: {
          required: true,
        },
        pekerjaan: {
          required: true,
        },
      },
      messages: {
        status: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Status tidak boleh kosong',
        },
        status_perkawinan: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Status perkawinan tidak boleh kosong',
        },
        agama: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Agama tidak boleh kosong',
        },
        jenis_kelamin: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Jenis kelamin tidak boleh kosong',
        },
        tempat_lahir: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Tempat lahir tidak boleh kosong',
          alphabetOnly: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Tempat lahir hanya boleh berisi huruf',
        },
        tanggal_lahir: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Tanggal lahir tidak boleh kosong',
        },
        alamat: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Alamat tidak boleh kosong',
        },
        provinsi: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Provinsi tidak boleh kosong',
        },
        kota_kabupaten: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Kota/Kabupaten tidak boleh kosong',
        },
        kodepos: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Kodepos tidak boleh kosong',
          number: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Kodepos hanya boleh berisi angka',
          minlength: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Kodepos minimal 5 karakter',
          maxlength: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Kodepos maksimal 5 karakter',
        },
        pendidikan: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Pendidikan tidak boleh kosong',
        },
        status_kependudukan: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Status kependudukan tidak boleh kosong',
        },
        pekerjaan: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Pekerjaan tidak boleh kosong',
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
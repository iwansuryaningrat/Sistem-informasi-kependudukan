<?php $this->extend('auth/layouts/auth'); ?>

<?php $this->section('authContent'); ?>
<div class="col-md-9 sign-container-content-small">
  <div class="sign-container-content__card">
    <div class="sign_card__content">
      <h1 class="text-center mb-3">Daftar</h1>
      <p class="text-center mb-4 text-basic">
        Sudah memiliki Akun?
        <span><a href="/login" id="login" class="fw-medium hover-underline">Masuk</a></span>
      </p>
      <div class="sign-card">
        <form id="signupForm" action="/auth/regist" enctype="multipart/form-data" method="POST">
          <!-- NIK -->
          <div class="mb-3">
            <label for="nik" class="form-label forms-label">Nomor Induk Kependudukan (No. KTP)</label>
            <input type="text" id="nik" name="nik" value="" required placeholder="Masukkan NIK" class="form-control input-control" />
          </div>
          <!-- KK -->
          <div class="mb-3">
            <label for="no_kk" class="form-label forms-label">Nomor Kartu Keluarga</label>
            <input type="text" id="no_kk" name="no_kk" value="" required placeholder="Masukkan Nomor KK" class="form-control input-control" />
          </div>
          <!-- Nama -->
          <div class="mb-3">
            <label for="nama" class="form-label forms-label">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" value="" required placeholder="Masukkan Nama Lengkap" aria-describedby="namaHelp" class="form-control input-control" />
            <div id="namaHelp" class="form-text input-text">
              Masukkan nama asli Anda, sesuai dengan KTP.
            </div>
          </div>
          <!-- Nomor HP -->
          <div class="mb-3">
            <label for="no_hp" class="form-label forms-label">Nomor HP</label>
            <input type="text" id="no_hp" name="no_hp" required placeholder="Masukkan Nomor HP" aria-describedby="no_hpHelp" class="form-control input-control" />
            <div id="no_hpHelp" class="form-text input-text">
              Gunakan nomor hp Anda.
            </div>
          </div>
          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label forms-label">Email</label>
            <input type="email" id="email" name="email" value="" required placeholder="Masukkan Email" aria-describedby="emailHelp" class="form-control input-control" />
            <div id="emailHelp" class="form-text input-text">
              Gunakan alamat email aktif Anda.
            </div>
          </div>
          <!-- Password -->
          <div class="mb-3 position-relative">
            <label for="password" class="form-label forms-label">Password</label>
            <input type="password" id="password" name="password" value="" required placeholder="Masukkan Password" aria-describedby="passwordHelp" class="form-control input-control-password" />
            <span id="togglePassword"><i class="fa-solid fa-eye" title="show password"></i></span>
            <div id="passwordHelp" class="form-text input-text">
              Gunakan minimal 8 karakter dengan kombinasi huruf dan
              angka.
            </div>
          </div>
          <!-- Confirm Password -->
          <div class="mb-4">
            <label for="confirmPassword" class="form-label forms-label">Konfirmasi Password</label>
            <input type="password" id="confirmPassword" name="confirmPassword" value="" required placeholder="Masukkan Konfirmasi Password" aria-describedby="confirmPasswordHelp" class="form-control input-control" />
            <div id="confirmPasswordHelp" class="form-text input-text">
              Masukkan password yang sama dengan di atas.
            </div>
          </div>
          <!-- button -->
          <button type="submit" class="btn btn-main w-100 shadow" id="signupFormButton">
            Daftar
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>

<?php $this->section('script'); ?>
<script>
  // add method validation only letters
  $.validator.addMethod('alphabetOnly', function(value, element) {
    return this.optional(element) || value == value.match(/^[A-Za-z\s']+$/);
  });
  // validate
  $(document).ready(function() {
    $('#signupForm').validate({
      rules: {
        nik: {
          required: true,
          number: true,
        },
        no_kk: {
          required: true,
          number: true,
        },
        nama: {
          required: true,
          alphabetOnly: true,
        },
        email: {
          required: true,
          email: true,
        },
        no_hp: {
          required: true,
          pattern: /^(^\+62\s?|^0)(\d{3,4}-?){2}\d{3,4}$/,
        },
        password: {
          required: true,
          minlength: 8,
          pattern: /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/,
        },
        confirmPassword: {
          required: true,
          equalTo: '#password',
        },
      },
      messages: {
        nik: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>NIK tidak boleh kosong.',
          number: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>NIK harus berupa angka.',
        },
        no_kk: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>No. KK tidak boleh kosong.',
          number: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>No. KK harus berupa angka.',
        },
        nama: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nama lengkap tidak boleh kosong.',
          alphabetOnly: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nama lengkap harus berupa huruf.',
        },
        email: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Email tidak boleh kosong.',
          email: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Email tidak valid.',
        },
        no_hp: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nomor HP tidak boleh kosong.',
          pattern: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nomor HP tidak valid.',
        },
        password: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Password tidak boleh kosong.',
          minlength: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Password minimal 8 karakter.',
          pattern: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Password harus mengandung huruf dan angka.',
        },
        confirmPassword: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Konfirmasi Password tidak boleh kosong.',
          equalTo: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Konfirmasi Password harus sama dengan Password.',
        },
      },
      submitHandler: function(form) {
        $('#signupFormButton').html('<i class="fas fa-circle-notch text-lg spinners-2"></i>');
        $('#signupFormButton').prop('disabled', true);
        $.ajax({
          type: 'POST',
          url: $(form).attr('action'),
          data: $(form).serialize(),
          dataType: 'json',
          success: function(response) {
            $('#signupFormButton').html('Daftar');
            $('#signupFormButton').prop('disabled', false);
            if (response.status === 'success') {
              setTimeout(function() {
                window.location.href = response.redirect;
              }, 3000);
              Swal.fire({
                icon: 'success',
                title: 'Pendaftaran Sukses',
                text: response.message
              }).then(function() {
                window.location.href = response.redirect;
              });
            } else if (response.status === 'error') {
              Swal.fire({
                icon: 'error',
                title: 'Pendaftaran Gagal',
                text: `${response.message}. ${response.errors}`,
              });
            }
          },
          error: function() {
            $('#signupFormButton').html('Daftar');
            $('#signupFormButton').prop('disabled', false);
            Swal.fire({
              icon: 'error',
              title: 'Server Error',
              text: 'Terjadi kesalahan pada server. Coba lagi beberapa saat lagi.',
            });
          }
        });
      }
    });
  });

  // togglePassword
  $('#togglePassword').click(function() {
    $(this).children().toggleClass('fa-eye-slash');
    $(this).children().toggleClass('fa-eye');

    var type =
      $('#password').attr('type') === 'password' ? 'text' : 'password';
    $('#password').attr('type', type);
  });
</script>
<?= $this->endSection(); ?>
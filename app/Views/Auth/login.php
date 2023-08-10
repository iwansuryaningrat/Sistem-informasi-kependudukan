<?php $this->extend('auth/layouts/auth'); ?>
<?php $this->section('authContent'); ?>

<div class="col-md-9 sign-container-content-big pb-100vh-420">
  <div class="sign-container-content__card">
    <div class="sign_card__content">
      <h1 class="text-center mb-3">Masuk</h1>
      <p class="text-center mb-4 text-basic">
        Belum memiliki Akun?
        <span><a href="/register" id="register" class="fw-medium hover-underline">Daftar</a></span>
      </p>
      <!-- get flashdata message -->
      <?php if (session()->getFlashdata('message')) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <?= session()->getFlashdata('message') ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>
      <div class="sign-card">
        <form id="loginForm" action="/auth/loginprocess" enctype="multipart/form-data" method="POST">
          <div class="mb-3">
            <label for="nik" class="form-label forms-label">NIK</label>
            <input type="text" id="nik" name="nik" value="" required placeholder="Masukkan NIK" aria-describedby="nikHelp" class="form-control input-control" />
            <div id="nikHelp" class="form-text input-text">
              Gunakan Nomor Induk Kependudukan (No. KTP).
            </div>
          </div>
          <div class="mb-3 position-relative">
            <label for="password" class="form-label forms-label">Password</label>
            <input type="password" id="password" name="password" value="" required placeholder="Masukkan Password" class="form-control input-control-password" />
            <span id="togglePassword"><i class="fa-solid fa-eye" title="show password"></i></span>
          </div>
          <div class="mb-4 d-flex align-items-center justify-content-between">
            <div class="form-check mb-0">
              <input type="checkbox" class="form-check-input" id="rememberme" name="rememberme" />
              <label class="form-check-label forms-check-label line-clamp-1" for="rememberme">Remember Me</label>
            </div>
          </div>
          <button type="submit" class="btn btn-main w-100 shadow" id="loginFormButton">
            Masuk
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>
<?php $this->section('script'); ?>

<script>
  $(document).ready(function() {
    $('#loginForm').validate({
      rules: {
        nik: {
          required: true,
          minlength: 12,
        },
        password: {
          required: true,
        },
      },
      messages: {
        nik: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>NIK tidak boleh kosong.',
          minlength: 'NIK minimal 12 karakter.',
        },
        password: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Password tidak boleh kosong.',
        },
      },
      submitHandler: function(form) {
        $('#loginFormButton').html('<i class="fas fa-circle-notch text-lg spinners-2"></i>');
        $('#loginFormButton').prop('disabled', true);
        $.ajax({
          type: 'POST',
          url: '/auth/loginprocess', // Update this URL as needed
          data: $(form).serialize(),
          dataType: 'json',
          success: function(response) {
            $('#loginFormButton').html('Masuk');
            $('#loginFormButton').prop('disabled', false);
            if (response.status === 'error') {
              Swal.fire({
                icon: 'error',
                title: 'Login Gagal',
                text: response.message
              });
            } else if (response.status === 'success') {
              setTimeout(function() {
                window.location.href = response.redirect;
              }, 3000);
              Swal.fire({
                icon: 'success',
                title: 'Login Sukses',
                text: response.message
              }).then(function() {
                window.location.href = response.redirect;
              });
            }
          },
          error: function() {
            $('#loginFormButton').html('Masuk');
            $('#loginFormButton').prop('disabled', false);
            Swal.fire({
              icon: 'error',
              title: 'Server Error',
              text: 'Internal Server Error. Silahkan coba lagi nanti.'
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
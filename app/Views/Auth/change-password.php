<?php $this->extend('auth/layouts/auth'); ?>
<?php $this->section('authContent'); ?>
<div class="col-md-8 col-lg-6 sign-container-content-big pb-100vh-420">
  <div class="sign-container-content__card mb-4">
    <div class="sign_card__content">
      <h1 class="text-center mb-3">Ubah Password</h1>
      <p class="text-center mb-4 text-basic w-90">
        Masukkan kata sandi baru dan konfirmasi kata sandi baru
        Anda.
      </p>
      <div class="sign-card">
        <form id="changePasswordForm" action="#" enctype="multipart/form-data" method="POST">
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
          <button type="submit" class="btn btn-main w-100 shadow" id="changePasswordFormButton">
            Ubah Password
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>
<?php $this->section('script'); ?>
<script>
  // validate
  $(document).ready(function() {
    $("#changePasswordForm").validate({
      rules: {
        password: {
          required: true,
          minlength: 8,
          pattern: /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/,
        },
        confirmPassword: {
          required: true,
          equalTo: "#password",
        },
      },
      messages: {
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
    });
  });
</script>
<?= $this->endSection(); ?>
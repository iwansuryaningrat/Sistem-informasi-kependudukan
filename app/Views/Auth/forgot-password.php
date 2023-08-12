<?php $this->extend('auth/layouts/auth'); ?>
<?php $this->section('authContent'); ?>
<div class="col-md-9 sign-container-content-big pb-100vh-420">
  <div class="sign-container-content__card mb-4">
    <div class="sign_card__content">
      <h1 class="text-center mb-3">Lupa Password</h1>
      <p class="text-center mb-4 text-basic w-90">
        Masukkan email Anda, dan kami akan mengirimkan kode
        pemulihan.
      </p>
      <div class="sign-card">
        <form id="forgotPasswordForm" action="#" enctype="multipart/form-data" method="POST">
          <div class="mb-4">
            <label for="email" class="form-label forms-label">Email</label>
            <input type="email" id="email" name="email" value="" required placeholder="Masukkan Email" class="form-control input-control" />
          </div>
          <button type="submit" class="btn btn-main w-100 shadow" id="forgotPasswordFormButton">
            Kirim Permintaan
          </button>
        </form>
      </div>
    </div>
  </div>
  <p class="text-basic text-center">
    Kembali ke halaman
    <span><a href="/home/signin" class="fw-medium hover-underline">Masuk</a></span>
  </p>
</div>
<?= $this->endSection(); ?>
<?php $this->section('script'); ?>
<script>
  // validate
  $(document).ready(function() {
    $("#forgotPasswordForm").validate({
      rules: {
        email: {
          required: true,
          email: true,
        },
      },
      messages: {
        email: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Email tidak boleh kosong.',
          email: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Email tidak valid.',
        },
      },
    });
  });
</script>
<?= $this->endSection(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Styles -->
  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- custom -->
  <link rel="stylesheet" href="/homepage/assets/css/styles.css" />
  <link rel="stylesheet" href="/homepage/assets/css/responsiveness.css" />

  <!-- favicon -->
  <link rel="shortcut icon" href="/homepage/public/favicon.ico" type="image/x-icon" />

  <!-- title -->
  <title><?= $title; ?></title>
</head>

<body>
  <div>
    <!-- navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-container navbar-blur">
      <!-- brand -->
      <a class="navbar-brand fw-bold" href="/home"><img src="/homepage/assets/svg/warga-letter-logo.svg" alt="warga-letter-icon" /></a>
    </nav>
    <!-- end of navigation -->

    <!-- main -->
    <main>
      <section class="container-fluid">
        <div class="row">
          <div class="col-md-9 sign-container-content">
            <div class="sign-container-content__card">
              <div class="sign_card__content">
                <h1 class="text-center mb-3">Daftar</h1>
                <p class="text-center mb-4 text-basic">
                  Sudah memiliki Akun?
                  <span><a href="/home/signin" id="login" class="fw-medium hover-underline">Masuk</a></span>
                </p>
                <div class="sign-card">
                  <form id="signupForm" action="#" enctype="multipart/form-data" method="POST">
                    <!-- NIK -->
                    <div class="mb-3">
                      <label for="nik" class="form-label forms-label">Nomor Induk Kependudukan (No. KTP)</label>
                      <input type="text" id="nik" name="nik" value="" required placeholder="Masukkan NIK" class="form-control input-control" />
                    </div>
                    <!-- KK -->
                    <div class="mb-3">
                      <label for="kk" class="form-label forms-label">Nomor Kartu Keluarga</label>
                      <input type="text" id="kk" name="kk" value="" required placeholder="Masukkan Nomor KK" class="form-control input-control" />
                    </div>
                    <!-- Nama -->
                    <div class="mb-3">
                      <label for="nama" class="form-label forms-label">Nama</label>
                      <input type="text" id="nama" name="nama" value="" required placeholder="Masukkan Nama" aria-describedby="namaHelp" class="form-control input-control" />
                      <div id="namaHelp" class="form-text input-text">
                        Masukkan nama asli Anda, sesuai dengan KTP.
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
          <div class="col-md-3 bg-main-700"></div>
        </div>
      </section>
    </main>
    <!-- end of main -->

    <!-- footer -->
    <?= $this->include('users/template/footer'); ?>
    <!-- end of footer -->
  </div>

  <!-- scripts -->
  <!-- jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- jquery validate -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  <!-- fontawesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- custom -->
  <script src="/homepage/assets/js/scripts.js"></script>

  <!-- script internal -->
  <script>
    // id login onclick
    $('#login').click(function() {
      window.location.href = './signin.html';
    });
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
          kk: {
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
            required: 'NIK tidak boleh kosong.',
            number: 'NIK harus berupa angka.',
          },
          kk: {
            required: 'No. KK tidak boleh kosong.',
            number: 'No. KK harus berupa angka.',
          },
          nama: {
            required: 'Nama tidak boleh kosong.',
            alphabetOnly: 'Nama harus berupa huruf.',
          },
          email: {
            required: 'Email tidak boleh kosong.',
            email: 'Email tidak valid.',
          },
          password: {
            required: 'Password tidak boleh kosong.',
            minlength: 'Password minimal 8 karakter.',
            pattern: 'Password harus mengandung huruf dan angka.',
          },
          confirmPassword: {
            required: 'Konfirmasi Password tidak boleh kosong.',
            equalTo: 'Konfirmasi Password harus sama dengan Password.',
          },
        },
      });
      $('#signupFormButton').on('click', () => {
        console.log($('#signupForm').valid());
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
</body>

</html>
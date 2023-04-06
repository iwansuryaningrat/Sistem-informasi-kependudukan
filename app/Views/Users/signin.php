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
  <link rel="stylesheet" href="./assets/css/styles.css" />
  <link rel="stylesheet" href="./assets/css/responsiveness.css" />

  <!-- favicon -->
  <link rel="shortcut icon" href="./public/favicon.ico" type="image/x-icon" />
  <!-- title -->
  <title>Masuk | Warga Site</title>
</head>

<body>
  <div>
    <!-- navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-container navbar-blur">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="./index.html">
          Warga
        </a>
      </div>
    </nav>
    <!-- end of navigation -->
    <!-- main -->
    <main>
      <section class="container-fluid">
        <div class="row">
          <div class="col-md-9 sign-container-content">
            <div class="sign-container-content__card">
              <div class="sign_card__content">
                <h1 class="text-center mb-3">Masuk</h1>
                <p class="text-center mb-4 text-basic">
                  Belum memiliki Akun?
                  <span><a href="javascript:void(0)" id="register" class="fw-medium hover-underline">Daftar</a></span>
                </p>
                <div class="sign-card">
                  <form id="loginForm" action="#" enctype="multipart/form-data" method="POST">
                    <div class="mb-3">
                      <label for="email" class="form-label forms-label">Email / NIK</label>
                      <input type="text" id="email" name="email" value="" required placeholder="Masukkan Email / NIK" aria-describedby="emailHelp" class="form-control input-control" />
                      <div id="emailHelp" class="form-text input-text">
                        Gunakan email aktif atau Nomor Induk Kependudukan (No.
                        KTP).
                      </div>
                    </div>
                    <div class="mb-3 position-relative">
                      <label for="password" class="form-label forms-label">Password</label>
                      <input type="password" id="password" name="password" value="" required placeholder="Masukkan Password" class="form-control input-control-password" />
                      <span id="togglePassword"><i class="fa-solid fa-eye" title="show password"></i></span>
                    </div>
                    <div class="mb-4 d-flex align-items-center justify-content-between">
                      <div class="form-check mb-0">
                        <input type="checkbox" class="form-check-input" id="remember" />
                        <label class="form-check-label forms-check-label line-clamp-1" for="remember">Remember Me</label>
                      </div>
                      <div class="">
                        <a href="./forgot-password.html" class="fw-medium hover-underline text-sm line-clamp-1">Lupa Password?</a>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-main w-100 shadow" id="loginFormButton">
                      Login
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

    <footer class="small-footer">
      <section class="container">
        <p class="text-center m-0 text-basic">
          @<span id="yearNow"></span> Warga | Warga neque consequatur nemo
          fugit voluptatem mollitia minima tempore❤️.
        </p>
      </section>
    </footer>
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
  <script src="./assets/js/scripts.js"></script>
  <!-- script internal -->
  <script>
    // id register onclick
    $('#register').click(function() {
      window.location.href = './signup.html';
    });

    // validate
    $(document).ready(function() {
      $('#loginForm').validate({
        rules: {
          email: {
            required: true,
          },
          password: {
            required: true,
          },
        },
        messages: {
          email: {
            required: 'Email atau NIK tidak boleh kosong.',
          },
          password: {
            required: 'Password tidak boleh kosong.',
          },
        },
      });
      $('#loginFormButton').on('click', () => {
        console.log($('#loginForm').valid());
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
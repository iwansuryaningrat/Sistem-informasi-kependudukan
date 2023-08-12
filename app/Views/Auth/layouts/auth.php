<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Selamat datang di Website Warga! Kami adalah platform pengelolaan data keluarga untuk desa. Daftar, perbarui informasi, dan akses layanan komunitas kami di sini." />
    <meta name="keywords" content="website warga, data keluarga, layanan komunitas, pendaftaran penduduk, informasi desa" />
    <meta name="author" content="Warga" />
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.warga.com" />
    <meta name="revised" content="10 Agustus 2023" />
    <meta name="language" content="Indonesia" />
    <meta name="geo.region" content="ID" />
    <meta name="geo.placename" content="Jakarta" />
    <meta name="geo.position" content="-6.2088, 106.8456" />
    <meta name="theme-color" content="#ffffff" />
    <link rel="sitemap" type="application/xml" title="Sitemap" href="https://www.warga.com/sitemap.xml" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Website Warga - Pengelolaan Data Keluarga untuk Desa">
    <meta property="og:description" content="Selamat datang di Website Warga! Kami adalah platform pengelolaan data keluarga untuk desa. Daftar, perbarui informasi, dan akses layanan komunitas kami di sini.">
    <meta property="og:image" content="/homepage/public/apple-touch-icon-180x180.png">
    <meta property="og:url" content="https://www.warga.com">

    <!-- apple touch icon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/homepage/public/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/homepage/public/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/homepage/public/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/homepage/public/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/homepage/public/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/homepage/public/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/homepage/public/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/homepage/public/apple-touch-icon-180x180.png">

    <!-- Styles -->
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- sweet alert 2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.20/sweetalert2.min.css" integrity="sha512-yX1R8uWi11xPfY7HDg7rkLL/9F1jq8Hyiz8qF4DV2nedX4IVl7ruR2+h3TFceHIcT5Oq7ooKi09UZbI39B7ylw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom -->
    <link rel="stylesheet" href="/homepage/assets/css/styles.css" />
    <link rel="stylesheet" href="/homepage/assets/css/responsiveness.css" />

    <!-- favicon -->
    <link rel="shortcut icon" href="/homepage/public/favicon.ico" type="image/x-icon" />
    <!-- title -->
    <title><?= $title ?></title>
</head>

<body>
    <div>
        <!-- navigation -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-container navbar-blur">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="/">
                    Warga
                </a>
            </div>
        </nav>
        <!-- end of navigation -->
        <!-- main -->
        <main>
            <section class="container-fluid">
                <div class="row">
                    <?= $this->renderSection('authContent'); ?>
                    <div class="col-md-3 bg-main-700 bg-sign-image position-relative"></div>
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
    <!-- sweet alert 2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.20/sweetalert2.min.js" integrity="sha512-2AOp8GEFv1X43dZpYqOp34WD+skmM18yOrCxS/S1Mh6VShz7uxlPhKmA98fsPrE7MMMtZgjshiMHKmzWtZR5uA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- custom -->
    <script src="/homepage/assets/js/scripts.js"></script>

    <!-- Internal Script -->
    <?= $this->renderSection('script'); ?>
</body>

</html>
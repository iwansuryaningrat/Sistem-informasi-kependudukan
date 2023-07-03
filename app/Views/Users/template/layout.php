<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Style -->
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- datatables bootstrap -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <!-- Filepond stylesheet -->
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
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
        <?= $this->include('users/template/navbar'); ?>
        <!-- end of navigation -->

        <!-- main -->
        <?= $this->renderSection('homepage'); ?>
        <!-- end of main -->

        <!-- footer -->
        <?= $this->include('users/template/footer'); ?>
        <!-- end of footer -->

        <!-- scroll to top button -->
        <div id="scroll-to-top">
            <div class="btn btn-main shadow">
                <i class="fa-solid fa-arrow-up"></i>
            </div>
        </div>
    </div>

    <!-- offcanvas navbar mobile -->
    <div class="offcanvas offcanvas-top offcanvas-custom" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <a id="offcanvasTopLabel" class="navbar-brand-mobile" href="./index.html"><img src="/homepage/assets/svg/warga-letter-logo.svg" alt="warga-letter-icon" class="h-100" /></a>
            <button type="button" class="btn-close text-sm" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-nav-link">
                <li class="w-100">
                    <a class="w-100 d-block mb-1 py-2 nav-collapse d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Warga
                        <i class="fa-solid fa-angle-down text-sm"></i>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <div class="">
                            <ul class="list-nav-collapse">
                                <li class="list-nav-collapse-item">
                                    <a href="/users/administrasi">Administrasi</a>
                                </li>
                                <li class="list-nav-collapse-item">
                                    <a href="/users/pelaporan">Pelaporan</a>
                                </li>
                                <li class="list-nav-collapse-item">
                                    <a href="/users/keluarga">Menu Keluarga</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="list-nav-link-item">
                <li><a href="/users/galeri">Galeri</a></li>
                </li>
                <li class="list-nav-link-item">
                <li><a href="/users/pengumuman">Pengumuman</a></li>
                </li>
            </ul>
            <a href="/home/signin" class="btn btn-main w-100 shadow">Masuk</a>
        </div>
    </div>

    <?= $this->renderSection('custom_modal'); ?>

    <!-- scripts -->
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <!-- jquery validate -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <!-- fontawesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- fancybox -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <!-- datatables -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <!-- Load FilePond library -->
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>
    <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>
    <!-- custom -->
    <script src="/homepage/assets/js/scripts.js"></script>

    <!-- Internal Script -->
    <?= $this->renderSection('script'); ?>
</body>

</html>
<?php $this->extend('users/template/layout'); ?>
<?php $this->section('homepage'); ?>

<!-- header -->
<header class="container">
    <div class="header-container-mini">
        <h1 class="mb-3">Hubungi Kami</h1>
        <p class="text-basic text-center mb-0 max-w-80">
            Terima kasih atas minat Anda untuk menghubungi kami. Kami sangat
            menghargai umpan balik, saran, dan pertanyaan Anda.
        </p>
    </div>
</header>
<!-- end of header -->

<!-- main -->
<main>
    <!-- get in touch -->
    <section class="container container-space">
        <div class="contact-container mb-4 row">
            <div class="col-md-6 mb-5 mb-md-0">
                <div class="me-md-3">

                    <form action="/pesancontroller/savePesan" id="contactForm" enctype="multipart/form-data" method="POST">
                        <!-- fullname -->
                        <div class="mb-3">
                            <label for="namaLengkap" class="form-label forms-label">Nama Lengkap</label>
                            <input type="text" class="form-control input-control" id="namaLengkap" name="namaLengkap" placeholder="Masukkan Nama Lengkap" value='<?= (session()->get('isLoggedIn')) ? $user['nama'] : '' ?>' />
                        </div>
                        <!-- email -->
                        <div class="mb-3">
                            <label for="email" class="form-label forms-label">Email</label>
                            <input type="email" class="form-control input-control" id="email" name="email" placeholder="username@email.com" value='<?= (session()->get('isLoggedIn')) ? $user['email'] : '' ?>' />
                        </div>
                        <!-- subject -->
                        <div class="mb-3">
                            <label for="subjek" class="form-label forms-label">Subjek</label>
                            <select class="form-select select-control" id="subjek" name="subjek">
                                <option selected value="">
                                    Pilih Subjek
                                </option>
                                <option value="Pertanyaan">Pertanyaan</option>
                                <option value="Saran">Saran</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <!-- message -->
                        <div class="mb-3">
                            <label for="pesan" class="form-label forms-label">Pesan</label>
                            <textarea class="form-control input-control" id="pesan" name="pesan" rows="5" placeholder="Masukkan Pesan Anda"></textarea>
                        </div>
                        <button type="submit" class="btn btn-main-sm w-full-xl" id="contactFormButton">
                            Kirim
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ms-md-3">
                    <div class="mb-3">
                        <label class="form-label forms-label mb-3">Temukan Kami</label>
                        <div class="w-100">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.263538415346!2d106.77379174313617!3d-6.228945177716834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f12dc7c404f9%3A0x15fbd758d9852c99!2sJl.%20Raya%20Kby.%20Lama%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1688744261517!5m2!1sid!2sid" width="100" height="270" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-100 pb-0 mb-0"></iframe>
                        </div>
                    </div>
                    <div class="">
                        <label class="form-label forms-label mb-3">Detil Kontak</label>
                        <!-- address -->
                        <p class="">
                            <i class="fas fa-map-marker-alt text-basic me-2"></i>
                            <span class="text-basic">
                                Jl. Prof. Soedarto, S.H. Tembalang, Semarang, Jawa Tengah
                                50275
                            </span>
                        </p>
                        <!-- email -->
                        <p class="">
                            <i class="fas fa-envelope text-basic me-2"></i>
                            <span>
                                <a href="mailto:warga.supprot@gmail.com" class="text-decoration-none text-basic">
                                    warga.support@gmail.com
                                </a>
                            </span>
                        </p>
                        <!-- phone -->
                        <p class="">
                            <i class="fas fa-phone-alt text-basic me-2"></i>
                            <span>
                                <a href="tel:+6281234567890" class="text-decoration-none text-basic">+62 812-3456-7890</a>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- end of main -->

<?= $this->endSection(); ?>

<?php $this->section('script'); ?>

<!-- script internal -->
<script>
    // validate
    $(document).ready(function() {
        $(' #contactForm').validate({
            rules: {
                namaLengkap: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true,
                },
                subjek: {
                    required: true,
                },
                pesan: {
                    required: true,
                },
            },
            messages: {
                namaLengkap: {
                    required: 'Nama lengkap tidak boleh kosong.',
                },
                email: {
                    required: 'Email tidak boleh kosong.',
                    email: 'Email tidak valid.',
                },
                subjek: {
                    required: 'Subjek tidak boleh kosong.',
                },
                pesan: {
                    required: 'Pesan tidak boleh kosong.',
                },
            },
        });
        $('#contactFormButton').on('click', () => {
            console.log($('#contactForm').valid());
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
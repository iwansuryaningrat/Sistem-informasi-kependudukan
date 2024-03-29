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
                            <input type="text" class="form-control input-control" id="namaLengkap" name="namaLengkap" placeholder="Masukkan Nama Lengkap" value='<?= ($isLoggedin) ? $user['nama'] : '' ?>' />
                        </div>
                        <!-- email -->
                        <div class="mb-3">
                            <label for="email" class="form-label forms-label">Email</label>
                            <input type="email" class="form-control input-control" id="email" name="email" placeholder="username@email.com" value='<?= ($isLoggedin) ? $user['email'] : '' ?>' />
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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11199.320348000225!2d110.44728996285835!3d-7.061142737619998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708e9f6146147f%3A0x5027a76e356dc90!2sBulusan%2C%20Kec.%20Tembalang%2C%20Kota%20Semarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1698484108499!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="">
                        <label class="form-label forms-label mb-3">Detil Kontak</label>
                        <!-- address -->
                        <p class="">
                            <i class="fas fa-map-marker-alt text-basic me-2"></i>
                            <span class="text-basic">
                                RT 04 RT 05 Kelurahan Bulusan, Kecamatan Tembalang, Kota Semarang, Provinsi Jawa Tengah, Indonesia
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
                                <a href="tel:+6281316888715" class="text-decoration-none text-basic">+62 813-1688-8715</a>
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
    // add method validation only letters
    $.validator.addMethod("alphabetOnly", function(value, element) {
        return this.optional(element) || value == value.match(/^[A-Za-z\s']+$/);
    });
    // validate
    $(document).ready(function() {
        $(' #contactForm').validate({
            rules: {
                namaLengkap: {
                    required: true,
                    alphabetOnly: true,
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
                    required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nama lengkap tidak boleh kosong.',
                    alphabetOnly: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nama lengkap hanya boleh berisi huruf.',
                },
                email: {
                    required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Email tidak boleh kosong.',
                    email: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Email tidak valid.',
                },
                subjek: {
                    required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Subjek tidak boleh kosong.',
                },
                pesan: {
                    required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Pesan tidak boleh kosong.',
                },
            },
        });
    });
</script>

<script>
    //== Class definition
    var SweetAlert = function() {

        var initSweatAlert = function() {

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

            <?php if (session()->getFlashdata('warning')) : ?>
                swal("Ups!", "<?= session()->getFlashdata('warning') ?>", {
                    icon: "warning",
                    buttons: {
                        confirm: {
                            className: 'btn btn-warning'
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
            init: function() {
                initSweatAlert();
            },
        };
    }();

    //== Class Initialization
    jQuery(document).ready(function() {
        SweetAlert.init();
    });
</script>

<?= $this->endSection(); ?>
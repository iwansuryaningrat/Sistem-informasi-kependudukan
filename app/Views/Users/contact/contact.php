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
                    <form action="#" id="contactForm">
                        <!-- fullname -->
                        <div class="mb-3">
                            <label for="namaLengkap" class="form-label forms-label">Nama Lengkap</label>
                            <input type="text" class="form-control input-control" id="namaLengkap" name="namaLengkap" placeholder="Masukkan Nama Lengkap" />
                        </div>
                        <!-- email -->
                        <div class="mb-3">
                            <label for="email" class="form-label forms-label">Email</label>
                            <input type="email" class="form-control input-control" id="email" name="email" placeholder="username@email.com" />
                        </div>
                        <!-- subject -->
                        <div class="mb-3">
                            <label for="subjek" class="form-label forms-label">Subjek</label>
                            <select class="form-select select-control" id="subjek" name="subjek">
                                <option selected value="">
                                    Pilih Subjek
                                </option>
                                <option value="1">Pertanyaan</option>
                                <option value="2">Saran</option>
                                <option value="3">Lainnya</option>
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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31678.921973903864!2d110.41484533590068!3d-7.0251215486177605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c02787187c9%3A0x29bcf60b2c20aec!2sUniversitas%20Diponegoro!5e0!3m2!1sid!2sid!4v1688513570084!5m2!1sid!2sid" width="100" height="270" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-100 pb-0 mb-0"></iframe>
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
        $('#contactForm').validate({
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

<?= $this->endSection(); ?>
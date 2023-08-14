<?php $this->extend('users/template/layout'); ?>
<?php $this->section('homepage'); ?>

<!-- header -->
<header class="container px-0">
    <div class="header-container-dashboard-form">
        <div class="mb-4">
            <a class="btn btn-main-outline-xs" href="/users/administrasi">
                <i class="fa-solid fa-arrow-left me-2"></i>Kembali
            </a>
        </div>
        <h3 class="mb-2">Riwayat Pengajuan Administrasi</h3>
    </div>
</header>
<!-- end of header -->

<!-- main -->
<main>
    <section class="container container-space pt-0">
        <div class="row">
            <div class="col-12 col-lg-8 mb-5 mb-lg-0">
                <form class="card-form-container card" id="adminFormAdd" action="/administrasicontroller/ajukan" enctype="multipart/form-data" method="POST">
                    <div class="card-header card-form-header">
                        <p class="mb-0 fw-semibold">
                            Form Pengajuan Permohonan Administrasi
                        </p>
                    </div>
                    <div class="card-body card-form-body">
                        <div>
                            <!-- keperluan -->
                            <div class="mb-3">
                                <label for="keperluan" class="form-label forms-label">Keperluan <span class="text-important">*</span></label>
                                <input type="text" id="keperluan" name="keperluan" value="" required placeholder="Masukkan Keperluan" class="form-control input-control" />
                            </div>
                            <div class="mb-3">
                                <!-- kategori -->
                                <label for="kategori" class="form-label forms-label">Kategori <span class="text-important">*</span></label>
                                <select id="kategori" name="kategori" required class="form-select select-control">
                                    <option value="">Pilih Kategori</option>
                                    <option value="KTP">KTP</option>
                                    <option value="KK">KK</option>
                                    <option value="Surat Pindah">Surat Pindah</option>
                                    <option value="Surat Kematian">Surat Kematian</option>
                                    <option value="Surat Kelahiran">Surat Kelahiran</option>
                                    <option value="Surat Keterangan">Surat Keterangan</option>
                                    <option value="Surat Pengantar">Surat Pengantar</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            <!-- deskripsi -->
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label forms-label">Deskripsi <span class="text-important">*</span></label>
                                <textarea id="deskripsi" name="deskripsi" class="form-control input-control" placeholder="Masukkan Deskripsi" required rows="3"></textarea>
                            </div>
                            <!-- berkas -->
                            <div class="mb-3">
                                <label for="berkas" class="form-label forms-label">Berkas <span class="text-important">*</span></label>
                                <div class="mb-2">
                                    <div class="d-flex flex-column flex-sm-row">
                                        <div id="filePreview"></div>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <input type="file" class="form-control-image" id="berkas" name="berkas" required accept="application/pdf" required onchange="previewFile(event)" />
                                    <label for="berkas" class="btn btn-dark fw-semibold">Unggah Berkas</label>
                                </div>
                                <p class="text-sm text-basic">
                                    *Berkas disarankan dalam format pdf
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer card-form-footer">
                        <div class="w-100 d-flex justify-content-end">
                            <button type="button" class="btn btn-main-sm btn-submit px-4" id="adminFormAddButton" onclick="confirmSubmit()">
                                Kirim Pengajuan
                            </button>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-12 col-lg-4">
                <h5 class="mb-2">FAQ</h5>
                <div class="accordion">
                    <div class="accordion-item accordion-box">
                        <h2 class="accordion-header" id="faq-admin1">
                            <button class="accordion-button accordion-btn shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faq-admin-collapse1" aria-expanded="true" aria-controls="faq-admin-collapse1">
                                <span class="text-secondaries fw-semibold me-1">Q:</span>
                                <span class="fw-medium">Apa tujuan dari <span class="fw-semibold">Form Pengajuan Permohonan Administrasi</span>?</span>
                            </button>
                        </h2>
                        <div id="faq-admin-collapse1" class="accordion-collapse collapse show" aria-labelledby="faq-admin1">
                            <div class="accordion-body accordion-text">
                                <span class="text-secondaries fw-semibold me-1">A:</span>
                                <span class="text-gray">
                                    <span class="fw-semibold">Form Pengajuan Permohonan Administrasi</span> digunakan untuk mengajukan permohonan berbagai jenis dokumen administrasi seperti KTP, KK, Surat Pindah, Surat Kematian, dan lain-lain.</span>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item accordion-box">
                        <h2 class="accordion-header" id="faq-admin2">
                            <button class="accordion-button accordion-btn shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-admin-collapse2" aria-expanded="false" aria-controls="faq-admin-collapse2">
                                <span class="text-secondaries fw-semibold me-1">Q:</span>
                                <span class="fw-medium">Siapa yang dapat menggunakan <span class="fw-semibold">Form Pengajuan Permohonan Administrasi</span>?</span>
                            </button>
                        </h2>
                        <div id="faq-admin-collapse2" class="accordion-collapse collapse" aria-labelledby="faq-admin2">
                            <div class="accordion-body accordion-text">
                                <span class="text-secondaries fw-semibold me-1">A:</span>
                                <span class="text-gray">
                                    Semua anggota komunitas dapat menggunakan formulir ini untuk mengajukan permohonan dokumen administrasi yang diperlukan.</span>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item accordion-box">
                        <h2 class="accordion-header" id="faq-admin3">
                            <button class="accordion-button accordion-btn shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-admin-collapse3" aria-expanded="false" aria-controls="faq-admin-collapse3">
                                <span class="text-secondaries fw-semibold me-1">Q:</span>
                                <span class="fw-medium">Apakah saya akan mendapatkan konfirmasi setelah mengirimkan permohonan?</span>
                            </button>
                        </h2>
                        <div id="faq-admin-collapse3" class="accordion-collapse collapse" aria-labelledby="faq-admin3">
                            <div class="accordion-body accordion-text">
                                <span class="text-secondaries fw-semibold me-1">A:</span>
                                <span class="text-gray">
                                    Ya, Anda akan menerima konfirmasi melalui email atau platform lainnya tentang penerimaan permohonan Anda.</span>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item accordion-box">
                        <h2 class="accordion-header" id="faq-admin4">
                            <button class="accordion-button accordion-btn shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-admin-collapse4" aria-expanded="false" aria-controls="faq-admin-collapse4">
                                <span class="text-secondaries fw-semibold me-1">Q:</span>
                                <span class="fw-medium">Berapa lama waktu yang dibutuhkan untuk memproses permohonan?</span>
                            </button>
                        </h2>
                        <div id="faq-admin-collapse4" class="accordion-collapse collapse" aria-labelledby="faq-admin4">
                            <div class="accordion-body accordion-text">
                                <span class="text-secondaries fw-semibold me-1">A:</span>
                                <span class="text-gray">
                                    Waktu pemrosesan dapat bervariasi tergantung pada jenis permohonan dan prosedur yang berlaku.</span>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item accordion-box">
                        <h2 class="accordion-header" id="faq-admin5">
                            <button class="accordion-button accordion-btn shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-admin-collapse5" aria-expanded="false" aria-controls="faq-admin-collapse5">
                                <span class="text-secondaries fw-semibold me-1">Q:</span>
                                <span class="fw-medium">Bagaimana saya dapat mengetahui perkembangan dari permohonan yang saya ajukan?</span>
                            </button>
                        </h2>
                        <div id="faq-admin-collapse5" class="accordion-collapse collapse" aria-labelledby="faq-admin5">
                            <div class="accordion-body accordion-text">
                                <span class="text-secondaries fw-semibold me-1">A:</span>
                                <span class="text-gray">
                                    Anda dapat memantau perkembangan permohonan Anda melalui email atau platform yang disediakan oleh pihak yang berwenang.</span>
                            </div>
                        </div>
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
    function previewFile(event) {
        const fileInput = event.target;
        const file = fileInput.files[0];
        const filePreview = document.getElementById("filePreview");

        if (file) {
            filePreview.innerHTML = `
                <div class="text-sm-center" style="margin: 12px 0 10px;">
                    <figure class="file-pdf-info">
                        <img src="/homepage/assets/img/decoration/pdf.png" alt="PDF File">
                    </figure>
                    <p class="mb-0 line-clamp-max-w-320 text-sm">${file.name}</p>
                </div>`;
        }
    }

    function confirmSubmit() {
        Swal.fire({
            title: 'Kirim Pengajuan',
            text: 'Pengajuan tidak dapat diubah setelah dikirim. Pastikan data yang Anda masukkan sudah benar dan terisi semua.',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Ya, Kirim',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                $("#adminFormAdd").submit();
            }
        });
    }

    $(document).ready(function() {
        $("#adminFormAdd").validate({
            rules: {
                kategori: {
                    required: true,
                },
                keperluan: {
                    required: true,
                },
                deskripsi: {
                    required: true,
                },
                berkas: {
                    required: true,
                },
            },
            messages: {
                kategori: {
                    required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Kategori tidak boleh kosong.',
                },
                keperluan: {
                    required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Laporan tidak boleh kosong.',
                },
                deskripsi: {
                    required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Deskripsi laporan tidak boleh kosong.',
                },
                berkas: {
                    required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Berkas tidak boleh kosong.',
                },
            },
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
<?php $this->extend('users/template/layout'); ?>
<?php $this->section('homepage'); ?>

<!-- header -->
<header class="container px-0">
    <div class="header-container-dashboard-form">
        <div class="mb-4">
            <a class="btn btn-main-outline-xs" href="/users/keluarga">
                <i class="fa-solid fa-arrow-left me-2"></i>Kembali
            </a>
        </div>
        <h3 class="mb-2">Data Keluarga <?= $dataKeluarga['nama_kepala_keluarga'] ?></h3>
    </div>
</header>
<!-- end of header -->

<!-- main -->
<main>
    <section class="container container-space pt-0">
        <form class="card-form-container card" id="familyFormEdit" action="/keluargacontroller/update/<?= $dataKeluarga['no_kk'] ?>" enctype="multipart/form-data" method="POST">
            <div class="card-header card-form-header">
                <p class="mb-0 fw-semibold">Form Edit Data Keluarga</p>
            </div>
            <div class="card-body card-form-body">
                <div>
                    <!-- no kk -->
                    <div class="row mb-3">
                        <label for="no_kk" class="col-md-2 form-label forms-label mt-md-2">Kartu Keluarga <span class="text-important">*</span></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control input-control" id="no_kk" name="no_kk" required placeholder="Masukkan No KK" value="<?= $dataKeluarga['no_kk'] ?>" disabled />
                        </div>
                    </div>
                    <!-- nama kepala keluarga -->
                    <div class="row mb-3">
                        <label for="nama_kepala_keluarga" class="col-md-2 form-label forms-label mt-md-2">Nama Kepala Keluarga <span class="text-important">*</span></label>
                        <div class="col-md-10">
                            <select id="nama_kepala_keluarga" name="nama_kepala_keluarga" class="form-select select-control">
                                <option value="" disabled>Pilih Kepala Keluarga</option>
                                <?php foreach ($listKeluarga as $keluarga) : ?>
                                    <option value="<?= $keluarga['nama'] ?>" <?= $dataKeluarga['nama_kepala_keluarga'] == $keluarga['nama'] ? 'selected' : '' ?>><?= $keluarga['nama'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <!-- alamat -->
                    <div class="row mb-3">
                        <label for="alamat" class="col-md-2 form-label forms-label mt-md-2">Alamat <span class="text-important">*</span></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control input-control" id="alamat" name="alamat" required placeholder="Masukkan Alamat" value="<?= $dataKeluarga['alamat'] ?>" />
                        </div>
                    </div>
                    <!-- alamat asal -->
                    <div class="row mb-3">
                        <label for="alamat_asal" class="col-md-2 form-label forms-label mt-md-2">Alamat Asal</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control input-control" id="alamat_asal" name="alamat_asal" placeholder="Masukkan Alamat Asal" value="<?= $dataKeluarga['alamat_asal'] ?>" />
                        </div>
                    </div>
                    <!-- tanggal pindah -->
                    <div class="row mb-3">
                        <label for="tgl_pindah" class="col-md-2 form-label forms-label mt-md-2">Tanggal Pindah</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control input-control" id="tgl_pindah" name="tgl_pindah" value="<?= $dataKeluarga['tgl_pindah'] ?>" />
                        </div>
                    </div>
                    <!-- status  -->
                    <div class="row mb-3">
                        <label for="status" class="col-md-2 form-label forms-label mt-md-2">Status</label>
                        <div class="col-md-10">
                            <select id="status" name="status" class="form-select select-control">
                                <option value="">Pilih Status</option>
                                <option value="Pindah" <?= $dataKeluarga['status'] == 'Pindah' ? 'selected' : '' ?>>Pindah</option>
                                <option value="Tetap" <?= $dataKeluarga['status'] == 'Tetap' ? 'selected' : '' ?>>Tetap</option>
                            </select>
                        </div>
                    </div>
                    <!-- foto -->
                    <div class="row mb-3">
                        <label for="foto_rumah" class="col-md-2 form-label forms-label mt-md-2">Foto Rumah</label>
                        <div class="col-md-10">
                            <div class="mb-3">
                                <figure class="">
                                    <img src="/upload/photos/profile/<?= $dataKeluarga['foto_rumah'] ?>" id="thumbnailImage" alt="Rumah <?= $dataKeluarga['nama_kepala_keluarga'] ?>" class="img-fluid img-thumbnail img-preview foto-rumah-form" />
                                </figure>
                            </div>
                            <div class="mb-2">
                                <input type="file" class="form-control-image" id="foto_rumah" name="foto_rumah" required accept="image/*" />
                                <label for="foto_rumah" class="btn btn-dark fw-semibold">Unggah Foto</label>
                            </div>
                            <p class="text-sm text-basic">
                                *Foto rumah disarankan memiliki rasio horizontal
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer card-form-footer">
                <div class="w-100 d-flex justify-content-end">
                    <button type="submit" form="familyFormEdit" class="btn btn-main-sm btn-submit px-4" id="familyFormEditButton">
                        Perbarui Keluarga
                    </button>
                </div>
            </div>
        </form>
    </section>
</main>
<!-- end of main -->

<?= $this->endSection(); ?>

<?php $this->section('script'); ?>

<!-- internal script -->
<script>
    $('#foto_rumah').on('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();

            reader.onload = function(event) {
                $('#thumbnailImage').attr('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }
    });
    // add method validation only letters with symbol , and .
    $.validator.addMethod("alphabetOnly", function(value, element) {
        return this.optional(element) || /^[a-zA-Z\s\.\,]+$/i.test(value);
    }, "Hanya dapat mengandung huruf, spasi, titik, dan koma.");
    // validate
    $(document).ready(function() {
        $("#familyFormEdit").validate({
            rules: {
                no_kk: {
                    required: true,
                    number: true,
                    minlength: 16,
                    maxlength: 16,
                },
                nama_kepala_keluarga: {
                    required: true,
                    alphabetOnly: true,
                },
                alamat: {
                    required: true,
                },
                alamat_asal: {
                    required: false,
                },
                tgl_pindah: {
                    required: false,
                },
                status: {
                    required: false,
                },
                foto_rumah: {
                    extension: "jpg|jpeg|png",
                },
            },
            messages: {
                no_kk: {
                    required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>No. KK tidak boleh kosong.',
                    number: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>No. KK harus berupa angka.',
                    minlength: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>No. KK harus 16 digit.',
                    maxlength: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>No. KK harus 16 digit.',
                },
                nama_kepala_keluarga: {
                    required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nama Kepala Keluarga tidak boleh kosong.',
                    alphabetOnly: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nama Kepala Keluarga hanya dapat mengandung huruf, spasi, titik, dan koma.',
                },
                alamat: {
                    required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Alamat tidak boleh kosong.',
                },
                alamat_asal: {
                    required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Alamat Asal tidak boleh kosong.',
                },
                tgl_pindah: {
                    required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Tanggal Pindah tidak boleh kosong.',
                },
                status: {
                    required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Status tidak boleh kosong.',
                },
                foto_rumah: {
                    extension: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Foto Rumah harus berupa file gambar (jpg, jpeg, png).',
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
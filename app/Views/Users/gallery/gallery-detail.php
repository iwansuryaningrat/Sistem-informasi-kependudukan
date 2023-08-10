<?php $this->extend('users/template/layout'); ?>
<?php $this->section('homepage'); ?>

<!-- header -->
<header class="container">
    <div class="header-container-back mb-0">
        <button class="btn btn-main-outline-xs" type="button" onclick="goBack()">
            <i class="fa-solid fa-arrow-left me-2"></i>Kembali
        </button>
    </div>
    <div class="header-container-mini mt-5 pt-0">
        <p class="mb-3">
            <span class="badge badge-done"><?= $dataGaleri['nama_kategori'] ?></span>
        </p>
        <h1 class="mb-3 text-center"><?= $dataGaleri['judul'] ?></h1>
        <p class="text-basic text-center mb-0 max-w-80"><?= $dataGaleri['deskripsi'] ?></p>
    </div>
</header>
<!-- end of header -->

<!-- main -->
<main>
    <section class="container container-space">
        <!-- only large view -->
        <div class="gallery-view-container-lg">
            <?php foreach ($dataFoto as $foto) : ?>
                <figure data-fancybox="gallery-large" data-src="/upload/photos/galeri/<?= $foto['foto'] ?>" class="gallery-view-item__warp">
                    <img src="/upload/photos/galeri/<?= $foto['foto'] ?>" alt="gallery-view-1" class="gallery-view-item" />
                    <figcaption class="d-none">
                        <p class="mb-2 text-sm"><?= $foto['caption'] ?></p>
                        <p class="text-xs mb-2 fst-italic text-gray-200">
                            <?= $foto['nama'] ?> - <?= date('j M Y H:m', strtotime($foto['created_at'])) ?>
                        </p>
                    </figcaption>
                </figure>
            <?php endforeach ?>
        </div>
    </section>
</main>
<!-- end of main -->

<?php if ($isLoggedin) : ?>
    <!-- button add gallery -->
    <div id="add-gallery-fixed">
        <div class="btn btn-main shadow" data-bs-toggle="modal" data-bs-target="#modalAddPhoto">
            <i class="fa-solid fa-plus"></i>
            <span class="text">Tambah Foto</span>
        </div>
    </div>
<?php endif; ?>

<?= $this->endSection(); ?>

<?= $this->section('custom_modal'); ?>

<!-- modal add gallery -->
<div class="modal fade" id="modalAddPhoto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAddPhotoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form id="formAddPhoto" class="modal-content" enctype="multipart/form-data" action="/fotocontroller/upload/<?= $dataGaleri['galeri_id'] ?>" method="POST">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalAddPhotoLabel">
                    Form Tambah Foto Galeri
                </h1>
                <button type="button" class="btn-close text-sm shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- judul galeri -->
                <div class="mb-3">
                    <label for="judul" class="form-label forms-label">Judul</label>
                    <input type="text" class="form-control input-control" id="judul" name="judul" disabled placeholder="Masukkan Judul Galeri" value="<?= $dataGaleri['judul'] ?>" />
                </div>
                <!-- Caption -->
                <div class="mb-3">
                    <label for="caption" class="form-label forms-label">Caption</label>
                    <textarea class="form-control input-control" id="caption" name="caption" rows="3" placeholder="Masukkan Caption Foto"></textarea>
                </div>
                <!-- Foto -->
                <div class="mb-3">
                    <label for="foto" class="form-label forms-label">Foto</label>
                    <div class="input-group">
                        <input type="file" class="form-control input-control" id="foto" name="foto[]" multiple accept="image/*" />
                        <button class="btn btn-main-outline-sm" type="button" id="button-foto-profil">
                            <i class="fa-solid fa-upload me-2"></i>Unggah
                        </button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-main-sm" id="formAddPhotoBtn">
                    Tambah
                </button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>

<?php $this->section('script'); ?>

<!-- script internal -->
<script>
    //   onclick back to previous page
    function goBack() {
        window.history.back();
    }

    // plugin for filepond
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginFileValidateSize
    );
    // filepond options
    FilePond.setOptions({
        server: {
            url: '/fotocontroller/upload',
            process: {
                method: 'POST',
                withCredentials: false,
                headers: {},
                timeout: 7000,
                onload: null,
                onerror: null,
                ondata: null,
            },
        },
        maxFileSize: '3MB',
        required: true,
        allowMultiple: true,
        labelIdle: 'Drag & drop foto anda atau <span class="filepond--label-action">jelajahi</span>',
        labelFileProcessing: 'Sedang diproses...',
        labelFileProcessingComplete: 'Proses selesai',
        labelFileProcessingAborted: 'Proses dibatalkan',
        labelFileProcessingError: 'Kesalahan saat memproses',
        labelTapToCancel: 'Ketuk untuk membatalkan',
        labelTapToRetry: 'Ketuk untuk mencoba kembali',
        labelTapToUndo: 'Ketuk untuk membatalkan',
        labelButtonRemoveItem: 'Hapus',
        labelButtonAbortItemLoad: 'Batal',
        labelButtonRetryItemLoad: 'Coba Lagi',
        labelButtonAbortItemProcessing: 'Batal',
        labelButtonUndoItemProcessing: 'Kembali',
        labelButtonRetryItemProcessing: 'Coba Lagi',
        labelButtonProcessItem: 'Proses',
        labelMaxFileSizeExceeded: 'Ukuran berkas melebihi batas maksimum',
        labelMaxFileSize: 'Ukuran berkas maksimum',
        labelMaxTotalFileSizeExceeded: 'Total ukuran berkas melebihi batas maksimum',
        labelMaxTotalFileSize: 'Total ukuran berkas maksimum',
        labelFileTypeNotAllowed: 'Jenis berkas tidak diizinkan',
        labelFileCountSingular: 'berkas dalam daftar',
        labelFileCountPlural: 'berkas dalam daftar',
        labelUploadError: 'Kesalahan saat mengunggah',
        labelUploadComplete: 'Pengunggahan selesai',
        labelUploadRetry: 'Coba Lagi',
        labelUploadUndo: 'Batalkan',
        labelButtonProcess: 'Proses',
    });
    FilePond.parse(document.body);

    const options = {
        Thumbs: {
            type: 'classic',
        },
        caption: function(fancybox, slide) {
            const figurecaption = slide.triggerEl?.querySelector('figcaption');
            return figurecaption ? figurecaption.innerHTML : slide.caption || '';
        },
        Carousel: {
            Navigation: false,
        },
        Toolbar: {
            display: {
                left: [],
                middle: ['prev', 'infobar', 'next'],
                right: ['slideshow', 'thumbs', 'close'],
            },
        },
        transitionEffect: 'classic',
    };

    Fancybox.bind('[data-fancybox="gallery-large"]', options);
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
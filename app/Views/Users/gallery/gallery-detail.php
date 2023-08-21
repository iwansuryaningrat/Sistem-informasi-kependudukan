<?php $this->extend('users/template/layout'); ?>
<?php $this->section('homepage'); ?>

<!-- header -->
<header class="container">
    <div class="header-container-back mb-0">
        <div class="d-flex justify-content-between">
            <!-- kembali -->
            <a class="btn btn-main-outline-xs" href="<?= ($isLoggedin) ?  '/users/galeri' :  '/home/galeri'; ?>">
                <i class="fa-solid fa-arrow-left me-2"></i>Kembali
            </a>
            <!-- download -->
            <button class="btn btn-secondary-outline-xs" id="downloadButton">
                <i class="fa-solid fa-download me-2"></i>Unduh
            </button>
        </div>
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
        <div class="gallery-view-container-lg">
            <?php foreach ($dataFoto as $foto) : ?>
                <figure data-fancybox="gallery-large" data-src="<?= $path . $foto['foto'] ?>" class="gallery-view-item__warp">
                    <img src="<?= $path . $foto['foto'] ?>" alt="Galeri <?= $foto['caption'] ?> - <?= $dataGaleri['judul'] ?>" class="gallery-view-item" />
                    <figcaption class="d-none">
                        <p class="mb-2 text-sm text-center"><?= $foto['caption'] ?></p>
                        <p class="text-xs mb-2 fst-italic text-gray-200 text-center">
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
                    <div class="mb-1">
                        <div id="fotosContainer" class="row">
                            <div class="col-6">
                                <figure class="">
                                    <img src="https://www.placehold.it/400x240" id="fotoImage" alt="Placeholder 400x240" class="img-fluid img-thumbnail img-preview w-100" />
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <input type="file" class="form-control-image" id="foto" name="foto[]" multiple required accept="image/*" />
                        <label for="foto" class="btn btn-dark fw-semibold">Unggah Foto</label>
                    </div>
                    <p class="text-sm text-basic">
                        *Foto dapat memiliki rasio horizontal maupun vertikal
                    </p>
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
    $('#foto').on('change', function() {
        const files = this.files;

        $('#fotosContainer').empty();

        for (const file of files) {
            const reader = new FileReader();

            reader.onload = function(event) {
                const imagePreview = $('<div class="col-6 px-1"><figure class="thumbnail-column mx-1"><img alt="placeholder" class="img-fluid img-thumbnail img-preview" /><figcaption class="mt-2"></figcaption></figure></div>');

                const fileName = $('<span />', {
                    text: file.name,
                    class: 'filename-placeholder text-xs line-clamp-1'
                });

                imagePreview.find('img').attr('src', event.target.result);
                imagePreview.find('img').attr('alt', file.name);
                imagePreview.find('figcaption').append(fileName);

                $('#fotosContainer').append(imagePreview);
            };

            reader.readAsDataURL(file);
        }
    });


    // validate
    $(document).ready(function() {
        $('#downloadButton').click(function() {
            Swal.fire({
                title: 'Konfirmasi Unduh',
                text: 'Apakah Anda yakin ingin mengunduh semua foto?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Ya, unduh',
                cancelButtonText: 'Tidak',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Construct the download URL
                    var downloadUrl = '<?= site_url("/users/downloadGalleryPhotos/{$dataGaleri['galeri_id']}") ?>';
                    window.location.href = downloadUrl;
                }
            });
        });

        $("#formAddPhoto").validate({
            rules: {
                judul: {
                    required: true,
                },
                caption: {
                    required: true,
                },
            },
            messages: {
                judul: {
                    required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Judul tidak boleh kosong',
                },
                caption: {
                    required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Caption tidak boleh kosong',
                },
            },
        });
    });

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
    var SweetAlert = function() {

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
        SweetAlert.init();
    });
</script>

<?= $this->endSection(); ?>
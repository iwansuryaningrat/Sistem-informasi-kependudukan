<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Daftar Foto</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="#">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="/admin/galeri">Galeri</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="/admin/listFotoGaleri/<?= $galeri['judul'] ?>">Daftar Foto</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div>
                                <h4 class="card-title">Foto dari Galeri <?= $galeri['judul'] ?></h4>
                                <p class="card-category">
                                    Semua foto dari galeri <?= $galeri['judul'] ?>.
                                </p>
                            </div>
                            <div class="card-tools">
                                <a class="d-block ml-auto" href="/admin/addfoto/<?= $galeri['galeri_id'] ?>">
                                    <button class="btn btn-primary btn-round ml-auto">
                                        <span class="btn-label">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                        Tambah Foto
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row image-gallery">
                            <?php foreach ($dataFoto as $foto) : ?>
                                <div class="position-relative col-6 col-md-3 mb-4">
                                    <a href="<?= $path . $foto['foto'] ?>" class="">
                                        <img src="<?= $path . $foto['foto'] ?>" class="img-fluid img-thumbnail img-foto" />
                                    </a>
                                    <!-- delete -->
                                    <div class="delete-option shadow">
                                        <button class="btn btn-danger" onclick="deletePhoto(<?= $foto['foto_id'] ?>)">
                                            <i class="fa fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="">
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-danger" onclick="deleteGallery(<?= $galeri['galeri_id'] ?>)">Hapus Galeri</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('script') ?>

<script>
    $(".image-gallery").magnificPopup({
        delegate: "a",
        type: "image",
        removalDelay: 300,
        gallery: {
            enabled: true,
        },
        mainClass: "mfp-with-zoom",
        zoom: {
            enabled: true,
            duration: 300,
            easing: "ease-in-out",
            opener: function(openerElement) {
                return openerElement.is("img") ?
                    openerElement :
                    openerElement.find("img");
            },
        },
    });

    function deletePhoto(id) {
        swal({
            title: "Apakah anda yakin?",
            text: "Anda akan menghapus foto ini!",
            icon: "warning",
            buttons: ["Batal", "Ya, Hapus!"],
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                window.location.href = `/fotocontroller/hapusFromAdmin/${id}`;
                console.log(`Hapus foto dengan id ${id}`);
            }
        });
    }

    function deleteGallery(id) {
        swal({
            title: "Apakah anda yakin?",
            text: "Anda akan menghapus Galeri <?= $galeri['judul'] ?>!",
            icon: "warning",
            buttons: ["Batal", "Ya, Hapus!"],
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                window.location.href = `/galericontroller/deletefromadmin/${id}`;
                console.log(`Hapus gallery dengan id ${id}`);
            }
        });
    }
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
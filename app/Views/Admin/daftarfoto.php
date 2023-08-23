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
                        <div class="d-flex align-items-center">
                            <div>
                                <h4 class="card-title">Foto dari Galeri <?= $galeri['judul'] ?></h4>
                                <p class="card-category">
                                    Semua foto dari galeri <?= $galeri['judul'] ?>.
                                </p>
                            </div>
                            <a class="d-block ml-auto" href="/admin/">
                                <button class="btn btn-primary btn-round ml-auto">
                                    <span class="btn-label">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                    Tambah Foto
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row image-gallery">
                            <?php foreach ($dataFoto as $foto) : ?>
                                <a href="<?= $path . $foto['foto'] ?>" class="col-6 col-md-3 mb-4">
                                    <img src="<?= $path . $foto['foto'] ?>" class="img-fluid" />
                                </a>
                            <?php endforeach; ?>
                            <!-- <a href="/assets/img/examples/example2.jpeg" class="col-6 col-md-3 mb-4">
                                <img src="/assets/img/examples/example2-300x300.jpg" class="img-fluid" />
                            </a>
                            <a href="/assets/img/examples/example3.jpeg" class="col-6 col-md-3 mb-4">
                                <img src="/assets/img/examples/example3-300x300.jpg" class="img-fluid" />
                            </a>
                            <a href="/assets/img/examples/example4.jpeg" class="col-6 col-md-3 mb-4">
                                <img src="/assets/img/examples/example4-300x300.jpg" class="img-fluid" />
                            </a>
                            <a href="/assets/img/examples/example5.jpeg" class="col-6 col-md-3 mb-4">
                                <img src="/assets/img/examples/example5-300x300.jpg" class="img-fluid" />
                            </a>
                            <a href="/assets/img/examples/example6.jpeg" class="col-6 col-md-3 mb-4">
                                <img src="/assets/img/examples/example6-300x300.jpg" class="img-fluid" />
                            </a>
                            <a href="/assets/img/examples/example7.jpeg" class="col-6 col-md-3 mb-4">
                                <img src="/assets/img/examples/example7-300x300.jpg" class="img-fluid" />
                            </a>
                            <a href="/assets/img/examples/example8.jpeg" class="col-6 col-md-3 mb-4">
                                <img src="/assets/img/examples/example8-300x300.jpg" class="img-fluid" />
                            </a>
                            <a href="/assets/img/examples/example9.jpeg" class="col-6 col-md-3 mb-4">
                                <img src="/assets/img/examples/example9-300x300.jpg" class="img-fluid" />
                            </a>
                            <a href="/assets/img/examples/example10.jpeg" class="col-6 col-md-3 mb-4">
                                <img src="/assets/img/examples/example10-300x300.jpg" class="img-fluid" />
                            </a>
                            <a href="/assets/img/examples/example11.jpeg" class="col-6 col-md-3 mb-4">
                                <img src="/assets/img/examples/example11-300x300.jpg" class="img-fluid" />
                            </a>
                            <a href="/assets/img/examples/example12.jpeg" class="col-6 col-md-3 mb-4">
                                <img src="/assets/img/examples/example12-300x300.jpg" class="img-fluid" />
                            </a> -->
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
    // This will create a single gallery from all elements that have class "gallery-item"
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
</script>

<?= $this->endSection(); ?>
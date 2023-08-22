<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>

<div class="container container-full">
    <div class="page-navs bg-white">
        <div class="nav-scroller mt-3">
            <div class="nav nav-tabs nav-line nav-color-secondary d-flex align-items-center justify-contents-center w-100">
                <div class="page-header">
                    <h4 class="page-title">Galeri</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="/admin">
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
                            <a href="/admin/galeri">Daftar Galeri</a>
                        </li>
                    </ul>
                </div>
                <div class="ml-auto">
                    <a href="#" class="btn btn-success">Tambah Galeri</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner">
        <div class="row row-projects">
            <?php foreach ($dataGaleri as $galeri) : ?>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="p-2">
                            <img class="card-img-top rounded" src="/upload/photos/galeri/<?= $galeri['thumbnail'] ?>" alt="Product 1">
                        </div>
                        <div class="card-body pt-2">
                            <a href="#">
                                <h4 class="mb-1 fw-bold"><?= $galeri['judul'] ?> <span class="badge badge-success"><?= $galeri['nama_kategori'] ?></span></h4>
                            </a>
                            <p class=" text-muted small mb-2">Created By: <?= $galeri['nama'] ?></p>
                            <div class="avatar-group">
                                <?php foreach ($galeri['userInfo'] as $user) : ?>
                                    <div class="avatar avatar-sm">
                                        <a href="/admin/detailPenduduk/<?= $user['nik'] ?>">
                                            <img src="/upload/photos/profile/<?= $user['foto_profil'] ?>" alt="<?= $user['nama'] ?>" class="avatar-img rounded-circle border border-white">
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('script') ?>

<?= $this->endSection(); ?>
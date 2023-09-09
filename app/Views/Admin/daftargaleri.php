<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>
<?php

use App\Helpers\DateHelper; ?>

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
                <div class="ml-auto" style="margin-bottom: 20px;">
                    <a href="/admin/addGaleri" class="btn btn-success">Tambah Galeri</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner">
        <div class="row row-projects">
            <?php if (empty($dataGaleri)) : ?>
                <div class="col-12 text-center">
                    <div class="d-flex justify-content-center mb-5" style="margin-top: 180px;">
                        <div class="card-empty mt-0 mb-5">
                            <img src="/homepage/assets/img/decoration/out-of-stock.png" alt="empty pengumuman" class="img-empty-state mx-auto mb-2">
                            <p class="text-center mb-3 text-basic">
                                Maaf, tidak ada galeri yang ditemukan.
                            </p>
                            <a class="btn btn-primary shadow" href="/admin/addGaleri">
                                Tambahkan Galeri
                            </a>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <?php foreach ($dataGaleri as $galeri) : ?>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card position-relative">
                            <div class="p-2">
                                <img class="card-img-top rounded img-foto" src="/upload/photos/galeri/<?= $galeri['thumbnail'] ?>" alt="Product 1">
                            </div>
                            <div class="card-body pt-2">
                                <a href="/admin/listFotoGaleri/<?= $galeri['galeri_id'] ?>">
                                    <h4 class="mb-1 fw-bold"><?= $galeri['judul'] ?> <span class="ml-1 badge badge-success"><?= $galeri['nama_kategori'] ?></span></h4>
                                </a>
                                <p class=" text-muted small mb-2">Created By: <?= $galeri['nama'] ?></p>
                                <p class=" text-muted small mb-2"> <span class="fas fa-clock mr-1"></span> <?= DateHelper::formatCreatedAt($galeri['created_at']) ?></p>
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
                            <!-- delete hover -->
                            <div class="dropdown-option shadow">
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="/admin/listFotoGaleri/<?= $galeri['galeri_id'] ?>">Detail</a>
                                        <button class="dropdown-item delete-btn" onclick="deleteGallery(<?= $galeri['galeri_id'] ?>)">Hapus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('script') ?>
<script>
    function deleteGallery(id) {
        swal({
            title: "Apakah anda yakin?",
            text: "Anda akan menghapus galeri ini!",
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
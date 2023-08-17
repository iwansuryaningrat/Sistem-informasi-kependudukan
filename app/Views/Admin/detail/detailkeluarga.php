<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Data Keluarga</h4>
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
                    <a href="/admin/families">Data Keluarga</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="/admin/detailkeluarga/<?= $keluarga['no_kk'] ?>">Detail Data Keluarga</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Detail Data Keluarga</div>
                        <div class="card-category">Detail data keluarga berdasarkan kartu keluarga</a></div>
                    </div>

                    <form id="exampleValidation" action="#" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group form-show-validation row">
                                <label for="no_kk" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nomor Kartu Keluarga</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Masukkan Nomor Kartu Keluarga" aria-label="no_kk" aria-describedby="username-addon" id="no_kk" name="no_kk" value="<?= $keluarga['no_kk'] ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama Kepala Keluarga</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Kepala Keluarga" value="<?= $keluarga['nama_kepala_keluarga'] ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="nik" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">NIK Kepala Keluarga</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK Kepala Keluarga" value="<?= $keluarga['nik_kepala_keluarga'] ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="alamat" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Alamat</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" value="<?= $keluarga['alamat'] ? $keluarga['alamat'] : '-' ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="alamat_asal" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Alamat Asal</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="alamat_asal" name="alamat_asal" placeholder="Masukkan Alamat Asal" value="<?= $keluarga['alamat_asal'] ? $keluarga['alamat_asal'] : '-' ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="tgl_pindah" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Tanggal Pindah </span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="tgl_pindah" name="tgl_pindah" value="<?= $keluarga['tgl_pindah'] ?>" disabled>
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-calendar-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator-solid"></div>
                            <div class="form-group form-show-validation row">
                                <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Foto Rumah</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-file input-file-image">
                                        <img class="img-upload-preview" width="150" src="<?= ($keluarga['foto_rumah']) ? '/upload/photos/foto_rumah/' . $keluarga['foto_rumah'] : 'http://placehold.it/150x150' ?>" alt="preview" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <div class="row">
                                <div class="col-md-9"></div>
                                <div class="col-md-3">
                                    <a href="/admin/families" class="btn btn-danger">Kembali</a>
                                    <a href="/admin/editkeluarga/<?= $keluarga['no_kk'] ?>" class="btn btn-info">Edit</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>

<script>
    var SweetAlert2Demo = function() {

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
            init: function() {
                initDemos();
            },
        };
    }();

    jQuery(document).ready(function() {
        SweetAlert2Demo.init();
    });
</script>

<?= $this->endSection(); ?>
<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Data Laporan</h4>
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
                    <a href="/admin/families">Data Laporan</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="/admin/addfamily">Data Laporan</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Data Laporan</div>
                    </div>
                    <form id="exampleValidation" action="" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group form-show-validation row">
                                <label for="nama_pelapor" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama Pelapor </label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="-" aria-label="nama_pelapor" aria-describedby="username-addon" id="nama_pelapor" name="nama_pelapor" value='<?= $laporan['nama_pelapor'] ?>' disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="nama_terlapor" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama Pelapor </label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="-" aria-label="nama_terlapor" aria-describedby="username-addon" id="nama_terlapor" name="nama_terlapor" value='<?= $laporan['nama_terlapor'] ?>' disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="laporan" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Laporan</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="laporan" name="laporan" placeholder="-" value='<?= $laporan['laporan'] ?>' disabled>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="kategori" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Kategori</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="kategori" name="kategori" placeholder="-" value='<?= $laporan['kategori'] ?>' disabled>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="deskripsi_pelaporan" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Deskripsi</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <textarea class="form-control" id="deskripsi_pelaporan" name="deskripsi_pelaporan" rows="5" placeholder="-" disabled><?= $laporan['deskripsi_pelaporan'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="status" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Status</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="status" name="status" value='<?= $laporan['status_pelaporan'] ?>' disabled placeholder="-">
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="balasan_pelaporan" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Balasan</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <textarea class="form-control" id="balasan_pelaporan" name="balasan_pelaporan" rows="5" disabled placeholder="-"><?= $laporan['balasan_pelaporan'] ?></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-action">
                        <div class="d-flex justify-content-sm-end">
                            <div class="">
                                <a href="/admin/pelaporan" class="btn btn-danger">Kembali</a>
                                <a href="/admin/editPelaporan/<?= $laporan['pelaporan_id'] ?>" class="btn btn-info ml-2">Edit </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>

<script>
    $('#tgl_pindah').datetimepicker({
        format: 'MM/DD/YYYY'
    });

    $('#state').select2({
        theme: "bootstrap"
    });

    /* validate */

    // validation when select change
    $("#state").change(function() {
        $(this).valid();
    })

    $("#exampleValidation").validate({
        validClass: "success",
        rules: {
            gender: {
                required: true
            },
            confirmpassword: {
                equalTo: "#password"
            },
            birth: {
                date: true
            },
            fotoRumah: {
                required: true,
            },
        },
        highlight: function(element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
        },
        success: function(element) {
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
        },
    });

    jQuery(document).ready(function() {
        SweetAlert.init();
    });
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
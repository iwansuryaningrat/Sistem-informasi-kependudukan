<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Detail Data Administrasi</h4>
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
                    <a href="/admin/administrasi">Data Administrasi</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="/admin/detailAdministrasi/<?= $dataAdministrasi['administrasi_id'] ?>">Detail Data Administrasi</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Detail Data Administrasi</div>
                    </div>
                    <form id="exampleValidation" action="#" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group form-show-validation row">
                                <label for="no_kk" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">No. Kartu Keluarga</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="no_kk" name="no_kk" placeholder="-" value="<?= $dataAdministrasi['no_kk'] ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="nama_pemohon" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama Pemohon </label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="-" aria-label="nama_pemohon" aria-describedby="username-addon" id="nama_pemohon" name="nama_pemohon" value="<?= $dataAdministrasi['nama'] ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="nik" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">NIK Pemohon</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="-" value="<?= $dataAdministrasi['pemohon'] ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="keperluan" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Keperluan <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="keperluan" placeholder="-" value="<?= $dataAdministrasi['keperluan'] ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="deskripsi" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Deskripsi <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" disabled><?= $dataAdministrasi['deskripsi'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="no_surat" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nomor Surat</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="no_surat" name="no_surat" placeholder="-" value="<?= $dataAdministrasi['no_surat'] ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="catatan" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Catatan <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <textarea class="form-control" id="catatan" name="catatan" rows="5" placeholder="-" disabled><?= $dataAdministrasi['catatan'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="catatan" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Status</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <select class="form-control" id="status" name="status" disabled>
                                        <option value="<?= $dataAdministrasi['administrasi_status'] ?>" selected><?= $dataAdministrasi['administrasi_status'] ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="separator-solid"></div>
                            <div class="form-group form-show-validation row">
                                <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Berkas</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-file input-file-image">
                                        <img class="img-upload-preview img-circle" width="100" height="100" src="http://placehold.it/100x100" alt="preview">
                                        <a href="/administrasicontroller/download/<?= $dataAdministrasi['administrasi_id'] ?>" target="_blank">
                                            <button class="btn btn-info">Download</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <div class="row">
                                <div class="col-md-9"></div>
                                <div class="col-md-3">
                                    <a href="/admin/administrasi" class="btn btn-danger">Batal</a>
                                    <a href="/admin/editAdministrasi/<?= $dataAdministrasi['administrasi_id'] ?>" class="btn btn-info">Edit</a>
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
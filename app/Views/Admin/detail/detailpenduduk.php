<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Detail Data Penduduk</h4>
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
                    <a href="/admin/people">Data Penduduk</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="/admin/detailPenduduk/<?= $dataPenduduk['nik'] ?>">Detail Data Penduduk</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Edit Data Penduduk</div>
                        <div class="card-category">Edit data Penduduk berdasarkan kartu keluarga</a></div>
                    </div>

                    <form id="exampleValidation" action="" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group form-show-validation row">
                                <label for="no_kk" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nomor Kartu Keluarga</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-group">
                                        <select class="form-control" disabled placeholder="Pilih Nomor Kartu Keluarga" id="no_kk" name="no_kk">
                                            <option value="<?= $dataPenduduk['no_kk'] ?>" selected><?= $dataPenduduk['no_kk'] ?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="name" name="name" disabled placeholder="Masukkan Nama" value="<?= $dataPenduduk['nama'] ?>">
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="nik" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">NIK</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="nik" name="nik" disabled placeholder="Masukkan NIK" value="<?= $dataPenduduk['nik'] ?>">
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="no_hp" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nomor HP</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="no_hp" name="no_hp" disabled placeholder="Masukkan Nomor HP" value="<?= $dataPenduduk['no_hp'] ?>">
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="email" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Email</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="email" name="email" disabled placeholder="Masukkan Email" value="<?= $dataPenduduk['email'] ?>">
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="status" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Status dalam Keluarga</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="status" name="status" disabled placeholder="Masukkan status" value="<?= $dataPenduduk['status'] ?>">
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="jenis_kelamin" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Jenis Kelamin</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" disabled placeholder="-" value="<?= $dataPenduduk['jenis_kelamin'] ?>">
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="tempat_lahir" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Tempat Lahir</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" disabled placeholder="-" value="<?= $dataPenduduk['tempat_lahir'] ?>">
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="tgl_lahir" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Tanggal Lahir</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" disabled placeholder="-" value="<?php $timestamp = strtotime($dataPenduduk['tgl_lahir']);
                                                                                                                                            $formattedDate = date("d F Y", $timestamp);
                                                                                                                                            echo $formattedDate; ?>">
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="usia" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Usia</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="usia" name="usia" disabled placeholder="-" value="<?= $dataPenduduk['usia'] ?>">
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="status_perkawinan" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Status Perkawinan</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="status_perkawinan" name="status_perkawinan" disabled placeholder="-" value="<?= $dataPenduduk['status_perkawinan'] ?>">
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="pendidikan" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Pendidikan</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="pendidikan" name="pendidikan" disabled placeholder="-" value="<?= $dataPenduduk['pendidikan'] ?>">
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="pekerjaan" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Pekerjaan</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" disabled placeholder="-" value="<?= $dataPenduduk['pekerjaan'] ?>">
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Foto</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-file input-file-image">
                                        <img class="img-upload-preview" width="150" src="<?= ($dataPenduduk['foto']) ? $profilePhotoPath . $dataPenduduk['foto'] : $profilePhotoPath . 'default.png' ?>" alt="preview" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <div class="row">
                                <div class="col-md-9"></div>
                                <div class="col-md-3">
                                    <a href="/admin/people" class="btn btn-danger">Kembali</a>
                                    <a href="/admin/editPenduduk/<?= $dataPenduduk['nik'] ?>" class="btn btn-info">Edit</a>
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

    // validation when inputfile change
    $("#fotoRumah").on("change", function() {
        $(this).parent('form').validate();
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
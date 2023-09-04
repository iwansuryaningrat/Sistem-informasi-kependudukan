<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Tambah Data Keluarga</h4>
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
                    <a href="/admin/addfamily">Tambah Data Keluarga</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tambahkan Data Keluarga</div>
                        <div class="card-category">Tambahkan data keluarga berdasarkan kartu keluarga</a></div>
                    </div>

                    <form id="formAddKeluarga" action="/keluargacontroller/save" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <!-- no kk -->
                            <div class="form-group form-show-validation row">
                                <label for="no_kk" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nomor Kartu Keluarga <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Masukkan Nomor Kartu Keluarga" aria-label="no_kk" aria-describedby="username-addon" id="no_kk" name="no_kk" required>
                                    </div>
                                </div>
                            </div>
                            <!-- kepala keluarga -->
                            <div class="form-group form-show-validation row">
                                <label for="nama_kepala_keluarga" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama Kepala Keluarga <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="nama_kepala_keluarga" name="nama_kepala_keluarga" placeholder="Masukkan Nama Kepala Keluarga" required>
                                </div>
                            </div>
                            <!-- nik kepala keluarga -->
                            <div class="form-group form-show-validation row">
                                <label for="nik" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">NIK Kepala Keluarga <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK Kepala Keluarga" required>
                                </div>
                            </div>
                            <!-- alamat -->
                            <div class="form-group form-show-validation row">
                                <label for="alamat" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Alamat <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" required>
                                </div>
                            </div>
                            <!-- alamat asal -->
                            <div class="form-group form-show-validation row">
                                <label for="alamat_asal" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Alamat Asal</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="alamat_asal" name="alamat_asal" placeholder="Masukkan Alamat Asal" required>
                                </div>
                            </div>
                            <!-- tanggal pindah -->
                            <div class="form-group form-show-validation row">
                                <label for="tgl_pindah" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Tanggal Pindah </span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="tgl_pindah" name="tgl_pindah">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator-solid"></div>
                            <!-- foto rumah -->
                            <div class="form-group form-show-validation row">
                                <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Foto Rumah</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-file input-file-image">
                                        <img class="img-upload-preview" width="150" src="http://placehold.it/150x150" alt="preview" />
                                        <input type="file" class="form-control form-control-file" id="foto_rumah" name="foto_rumah" accept="image/*">
                                        <label for="foto_rumah" class="btn btn-primary btn-round btn-lg"><i class="fa fa-file-image"></i> Upload Foto</label>
                                    </div>
                                </div>
                            </div>
                            <!-- konfirmasi -->
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-sm-right">Konfirmasi <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8 d-flex align-items-center">
                                    <div class="">
                                        <div class="custom-control custom-checkbox" style="padding-top: 7px;" id="customControlLabel">
                                            <input type="checkbox" class="custom-control-input" id="agree" name="agree" required>
                                            <label id="customAgreeLabel" class="custom-control-label" for="agree">Pastikan data yang Anda masukkan telah benar, Anda tidak dapat mengganti <br> nomor kartu keluarga setelah menyimpannya</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <div class="d-flex justify-content-sm-end">
                                <div class="">
                                    <a href="/admin/families" class="btn btn-danger">Kembali</a>
                                    <input class="btn btn-success ml-3" type="submit" value="Submit">
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
        format: 'MM/DD/YYYY',
        defaultDate: new Date()
    });

    // validation when inputfile change
    $("#fotoRumah").on("change", function() {
        $(this).parent('form').validate();
    })

    $("#formAddKeluarga").validate({
        validClass: "success",
        rules: {
            no_kk: {
                required: true
            },
            nama_kepala_keluarga: {
                required: true
            },
            nik: {
                required: true
            },
            alamat: {
                required: true
            },
            agree: {
                required: true
            }
        },
        highlight: function(element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
        },
        success: function(element) {
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
        },
        messages: {
            no_kk: {
                required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nomor Kartu Keluarga tidak boleh kosong',
            },
            nama_kepala_keluarga: {
                required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nama Kepala Keluarga tidak boleh kosong',
            },
            nik: {
                required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>NIK Kepala Keluarga tidak boleh kosong',
            },
            alamat: {
                required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Alamat tidak boleh kosong',
            },
            agree: {
                required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Anda harus menyetujui konfirmasi',
            }
        },
        errorPlacement: function(error, element) {
            if (element.attr("name") == "agree") {
                error.insertAfter("#customControlLabel");
            } else {
                error.insertAfter(element);
            }
        }
    });

    jQuery(document).ready(function() {
        SweetAlert.init();
    });
</script>

<script>
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

    jQuery(document).ready(function() {
        SweetAlert.init();
    });
</script>

<?= $this->endSection(); ?>
<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Tambah Data Pengumuman</h4>
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
                    <a href="/admin/pengumuman">Data Pengumuman</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="/admin/addpengumuman">Tambah Data Pengumuman</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tambahkan Data Pengumuman</div>
                    </div>

                    <form id="exampleValidation" action="#" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group form-show-validation row">
                                <label for="nik" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Kategori <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan Kategori" required>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="judul" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">judul <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul pengumuman" required>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="jam" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Jam</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="jam" name="jam" placeholder="Masukkan Jam">
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="tanggal" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Tanggal</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="tanggal" name="tanggal">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-calendar-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="tempat" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">tempat</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Masukkan tempat">
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Deskripsi</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <textarea name="deskripsi" id="summernote"></textarea>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Thumbnail</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-file input-file-image">
                                        <img class="img-upload-preview" width="150" src="http://placehold.it/150x150" alt="preview" />
                                        <input type="file" class="form-control form-control-file" id="thumbnail" name="thumbnail" accept="image/*">
                                        <label for="thumbnail" class="btn btn-primary btn-round btn-lg"><i class="fa fa-file-image"></i> Upload Foto</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <div class="row">
                                <div class="col-md-9"></div>
                                <div class="col-md-3">
                                    <a href="/admin/people" class="btn btn-danger">Kembali</a>
                                    <input class="btn btn-success" type="submit" value="Submit">
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
    $('#summernote').summernote({
        placeholder: 'Atlantis',
        fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
        tabsize: 2,
        height: 300
    });

    function test() {
        var textareaValue = $('#summernote').summernote('code');
        console.log(textareaValue);
    }

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
<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Data Pesan</h4>
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
                    <a href="/admin/pesan">Pesan</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="/admin/pesan">Baca Pesan</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Baca Pesan</div>
                    </div>

                    <form id="exampleValidation" action="/pesancontroller/read/<?= $dataPesan['id'] ?>" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group form-show-validation row">
                                <label for="nama" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama Pengirim</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-label="nama" aria-describedby="username-addon" id="nama" name="nama" value='<?= $dataPesan['nama_pengirim'] ?>' disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="email" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Email</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="email" name="email" value='<?= $dataPesan['email'] ?>' disabled>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="kategori" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Kategori</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="kategori" name="kategori" value='<?= $dataPesan['kategori'] ?>' disabled>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="status" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Status </label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="status" value='<?= $dataPesan['status'] ?>' disabled>
                                </div>
                            </div>
                            <div class=" form-group form-show-validation row">
                                <label for="pesan" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Pesan</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <textarea type="text" class="form-control" id="pesan" rows="5" disabled><?= $dataPesan['pesan'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <div class="row">
                                <div class="col-md-9"></div>
                                <div class="col-md-3">
                                    <button class="btn btn-danger" onclick="location.href('/admin/pesan')">Batal</button>
                                    <input class="btn btn-success" type="submit" value="Baca Pesan">
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

        //== Demos
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
            //== Init
            init: function() {
                initDemos();
            },
        };
    }();

    //== Class Initialization
    jQuery(document).ready(function() {
        SweetAlert.init();
    });
</script>

<?= $this->endSection(); ?>
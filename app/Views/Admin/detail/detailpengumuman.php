<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Detail Pengumuman</h4>
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
                    <a href="/admin/detailpengumuman/<?= $pengumuman['pengumuman_id'] ?>">Detail Pengumuman</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Detail Pengumuman</div>
                    </div>

                    <form id="exampleValidation" action="/pengumumancontroller/create" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <!-- kategori -->
                            <div class="form-group form-show-validation row">
                                <label for="kategori" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Kategori <span class="required-label">*</span></label>
                                <div class="col-lg-6 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="kategori" name="kategori" value='<?= $pengumuman['kategori'] ?>' disabled placeholder="-">
                                </div>
                            </div>
                            <!-- judul -->
                            <div class="form-group form-show-validation row">
                                <label for="judul" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Judul <span class="required-label">*</span></label>
                                <div class="col-lg-6 col-md-9 col-sm-8">
                                    <textarea class="form-control" id="judul" name="judul" rows="2" disabled placeholder="-"><?= $pengumuman['judul_pengumuman'] ?></textarea>
                                </div>
                            </div>
                            <!-- jam -->
                            <div class="form-group form-show-validation row">
                                <label for="jam" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Jam <span class="required-label">*</span></label>
                                <div class="col-lg-6 col-md-9 col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="jam" name="jam" placeholder="Masukkan Jam" required disabled>
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fas fa-clock"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tanggal -->
                            <div class="form-group form-show-validation row">
                                <label for="tanggal" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Tanggal <span class="required-label">*</span></span></label>
                                <div class="col-lg-6 col-md-9 col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="tanggal" name="tanggal" required disabled>
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fas fa-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tempat -->
                            <div class="form-group form-show-validation row">
                                <label for="tempat" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Tempat <span class="required-label">*</span></label>
                                <div class="col-lg-6 col-md-9 col-sm-8">
                                    <textarea class="form-control" id="tempat" name="tempat" rows="2" disabled placeholder="-"><?= $pengumuman['tempat'] ?></textarea>
                                </div>
                            </div>
                            <!-- thumbnail -->
                            <div class="form-group form-show-validation row">
                                <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Thumbnail <span class="required-label">*</span></label>
                                <div class="col-lg-6 col-md-9 col-sm-8">
                                    <div class="input-file input-file-image">
                                        <img class="img-upload-preview" width="150" src="<?= ($pengumuman['thumbnail']) ? $path . $pengumuman['thumbnail'] : 'http://placehold.it/150x150' ?>" alt="preview" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right" required>Deskripsi <span class="required-label">*</span></label>
                                <div class="col-lg-8 col-md-9 col-sm-8">
                                    <textarea name="deskripsi" id="summernote" required></textarea>
                                </div>
                            </div>

                            <input type="text" class="form-control" id="deskripsi_int" name="deskripsi_int" hidden>
                        </div>
                        <div class="card-action">
                            <div class="d-flex justify-content-sm-end">
                                <div class="">
                                    <a href="/admin/pengumuman" class="btn btn-danger">Kembali</a>
                                    <a href="/admin/editpengumuman/<?= $pengumuman['pengumuman_id'] ?>" class="btn btn-info ml-2">Edit</a>
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
    $(document).ready(function() {
        // Initialize Summernote without the toolbar
        $('#summernote').summernote({
            toolbar: false,
        });

        $('#summernote').summernote('code', '<?= $pengumuman['deskripsi'] ?>');
        $('#summernote').summernote('disable');
    });


    $('#jam').datetimepicker({
        format: 'HH:mm',
        defaultDate: moment('<?= $pengumuman['jam'] ?>', 'HH:mm:ss'),
    });

    $('#tanggal').datetimepicker({
        format: 'MM/DD/YYYY',
        defaultDate: moment('<?= $pengumuman['tanggal'] ?>', 'YYYY-MM-DD'),
    });

    // validation when select change
    $("#kategori").change(function() {
        $(this).valid();
    })

    // validation when inputfile change
    $("#thumbnail").on("change", function() {
        $(this).parent('form').validate();
    })

    $("#exampleValidation").validate({
        validClass: "success",
        rules: {
            kategori: {
                required: true,
            },
            judul: {
                required: true,
            },
            jam: {
                required: true,
            },
            thumbnail: {
                required: true,
            },
            tempat: {
                required: true,
            },
            deskripsi: {
                required: true,
            },
            tanggal: {
                date: true,
                required: true
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
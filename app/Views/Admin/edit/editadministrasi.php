<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Edit Data Administrasi</h4>
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
                    <a href="/admin/editAdministrasi/<?= $dataAdministrasi['administrasi_id'] ?>">Edit Data Administrasi</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Edit Data Administrasi</div>
                    </div>
                    <form id="exampleValidation" action="/administrasicontroller/editadmin/<?= $dataAdministrasi['administrasi_id'] ?>" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group form-show-validation row">
                                <label for="no_kk" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">No. Kartu Keluarga</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="no_kk" name="no_kk" placeholder="Masukkan No. Kartu Keluarga" value="<?= $dataAdministrasi['no_kk'] ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="nama_pemohon" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama Pemohon </label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Masukkan Nama Pemohon" aria-label="nama_pemohon" aria-describedby="username-addon" id="nama_pemohon" name="nama_pemohon" value="<?= $dataAdministrasi['nama'] ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="nik" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">NIK Pemohon</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" value="<?= $dataAdministrasi['pemohon'] ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="keperluan" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Keperluan</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="keperluan" placeholder="Masukkan Keperluan" value="<?= $dataAdministrasi['keperluan'] ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="deskripsi" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Deskripsi</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" disabled><?= $dataAdministrasi['deskripsi'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="no_surat" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nomor Surat <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="no_surat" name="no_surat" placeholder="Masukkan Nomor Surat" required value="<?= $dataAdministrasi['no_surat'] ?>">
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="catatan" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Catatan <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <textarea class="form-control" id="catatan" name="catatan" rows="5" placeholder="Tambahkan Catatan"><?= $dataAdministrasi['catatan'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="status" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Status</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <select class="form-control" id="status" name="status">
                                        <?php foreach ($status as $status) : ?>
                                            <option value="<?= $status ?>" <?= $status == $dataAdministrasi['administrasi_status'] ? 'selected' : '' ?>><?= $status ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="separator-solid"></div>
                            <div class="form-group form-show-validation row">
                                <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Berkas</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="d-flex">
                                        <div class="mr-5">
                                            <figure class="file-pdf-info">
                                                <img id="previewImageThumbnail" src="/homepage/assets/img/decoration/pdf.png" alt="PDF File">
                                            </figure>
                                            <p class="line-clamp-1"><?= $dataAdministrasi['berkas'] ?></p>
                                            <a href="/administrasicontroller/download/<?= $dataAdministrasi['administrasi_id'] ?>" target="_blank">
                                                <button class="btn btn-info">Download</button>
                                            </a>
                                        </div>
                                        <div class="input-file input-file-image">
                                            <div class="mb-2">
                                                <div class="d-flex flex-column flex-sm-row">
                                                    <div id="filePreview"></div>
                                                </div>
                                            </div>
                                            <input type="file" class="form-control form-control-file" id="berkas" name="berkas" accept="application/pdf" onchange="previewFile(event)">
                                            <label for="berkas" class="btn btn-primary btn-round btn-lg"><i class="fa fa-file-image"></i> Upload Berkas</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <div class="row">
                                <div class="col-md-9"></div>
                                <div class="col-md-3">
                                    <a href="/admin/administrasi" class="btn btn-danger">Kembali</a>
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
    $(document).ready(function() {
        var fileExtension = getFileExtension('<?= $dataAdministrasi['berkas'] ?>');
        switch (fileExtension) {
            case 'pdf':
                fileTypeImage = '/homepage/assets/img/decoration/pdf.png';
                break;
            case 'doc':
            case 'docx':
                fileTypeImage = '/homepage/assets/img/decoration/word.png';
                break;
            case 'xls':
            case 'xlsx':
                fileTypeImage = '/homepage/assets/img/decoration/excel.png';
                break;
            case 'jpg':
            case 'jpeg':
                fileTypeImage = '/homepage/assets/img/decoration/jpg.png';
                break;
            case 'png':
                fileTypeImage = '/homepage/assets/img/decoration/png.png';
                break;
        }

        $('#filePreviewThumbnail').attr('src', fileTypeImage);
    });

    function getFileExtension(filename) {
        return filename.split('.').pop();
    }

    function previewFile(event) {
        const fileInput = event.target;
        const file = fileInput.files[0];
        const filePreview = document.getElementById("filePreview");

        if (file) {
            let fileTypeImage = '/homepage/assets/img/decoration/pdf.png';

            switch (file.type) {
                case 'application/pdf':
                    fileTypeImage = '/homepage/assets/img/decoration/pdf.png';
                    break;
                case 'application/msword':
                case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
                    fileTypeImage = '/homepage/assets/img/decoration/word.png';
                    break;
                case 'application/vnd.ms-excel':
                case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
                    fileTypeImage = '/homepage/assets/img/decoration/excel.png';
                    break;
                case 'image/jpeg':
                    fileTypeImage = '/homepage/assets/img/decoration/jpg.png';
                    break;
                case 'image/png':
                    fileTypeImage = '/homepage/assets/img/decoration/png.png';
                    break;
            }

            filePreview.innerHTML = `
      <div class="text-sm-center" style="margin: 12px 0 10px;">
        <figure class="file-pdf-info">
          <img src="${fileTypeImage}" alt="File ${file.name}">
        </figure>
        <p class="mb-0 line-clamp-max-w-320 text-sm">${file.name}</p>
      </div>`;
        }
    }

    $('#status').select2({
        theme: "bootstrap"
    });

    /* validate */

    // validation when select change
    $("#status").change(function() {
        $(this).valid();
    })

    $("#exampleValidation").validate({
        validClass: "success",
        rules: {
            no_surat: {
                required: true
            },
            catatan: {
                required: true
            },
        },
        highlight: function(element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
        },
        success: function(element) {
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
        },
        messages: {
            no_surat: {
                required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nomor surat tidak boleh kosong',
            },
            catatan: {
                required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Catatan tidak boleh kosong',
            },
        }
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
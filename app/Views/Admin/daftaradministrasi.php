<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Data Administrasi</h4>
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
                    <a href="/admin/administrasi">Daftar Administrasi</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Data Administrasi</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Pemohon</th>
                                        <th>Kategori</th>
                                        <th>Keperluan</th>
                                        <th>No Surat</th>
                                        <th>Status</th>
                                        <th style="width: 10%">Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Pemohon</th>
                                        <th>Kategori</th>
                                        <th>Keperluan</th>
                                        <th>No Surat</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ($dataAdministrasi as $data) :  ?>
                                        <tr>
                                            <td><?= $data['nama'] ?></td>
                                            <td><?= $data['kategori'] ?></td>
                                            <td><?= $data['keperluan'] ?></td>
                                            <td><?= $data['no_surat'] ?></td>
                                            <td><?= $data['administrasi_status'] ?></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="/admin/detailAdministrasi/<?= $data['administrasi_id'] ?>">
                                                        <button type="button" data-toggle="tooltip" title="View" class="btn btn-link btn-primary btn-lg" data-original-title="View">
                                                            <i class="fa fa-eye"></i>
                                                        </button>
                                                    </a>
                                                    <a href="/admin/editAdministrasi/<?= $data['administrasi_id'] ?>">
                                                        <button type="button" data-toggle="tooltip" title="Edit" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                    </a>
                                                    <a href="/administrasicontroller/hapusadmin/<?= $data['administrasi_id'] ?>">
                                                        <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-link btn-danger" data-original-title="Remove">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>


<?= $this->section('script') ?>

<script>
    $(document).ready(function() {
        // Add Row
        $('#add-row').DataTable({
            "pageLength": 10,
        });
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
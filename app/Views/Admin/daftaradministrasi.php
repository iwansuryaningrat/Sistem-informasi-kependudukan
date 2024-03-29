<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>
<?php

use App\Helpers\DateHelper; ?>

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
                                        <th>Created At</th>
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
                                        <th>Created At</th>
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
                                            <td>
                                                <span class="badge <?php if ($data['administrasi_status'] == 'Selesai') {
                                                                        echo 'badge-success';
                                                                    } else if ($data['administrasi_status'] == 'Menunggu Konfirmasi') {
                                                                        echo 'badge-info';
                                                                    } else if ($data['administrasi_status'] == 'Dalam Proses') {
                                                                        echo 'badge-warning';
                                                                    } else {
                                                                        echo 'badge-danger';
                                                                    }
                                                                    ?>">
                                                    <?= $data['administrasi_status'] ?>
                                                </span>
                                            </td>
                                            <td><?= DateHelper::formatIndonesianShortDateTime($data['created_at']) ?></td>
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
                                                    <a href="javascript:void(0);" onclick="deleteAdministration(<?= $data['administrasi_id'] ?>)">
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
        $('#add-row').DataTable({
            "pageLength": 10,
        });
    });

    function deleteAdministration(id) {
        swal({
            title: "Apakah anda yakin?",
            text: "Anda akan menghapus data administrasi ini!",
            icon: "warning",
            buttons: ["Batal", "Ya, Hapus!"],
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                window.location.href = `/administrasicontroller/hapusadmin/${id}`;
            }
        });
    }
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
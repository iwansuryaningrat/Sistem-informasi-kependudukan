<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>
<?php

use App\Helpers\DateHelper; ?>

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
                    <a href="/admin/pelaporan">Laporan</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="/admin/pelaporan">Data Laporan</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Data Laporan</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelapor</th>
                                        <th>Nama Terlapor</th>
                                        <th>Kategori</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th style="width: 10%">Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelapor</th>
                                        <th>Nama Terlapor</th>
                                        <th>Kategori</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($laporan as $data) : ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $data['nama_pelapor'] ?></td>
                                            <td><?= $data['nama_terlapor'] ?></td>
                                            <td><?= $data['kategori'] ?></td>
                                            <td><?= $data['status_pelaporan'] ?></td>
                                            <td><?= DateHelper::formatIndonesianShortDateTime($data['created_at']) ?></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="/admin/detailPelaporan/<?= $data['pelaporan_id'] ?>">
                                                        <button type="button" data-toggle="tooltip" title="View" class="btn btn-link btn-primary btn-lg" data-original-title="View">
                                                            <i class="fa fa-eye"></i>
                                                        </button>
                                                    </a>
                                                    <a href="/admin/editPelaporan/<?= $data['pelaporan_id'] ?>">
                                                        <button type="button" data-toggle="tooltip" title="Edit" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                    </a>
                                                    <a href="javascript:void(0);" onclick="deleteLaporan(<?= $data['pelaporan_id'] ?>)">
                                                        <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-link btn-danger" data-original-title="Remove">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php $i++;
                                    endforeach ?>
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

    function deleteLaporan(id) {
        swal({
            title: "Apakah anda yakin?",
            text: "Anda akan menghapus data laporan ini!",
            icon: "warning",
            buttons: ["Batal", "Ya, Hapus!"],
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                window.location.href = `/pelaporancontroller/hapuslaporanadmin/${id}`;
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
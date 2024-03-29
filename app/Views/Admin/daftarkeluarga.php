<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>

<?php

use App\Helpers\StringHelper;
use App\Helpers\DateHelper; ?>

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Data Kependudukan</h4>
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
                    <a href="/admin/families">Daftar Keluarga</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-head-row">
                            <h4 class="card-title">Data Keluarga</h4>
                            <div class="card-tools">
                                <a class="d-block ml-auto" href="/admin/addfamily">
                                    <button class="btn btn-primary btn-round ml-auto">
                                        <span class="btn-label">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                        Tambah Data
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No KK</th>
                                        <th>Nama Kepala Keluarga</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th style="width: 10%">Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No KK</th>
                                        <th>Nama Kepala Keluarga</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ($dataKeluarga as $data) : ?>
                                        <tr>
                                            <td><?= $data['no_kk'] ?></td>
                                            <td><?= $data['nama_kepala_keluarga'] ?></td>
                                            <td><?= $data['alamat'] ? StringHelper::shortenText($data['alamat']) : '-' ?></td>
                                            <td>
                                                <span class="badge <?php if ($data['status'] == 'Tetap') {
                                                                        echo 'badge-success';
                                                                    } else {
                                                                        echo 'badge-warning';
                                                                    }
                                                                    ?>">
                                                    <?= 'Penduduk ' . $data['status'] ?>
                                                </span>
                                            </td>
                                            <td><?= DateHelper::formatIndonesianShortDateTime($data['created_at']) ?></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="/admin/detailkeluarga/<?= $data['no_kk'] ?>">
                                                        <button type="button" data-toggle="tooltip" title="View" class="btn btn-link btn-primary btn-lg" data-original-title="View">
                                                            <i class="fa fa-eye"></i>
                                                        </button>
                                                    </a>
                                                    <a href="/admin/editkeluarga/<?= $data['no_kk'] ?>">
                                                        <button type="button" data-toggle="tooltip" title="Edit" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                    </a>
                                                    <a href="javascript:void(0);" onclick="deleteKeluarga(<?= $data['no_kk'] ?>)">
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

    function deleteKeluarga(id) {
        swal({
            title: "Apakah anda yakin?",
            text: "Anda akan menghapus data keluarga ini!",
            icon: "warning",
            buttons: ["Batal", "Ya, Hapus!"],
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                window.location.href = `/keluargacontroller/delete/${id}`;
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
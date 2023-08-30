<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Detail Profile Admin</h4>
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
                    <a href="/admin/profile">Detail Profile</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Detail Profile Admin</div>
                    </div>

                    <form id="exampleValidation" action="/usercontroller/editprofileadmin" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group form-show-validation row">
                                <label for="no_kk" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nomor Kartu Keluarga</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" placeholder="Pilih Nomor Kartu Keluarga" id="no_kk" name="no_kk" value="<?= $profile['no_kk'] ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="nik" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">NIK</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" value="<?= $profile['nik'] ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="nama" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="<?= $profile['nama'] ?>">
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="no_hp" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nomor HP</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan Nomor HP" value="<?= $profile['no_hp'] ?>">
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="email" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Email</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email" value="<?= $profile['email'] ?>">
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="status" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Status dalam Keluarga</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-group">
                                        <select class="form-control" placeholder="Pilih Status dalam Keluarga" id="status" name="status" required>
                                            <option value="" selected>--Pilih Status dalam Keluarga--</option>
                                            <?php foreach ($statusUsers as $status) : ?>
                                                <option value="<?= $status ?>" <?= $profile['status'] == $status ? 'selected' : '' ?>><?= $status ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="jenis_kelamin" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Jenis Kelamin</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-group">
                                        <select class="form-control" placeholder="Pilih Jenis Kelamin" id="jenis_kelamin" name="jenis_kelamin" required>
                                            <option value="" selected>--Pilih Jenis Kelamin--</option>
                                            <option value="Laki-laki" <?= $profile['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                                            <option value="Perempuan" <?= $profile['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="tempat_lahir" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Tempat Lahir</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" value="<?= $profile['tempat_lahir'] ?>">
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="tgl_lahir" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Tanggal Lahir</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= date("m/d/Y", strtotime($profile['tgl_lahir'])) ?>">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i onclick="calculateAndAddAge()" class="fas fa-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="usia" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Usia</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="usia" name="usia" placeholder="-" value="<?= $profile['usia'] ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="status_perkawinan" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Status Perkawinan</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-group">
                                        <select class="form-control" placeholder="Pilih Status Perkawinan" id="status_perkawinan" name="status_perkawinan" required>
                                            <option value="" selected>--Pilih Status Perkawinan--</option>
                                            <?php foreach ($statusPerkawinan as $status_perkawinan) : ?>
                                                <option value="<?= $status_perkawinan ?>" <?= $profile['status_perkawinan'] == $status_perkawinan ? 'selected' : '' ?>><?= $status_perkawinan ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="pendidikan" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Pendidikan</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-group">
                                        <select class="form-control" placeholder="Pilih Pendidikan" id="pendidikan" name="pendidikan" required>
                                            <option value="" selected>--Pilih Pendidikan--</option>
                                            <?php foreach ($listPendidikan as $pendidikan) : ?>
                                                <option value="<?= $pendidikan ?>" <?= $profile['pendidikan'] == $pendidikan ? 'selected' : '' ?>><?= $pendidikan ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="agama" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Agama</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-group">
                                        <select class="form-control" placeholder="Pilih Agama" id="agama" name="agama" required>
                                            <option value="" selected>--Pilih Agama--</option>
                                            <?php foreach ($listAgama as $agama) : ?>
                                                <option value="<?= $agama ?>" <?= $profile['agama'] == $agama ? 'selected' : '' ?>><?= $agama ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="pekerjaan" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Pekerjaan</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Masukkan Pekerjaan" value="<?= $profile['pekerjaan'] ?>">
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Foto</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-file input-file-image">
                                        <img class="img-upload-preview" width="150" src="<?= ($profile['foto']) ? $profilePhotoPath . $profile['foto'] : $profilePhotoPath . 'default.png' ?>" alt="preview" />
                                        <input type="file" class="form-control form-control-file" id="foto_profil" name="foto_profil" accept="image/*">
                                        <label for="foto_profil" class="btn btn-primary btn-round btn-lg"><i class="fa fa-file-image"></i> Upload Foto</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <div class="row">
                                <div class="col-md-9"></div>
                                <div class="col-md-3">
                                    <a href="/admin" class="btn btn-danger">Kembali</a>
                                    <button class="btn btn-info">Edit</button>
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
    $('#tgl_lahir').datetimepicker({
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

    // calculate age from tgl_lahir and inject to usia in DOM
    function calculateAge(dateOfBirth) {
        const dob = new Date(dateOfBirth);
        const today = new Date();
        const age = today.getFullYear() - dob.getFullYear();

        if (today.getMonth() < dob.getMonth() || (today.getMonth() === dob.getMonth() && today.getDate() < dob.getDate())) {
            return age - 1;
        }

        return age;
    }

    function calculateAndAddAge() {
        const tgl_lahirElement = document.getElementById("tgl_lahir");
        const usiaElement = document.getElementById("usia");

        if (tgl_lahirElement.value) {
            const dateOfBirth = tgl_lahirElement.value;
            const age = calculateAge(dateOfBirth);

            // Add the calculated age to the value of the 'usia' input field
            usiaElement.value = age;
        } else {
            // Clear the 'usia' input field if no date of birth is entered
            usiaElement.value = "";
        }
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
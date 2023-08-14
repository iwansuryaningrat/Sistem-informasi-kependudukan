<?php $this->extend('users/template/layout'); ?>
<?php $this->section('homepage'); ?>

<!-- header -->
<header class="container px-0">
  <div class="header-container-dashboard-form">
    <div class="mb-4">
      <a class="btn btn-main-outline-xs" href="/users/administrasi">
        <i class="fa-solid fa-arrow-left me-2"></i>Kembali
      </a>
    </div>
    <h3 class="mb-2">Riwayat Pengajuan Administrasi</h3>
  </div>
</header>
<!-- end of header -->

<!-- main -->
<main>
  <section class="container container-space pt-0">
    <form class="card-form-container card" id="adminFormEdit" action="/administrasicontroller/edit/<?= $dataAdministrasi['administrasi_id'] ?>" enctype="multipart/form-data" method="POST">
      <div class="card-header card-form-header">
        <p class="mb-0">Form Edit Pengajuan Permohonan Administrasi</p>
      </div>
      <div class="card-body card-form-body">
        <div>
          <!-- nama -->
          <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label forms-label">Nama Pemohon <span class="text-important">*</span></label></label>
            <div class="col-sm-10">
              <input type="text" id="nama" name="nama" class="form-control input-control" placeholder="Masukkan Nama" disabled value="<?= $dataAdministrasi['nama'] ?>" />
            </div>
          </div>
          <!-- kategori -->
          <div class="row mb-3">
            <label for="kategori" class="col-sm-2 col-form-label forms-label">Kategori <span class="text-important">*</span></label></label>
            <div class="col-sm-10">
              <select id="kategori" name="kategori" required class="form-select select-control">
                <option value="" disabled>Pilih Kategori</option>
                <option value="KTP" <?= ($dataAdministrasi['kategori'] == 'KTP') ? 'selected' : '' ?>>KTP</option>
                <option value="KK" <?= ($dataAdministrasi['kategori'] == 'KK') ? 'selected' : '' ?>>KK</option>
                <option value="Surat Pindah" <?= ($dataAdministrasi['kategori'] == 'Surat Pindah') ? 'selected' : '' ?>>Surat Pindah</option>
                <option value="Surat Kematian" <?= ($dataAdministrasi['kategori'] == 'Surat Kematian') ? 'selected' : '' ?>>Surat Kematian</option>
                <option value="Surat Kelahiran" <?= ($dataAdministrasi['kategori'] == 'Surat Kelahiran') ? 'selected' : '' ?>>Surat Kelahiran</option>
                <option value="Surat Keterangan" <?= ($dataAdministrasi['kategori'] == 'Surat Keterangan') ? 'selected' : '' ?>>Surat Keterangan</option>
                <option value="Surat Pengantar" <?= ($dataAdministrasi['kategori'] == 'Surat Pengantar') ? 'selected' : '' ?>>Surat Pengantar</option>
                <option value="Lainnya" <?= ($dataAdministrasi['kategori'] == 'Lainnya') ? 'selected' : '' ?>>Lainnya</option>
              </select>
            </div>
          </div>
          <!-- keperluan -->
          <div class="row mb-3">
            <label for="keperluan" class="col-sm-2 col-form-label forms-label">Keperluan <span class="text-important">*</span></label></label>
            <div class="col-sm-10">
              <input type="text" id="keperluan" name="keperluan" class="form-control input-control" placeholder="Masukkan Keperluan" required value="<?= $dataAdministrasi['keperluan'] ?>" />
            </div>
          </div>
          <!-- deskripsi -->
          <div class="row mb-3">
            <label for="deskripsi" class="col-sm-2 col-form-label forms-label">Deskripsi <span class="text-important">*</span></label></label>
            <div class="col-sm-10">
              <textarea id="deskripsi" name="deskripsi" class="form-control input-control" placeholder="Masukkan Deskripsi" required><?= $dataAdministrasi['deskripsi'] ?></textarea>
            </div>
          </div>
          <!-- no_surat -->
          <div class="row mb-3">
            <label for="no_surat" class="col-sm-2 col-form-label forms-label">Nomor Surat <span class="text-important">*</span></label></label>
            <div class="col-sm-10">
              <input type="text" id="no_surat" name="no_surat" class="form-control input-control" placeholder="Nomor Surat" disabled value="<?= ($dataAdministrasi['no_surat']) ? $dataAdministrasi['no_surat'] : '-' ?>" />
            </div>
          </div>
          <!-- catatan -->
          <div class="row mb-3">
            <label for="catatan" class="col-sm-2 col-form-label forms-label">Catatan <span class="text-important">*</span></label></label>
            <div class="col-sm-10">
              <textarea id="catatan" name="catatan" class="form-control input-control" placeholder="Masukkan Catatan" disabled><?= ($dataAdministrasi['catatan']) ? $dataAdministrasi['catatan'] : '-' ?></textarea>
            </div>
          </div>
          <!-- status -->
          <div class="row mb-3">
            <label for="status" class="col-sm-2 col-form-label forms-label">Status <span class="text-important">*</span></label></label>
            <div class="col-sm-10">
              <input type="text" id="status" name="status" class="form-control input-control" placeholder="Nomor Surat" disabled value="<?= $dataAdministrasi['administrasi_status'] ?>" />
            </div>
          </div>
          <!-- berkas -->
          <div class="row mb-3">
            <label for="berkas" class="col-sm-2 col-form-label forms-label">Berkas</label>
            <div class="col-sm-10">
              <div class="mb-2">
                <div class="d-flex flex-column flex-sm-row">
                  <div id="filePreview">
                    <div class="text-sm-center" style="margin: 12px 0 10px;">
                      <figure class="file-pdf-info">
                        <img src="/homepage/assets/img/decoration/pdf.png" alt="pdf-file-new">
                      </figure>
                      <p class="mb-0 line-clamp-max-w-320 text-sm"><?= $dataAdministrasi['berkas'] ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-2">
                <input type="file" class="form-control-image" id="berkas" name="berkas" required accept="application/pdf" required onchange="previewFile(event)" />
                <label for="berkas" class="btn btn-dark fw-semibold">Unggah Berkas</label>
              </div>
              <p class="text-sm text-basic">
                *Berkas disarankan dalam format pdf
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer card-form-footer">
        <div class="w-100 d-flex justify-content-end">
          <button type="button" class="btn btn-main-sm btn-submit px-4" id="adminFormEditButton" onclick="confirmSubmit()" <?= ($dataAdministrasi['administrasi_status'] == 'Selesai') ? 'disabled' : '' ?>>
            Perbarui Data
          </button>
        </div>
      </div>
    </form>
  </section>
</main>
<!-- end of main -->

<?= $this->endSection(); ?>

<?php $this->section('script'); ?>

<!-- script internal -->
<script>
  function previewFile(event) {
    const fileInput = event.target;
    const file = fileInput.files[0];
    const filePreview = document.getElementById("filePreview");

    if (file) {
      filePreview.innerHTML = `
                <div class="text-sm-center" style="margin: 12px 0 10px;">
                    <figure class="file-pdf-info">
                        <img src="/homepage/assets/img/decoration/pdf.png" alt="pdf-file-new">
                    </figure>
                    <p class="mb-0 line-clamp-max-w-320 text-sm">${file.name}</p>
                </div>`;
    }
  }

  function confirmSubmit() {
    Swal.fire({
      title: 'Ubah Pengajuan',
      text: 'Pengajuan tidak dapat diubah setelah dikirim kembali. Pastikan data yang Anda masukkan sudah benar dan terisi semua.',
      icon: 'question',
      showCancelButton: true,
      confirmButtonText: 'Ya, Ubah',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        $("#adminFormEdit").submit();
      }
    });
  }

  // add method validation only letters
  $.validator.addMethod("alphabetOnly", function(value, element) {
    return this.optional(element) || value == value.match(/^[A-Za-z\s']+$/);
  });
  // validate
  $(document).ready(function() {
    $("#adminFormEdit").validate({
      rules: {
        nama: {
          required: true,
          alphabetOnly: true,
        },
        kategori: {
          required: true,
        },
        keperluan: {
          required: true,
        },
        deskripsi: {
          required: true,
        },
        no_surat: {
          required: true,
        },
        catatan: {
          required: true,
        },
        status: {
          required: true,
        },
        berkas: {
          required: true,
        },
      },
      messages: {
        nama: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nama tidak boleh kosong',
          alphabetOnly: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nama hanya boleh berisi huruf',
        },
        kategori: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Kategori tidak boleh kosong',
        },
        keperluan: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Keperluan tidak boleh kosong',
        },
        deskripsi: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Deskripsi tidak boleh kosong',
        },
        no_surat: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Nomor Surat tidak boleh kosong',
        },
        catatan: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Catatan tidak boleh kosong',
        },
        status: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Status tidak boleh kosong',
        },
        berkas: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Berkas tidak boleh kosong',
        },
      },
    });
  });
</script>

<script>
  //== Class definition
  var SweetAlert2Demo = function() {

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
    SweetAlert2Demo.init();
  });
</script>

<?= $this->endSection(); ?>
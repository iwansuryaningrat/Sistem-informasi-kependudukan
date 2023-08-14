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
    <div class="card-form-container card" id="adminFormDetail">
      <div class="card-header card-form-header">
        <div class="d-flex align-items-center justify-content-between">
          <p class="mb-0 fw-semibold">
            Detail Pengajuan Permohonan Administrasi
          </p>
          <div class="text-base">
            <div class="status-badge <?php if ($dataAdministrasi['administrasi_status'] == 'Dalam Proses') {
                                        echo 'badge-onproccess';
                                      } else if ($dataAdministrasi['administrasi_status'] == 'Menunggu Konfirmasi') {
                                        echo 'badge-accepted';
                                      } else if ($dataAdministrasi['administrasi_status'] == 'Ditolak') {
                                        echo 'badge-rejected';
                                      } else if ($dataAdministrasi['administrasi_status'] == 'Selesai') {
                                        echo 'badge-done';
                                      } else echo '' ?>">
              <i class="fa-solid fa-circle"></i><?= $dataAdministrasi['administrasi_status'] ?>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body card-form-body">
        <div>
          <!-- no surat -->
          <div class="row mb-3">
            <label for="no_surat" class="col-md-2 form-label forms-label mt-md-2">No Surat</label>
            <div class="col-md-10">
              <input type="text" id="no_surat" name="no_surat" class="form-control input-control" placeholder="Masukkan No Surat" value="<?= ($dataAdministrasi['no_surat']) ? $dataAdministrasi['no_surat'] : '-' ?>" disabled />
            </div>
          </div>
          <!-- nama pemohon -->
          <div class="row mb-3">
            <label for="nama_pemohon" class="col-md-2 form-label forms-label mt-md-2">Nama Pemohon</label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="nama_pemohon" name="nama_pemohon" value="<?= $dataAdministrasi['nama']  ?>" disabled />
            </div>
          </div>
          <!-- kategori -->
          <div class="row mb-3">
            <label for="kategori" class="col-md-2 form-label forms-label mt-md-2">Kategori</label>
            <div class="col-md-10">
              <input type="text" class="form-control input-control" id="kategori" name="kategori" value="<?= $dataAdministrasi['kategori']  ?>" disabled />
            </div>
          </div>
          <!-- keperluan -->
          <div class="row mb-3">
            <label for="keperluan" class="col-md-2 form-label forms-label mt-md-2">Keperluan</label>
            <div class="col-md-10">
              <input type="text" id="keperluan" name="keperluan" class="form-control input-control" placeholder="Masukkan Keperluan" disabled value="<?= $dataAdministrasi['keperluan']  ?>" />
            </div>
          </div>
          <!-- deskripsi -->
          <div class="row mb-3">
            <label for="deskripsi" class="col-md-2 form-label forms-label mt-md-2">Deskripsi</label>
            <div class="col-md-10">
              <textarea id="deskripsi" name="deskripsi" class="form-control input-control" placeholder="Masukkan Deskripsi" disabled rows="3"><?= $dataAdministrasi['deskripsi'] ?></textarea>
            </div>
          </div>
          <!-- catatan -->
          <div class="row mb-3">
            <label for="catatan" class="col-md-2 form-label forms-label mt-md-2">Catatan</label>
            <div class="col-md-10">
              <textarea id="catatan" name="catatan" class="form-control input-control" placeholder="Masukkan Catatan" disabled rows="3"><?= ($dataAdministrasi['catatan']) ? $dataAdministrasi['catatan'] : '-' ?></textarea>
            </div>
          </div>
          <!-- tanggal pengajuan -->
          <div class="row mb-3">
            <label for="tanggal_pengajuan" class="col-md-2 form-label forms-label mt-md-2">Tanggal Pengajuan
            </label>
            <div class="col-md-10">
              <input type="text" id="tanggal_pengajuan" name="tanggal_pengajuan" class="form-control input-control" disabled value="<?= date('j M Y H:m', strtotime($dataAdministrasi['created_at'])) ?>" />
            </div>
          </div>
          <!-- tanggal penerimaan -->
          <div class="row mb-3">
            <label for="tanggal_penerimaan" class="col-md-2 form-label forms-label mt-md-2">Tanggal Penerimaan
            </label>
            <div class="col-md-10">
              <input type="text" id="tanggal_penerimaan" name="tanggal_penerimaan" class="form-control input-control" disabled value="<?= $dataAdministrasi['tgl_penerimaan'] ?>" />
            </div>
          </div>
          <!-- berkas -->
          <div class="row mb-3">
            <label for="berkas" class="col-md-2 form-label forms-label mt-md-2">Berkas</label>
            <div class="col-md-10">
              <div class="mb-2">
                <div class="d-flex flex-column flex-sm-row">
                  <div id="filePreview">
                    <div class="text-sm-center" style="margin: 12px 0 10px;">
                      <figure class="file-pdf-info">
                        <img src="/homepage/assets/img/decoration/pdf.png" alt="PDF File">
                      </figure>
                      <p class="mb-0 line-clamp-max-w-320 text-sm"><?= $dataAdministrasi['berkas'] ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <?php if ($dataAdministrasi['administrasi_status'] == 'Selesai') : ?>
                <div class="mb-2">
                  <a href="/administrasicontroller/download/<?= $dataAdministrasi['administrasi_id'] ?>" class="btn btn-dark fw-semibold">Unduh Berkas</a>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <!-- Hapus -->
      <div class="card-footer card-form-footer">
        <div class="w-100 d-flex justify-content-end">
          <button role="presentation" class="btn btn-logout-sm btn-submit px-4" onclick="deleteAdministration()">
            Hapus Administrasi
          </button>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- end of main -->

<?= $this->endSection(); ?>

<?php $this->section('script'); ?>

<!-- script internal -->
<script>
  const deleteAdministration = () => {
    Swal.fire({
      title: 'Apakah anda yakin?',
      text: "Anda akan menghapus permohonan Anda!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#6a6a6a',
      confirmButtonText: 'Ya, Hapus!',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        setTimeout(function() {
          window.location.href = "/administrasicontroller/hapus/<?= $dataAdministrasi['administrasi_id'] ?>";
        }, 3000);
        Swal.fire(
          'Berhasil!',
          'Permohonan administrasi Anda telah dihapus.',
          'success'
        ).then(function() {
          window.location.href = "/administrasicontroller/hapus/<?= $dataAdministrasi['administrasi_id'] ?>";
        });
      }
    });
  }
</script>

<script>
</script>

<?= $this->endSection(); ?>
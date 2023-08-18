<?php $this->extend('users/template/layout'); ?>
<?php $this->section('homepage'); ?>
<?php

use App\Helpers\DateHelper;
?>
<!-- header -->
<header class="container">
  <div class="header-container-mini">
    <h1 class="mb-3">Pengumuman Terkini</h1>
    <p class="text-basic text-center mb-0 max-w-80">
      Di halaman ini, Anda akan menemukan berita terbaru dan pengumuman penting seputar komunitas kita. Kami berkomitmen untuk memberikan informasi yang relevan dan bermanfaat bagi semua warga.
    </p>
  </div>
</header>
<!-- end of header -->


<!-- main -->
<main>
  <section class="container container-space-top">
    <div class="news-container">
      <?php if (empty($pengumuman)) : ?>
        <div class="col-span-full text-center">
          <div class="d-flex justify-content-center">
            <div class="card-empty mt-0 mb-5">
              <img src="/homepage/assets/img/decoration/out-of-stock.png" alt="empty pengumuman" class="img-empty-state mx-auto mb-1">
              <p class="text-center mb-1 text-basic">
                Maaf, tidak ada pengumuman yang tersedia saat ini.
              </p>
              <a class="btn btn-secondaries shadow" href="<?= $isLoggedin ? '/users' : '/home'; ?>">
                Kembali ke Beranda
              </a>
            </div>
          </div>
        </div>
      <?php else : ?>
        <?php foreach ($pengumuman as $data) : ?>
          <a href="/users/detailpengumuman/<?= $data['pengumuman_id'] ?>" class="news-card">
            <figure class="news-image__wrap" style="margin-bottom: 14px;">
              <img src="/upload/photos/pengumuman/<?= $data['thumbnail'] ?>" alt="Pengumuman <?= $data['judul_pengumuman'] ?>" class="news-image__photo" />
            </figure>
            <p class="news-title-card mb-2"><?= $data['judul_pengumuman'] ?></p>
            <p class="text-basic news-desc mb-2"><?= $data['deskripsi'] ?></p>
            <div class="d-flex align-items-center">
              <p class="mb-0">
                <span class="me-2 text-gray"><i class="fa-solid fa-circle-user me-1 fill-gray"></i><?= $data['nama'] ?></span>
                <span class="me-2 text-gray"><i class="fa-solid fa-clock me-1 fill-gray"></i><?= DateHelper::formatIndonesianDate($data['tanggal']) ?></span>
                <span class="me-2 text-gray"><i class="fa-solid fa-location-dot me-1 fill-gray"></i><?= $data['tempat'] ?></span>
              </p>
            </div>
          </a>
        <?php endforeach ?>
      <?php endif; ?>
    </div>

  </section>
</main>
<!-- end of main -->

<?= $this->endSection(); ?>
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
      <?php foreach ($pengumuman as $data) : ?>
        <a href="/users/detailpengumuman/<?= $data['pengumuman_id'] ?>" class="news-card">
          <figure class="news-image__wrap" style="margin-bottom: 14px;">
            <img src="/upload/photos/pengumuman/<?= $data['thumbnail'] ?>" alt="news-1" class="news-image__photo" />
          </figure>
          <p class="news-title-card mb-2"><?= $data['judul_pengumuman'] ?></p>
          <div class="d-flex align-items-center">
            <p class="mb-0">
              <span class="me-2 text-gray"><i class="fa-solid fa-circle-user me-1 fill-gray"></i><?= $data['nama'] ?></span>
              <span class="me-2 text-gray"><i class="fa-solid fa-clock me-1 fill-gray"></i><?= DateHelper::formatIndonesianDate($data['tanggal']) ?></span>
              <span class="me-2 text-gray"><i class="fa-solid fa-location-dot me-1 fill-gray"></i><?= $data['tempat'] ?></span>
            </p>
          </div>
        </a>
      <?php endforeach ?>
    </div>
  </section>
</main>
<!-- end of main -->

<?= $this->endSection(); ?>
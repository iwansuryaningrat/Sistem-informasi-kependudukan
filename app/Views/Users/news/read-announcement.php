<!-- Barita 1 : Portal Berita | Warga Site -->
<?php $this->extend('users/template/layout'); ?>
<?php $this->section('homepage'); ?>
<?php

use App\Helpers\DateHelper; ?>

<!-- header -->
<header class="container ps-0">
  <div class="header-container-back">
    <a class="btn btn-main-outline-xs" href="<?= ($isLoggedin) ?  '/users/pengumuman' :  '/home/pengumuman'; ?>">
      <i class="fa-solid fa-arrow-left me-2"></i>Kembali
    </a>
  </div>
</header>
<!-- end of header -->
<!-- main -->
<main>
  <section class="container container-space pt-2">
    <div class="row">
      <!-- left -->
      <div class="col-12 col-lg-8">
        <div class="pe-0 pe-lg-2">
          <figure class="news-image-container">
            <img src="<?= '/' . $path . $pengumuman['thumbnail'] ?>" alt="Pengumuman <?= $pengumuman['judul_pengumuman'] ?>" class="news-image-cover" />
          </figure>
          <div class="">
            <h4 class="mb-3"><?= $pengumuman['judul_pengumuman'] ?></h4>
            <p class="mb-4 fst-italic text-basic">
              Editor: <?= $pengumuman['nama'] ?> . Rilis <?= DateHelper::formatCreatedAt($pengumuman['created_at']) ?>.
            </p>
          </div>
          <div class="">
            <p class="">
              <?= $pengumuman['deskripsi'] ?>
            </p>
            <p class="mb-2 fw-semibold">Rincian Kegiatan</p>
            <table>
              <tr>
                <td class="pb-1">Tanggal Kegiatan</td>
                <td class="pb-1 px-2">:</td>
                <td class="pb-1"><?= DateHelper::formatIndonesianDate($pengumuman['tanggal']) ?></td>
              </tr>
              <tr>
                <td class="pb-1">Waktu Kegiatan</td>
                <td class="pb-1 px-2">:</td>
                <td class="pb-1">Pukul <?= $pengumuman['jam'] ?> WIB</td>
              </tr>
              <tr>
                <td class="pb-1">Tempat Kegiatan</td>
                <td class="pb-1 px-2">:</td>
                <td class="pb-1"><?= $pengumuman['tempat'] ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <!-- right -->
      <div class="col-12 col-lg-4">
        <hr class="divide-related-news" />
        <div class="ps-0 ps-lg-2">
          <div class="mb-4">
            <h5 class="text-center text-lg-start">Pengumuman Terbaru</h5>
          </div>
          <div class="related-news-container">
            <?php foreach ($pengumumanTerbaru as $pengumuman) : ?>
              <a href="<?= $isLoggedin ? '/users/detailpengumuman/' . $pengumuman['pengumuman_id'] : '/home/detailpengumuman/' . $pengumuman['pengumuman_id'] ?>" class="related-news-card">
                <figure class="news-image__wrap">
                  <img src="<?= '/' . $path . $pengumuman['thumbnail'] ?>" alt="Pengumuman <?= $pengumuman['judul_pengumuman'] ?>" class="news-image__photo" />
                </figure>
                <p class="news-title-card mb-2"><?= $pengumuman['judul_pengumuman'] ?></p>
                <div class="d-flex align-items-center">
                  <p class="mb-0">
                    <span class="me-2 text-gray"><i class="fa-solid fa-circle-user me-1 fill-gray"></i><?= $pengumuman['nama'] ?></span>
                    <span class="me-2 text-gray"><i class="fa-solid fa-clock me-1 fill-gray"></i><?= DateHelper::formatIndonesianDate($pengumuman['tanggal']) ?></span>
                    <span class="me-2 text-gray"><i class="fa-solid fa-location-dot me-1 fill-gray"></i><?= $pengumuman['tempat'] ?></span>
                  </p>
                </div>
              </a>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- end of main -->

<?= $this->endSection(); ?>

<?php $this->section('script'); ?>

<script>
</script>

<?= $this->endSection(); ?>
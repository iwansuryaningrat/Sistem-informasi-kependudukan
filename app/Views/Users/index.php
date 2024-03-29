<?php

use App\Helpers\DateHelper;

$this->extend('users/template/layout'); ?>
<?php $this->section('homepage'); ?>

<!-- header -->
<header class="container position-relative">
  <div class="row header-container">
    <!-- left -->
    <div class="col-12 col-md-6">
      <div class="d-flex">
        <p class="head-badge">Solusi Utama bagi Warga</p>
      </div>
      <h1 class="mb-3 me-4">Kami Peduli dalam Membantu Menjaga Bumi🍀</h1>
      <p class="text-basic mb-4 me-4">
        Warga adalah platform inovatif yang didedikasikan untuk mendukung keberlanjutan lingkungan dan kesejahteraan warga. Kami berkomitmen untuk menghubungkan masyarakat dengan sumber daya dan layanan yang diperlukan untuk menjaga bumi kita tetap hijau dan lestari.
      </p>
      <a class="btn btn-main shadow" href="<?= ($isLoggedin) ?  '/users/contact' :  '/home/contact'; ?>">
        Hubungi Kami
      </a>
    </div>
    <!-- right -->
    <div class="col-12 col-md-6"></div>
  </div>
  <img src="/homepage/assets/svg/blue-shape.svg" alt="Blue Shape" class="header-blue-shape" /><img src="/homepage/assets/svg/green-shape.svg" alt="Green Shape" class="header-green-shape" />
  <figure class="jumbotron-image-wrapper">
    <img src="/homepage/assets/img/jumbotron-image.png" alt="Jumbotron Farmer" class="jumbotron-image" />
  </figure>
</header>

<!-- end of header -->

<!-- main -->
<main>

  <!-- features -->
  <section class="container container-space">
    <!-- header -->
    <div class="d-flex">
      <p class="head-badge">Proyek</p>
    </div>
    <div class="row align-items-center justify-content-between mb-5">
      <div class="d-flex flex-column align-items-start col-12 col-md-4">
        <h2 class="mb-3 mb-md-0">
          Transformasi Dalam Pelayanan Publik
        </h2>
      </div>
      <div class="col-12 col-md-6">
        <p class="text-basic mb-0">
          Kami mempersembahkan sejumlah proyek inovatif untuk memajukan kualitas hidup dan pelayanan publik di komunitas kita. Temukan lebih banyak tentang proyek-proyek yang kami rancang untuk meningkatkan kesejahteraan warga.
        </p>
      </div>
    </div>

    <!-- content -->
    <div class="project-container">
      <div class="project-card">
        <div class="d-flex mb-3">
          <div class="project-badge">
            <i class="fa-solid fa-rocket project-badge__icon"></i>
          </div>
        </div>
        <h5>Administrasi Efisien</h5>
        <p class="text-basic mb-4">
          Kelola administrasi masyarakat dengan lebih efisien melalui platform kami. Sederhanakan proses pengelolaan data dan dokumentasi.
        </p>
        <a class="btn btn-main-outline shadow w-full-sm" id="administration" href="/users/administrasi">
          Kunjungi
        </a>
      </div>
      <div class="project-card">
        <div class="d-flex mb-3">
          <div class="project-badge">
            <i class="fa-solid fa-bullhorn project-badge__icon"></i>
          </div>
        </div>
        <h5>Pelaporan Terintegrasi</h5>
        <p class="text-basic mb-4">
          Laporkan masalah dan permasalahan dengan mudah melalui sistem pelaporan kami. Segera tindak lanjuti dan pantau perkembangannya.
        </p>
        <a class="btn btn-main-outline shadow w-full-sm" id="report" href="/users/pelaporan">
          Kunjungi
        </a>
      </div>
      <div class="project-card">
        <div class="d-flex mb-3">
          <div class="project-badge">
            <i class="fa-solid fa-house-chimney-window project-badge__icon"></i>
          </div>
        </div>
        <h5>Keluarga Sejahtera</h5>
        <p class="text-basic mb-4">
          Fokus pada kesejahteraan keluarga dan individu dengan layanan dan program yang mendukung perkembangan dan kebahagiaan.
        </p>
        <a class="btn btn-main-outline shadow w-full-sm" id="family" href="/users/keluarga">
          Kunjungi
        </a>
      </div>
    </div>
  </section>


  <!-- penjelasan umum -->
  <section class="w-100 bg-secondary-500__05">
    <div class="container container-space">
      <div class="row flex-column-reverse flex-md-row">
        <div class="col-12 col-md-5">
          <!-- header -->
          <div class="d-flex align-items-sm-start flex-column mt-3 mb-1 mb-sm-3">
            <div class="d-flex">
              <p class="head-badge-secondaries">Warga dan Keluarga</p>
            </div>
            <h2 class="mb-3">
              Mempererat Hubungan dan Kesejahteraan Bersama
            </h2>
            <p class="text-basic mb-4">
              Warga adalah platform yang dirancang untuk memajukan interaksi dan kesejahteraan di lingkungan kita. Kami berkomitmen untuk menyediakan solusi yang menghubungkan warga dengan layanan, informasi, dan peluang untuk menciptakan komunitas yang lebih kuat dan harmonis.
            </p>
            <a class="btn btn-secondaries shadow" href="/users/keluarga">
              Pelajari Lebih Lanjut
            </a>
          </div>
        </div>
        <!-- content -->
        <div class="col-12 col-md-7">
          <div class="general-image-container">
            <figure class="general-image-wrapper">
              <img src="/homepage/assets/img/image-17.jpg" alt="General Village" class="general-image" />
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- galery -->
  <section class="container container-space">
    <!-- header -->
    <div class="d-flex align-items-center flex-column mb-4">
      <p class="head-badge">GALERI</p>
      <h2 class="text-center">
        Kegiatan dan Peristiwa Terbaru Kami
      </h2>
    </div>

    <!-- content -->
    <div class="<?= (empty($newestGaleri)) ? 'w-100' : 'gallery-container' ?> mb-5">
      <?php if (empty($newestGaleri)) : ?>
        <div class="col-span-full text-center d-flex justify-content-center">
          <div class="card-empty">
            <img src="/homepage/assets/img/decoration/empty-folder.png" alt="empty pengumuman" class="img-empty-state mx-auto mb-1">
            <p class="text-center mb-1 text-basic">
              Maaf, tidak ada galeri yang ditemukan.
            </p>
            <a class="btn btn-secondaries shadow" href="<?= ($isLoggedin) ?  '/users/contact' :  '/home/contact'; ?>">
              Laporkan Kesalahan
            </a>
          </div>
        </div>
        <?php else :
        $i = 1;
        foreach ($newestGaleri as $galeri) : ?>
          <div class="gallery-warp">
            <figure class="gallery-item__warp">
              <img src="<?= $photoPath . $galeri['thumbnail'] ?>" alt="Galeri <?= $galeri['judul'] ?>" class="gallery-item__photo" />
              <div class="gallery-item__desc">
                <div class="scroll">
                  <p class="mb-3 text-sm"><?= $galeri['judul'] ?></p>
                  <p class="text-xs mb-2 fst-italic text-gray-200">
                    <?= $galeri['nama'] ?> - <?= date('j M Y H:m', strtotime($galeri['created_at'])) ?>
                  </p>
                </div>
              </div>
            </figure>
          </div>
        <?php $i++;
        endforeach;
        $emptyContainersNeeded = 6 - count($newestGaleri);
        for ($j = 0; $j < $emptyContainersNeeded; $j++) :
        ?>
          <div class="gallery-warp">
            <figure class="gallery-item__warp empty">
              <div class="gallery-item__photo empty d-flex justify-content-center align-items-center">
                <?= ($isLoggedin) ?  '<a href="/users/galeri"><i class="fa-solid fa-plus-circle text-5xl" style="color: #bdbdbd"></i></a>' :  ''; ?>
              </div>
            </figure>
          </div>
      <?php
        endfor;
      endif; ?>
    </div>
    <?php if (!empty($newestGaleri)) : ?>
      <div class="d-flex justify-content-center pt-1 pt-sm-3">
        <a href="<?= ($isLoggedin) ?  '/users/galeri' :  '/home/galeri'; ?>" class="btn btn-main shadow" role="button">Lebih Banyak</a>
      </div>
    <?php endif; ?>
  </section>

  <!-- pengumuman -->
  <section class="w-100 bg-main-500__05">
    <div class="container container-space">
      <!-- header -->
      <div class="d-flex align-items-center flex-column mb-4">
        <p class="head-badge">pengumuman</p>
        <h2 class="text-center">
          Pengumuman dan Berita Terbaru Kami
        </h2>
      </div>

      <!-- content -->
      <div class="news-container mb-5">
        <?php if (empty($newestPengumuman)) : ?>
          <div class="col-span-full text-center">
            <div class="d-flex justify-content-center">
              <div class="card-empty">
                <img src="/homepage/assets/img/decoration/empty-folder.png" alt="empty pengumuman" class="img-empty-state mx-auto mb-1">
                <p class="text-center mb-1 text-basic">
                  Maaf, tidak ada pengumuman yang ditemukan.
                </p>
                <a class="btn btn-secondaries shadow" href="<?= ($isLoggedin) ?  '/users/contact' :  '/home/contact'; ?>">
                  Laporkan Kesalahan
                </a>
              </div>
            </div>
          </div>
          <?php else :
          $i = 1;
          foreach ($newestPengumuman as $pengumuman) : ?>
            <div class="news-card">
              <figure class="news-image__wrap">
                <img src="<?= $pengumumanPath . $pengumuman['thumbnail'] ?>" alt="Pengumuman -<?= $pengumuman['judul_pengumuman'] ?>" class="news-image__photo" />
              </figure>
              <p class="news-title mb-2"><?= $pengumuman['judul_pengumuman'] ?></p>
              <div class="d-flex align-items-center mb-3">
                <p class="mb-0">
                  <span class="me-2 text-gray"><i class="fa-solid fa-circle-user me-1 fill-gray"></i><?= $pengumuman['nama'] ?></span>
                  <span class="me-2 text-gray"><i class="fa-solid fa-clock me-1 fill-gray"></i><?= DateHelper::formatIndonesianDate($pengumuman['tanggal']) ?></span>
                  <span class="me-2 text-gray"><i class="fa-solid fa-location-dot me-1 fill-gray"></i><?= $pengumuman['tempat'] ?></span>
                </p>
              </div>
              <a href="<?= ($isLoggedin) ? '/users/detailpengumuman/' . $pengumuman['pengumuman_id'] : '/home/detailpengumuman/' . $pengumuman['pengumuman_id'] ?>" class="btn btn-main-outline shadow w-full-sm mb-2" role="button">
                Kunjungi Detil Pengumuman
              </a>
            </div>
        <?php $i++;
          endforeach;
        endif; ?>
      </div>
      <?php if (!empty($newestPengumuman)) : ?>
        <div class="d-flex justify-content-center pt-1 pt-sm-3">
          <a href="<?= ($isLoggedin) ?  '/users/pengumuman' :  '/home/pengumuman'; ?>" class="btn btn-main shadow" role="button">Lebih Banyak</a>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <!-- contact cta -->
  <section class="container container-space">
    <div class="card-cta-main">
      <div class="row flex-column-reverse flex-md-row">
        <div class="col-12 col-md-5 left-cta">
          <h3 class="mb-3">
            Terhubung dengan kami
          </h3>
          <p class="mb-4">
            Jika Anda memiliki pertanyaan, saran, atau ingin berhubungan dengan kami, silakan hubungi kami melalui formulir di bawah ini. Tim kami dengan senang hati akan meresponsnya segera.
          </p>
          <a class="btn btn-white shadow" role="button" href="<?= ($isLoggedin) ?  '/users/contact' :  '/home/contact'; ?>">
            Kritik & Saran
          </a>
        </div>
        <div class="col-12 col-md-7">
          <div class="position-relative">
            <figure class="cta-image-wrapper">
              <img src="/homepage/assets/img/phone-2.png" alt="CTA Contact" class="cta-image" />
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
<!-- end of main -->

<?= $this->endSection(); ?>
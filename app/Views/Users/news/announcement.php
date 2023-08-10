<?php $this->extend('users/template/layout'); ?>
<?php $this->section('homepage'); ?>

<!-- header -->
<header class="container">
  <div class="header-container-mini">
    <h1 class="mb-3">Berita Terkini</h1>
    <p class="text-basic text-center mb-0 max-w-80">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat
      iusto architecto sint ipsam, labore quo dolore quis voluptate id
      alias, impedit quia! Illum, consequatur quae quo at dolore
      repellendus ipsa.
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
          <figure class="news-image__wrap">
            <img src="/upload/photos/pengumuman/<?= $data['thumbnail'] ?>" alt="news-1" class="news-image__photo" />
          </figure>
          <p class="news-title-card mb-2"><?= $data['judul_pengumuman'] ?></p>
          <p class="text-basic news-desc mb-2"><?= $data['deskripsi'] ?></p>
          <div class="d-flex align-items-center">
            <p class="d-flex align-items-center me-3 mb-0">
              <i class="fa-solid fa-circle-user me-1 d-block fill-gray"></i><span class="text-sm d-block text-gray"><?= $data['nama'] ?></span>
            </p>
            <p class="d-flex align-items-center mb-0">
              <i class="fa-solid fa-clock me-1 d-block fill-gray"></i><span class="text-sm d-block text-gray"><?= date('j M Y H:m', strtotime($data['created_at'])) ?></span>
            </p>
          </div>
        </a>
      <?php endforeach ?>
    </div>
  </section>
</main>
<!-- end of main -->

<?= $this->endSection(); ?>
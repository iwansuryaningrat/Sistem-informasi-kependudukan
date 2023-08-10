<?php $this->extend('users/template/layout'); ?>
<?php $this->section('homepage'); ?>

<!-- header -->
<header class="container position-relative">
  <div class="row header-container">
    <!-- left -->
    <div class="col-12 col-md-6">
      <div class="d-flex">
        <p class="head-badge">Warga prioritas #1</p>
      </div>
      <h1 class="mb-3 me-4">We love helping you to safe the earth🍀</h1>
      <p class="text-basic mb-4 me-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia
        suscipit mollitia quas eveniet sit, vitae repellendus deleniti,
        placeat impedit doloribus magnam.
      </p>
      <button class="btn btn-main shadow" type="button">
        Get in touch
      </button>
    </div>
    <!-- right -->
    <div class="col-12 col-md-6"></div>
  </div>
  <img src="/homepage/assets/svg/blue-shape.svg" alt="blue-shape" class="header-blue-shape" /><img src="/homepage/assets/svg/green-shape.svg" alt="green-shape" class="header-green-shape" />
  <figure class="jumbotron-image-wrapper">
    <img src="/homepage/assets/img/jumbotron-image.png" alt="jumbotron-farmer" class="jumbotron-image" />
  </figure>
</header>
<!-- end of header -->

<!-- main -->
<main>

  <!-- features -->
  <section class="container container-space">
    <!-- header -->
    <div class="d-flex">
      <p class="head-badge">proyek</p>
    </div>
    <div class="row align-items-center justify-content-between mb-5">
      <div class="d-flex flex-column align-items-start col-12 col-md-4">
        <h2 class="mb-3 mb-md-0">
          Quibusdam cum cupiditate maxime eum accusamus.
        </h2>
      </div>
      <div class="col-12 col-md-6">
        <p class="text-basic mb-0">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et
          iste facere reprehenderit eum illum quisquam temporibus culpa
          minima ad deserunt.
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
        <h5>Administrasi</h5>
        <p class="text-basic mb-4">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi
          dolorem quasi quos repellendus exercitationem.
        </p>
        <button class="btn btn-main-outline shadow w-full-sm" type="button" id="administration" onclick="location.href='/users/administrasi'">
          Lebih Banyak
        </button>
      </div>
      <div class="project-card">
        <div class="d-flex mb-3">
          <div class="project-badge">
            <i class="fa-solid fa-bullhorn project-badge__icon"></i>
          </div>
        </div>
        <h5>Pelaporan amet officia ducimus temporibus</h5>
        <p class="text-basic mb-4">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi
          dolorem quasi quos repellendus exercitationem nobis.
        </p>
        <button class="btn btn-main-outline shadow w-full-sm" type="button" id="report" onclick="location.href='/users/pelaporan'">
          Lebih Banyak
        </button>
      </div>
      <div class="project-card">
        <div class="d-flex mb-3">
          <div class="project-badge">
            <i class="fa-solid fa-house-chimney-window project-badge__icon"></i>
          </div>
        </div>
        <h5>Keluarga perspiciatis voluptate</h5>
        <p class="text-basic mb-4">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi
          dolorem quasi quos repellendus exercitationem nobis.
        </p>
        <button class="btn btn-main-outline shadow w-full-sm" type="button" id="family" onclick="location.href='/users/keluarga'">
          Lebih Banyak
        </button>
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
              <p class="head-badge-secondaries">warga</p>
            </div>
            <h2 class="mb-3">
              Consequuntur autem soluta sint expedita sint nulla veniam
              enim optio.
            </h2>
            <p class="text-basic mb-4">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Distinctio commodi, optio dolorum saepe, atque omnis
              mollitia ratione accusamus, repudiandae repellendus
              perferendis ex temporibus voluptatum enim alias laudantium
              illum quo doloribus!
            </p>
            <button class="btn btn-secondaries shadow" type="button" onclick="location.href='/users/keluarga'">
              Lebih Banyak
            </button>
          </div>

          <!-- content -->
        </div>
        <div class="col-12 col-md-7">
          <div class="general-image-container">
            <figure class="general-image-wrapper">
              <img src="/homepage/assets/img/image-17.jpg" alt="general-village-image" class="general-image" />
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
        Lorem ipsum dolor sit amet consectetur adipisicing elit
      </h2>
    </div>

    <!-- content -->
    <div class="gallery-container mb-5">
      <?php $i = 1;
      foreach ($newestGaleri as $galeri) : ?>
        <div class="gallery-warp">
          <figure class="gallery-item__warp">
            <img src="/upload/photos/galeri/<?= $galeri['thumbnail'] ?>" alt="documentation-<?= $i ?>" class="gallery-item__photo" />
            <div class="gallery-item__desc">
              <div class="scroll">
                <p class="mb-2 text-sm"><?= $galeri['judul'] ?></p>
                <p class="text-xs mb-2 fst-italic text-gray-200">
                  <?= $galeri['nama'] ?> - <?= $galeri['created_at'] ?>
                </p>
              </div>
            </div>
          </figure>
        </div>
      <?php $i++;
      endforeach; ?>
    </div>
    <div class="d-flex justify-content-center pt-1 pt-sm-3">
      <a href="<?= ($isLoggedin) ?  '/users/galeri' :  '/home/galeri'; ?>" class="btn btn-main shadow" role="button">Lebih Banyak</a>
    </div>
  </section>

  <!-- pengumuman -->
  <section class="w-100 bg-main-500__05">
    <div class="container container-space">

      <!-- header -->
      <div class="d-flex align-items-center flex-column mb-4">
        <p class="head-badge">pengumuman</p>
        <h2 class="text-center">
          Itaque nobis explicabo voluptas cum nulla.
        </h2>
      </div>

      <!-- content -->
      <div class="news-container mb-5">
        <?php $i = 1;
        foreach ($newestPengumuman as $pengumuman) : ?>
          <div class="news-card">
            <figure class="news-image__wrap">
              <img src="/upload/photos/pengumuman/<?= $pengumuman['thumbnail'] ?>" alt="news-<?= $i ?>hpp" class="news-image__photo" />
            </figure>
            <p class="news-title mb-2"><?= $pengumuman['judul_pengumuman'] ?></p>
            <p class="text-basic news-desc mb-2"><?= $pengumuman['deskripsi'] ?></p>
            <div class="d-flex align-items-center mb-3">
              <p class="d-flex align-items-center me-3 mb-0">
                <i class="fa-solid fa-circle-user me-1 d-block fill-gray"></i><span class="text-sm d-block text-gray"><?= $pengumuman['nama'] ?></span>
              </p>
              <p class="d-flex align-items-center mb-0">
                <i class="fa-solid fa-clock me-1 d-block fill-gray"></i><span class="text-sm d-block text-gray"><?= $pengumuman['created_at'] ?></span>
              </p>
            </div>
            <a href="<?= ($isLoggedin) ? '/users/detailpengumuman/' . $pengumuman['pengumuman_id'] : '/home/detailpengumuman/' . $pengumuman['pengumuman_id'] ?>" class="btn btn-main-outline shadow w-full-sm mb-2" role="button">
              Kunjungi Detail Pengumuman
            </a>
          </div>
        <?php $i++;
        endforeach; ?>
      </div>
      <div class="d-flex justify-content-center pt-1 pt-sm-3">
        <a href="<?= ($isLoggedin) ?  '/users/pengumuman' :  '/home/pengumuman'; ?>" class="btn btn-main shadow" role="button">Lebih Banyak</a>
      </div>
    </div>
  </section>

  <!-- contact cta -->
  <section class="container container-space">
    <div class="card-cta-main">
      <div class="row flex-column-reverse flex-md-row">
        <div class="col-12 col-md-5 left-cta">
          <h3 class="mb-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
          </h3>
          <p class="mb-4">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Ducimus, nobis pariatur tempore labore deleniti beatae
            architecto enim iusto.
          </p>
          <a class="btn btn-white shadow" role="button" href="<?= ($isLoggedin) ?  '/users/contact' :  '/home/contact'; ?>">
            Kritik & Saran
          </a>
        </div>
        <div class="col-12 col-md-7">
          <div class="position-relative">
            <figure class="cta-image-wrapper">
              <img src="/homepage/assets/img/phone-2.png" alt="cta-contat" class="cta-image" />
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- end of main -->

<?= $this->endSection(); ?>
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
            <i class="fa-solid fa-house-signal project-badge__icon"></i>
          </div>
        </div>
        <h5>Pelaporan</h5>
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
            <i class="fa-solid fa-seedling project-badge__icon"></i>
          </div>
        </div>
        <h5>Keluarga</h5>
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
            <button class="btn btn-secondaries shadow" type="button">
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
    <div class="galery-container mb-5">
      <div class="galery-warp">
        <figure class="galery-item__warp">
          <img src="/homepage/assets/img/image-1.jpg" alt="documentation-1" class="galery-item__photo" />
          <div class="galery-item__desc">
            <div class="scroll">
              <p class="mb-2 text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quam pariatur officiis consequatur et odio quas laborum.
              </p>
              <p class="text-xs mb-2 fst-italic text-gray-200">
                Iwan Suryaningrat - 13 Januari 2023
              </p>
            </div>
          </div>
        </figure>
      </div>
      <div class="galery-warp">
        <figure class="galery-item__warp">
          <img src="/homepage/assets/img/image-2.jpg" alt="documentation-2" class="galery-item__photo" />
          <div class="galery-item__desc">
            <div class="scroll">
              <p class="mb-2 text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quam pariatur officiis consequatur et odio quas laborum.
                Laborum quaerat laboriosam aspernatur quo voluptatibus
                aut! Inventore corrupti architecto provident tempore ad
                velit!
              </p>
              <p class="text-xs mb-2 fst-italic text-gray-200">
                Iwan Suryaningrat - 13 Januari 2023
              </p>
            </div>
          </div>
        </figure>
      </div>
      <div class="galery-warp">
        <figure class="galery-item__warp">
          <img src="/homepage/assets/img/image-3.jpg" alt="documentation-3" class="galery-item__photo" />
          <div class="galery-item__desc">
            <div class="scroll">
              <p class="mb-2 text-sm">
                Consequatur et odio quas laborum. Laborum quaerat
                laboriosam aspernatur quo voluptatibus aut! Inventore
                corrupti architecto provident tempore ad velit!
              </p>
              <p class="text-xs mb-2 fst-italic text-gray-200">
                Iwan Suryaningrat - 13 Januari 2023
              </p>
            </div>
          </div>
        </figure>
      </div>
      <div class="galery-warp">
        <figure class="galery-item__warp">
          <img src="/homepage/assets/img/image-4.jpg" alt="documentation-4" class="galery-item__photo" />
          <div class="galery-item__desc">
            <div class="scroll">
              <p class="mb-2 text-sm">
                Laboriosam aspernatur quo voluptatibus aut! Inventore
                corrupti architecto provident tempore ad velit!
              </p>
              <p class="text-xs mb-2 fst-italic text-gray-200">
                Iwan Suryaningrat - 13 Januari 2023
              </p>
            </div>
          </div>
        </figure>
      </div>
      <div class="galery-warp">
        <figure class="galery-item__warp">
          <img src="/homepage/assets/img/image-5.jpg" alt="documentation-5" class="galery-item__photo" />
          <div class="galery-item__desc">
            <div class="scroll">
              <p class="mb-2 text-sm">
                Pariatur officiis consequatur et odio quas laborum.
                Laborum quaerat laboriosam aspernatur quo voluptatibus
                aut! Inventore corrupti architecto provident tempore ad
                velit!
              </p>
              <p class="text-xs mb-2 fst-italic text-gray-200">
                Suryaningrat - 13 Januari 2023
              </p>
            </div>
          </div>
        </figure>
      </div>
      <div class="galery-warp">
        <figure class="galery-item__warp">
          <img src="/homepage/assets/img/image-6.jpg" alt="documentation-6" class="galery-item__photo" />
          <div class="galery-item__desc">
            <div class="scroll">
              <p class="mb-2 text-sm">
                Quaerat laboriosam aspernatur quo voluptatibus aut!
                Inventore corrupti architecto provident tempore ad velit!
              </p>
              <p class="text-xs mb-2 fst-italic text-gray-200">
                Iwan - 13 Januari 2023
              </p>
            </div>
          </div>
        </figure>
      </div>
    </div>
    <div class="d-flex justify-content-center pt-1 pt-sm-3">
      <a href="/users/galeri" class="btn btn-main shadow" role="button">Lebih Banyak</a>
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
        <div class="news-card">
          <figure class="news-image__wrap">
            <img src="/homepage/assets/img/image-7.jpg" alt="news-1" class="news-image__photo" />
          </figure>
          <p class="news-title mb-2">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Deserunt nostrum alias fugit. Vel nulla quaerat, nisi, facere
            minima impedit culpa iure cumque ratione dolorum debitis
            dolores, modi quia quis iste?
          </p>
          <p class="text-basic news-desc mb-2">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Deserunt nostrum alias fugit. Vel nulla quaerat, nisi, facere
            minima impedit culpa iure cumque ratione dolorum debitis
            dolores, modi quia quis iste?
          </p>
          <div class="d-flex align-items-center mb-3">
            <p class="d-flex align-items-center me-3 mb-0">
              <i class="fa-solid fa-circle-user me-1 d-block fill-gray"></i><span class="text-sm d-block text-gray">Abimanyu</span>
            </p>
            <p class="d-flex align-items-center mb-0">
              <i class="fa-solid fa-clock me-1 d-block fill-gray"></i><span class="text-sm d-block text-gray">50 menit</span>
            </p>
          </div>
          <a href="/homepage/read-news.html" class="btn btn-main-outline shadow w-full-sm" role="button">
            Kunjungi Berita
          </a>
        </div>
        <div class="news-card">
          <figure class="news-image__wrap">
            <img src="/homepage/assets/img/image-8.jpg" alt="news-1" class="news-image__photo" />
          </figure>
          <p class="news-title mb-2">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est
            error aut enim placeat eius a ratione, asperiores fugit
            maiores laborum atque. Doloremque facilis magni, perspiciatis
            maiores ullam nam labore dolores?
          </p>
          <p class="text-basic news-desc mb-2">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Deserunt nostrum alias fugit. Vel nulla quaerat, nisi, facere
            minima impedit culpa iure cumque ratione dolorum debitis
            dolores, modi quia quis iste?
          </p>
          <div class="d-flex align-items-center mb-3">
            <p class="d-flex align-items-center me-3 mb-0">
              <i class="fa-solid fa-circle-user me-1 d-block fill-gray"></i><span class="text-sm d-block text-gray">Abimanyu</span>
            </p>
            <p class="d-flex align-items-center mb-0">
              <i class="fa-solid fa-clock me-1 d-block fill-gray"></i><span class="text-sm d-block text-gray">15 jam</span>
            </p>
          </div>
          <a href="/users/read-news.html" class="btn btn-main-outline shadow w-full-sm" role="button">
            Kunjungi Berita
          </a>
        </div>
        <div class="news-card">
          <figure class="news-image__wrap">
            <img src="/homepage/assets/img/image-9.png" alt="news-1" class="news-image__photo" />
          </figure>
          <p class="news-title mb-2">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure
            sequi quasi vel debitis quo. Modi commodi facere, quia
            explicabo obcaecati veniam recusandae consequatur, placeat
            repellat provident fugiat officiis optio repudiandae!
          </p>
          <p class="text-basic news-desc mb-2">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Deserunt nostrum alias fugit. Vel nulla quaerat, nisi, facere
            minima impedit culpa iure cumque ratione dolorum debitis
            dolores, modi quia quis iste?
          </p>
          <div class="d-flex align-items-center mb-3">
            <p class="d-flex align-items-center me-3 mb-0">
              <i class="fa-solid fa-circle-user me-1 d-block fill-gray"></i><span class="text-sm d-block text-gray">Abimanyu</span>
            </p>
            <p class="d-flex align-items-center mb-0">
              <i class="fa-solid fa-clock me-1 d-block fill-gray"></i><span class="text-sm d-block text-gray">10 Feb 2023</span>
            </p>
          </div>
          <a href="/users/read-news.html" class="btn btn-main-outline shadow w-full-sm" role="button">
            Kunjungi Berita
          </a>
        </div>
      </div>
      <div class="d-flex justify-content-center pt-1 pt-sm-3">
        <a href="/users/pengumuman" class="btn btn-main shadow" role="button">Lebih Banyak</a>
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
          <button class="btn btn-white shadow">Kritik & Saran</button>
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
<!-- Barita 1 : Portal Berita | Warga Site -->
<?php $this->extend('users/template/layout'); ?>
<?php $this->section('homepage'); ?>

<!-- header -->
<header class="container ps-0">
  <div class="header-container-back">
    <button class="btn btn-main-outline-xs" type="button" onclick="goBack()">
      <i class="fa-solid fa-arrow-left me-2"></i>Kembali
    </button>
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
            <img src="../../assets/img/image-1.jpg" alt="news-cover" class="news-image-cover" />
          </figure>
          <div class="">
            <h4 class="mb-3">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Inventore error eaque esse consectetur optio minus, tempora
              eveniet
            </h4>
            <p class="mb-4 fst-italic text-basic">
              <span>by Malik Ibrahim</span> . <span>20 Maret 2023</span>
            </p>
          </div>
          <div class="">
            <p class="">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Quaerat odio labore tempore delectus qui. Totam quos ducimus
              nemo alias id. Ad beatae perspiciatis necessitatibus hic
              nostrum distinctio, corrupti deleniti asperiores?
            </p>
            <p class="">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Nostrum quas mollitia aut sit, laboriosam optio culpa minima
              magni molestiae ad provident quod debitis aspernatur
              excepturi ipsa quos voluptatem! Placeat, a. Lorem ipsum
              dolor, sit amet consectetur adipisicing elit. Nostrum natus
              maxime animi totam adipisci itaque recusandae excepturi
              earum expedita ad porro, sunt sequi dolor, alias facere hic
              officia distinctio amet.
            </p>
          </div>
          <p class="">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Impedit dignissimos voluptatibus sapiente magni nobis
            molestiae fugiat ducimus maxime sed error. Explicabo
            voluptatum modi esse rem aspernatur, optio illo aperiam
            nesciunt.
          </p>
        </div>
      </div>
      <!-- right -->
      <div class="col-12 col-lg-4">
        <hr class="divide-related-news" />
        <div class="ps-0 ps-lg-2">
          <div class="mb-4">
            <h5 class="text-center text-lg-start">Berita Terkait</h5>
          </div>
          <div class="related-news-container">
            <a href="./read-news.html" class="related-news-card">
              <figure class="news-image__wrap">
                <img src="../../assets/img/image-7.jpg" alt="news-1" class="news-image__photo" />
              </figure>
              <p class="news-title-card mb-2">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Deserunt nostrum alias fugit.
              </p>
              <div class="d-flex align-items-center">
                <p class="d-flex align-items-center me-3 mb-0">
                  <i class="fa-solid fa-circle-user me-1 d-block fill-gray"></i><span class="text-sm d-block text-gray">Abimanyu</span>
                </p>
                <p class="d-flex align-items-center mb-0">
                  <i class="fa-solid fa-clock me-1 d-block fill-gray"></i><span class="text-sm d-block text-gray">50 menit</span>
                </p>
              </div>
            </a>
            <a href="./read-news.html" class="related-news-card">
              <figure class="news-image__wrap">
                <img src="../../assets/img/image-7.jpg" alt="news-1" class="news-image__photo" />
              </figure>
              <p class="news-title-card mb-2">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Deserunt nostrum alias fugit.
              </p>
              <div class="d-flex align-items-center">
                <p class="d-flex align-items-center me-3 mb-0">
                  <i class="fa-solid fa-circle-user me-1 d-block fill-gray"></i><span class="text-sm d-block text-gray">Abimanyu</span>
                </p>
                <p class="d-flex align-items-center mb-0">
                  <i class="fa-solid fa-clock me-1 d-block fill-gray"></i><span class="text-sm d-block text-gray">50 menit</span>
                </p>
              </div>
            </a>
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
  //   onclick back to previous page
  function goBack() {
    window.history.back();
  }
</script>

<?= $this->endSection(); ?>
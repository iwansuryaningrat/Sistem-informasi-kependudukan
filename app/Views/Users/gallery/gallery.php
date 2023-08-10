<?php $this->extend('users/template/layout'); ?>
<?php $this->section('homepage'); ?>

<!-- header -->
<header class="container">
  <div class="header-container-mini">
    <h1 class="mb-3">Galeri</h1>
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
  <section class="container container-space">
    <div class="news-container">
      <?php foreach ($dataGaleri as $galeri) : ?>
        <a href="/<?= ($isLoggedin) ? 'users' : 'home' ?>/detailGaleri/<?= $galeri['galeri_id'] ?>" class="news-card">
          <figure class="news-image__wrap h-13">
            <img src="/upload/photos/galeri/<?= $galeri['thumbnail'] ?>" alt="news-1" class="news-image__photo" />
          </figure>
          <div class="d-flex align-items-center mb-2">
            <p class="mb-0">
              <span class="badge badge-done"><?= $galeri['nama_kategori'] ?></span>
            </p>
          </div>
          <p class="news-title-card text-lg mb-2">
            <?= $galeri['judul'] ?>
          </p>
          <div class="d-flex align-items-center">
            <p class="d-flex align-items-center me-3 mb-0">
              <i class="fa-solid fa-circle-user me-1 d-block fill-gray"></i>
              <span class="text-sm d-block text-gray"><?= $galeri['nama'] ?></span>
            </p>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </section>
</main>
<!-- end of main -->

<?php if ($isLoggedin) : ?>
  <!-- button add gallery -->
  <div id="add-gallery-fixed">
    <div class="btn btn-main shadow" data-bs-toggle="modal" data-bs-target="#modalAddGallery">
      <i class="fa-solid fa-plus"></i>
      <span class="text">Tambah Galeri</span>
    </div>
  </div>
<?php endif; ?>

<?= $this->endSection(); ?>

<?= $this->section('custom_modal'); ?>

<!-- modal add gallery -->
<div class="modal fade" id="modalAddGallery" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAddGalleryLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <form id="formAddGallery" class="modal-content" action="/galericontroller/save" enctype="multipart/form-data" method="POST">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalAddGalleryLabel">
          Form Tambah Galeri
        </h1>
        <button type="button" class="btn-close text-sm shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- judul galeri -->
        <div class="mb-3">
          <label for="judul" class="form-label forms-label">Judul</label>
          <input type="text" class="form-control input-control" id="judul" name="judul" placeholder="Masukkan Judul Galeri" />
        </div>
        <!-- kategori galeri -->
        <div class="mb-3">
          <label for="kategori" class="form-label forms-label">Kategori</label>
          <select class="form-select select-control" id="kategori" name="kategori">
            <option selected value="">Pilih Kategori Galeri</option>
            <?php if ($isLoggedin && $kategoriGaleri) :
              foreach ($kategoriGaleri as $kategori) : ?>
                <option value="<?= $kategori['kategori_galeri_id'] ?>"><?= $kategori['nama_kategori'] ?></option>
            <?php endforeach;
            endif; ?>
          </select>
        </div>
        <!-- deskripsi galeri -->
        <div class="mb-3">
          <label for="deskripsi" class="form-label forms-label">Deskripsi</label>
          <textarea class="form-control input-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Masukkan Deskripsi Galeri"></textarea>
        </div>
        <!-- thumbnail galeri -->
        <div class="mb-3">
          <label for="thumbnail" class="form-label forms-label">Thumbnail</label>
          <div class="input-group">
            <input type="file" class="form-control input-control" id="thumbnail" name="thumbnail" required accept="image/*" />
            <button class="btn btn-main-outline-sm" type="button" id="button-foto-profil">
              <i class="fa-solid fa-upload me-2"></i>Unggah
            </button>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-main-sm" id="formAddGalleryBtn">
          Tambah
        </button>
      </div>
    </form>
  </div>
</div>

<?= $this->endSection(); ?>

<?php $this->section('script'); ?>

<!-- script internal -->
<script>
  // validate
  $(document).ready(function() {
    $("#formAddGallery").validate({
      rules: {
        judul: {
          required: true,
        },
        kategori: {
          required: true,
        },
        deskripsi: {
          required: true,
        },
        thumbnail: {
          required: true,
        },
      },
      messages: {
        judul: {
          required: "Judul tidak boleh kosong",
        },
        kategori: {
          required: "Kategori tidak boleh kosong",
        },
        deskripsi: {
          required: "Deskripsi tidak boleh kosong",
        },
        thumbnail: {
          required: "Thumbnail tidak boleh kosong",
        },
      },
    });
    $("#formAddGalleryButton").on("click", () => {
      console.log($("#formAddGallery").valid());
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
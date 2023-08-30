<?php $this->extend('users/template/layout'); ?>
<?php $this->section('homepage'); ?>
<?php

use App\Helpers\DateHelper; ?>

<!-- header -->
<header class="container">
  <div class="header-container-mini">
    <h1 class="mb-3">Galeri Warga</h1>
    <p class="text-basic text-center mb-0 max-w-80">
      Jelajahi berbagai momen indah dan inspiratif dalam galeri kami. Di sini, Anda akan menemukan koleksi foto dan gambar yang menggambarkan kehidupan dan kegiatan di komunitas kita. Mari bersama-sama merayakan momen-momen berharga!
    </p>
  </div>
</header>
<!-- end of header -->


<!-- main -->
<main>
  <section class="container container-space">
    <div class="news-container">
      <?php if (empty($dataGaleri)) : ?>
        <div class="col-span-full text-center">
          <div class="d-flex justify-content-center">
            <div class="card-empty mt-0 mb-5">
              <img src="/homepage/assets/img/decoration/out-of-stock.png" alt="empty pengumuman" class="img-empty-state mx-auto mb-1">
              <p class="text-center mb-1 text-basic">
                Maaf, tidak ada galeri yang ditemukan.
              </p>
              <?php if ($isLoggedin) : ?>
                <div class="btn btn-secondaries shadow" data-bs-toggle="modal" data-bs-target="#modalAddGallery">
                  Tambahkan Galeri
                </div>
              <?php else : ?>
                <a class="btn btn-secondaries shadow" href="/home">
                  Kembali ke Beranda
                </a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php else : ?>
        <?php foreach ($dataGaleri as $galeri) : ?>
          <a href="/<?= ($isLoggedin) ? 'users' : 'home' ?>/detailGaleri/<?= $galeri['galeri_id'] ?>" class="news-card">
            <figure class="news-image__wrap h-13">
              <img src="<?= '/' . $path . $galeri['thumbnail'] ?>" alt="Galeri <?= $galeri['nama'] ?>" class="news-image__photo" />
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
              <p class="d-flex align-items-center me-3 mb-0">
                <i class="fa-solid fa-clock me-1 d-block fill-gray"></i>
                <span class="text-sm d-block text-gray"><?= DateHelper::formatCreatedAt($galeri['created_at']) ?></span>
              </p>
            </div>
          </a>
        <?php endforeach; ?>
      <?php endif; ?>
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
          <div class="mb-3">
            <figure class="">
              <img src="https://www.placehold.it/400x150" id="thumbnailImage" alt="Placeholder 400x150" class="img-fluid img-thumbnail img-preview w-100" />
            </figure>
          </div>
          <div class="mb-2">
            <input type="file" class="form-control-image" id="thumbnail" name="thumbnail" required accept="image/*" />
            <label for="thumbnail" class="btn btn-dark fw-semibold">Unggah Thumbnail</label>
          </div>
          <p class="text-sm text-basic">
            *Thumbnail disarankan memiliki rasio horizontal
          </p>
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
  $('#thumbnail').on('change', function() {
    const file = this.files[0];
    if (file) {
      const reader = new FileReader();

      reader.onload = function(event) {
        $('#thumbnailImage').attr('src', event.target.result);
        $('#thumbnailImage').attr('alt', file.name);
      };

      reader.readAsDataURL(file);
    }
  });
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
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Judul tidak boleh kosong',
        },
        kategori: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Kategori tidak boleh kosong',
        },
        deskripsi: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Deskripsi tidak boleh kosong',
        },
        thumbnail: {
          required: '<i class="fas fa-exclamation-circle mr-6 text-sm icon-error"></i>Thumbnail tidak boleh kosong',
        },
      },
    });
  });
</script>

<script>
  //== Class definition
  var SweetAlert = function() {

    //== Demos
    var initSweatAlert = function() {

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

      <?php if (session()->getFlashdata('warning')) : ?>
        swal("Ups!", "<?= session()->getFlashdata('warning') ?>", {
          icon: "warning",
          buttons: {
            confirm: {
              className: 'btn btn-warning'
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
        initSweatAlert();
      },
    };
  }();

  //== Class Initialization
  jQuery(document).ready(function() {
    SweetAlert.init();
  });
</script>

<?= $this->endSection(); ?>
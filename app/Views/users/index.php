<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ImunKit</title>
   <link rel="stylesheet" href="<?= base_url(); ?>/assets/style/css/bootstrap.css">
   <link rel="stylesheet" href="<?= base_url(); ?>/assets/style/css/custom.css">
   <link rel="stylesheet" href="<?= base_url(); ?>/assets/style/css/adminlte.min.css">
   <link rel="stylesheet" href="<?= base_url(); ?>/assets/fontawesome/css/all.min.css">
</head>

<body>
   <div class="wrapper">
      <!-- Pemanggilan sidebar -->
      <?= $this->include('users/navbar'); ?>

      <!-- Pemanggilan sidebar -->
      <?= $this->include('users/sidebar'); ?>
   </div>
   <div class="content-wrapper bg-white">
      <!-- Area konten -->
      <div class="container">
    <div class="row mt-5 px-5">
      <h1 class="text-center mb-3 display-6">Artikel Seputar Bayi</h1>
      <div class="col-sm-6 col-lg-4">
        <div class="card mb-4">
          <img src="" class="card-img-top" alt="Gambar Artikel 1">
          <div class="card-body">
            <h5 class="card-title">Judul Artikel 1</h5>
            <p class="card-text">Deskripsi artikel 1.</p>
            <a href="#" class="btn btn-primary">Baca selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="card mb-4">
          <img src="" class="card-img-top" alt="Gambar Artikel 2">
          <div class="card-body">
            <h5 class="card-title">Judul Artikel 2</h5>
            <p class="card-text">Deskripsi artikel 2.</p>
            <a href="#" class="btn btn-primary">Baca selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="card mb-4">
          <img src="" class="card-img-top" alt="Gambar Artikel 3">
          <div class="card-body">
            <h5 class="card-title">Judul Artikel 3</h5>
            <p class="card-text">Deskripsi artikel 3.</p>
            <a href="#" class="btn btn-primary">Baca selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="card mb-4">
          <img src="" class="card-img-top" alt="Gambar Artikel 4">
          <div class="card-body">
            <h5 class="card-title">Judul Artikel 4</h5>
            <p class="card-text">Deskripsi artikel 4.</p>
            <a href="#" class="btn btn-primary">Baca selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="card mb-4">
          <img src="" class="card-img-top" alt="Gambar Artikel 5">
          <div class="card-body">
            <h5 class="card-title">Judul Artikel 5</h5>
            <p class="card-text">Deskripsi artikel 5.</p>
            <a href="#" class="btn btn-primary">Baca selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="card mb-4">
          <img src="" class="card-img-top" alt="Gambar Artikel 6">
          <div class="card-body">
            <h5 class="card-title">Judul Artikel 6</h5>
            <p class="card-text">Deskripsi artikel 6.</p>
            <a href="#" class="btn btn-primary">Baca selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </div>
      <!-- Area konten -->
   </div>


   <script src="<?= base_url(); ?>/assets/style/js/jquery-3.6.1.min.js"></script>
   <script src="<?= base_url(); ?>/assets/style/js/bootstrap.bundle.min.js"></script>
   <script src="<?= base_url(); ?>/assets/style/js/adminlte.min.js"></script>
   <script src="<?= base_url(); ?>/assets/fontawesome/js/all.min.js"></script>
</body>

</html>
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
      <div class="row mt-8 px-6">
        <h1 class="text-center mt-4 mb-4 display-6">Artikel Seputar Bayi</h1>
        <?php

        use function App\Controllers\Users\limitWords;

        if ($news) : ?>
          <?php foreach ($news as $article) : ?>
            <div class="col-md-4">
              <div class="card article-card mb-4">
                <img src="<?= $article->urlToImage ?>" class="card-img-top" alt="Gambar Artikel">
                <div class="card-body article-body">
                  <h5 class="card-title"><?= $article->title ?></h5>
                  <p class="card-text"><?= limitWords($article->description, 20) ?></p>
                  <a href="<?= $article->url ?>" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php else : ?>
          <div class="col text-center">
            <p>Tidak ada berita yang ditemukan.</p>
          </div>
        <?php endif; ?>
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
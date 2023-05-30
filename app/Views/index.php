<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ImunKit</title>
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/style/css/bootstrap.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/style/css/custom.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/fontawesome/css/all.min.css">
</head>

<body>
  <section id="beranda">
    <nav class="navbar navbar-expand-lg py-3 mb-4 fixed-top sticky sticky-dark nav-sticky bg-nav">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>"><i class=""></i> ImunKit
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav ">
            <li class="nav-item ">
              <a class="nav-link scrollto active" aria-current="page" href="#beranda">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>/login">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>


  <script src="<?= base_url(); ?>/assets/style/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/assets/fontawesome/js/all.min.js"></script>
</body>

</html>
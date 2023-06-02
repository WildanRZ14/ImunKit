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
          <img src="<?= base_url('assets/images/pic1.png'); ?>" class="card-img-top" alt="Gambar Artikel 1">
          <div class="card-body">
            <h5 class="card-title"><b>Pentingnya Imunisasi Bagi Anak</b></h5>
            <p class="card-text">Imunisasi adalah upaya pencegahan penyakit menular dengan memberikan “vaksin” sehingga terjadi imunitas (kekebalan) terhadap penyakit tersebut. Vaksin adalah jenis bakteri atau virus yang sudah dil...</p>
            <a href="#" class="btn btn-primary">Baca selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="card mb-4">
          <img src="<?= base_url('assets/images/pic2.png'); ?>" class="card-img-top" alt="Gambar Artikel 2">
          <div class="card-body">
            <h5 class="card-title"><b>Cara Meningkatkan Imunitas Tubuh Anak dengan Jenis Makanan Lezat</b></h5>
            <p class="card-text">Kunci dari sistem kekebalan tubuh Si Kecil terdapat dalam saluran pencernaannya. Pencernaan sehat akan mendukung imunitas anak dan tentunya akan mendukung...</p>
            <a href="#" class="btn btn-primary">Baca selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="card mb-4">
          <img src="<?= base_url('assets/images/pic3.png'); ?>" class="card-img-top" alt="Gambar Artikel 3">
          <div class="card-body">
            <h5 class="card-title"><b>Kenali, Ini Ciri-ciri Bayi Sakit</b></h5>
            <p class="card-text">Bayi masih belum dapat bicara atau mengungkapkan yang ia rasakan. Maka itu, penting bagi orang tua untuk mengenali ciri-ciri bayi yang sakit berikut ini. Ketika bayi sakit, kebingungan kerap muncul...</p>
            <a href="#" class="btn btn-primary">Baca selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="card mb-4">
          <img src="<?= base_url('assets/images/pic4.png'); ?>" class="card-img-top" alt="Gambar Artikel 4">
          <div class="card-body">
            <h5 class="card-title"><b>Tips Cerdik Menghadapi Bayi yang Demam</b></h5>
            <p class="card-text">Jangan langsung panik jika bayi mengalami panas demam. Lebih baik lakukan sederet hal berikut untuk menurunkan panas demam pada bayi. Apakah buah hati Anda sedang demam saat ini? Tenang, jangan bur...</p>
            <a href="#" class="btn btn-primary">Baca selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="card mb-4">
          <img src="<?= base_url('assets/images/pic5.png'); ?>" class="card-img-top" alt="Gambar Artikel 5">
          <div class="card-body">
            <h5 class="card-title"><b>Lakukan Ini Untuk Atasi Anak Cengeng dan Rewel</b></h5>
            <p class="card-text">Menangis adalah hal yang sering dilakukan oleh bayi atau anak-anak, biasanya untuk menunjukkan emosi atau hal tertentu. Sayangnya, orangtua sering kali dibuat bingung karena tidak bisa mengerti apa...</p>
            <a href="#" class="btn btn-primary">Baca selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="card mb-4">
          <img src="<?= base_url('assets/images/pic6.png'); ?>" class="card-img-top" alt="Gambar Artikel 6">
          <div class="card-body">
            <h5 class="card-title"><b>7 Tips Menumbuhkan Rasa Optimis pada Anak, Dukung Si Kecil</b></h5>
            <p class="card-text">Mendidik agar anak optimis tidak bisa mendadak. Bagaimana ya tips menumbuhkan rasa optimis pada anak? Impian memiliki anak yang tangguh tentunya menjadi kebanggaan orang tua. Namun...</p>
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
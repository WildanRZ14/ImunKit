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
   <style>
      .card {
         height: 100%;
      }

      .card-img-top {
         width: 100%;
         min-height: 200px;
         object-fit: cover;
         border-top-left-radius: 10px;
         border-top-right-radius: 10px;
      }
   </style>
</head>

<body>
   <div class="wrapper">
      <?= $this->include('users/navbar'); ?>
      <?= $this->include('users/sidebar'); ?>
   </div>
   <div class="content-wrapper bg-white">
      <div class="container">
         <div class="row mt-5 px-5">
            <h3 class="text-center mb-3">Jadwal Imunisasi</h3>
            <?php if (!empty($jadwal)) : ?>
               <?php
               usort($jadwal, function ($a, $b) {
                  return strtotime($b['waktu']) - strtotime($a['waktu']);
               });
               ?>
               <?php foreach ($jadwal as $schedule) : ?>
                  <div class="col-sm-6 col-lg-4 py-3">
                     <div class="card mb-6">
                        <?php if (!empty($schedule['gambar'])) : ?>
                           <img class="card-img-top" src="<?= base_url($schedule['gambar']); ?>" alt="Gambar">
                        <?php else : ?>
                           <img class="card-img-top" src="<?= base_url('assets/images/default.jpg'); ?>" alt="Gambar Default">
                        <?php endif; ?>

                        <div class="card-body">
                           <h5 class="card-text text-center mb-3">
                              <i class="far fa-heart"></i> <?= $schedule['judul'] ?>
                           </h5>
                           <p class="card-text">
                              <i class="fas fa-calendar-alt"></i>
                              <span class="ml-2"> : <?= $schedule['waktu'] ?></span>
                           </p>
                           <p class="card-text">
                              <i class="fas fa-clock"></i>
                              <span class="ml-2"> : <?= $schedule['jam'] ?> WIB</span>
                           </p>
                           <p class="card-text">
                              <i class="fas fa-map-marker-alt"></i>
                              <span class="ml-2"> : <?= $schedule['lokasi'] ?></span>
                           </p>
                           <p class="card-text">
                              <i class="fas fa-info-circle"></i>
                              <span class="ml-2"> : <?= $schedule['diskripsi'] ?></span>
                           </p>
                        </div>
                     </div>
                  </div>
               <?php endforeach; ?>
            <?php else : ?>
               <div class="col text-center">
                  <p>Tidak ada jadwal yang ditemukan.</p>
               </div>
            <?php endif; ?>
         </div>
      </div>
   </div>
   <?= $this->include('admin/footer'); ?>

   <script src="<?= base_url(); ?>/assets/style/js/jquery-3.6.1.min.js"></script>
   <script src="<?= base_url(); ?>/assets/style/js/bootstrap.bundle.min.js"></script>
   <script src="<?= base_url(); ?>/assets/style/js/adminlte.min.js"></script>
   <script src="<?= base_url(); ?>/assets/fontawesome/js/all.min.js"></script>
</body>

</html>

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
      <?= $this->include('users/navbar'); ?>
      <?= $this->include('users/sidebar'); ?>
   </div>
   <div class="content-wrapper bg-white">
      <div class="pemantauan">
         <div class="container bg-white shadow" id="add-todo">
            <h3 class="container-header text-center">Imunisasi yang harus dilakukan</h3>
            <form class="form" action="#" id="form">
               <div class="form-group form-title">
                  <label for="title">Masukkan imunisasi yang akan dilakukan</label>
                  <input type="text" id="title" name="title" required>
               </div>
               <div class="form-group form-title">
                  <label for="date">Masukkan tanggal imunisasi</label>
                  <input type="date" id="date" name="date" required>
               </div>
               <input type="submit" value="Submit" name="Submit" class="btn-submit">
            </form>
         </div>
         <div class="container">
            <h3 class="container-header">Imunisasi selanjutnya</h3>
            <div class="list-item" id="todos">
            </div>
         </div>
         <div class="container">
            <h3 class="container-header">Imunisasi yang sudah dilakukan</h3>
            <div class="list-item" id="completed-todos">
            </div>
         </div>
      </div>
   </div>
   </div>
   <?= $this->include('admin/footer'); ?>


   <script src="<?= base_url(); ?>/assets/style/js/jquery-3.6.1.min.js"></script>
   <script src="<?= base_url(); ?>/assets/style/js/bootstrap.bundle.min.js"></script>
   <script src="<?= base_url(); ?>/assets/style/js/adminlte.min.js"></script>
   <script src="<?= base_url(); ?>/assets/fontawesome/js/all.min.js"></script>
   <script src="<?= base_url(); ?>/assets/fontawesome/js/script.js"></script>
</body>

</html>
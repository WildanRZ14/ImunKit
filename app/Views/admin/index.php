<!DOCTYPE html>
<html lang="en">

<head>
   <meta name="dicoding:email" content="syifanamuflih06@gmail.com">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ImunKit</title>
   <link rel="stylesheet" href="<?= base_url('assets/style/css/bootstrap.css'); ?>">
   <link rel="stylesheet" href="<?= base_url('assets/style/css/custom.css'); ?>">
   <link rel="stylesheet" href="<?= base_url('assets/style/css/adminlte.min.css'); ?>">
   <link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.min.css'); ?>">
</head>

<body>
   <div class="wrapper">
      <!-- Pemanggilan sidebar -->
      <?= $this->include('admin/navbar'); ?>

      <!-- Pemanggilan sidebar -->
      <?= $this->include('admin/sidebar'); ?>
   </div>
   <div class="content-wrapper bg-white">
      <!-- Area konten -->
      <div class="container px-5">
         <h3 class="mt-5 mb-3 text-center">Data Registrasi Masuk</h3>
         <div>
            <form action="<?= base_url('administrator/authAdm'); ?>" method="post">
               <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
               </div>
               <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
               </div>
               <div class="mb-3 row">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
               </div>
               <div class="mb-3 row">
                  <label for="repassword" class="form-label">Masukkan Ulang Password</label>
                  <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Masukkan Ulang Password" required>
               </div>
               <button type="submit" class="btn btn-primary float-end shadow">Submit</button>
            </form>
         </div>
      </div>
      <!-- Area konten -->
   </div>
   <?= $this->include('admin/footer'); ?>


   <script src="<?= base_url('assets/style/js/jquery-3.6.1.min.js'); ?>"></script>
   <script src="<?= base_url('assets/style/js/bootstrap.bundle.min.js'); ?>"></script>
   <script src="<?= base_url('assets/style/js/adminlte.min.js'); ?>"></script>
   <script src="<?= base_url('assets/fontawesome/js/all.min.js'); ?>"></script>
</body>

</html>

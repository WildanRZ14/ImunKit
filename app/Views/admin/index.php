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
      <?= $this->include('admin/navbar'); ?>

      <!-- Pemanggilan sidebar -->
      <?= $this->include('admin/sidebar'); ?>
   </div>
   <div class="content-wrapper bg-white">
      <!-- Area konten -->
      <div class="container px-5">
         <h3 class="mt-5 mb-3 text-center">Data Registrasi Masuk</h3>
         <div>
            <form>
               <div class="mb-3 row">
                  <label for="namaOrtu" class="col-sm-2 col-form-label">Nama Orang Tua</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" id="namaOrtu" placeholder="Masukkan Nama Orang Tua" required>
                  </div>
               </div>
               <div class="mb-3 row">
                  <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" id="email" placeholder="Masukkan Email" required>
                  </div>
               </div>
               <div class="mb-3 row">
                  <label for="username" class="col-sm-2 col-form-label">Username</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" id="username" placeholder="Masukkan Username" required>
                  </div>
               </div>
               <div class="mb-3 row">
                  <label for="password" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" id="password" placeholder="Masukkan Password" required>
                  </div>
               </div>
               <button type="submit" class="btn btn-primary float-end shadow">Submit</button>
            </form>
         </div>
         <div class="mt-4 pt-5">
            <h4 class="text-center">Tabel Data</h4>
            <table class="table table-secondary mt-3">
               <thead>
                  <tr class="table-primary">
                     <th>#</th>
                     <th>Nama</th>
                     <th>Umur</th>
                     <th>Alamat</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>1</td>
                     <td>John Doe</td>
                     <td>30</td>
                     <td>Jakarta</td>
                  </tr>
                  <tr>
                     <td>2</td>
                     <td>Jane Smith</td>
                     <td>25</td>
                     <td>Bandung</td>
                  </tr>
                  <tr>
                     <td>3</td>
                     <td>Michael Johnson</td>
                     <td>35</td>
                     <td>Surabaya</td>
                  </tr>
               </tbody>
            </table>
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
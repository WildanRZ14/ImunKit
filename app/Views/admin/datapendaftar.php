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
      <?= $this->include('admin/navbar'); ?>
      <?= $this->include('admin/sidebar'); ?>
   </div>
   <div class="content-wrapper bg-white">
      <div class="container px-5">
         <div class="mt-4 pt-5">
            <h4 class="text-center">Data Pendaftar</h4>
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
   </div>
   <?= $this->include('admin/footer'); ?>


   <script src="<?= base_url(); ?>/assets/style/js/jquery-3.6.1.min.js"></script>
   <script src="<?= base_url(); ?>/assets/style/js/bootstrap.bundle.min.js"></script>
   <script src="<?= base_url(); ?>/assets/style/js/adminlte.min.js"></script>
   <script src="<?= base_url(); ?>/assets/fontawesome/js/all.min.js"></script>
</body>

</html>
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
      <div class="container px-5">
    <h3 class="mt-5 mb-3 text-center">Pendaftaran Imunisasi</h3>
    <form>
      <div class="mb-3">
        <label for="parent" class="form-label">Nama Orang Tua</label>
        <input type="text" class="form-control" id="parent" placeholder="Masukkan nama orang tua" required>
      </div>
      <div class="mb-3">
        <label for="nama-bayi" class="form-label">Nama Bayi</label>
        <input type="text" class="form-control" id="nama-bayi" placeholder="Masukkan nama bayi" required>
      </div>
      <div class="mb-3">
      <label for="tempat-lahir" class="form-label">Tempat Lahir Bayi:</label>
      <input type="text" id="tempat-lahir" placeholder="Masukkan tempat lahir" required> 
      <label for="tanggal-lahir" class="form-label">Tanggal Lahir Bayi:</label>
      <input type="date" id="tanggal-lahir" placeholder="Masukkan tanggal lahir" required>
      </div>
      <div class="mb-3">
        <label for="usia" class="form-label">Usia Bayi</label>
        <input type="number" class="form-control" id="usia" placeholder="Masukkan usia bayi" required>
      </div>
      <div class="mb-3">
       <label for="gender" class="form-label">Jenis Kelamin</label>
       <input type="radio" id="male" name="gender" value="male">
       <label for="male">Laki-Laki</label>
       <input type="radio" id="female" name="gender" value="female">
       <label for="female">Perempuan</label>
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" id="alamat" rows="3" placeholder="Masukkan alamat" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary float-end shadow">Submit</button>
    </form>
      </div>
   </div>
   <?= $this->include('admin/footer'); ?>


   <script src="<?= base_url(); ?>/assets/style/js/jquery-3.6.1.min.js"></script>
   <script src="<?= base_url(); ?>/assets/style/js/bootstrap.bundle.min.js"></script>
   <script src="<?= base_url(); ?>/assets/style/js/adminlte.min.js"></script>
   <script src="<?= base_url(); ?>/assets/fontawesome/js/all.min.js"></script>
</body>

</html>
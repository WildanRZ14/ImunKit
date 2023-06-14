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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/css/tempusdominus-bootstrap-4.min.css">
</head>

<body>
   <div class="wrapper">
      <!-- Pemanggilan navbar -->
      <?= $this->include('admin/navbar'); ?>

      <!-- Pemanggilan sidebar -->
      <?= $this->include('admin/sidebar'); ?>
   </div>
   <div class="content-wrapper bg-white">
      <!-- Area Konten -->
      <div class="container px-5">
         <h3 class="mt-5 mb-3 text-center">Form Jadwal Imunisasi</h3>
         <form action="<?= site_url('administrator/penjadwalan/save'); ?>" method="post">
            <div class="mb-3">
               <label for="judul" class="form-label">Judul</label>
               <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul jadwal imunisasi" required>
            </div>
            <div class="mb-3">
              <label for="waktu" class="form-label">Waktu</label>
              <input type="date" class="form-control" name="waktu" id="waktu" placeholder="Masukkan waktu imunisasi" required>
            </div>
            <div class="mb-3">
               <label for="jam" class="form-label">Jam</label>
               <div class="input-group date" id="timepicker" data-target-input="nearest">
                 <input type="text" class="form-control datetimepicker-input" name="jam" data-target="#timepicker" placeholder="Masukkan jam imunisasi" required>
                 <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                     <div class="input-group-text"><i class="fa fa-clock"></i></div>
                 </div>
               </div>
            </div>
            <div class="mb-3">
               <label for="lokasi" class="form-label">Lokasi</label>
               <select class="form-control" name="lokasi" id="lokasi" required>
                  <option value="">Pilih Lokasi</option>
                  <option value="Purwokerto Selatan">Purwokerto Selatan</option>
                  <option value="Purwokerto Barat">Purwokerto Barat</option>
                  <option value="Purwokerto Barat">Purwokerto Barat</option>
               </select>
            </div>
            <div class="mb-3">
               <label for="diskripsi" class="form-label">Deskripsi</label>
               <textarea class="form-control" name="diskripsi" id="diskripsi" rows="3" placeholder="Masukkan deskripsi imunisasi" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary float-end shadow">Submit</button>
         </form>
      </div>
   </div>


   <script src="<?= base_url(); ?>/assets/style/js/jquery-3.6.1.min.js"></script>
   <script src="<?= base_url(); ?>/assets/style/js/bootstrap.bundle.min.js"></script>
   <script src="<?= base_url(); ?>/assets/style/js/adminlte.min.js"></script>
   <script src="<?= base_url(); ?>/assets/fontawesome/js/all.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js"></script>
   <script>
      $(function() {
         $('#timepicker').datetimepicker({
            format: 'HH:mm',
            icons: {
               time: 'fa fa-clock',
               date: 'fa fa-calendar',
               up: 'fa fa-chevron-up',
               down: 'fa fa-chevron-down',
               previous: 'fa fa-chevron-left',
               next: 'fa fa-chevron-right',
               today: 'fa fa-calendar-check-o',
               clear: 'fa fa-trash',
               close: 'fa fa-times'
            },
            stepping: 15 // Langkah penambahan/jumlah menit yang dapat dipilih
         });
      });
   </script>
</body>

</html>

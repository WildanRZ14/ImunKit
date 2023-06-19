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
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
</head>

<body>
   <div class="wrapper">
      <?= $this->include('admin/navbar'); ?>
      <?= $this->include('admin/sidebar'); ?>
   </div>
   <div class="content-wrapper bg-white">
      <div class="container px-5">
         <div class="mt-4 pt-2">
            <h4 class="text-center">Tabel Data Penjadwalan</h4>
            <div class="table-responsive">
               <table class="table table-secondary mt-3 mb-4 table-striped table-hover">
                  <thead>
                     <tr class="table-primary">
                        <th>ID Judul</th>
                        <th>Judul</th>
                        <th>Waktu</th>
                        <th>Jam</th>
                        <th>Lokasi</th>
                        <th>Diskripsi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($data as $row) : ?>
                        <tr>
                           <td><?= $row['id_judul']; ?></td>
                           <td><?= $row['judul']; ?></td>
                           <td><?= $row['waktu']; ?></td>
                           <td><?= $row['jam']; ?></td>
                           <td><?= $row['lokasi']; ?></td>
                           <td><?= $row['diskripsi']; ?></td>
                           <td><img src="<?= base_url() . '/' . $row['gambar']; ?>" alt="Gambar" width="100"></td>
                           <td>
                              <button class="btn btn-sm btn-primary edit-btn mb-1" data-id_judul="<?= $row['id_judul']; ?>"><i class="fas fa-edit"></i></button>
                              <button class="btn btn-sm btn-danger delete-btn" data-id_judul="<?= $row['id_judul']; ?>"><i class="fas fa-trash"></i></button>
                           </td>
                        </tr>
                     <?php endforeach; ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   <?= $this->include('admin/footer'); ?>

   <script src="<?= base_url(); ?>/assets/style/js/jquery-3.6.1.min.js"></script>
   <script src="<?= base_url(); ?>/assets/style/js/bootstrap.bundle.min.js"></script>
   <script src="<?= base_url(); ?>/assets/style/js/adminlte.min.js"></script>
   <script src="<?= base_url(); ?>/assets/fontawesome/js/all.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>

   <script>
      $(document).ready(function() {
         $('.edit-btn').click(function() {
            var id = $(this).data('id_judul');
            var row = $(this).closest('tr');

            $.ajax({
               url: '<?= base_url('administrator/datapenjadwalan/getData/') ?>' + id,
               method: 'GET',
               dataType: 'json',
               success: function(response) {
                  Swal.fire({
                     title: 'Edit Data',
                     html: '<form id="edit-form" enctype="multipart/form-data">' +
                        '<div class="form-group">' +
                        '<label for="judul">Judul</label>' +
                        '<input type="text" class="form-control" id="judul" name="judul" value="' + response.judul + '">' +
                        '</div>' +
                        '<div class="form-group">' +
                        '<label for="waktu">Waktu</label>' +
                        '<input type="date" class="form-control" id="waktu" name="waktu" value="' + response.waktu + '">' +
                        '</div>' +
                        '<div class="form-group">' +
                        '<label for="jam">Jam</label>' +
                        '<div class="input-group date" id="timepicker">' +
                        '<input type="time" class="form-control" name="jam" placeholder="Masukkan jam imunisasi" value="' + response.jam + '" required />' +
                        '<div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">' +
                        '</div>' +
                        '</div>' +
                        '<div class="form-group">' +
                        '<label for="lokasi">Lokasi</label>' +
                        '<select class="form-control" id="lokasi" name="lokasi" required>' +
                        '<option value="' + response.lokasi + '">' + response.lokasi + '</option>' +
                        '<option value="Purwokerto Selatan">Purwokerto Selatan</option>' +
                        '<option value="Purwokerto Barat">Purwokerto Barat</option>' +
                        '<option value="Purwokerto Utara">Purwokerto Utara</option>' +
                        '</select>' +
                        '</div>' +
                        '<div class="form-group">' +
                        '<label for="diskripsi">diskripsi</label>' +
                        '<textarea class="form-control" id="diskripsi" name="diskripsi">' + response.diskripsi + '</textarea>' +
                        '</div>' +
                        '<div class="form-group">' +
                        '<label for="gambar">Gambar</label>' +
                        '<input type="file" class="form-control" id="gambar" name="gambar">' +
                        '</div>' +
                        '</form>',
                     showCancelButton: true,
                     confirmButtonText: 'Update',
                     preConfirm: function() {
                        var formData = new FormData($('#edit-form')[0]);
                        formData.append('_method', 'PUT');
                        $.ajax({
                           url: '<?= base_url('administrator/datapenjadwalan/update/') ?>' + id,
                           method: 'POST',
                           data: formData,
                           processData: false,
                           contentType: false,
                           success: function() {
                              Swal.fire('Sukses', 'Data berhasil diperbarui.', 'success').then(function() {
                                 location.reload();
                              });
                           },
                           error: function() {
                              Swal.fire('Error', 'Terjadi kesalahan saat memperbarui data.', 'error');
                           }
                        });
                     }
                  });
               },
               error: function() {
                  Swal.fire('Error', 'Terjadi kesalahan saat mengambil data.', 'error');
               }
            });
         });
         $('.delete-btn').click(function() {
            var id = $(this).data('id_judul');
            var row = $(this).closest('tr');

            Swal.fire({
               title: 'Konfirmasi Hapus Data',
               text: 'Apakah Anda yakin ingin menghapus data ini?',
               icon: 'warning',
               showCancelButton: true,
               confirmButtonText: 'Hapus',
               cancelButtonText: 'Batal',
               dangerMode: true,
            }).then(function(result) {
               if (result.isConfirmed) {
                  $.ajax({
                     url: '<?= base_url('administrator/datapenjadwalan/delete/') ?>' + id,
                     method: 'POST',
                     data: {
                        _method: 'DELETE'
                     },
                     success: function() {
                        Swal.fire('Sukses', 'Data berhasil dihapus.', 'success').then(function() {
                           row.remove();
                        });
                     },
                     error: function() {
                        Swal.fire('Error', 'Terjadi kesalahan saat menghapus data.', 'error');
                     }
                  });
               }
            });
         });
      });
   </script>

</body>

</html>

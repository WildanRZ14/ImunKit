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
      <!-- Pemanggilan navbar -->
      <?= $this->include('admin/navbar'); ?>

      <!-- Pemanggilan sidebar -->
      <?= $this->include('admin/sidebar'); ?>
   </div>
   <div class="content-wrapper bg-white">
      <!-- Area konten -->
      <div class="container px-5">
         <div class="mt-4 pt-2">
            <h4 class="text-center">Tabel Data User</h4>
            <div class="table-responsive">
               <table class="table table-secondary mt-3 mb-4 table table-striped table-hover">
                  <thead>
                     <tr class="table-primary">
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($data as $row) : ?>
                        <tr>
                           <td><?= $row['id_user']; ?></td>
                           <td><?= $row['username']; ?></td>
                           <td><?= $row['email']; ?></td>
                           <td><?= $row['password']; ?></td>
                           <td>
                              <button class="btn btn-sm btn-primary edit-btn btn-space" data-id_user="<?= $row['id_user']; ?>"><i class="fas fa-edit"></i></button>
                              <button class="btn btn-sm btn-danger delete-btn" data-id_user="<?= $row['id_user']; ?>"><i class="fas fa-trash"></i></button>
                           </td>
                        </tr>
                     <?php endforeach; ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <!-- Area konten -->
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
            var id = $(this).data('id_user');
            var row = $(this).closest('tr');

            $.ajax({
               url: '<?= base_url('administrator/datapendaftar/getData/') ?>' + id,
               method: 'GET',
               dataType: 'json',
               success: function(response) {
                  Swal.fire({
                     title: 'Edit Data',
                     html: '<form id="edit-form">' +
                        '<div class="form-group">' +
                        '<label for="email">Email</label>' +
                        '<input type="email" class="form-control" id="email" name="email" value="' + response.email + '">' +
                        '</div>' +
                        '<div class="form-group">' +
                        '<label for="username">Username</label>' +
                        '<input class="form-control" id="username" name="username" value="' + response.username + '">' +
                        '</div>' +
                        '<div class="form-group">' +
                        '<label for="password">Password</label>' +
                        '<input type="password" class="form-control" id="password" name="password" value="' + response.password + '">' +
                        '</div>' +
                        '<div class="form-group">' +
                        '<label for="repassword">Repassword</label>' +
                        '<input type="password" class="form-control" id="repassword" name="repassword" value="' + response.repassword + '">' +
                        '</div>' +
                        '</form>',
                     showCancelButton: true,
                     confirmButtonText: 'Update',
                     preConfirm: function() {
                        var formData = $('#edit-form').serialize();
                        $.ajax({
                           url: '<?= base_url('administrator/datapendaftar/update/') ?>' + id,
                           method: 'POST',
                           data: formData + '&_method=PUT',
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
            var id = $(this).data('id_user');
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
                     url: '<?= base_url('administrator/datapendaftar/delete/') ?>' + id,
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

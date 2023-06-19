<!DOCTYPE html>
<html lang="en">

<head>
   <meta name="dicoding:email" content="rusmairawati@gmail.com">
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
      <?= $this->include('users/navbar'); ?>
      <?= $this->include('users/sidebar'); ?>
   </div>
   <div class="content-wrapper bg-white">
      <div class="container px-5">
         <h3 class="mt-5 mb-3 text-center">Pemantauan</h3>
         <div class="mb-5">
            <form action="<?= base_url('users/pemantauan/authPemantauan'); ?>" method="post">
               <div class="mb-3">
                  <label for="jenis_imunisasi" class="form-label">Jenis Imunisasi</label>
                  <input class="form-control" id="jenis_imunisasi" name="jenis_imunisasi" placeholder="Masukkan Jenis Imunisasi" required>
               </div>
               <button type="submit" class="btn btn-primary float-end shadow">Submit</button>
            </form>
         </div>
         <div class="mt-5 py-2">
            <h4 class="text-center">Belum Dilakukan</h4>
            <div class="table-responsive">
               <table class="table table-secondary mt-3 mb-4 table table-striped table-hover">
                  <thead>
                     <tr class="table-primary text-center">
                        <th>ID</th>
                        <th>Jenis Imunisasi</th>
                        <th>Status</th>
                        <th>Ubah Status</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody class="text-center">
                     <?php $counter = 1; ?>
                     <?php foreach ($data as $row) : ?>
                        <?php if ($row['status'] === 'Belum') : ?>
                           <tr>
                              <td><?= $counter++; ?></td>
                              <td><?= $row['jenis_imunisasi']; ?></td>
                              <td><?= $row['status']; ?></td>
                              <td>
                                 <button class="btn btn-sm btn-success check-btn" data-id_pemantauan="<?= $row['id_pemantauan']; ?>">
                                    <i class="fas fa-check"></i>
                                 </button>
                              </td>
                              <td>
                                 <button class="btn btn-sm btn-primary edit-btn btn-space1" data-id_pemantauan="<?= $row['id_pemantauan']; ?>">
                                    <i class="fas fa-edit"></i>
                                 </button>
                                 <button class="btn btn-sm btn-danger delete-btn" data-id_pemantauan="<?= $row['id_pemantauan']; ?>">
                                    <i class="fas fa-trash"></i>
                                 </button>
                              </td>
                           </tr>
                        <?php endif; ?>
                     <?php endforeach; ?>

                  </tbody>
               </table>
            </div>
         </div>
         <div class="mt-4 pt-2">
            <h4 class="text-center">Sudah Dilakukan</h4>
            <div class="table-responsive">
               <table class="table table-secondary mt-3 mb-4 table table-striped table-hover">
                  <thead>
                     <tr class="table-primary text-center">
                        <th>ID</th>
                        <th>Jenis Imunisasi</th>
                        <th>Status</th>
                        <th>Ubah Status</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody class="text-center">
                     <?php $counter = 1; ?>
                     <?php foreach ($data as $row) : ?>
                        <?php if ($row['status'] === 'Sudah') : ?>
                           <tr>
                              <td><?= $counter++; ?></td>
                              <td><?= $row['jenis_imunisasi']; ?></td>
                              <td><?= $row['status']; ?></td>
                              <td>
                                 <button class="btn btn-sm btn-danger cancel-btn" data-id_pemantauan="<?= $row['id_pemantauan']; ?>">
                                    <i class="fas fa-times"></i>
                                 </button>
                              </td>
                              <td>
                                 <button class="btn btn-sm btn-primary editfromCancel-btn btn-space1" data-id_pemantauan="<?= $row['id_pemantauan']; ?>">
                                    <i class="fas fa-edit"></i>
                                 </button>
                                 <button class="btn btn-sm btn-danger delete-btn" data-id_pemantauan="<?= $row['id_pemantauan']; ?>">
                                    <i class="fas fa-trash"></i>
                                 </button>
                              </td>
                           </tr>
                        <?php endif; ?>
                     <?php endforeach; ?>

                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   <?= $this->include('users/footer'); ?>


   <script src="<?= base_url('assets/style/js/jquery-3.6.1.min.js'); ?>"></script>
   <script src="<?= base_url('assets/style/js/bootstrap.bundle.min.js'); ?>"></script>
   <script src="<?= base_url('assets/style/js/adminlte.min.js'); ?>"></script>
   <script src="<?= base_url('assets/fontawesome/js/all.min.js'); ?>"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   <script>
      $(document).ready(function() {
         $('.check-btn').click(function() {
            var id = $(this).data('id_pemantauan');
            var row = $(this).closest('tr');
            $.ajax({
               url: '<?= base_url('users/pemantauan/updateStatus/') ?>' + id,
               method: 'POST',
               data: {
                  status: 'Sudah' + '&_method=PUT'
               },
               success: function() {
                  row.find('td:nth-child(3)').text('Sudah');
                  Swal.fire('Sukses', 'Status berhasil diperbarui.', 'success');
                  location.reload();
               },
               error: function() {
                  Swal.fire('Error', 'Terjadi kesalahan saat memperbarui status.', 'error');
               }
            });
         });

         $('.cancel-btn').click(function() {
            var id = $(this).data('id_pemantauan');
            var row = $(this).closest('tr');
            $.ajax({
               url: '<?= base_url('users/pemantauan/updateStatustoCancel/') ?>' + id,
               method: 'POST',
               data: {
                  status: 'Belum' + '&_method=PUT'
               },
               success: function() {
                  row.find('td:nth-child(3)').text('Sudah');
                  Swal.fire('Sukses', 'Status berhasil diperbarui.', 'success');
                  location.reload();
               },
               error: function() {
                  Swal.fire('Error', 'Terjadi kesalahan saat memperbarui status.', 'error');
               }
            });
         });

         $('.edit-btn').click(function() {
            var id = $(this).data('id_pemantauan');
            var row = $(this).closest('tr');

            $.ajax({
               url: '<?= base_url('users/pemantauan/getData/') ?>' + id,
               method: 'GET',
               dataType: 'json',
               success: function(response) {
                  Swal.fire({
                     title: 'Edit Data',
                     html: '<form id="edit-form">' +
                        '<div class="form-group">' +
                        '<label for="jenis_imunisasi">Jenis Imunisasi</label>' +
                        '<input type="text" class="form-control" id="jenis_imunisasi" name="jenis_imunisasi" value="' + response.jenis_imunisasi + '">' +
                        '</div>' +
                        '</form>',
                     showCancelButton: true,
                     confirmButtonText: 'Update',
                     preConfirm: function() {
                        var formData = $('#edit-form').serialize();
                        $.ajax({
                           url: '<?= base_url('users/pemantauan/update/') ?>' + id,
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

         $('.editfromCancel-btn').click(function() {
            var id = $(this).data('id_pemantauan');
            var row = $(this).closest('tr');

            $.ajax({
               url: '<?= base_url('users/pemantauan/getData/') ?>' + id,
               method: 'GET',
               dataType: 'json',
               success: function(response) {
                  Swal.fire({
                     title: 'Edit Data',
                     html: '<form id="edit-form">' +
                        '<div class="form-group">' +
                        '<label for="jenis_imunisasi">Jenis Imunisasi</label>' +
                        '<input type="text" class="form-control" id="jenis_imunisasi" name="jenis_imunisasi" value="' + response.jenis_imunisasi + '">' +
                        '</div>' +
                        '</form>',
                     showCancelButton: true,
                     confirmButtonText: 'Update',
                     preConfirm: function() {
                        var formData = $('#edit-form').serialize();
                        $.ajax({
                           url: '<?= base_url('users/pemantauan/updatefromCancel/') ?>' + id,
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
            var id = $(this).data('id_pemantauan');
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
                     url: '<?= base_url('users/pemantauan/delete/') ?>' + id,
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
<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;
use App\Models\PemantauanModel;

class Pemantauan extends BaseController
{
   public function index()
   {
      $model = new PemantauanModel();
      $data = $model->findAll();

      return view('users/pemantauan', ['data' => $data]);
   }

   public function authPemantauan()
   {
      $model = new PemantauanModel();

      $jenis_imunisasi = $this->request->getPost('jenis_imunisasi');

      $data = [
         'jenis_imunisasi' => $jenis_imunisasi,
         'status' => 'Belum'
      ];

      $model->insert($data);

      if ($model->affectedRows() > 0) {
         session()->setFlashdata('success', 'Penambahan Pemantauan Berhasil!');
         return redirect()->to(base_url('/users/pemantauan'));
      } else {
         session()->setFlashdata('error', 'Penambahan Pemantauan Gagal!');
         return redirect()->back();
      }
   }

   public function getData($id)
   {
      $model = new PemantauanModel();
      $data = $model->find($id);

      if ($data) {
         return $this->response->setJSON($data);
      } else {
         return $this->response->setJSON(['error' => 'Data not found']);
      }
   }

   public function update($id)
   {
      $model = new PemantauanModel();

      $jenis_imunisasi = $this->request->getPost('jenis_imunisasi');

      $data = [
         'jenis_imunisasi' => $jenis_imunisasi,
         'status' => 'Belum'
      ];

      if ($model->update($id, $data)) {
         return $this->response->setJSON(['message' => 'Data updated successfully']);
      } else {
         return $this->response->setJSON(['error' => 'Failed to update data']);
      }
   }

   public function updatefromCancel($id)
   {
      $model = new PemantauanModel();

      $jenis_imunisasi = $this->request->getPost('jenis_imunisasi');

      $data = [
         'jenis_imunisasi' => $jenis_imunisasi,
         'status' => 'Sudah'
      ];

      if ($model->update($id, $data)) {
         return $this->response->setJSON(['message' => 'Data updated successfully']);
      } else {
         return $this->response->setJSON(['error' => 'Failed to update data']);
      }
   }

   public function delete($id)
   {
      $model = new PemantauanModel();
      $deleted = $model->delete($id);

      if ($deleted) {
         return $this->response->setJSON(['message' => 'Data deleted successfully']);
      } else {
         return $this->response->setJSON(['error' => 'Failed to delete data']);
      }
   }
   public function updateStatus($id)
   {
      try {
         $model = new PemantauanModel();
   
         $data = [
            'status' => 'Sudah'
         ];
   
         if ($model->update($id, $data)) {
            return $this->response->setJSON(['message' => 'Status updated successfully']);
         } else {
            return $this->response->setJSON(['error' => 'Failed to update status']);
         }
      } catch (\Exception $e) {
         return $this->response->setJSON(['error' => $e->getMessage()]);
      }
   }
   public function updateStatustoCancel($id)
   {
      try {
         $model = new PemantauanModel();
   
         $data = [
            'status' => 'Belum'
         ];
   
         if ($model->update($id, $data)) {
            return $this->response->setJSON(['message' => 'Status updated successfully']);
         } else {
            return $this->response->setJSON(['error' => 'Failed to update status']);
         }
      } catch (\Exception $e) {
         return $this->response->setJSON(['error' => $e->getMessage()]);
      }
   }
   
}

<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\JadwalModel;

class Datapenjadwalan extends BaseController
{
   public function index()
   {
      $model = new JadwalModel();
      $data = $model->findAll();

      return view('admin/datapenjadwalan', ['data' => $data]);
   }

   public function getData($id)
   {
      $model = new JadwalModel();
      $data = $model->find($id);

      if ($data) {
         return $this->response->setJSON($data);
      } else {
         return $this->response->setJSON(['error' => 'Data not found']);
      }
   }

   public function update($id)
   {
      $model = new JadwalModel();

      $judul = $this->request->getVar('judul');
      $waktu = $this->request->getVar('waktu');
      $jam = $this->request->getVar('jam');
      $lokasi = $this->request->getVar('lokasi');
      $diskripsi = $this->request->getVar('diskripsi');
      $gambar = $this->request->getVar('gambar');

      // Upload gambar
      if ($gambarFile = $this->request->getFile('gambar')) {
         if ($gambarFile->isValid() && !$gambarFile->hasMoved()) {
            $gambarPath = 'public/assets/images/jadwal/' . $gambarFile->getName();
            $gambarFile->move(ROOTPATH . $gambarPath);
            $gambar = $gambarPath;
         }
      }

      $data = [
         'judul' => $judul,
         'waktu' => $waktu,
         'jam' => $jam,
         'lokasi' => $lokasi,
         'diskripsi' => $diskripsi,
         'gambar' => $gambar
      ];

      if ($this->request->getMethod() === 'put') {
         $model->update($id, $data);
         return $this->response->setJSON(['message' => 'Data updated successfully']);
      }

      return $this->response->setJSON(['error' => 'Invalid request']);
   }

   public function delete($id)
   {
      $model = new JadwalModel();
      $deleted = $model->delete($id);

      if ($deleted) {
         return $this->response->setJSON(['message' => 'Data deleted successfully']);
      } else {
         return $this->response->setJSON(['error' => 'Failed to delete data']);
      }
   }
}

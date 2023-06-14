<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Datapendaftar extends BaseController
{
   public function index()
   {
      $model = new UserModel();
      $data = $model->where('akses', 'users')->findAll();

      return view('admin/datapendaftar', ['data' => $data]);
   }

   public function getData($id)
   {
      $model = new UserModel();
      $data = $model->find($id);

      if ($data) {
         return $this->response->setJSON($data);
      } else {
         return $this->response->setJSON(['error' => 'Data not found']);
      }
   }

   public function update($id)
   {
      $model = new UserModel();

      $email = $this->request->getVar('email');
      $username = $this->request->getVar('username');
      $password = md5($this->request->getVar('password'));
      $repassword = $this->request->getVar('repassword');

      $data = [
         'email' => $email,
         'username' => $username,
         'password' => $password,
         'repassword' => $repassword,
         'akses' => 'users'
      ];

      if ($this->request->getMethod() === 'put') {
         $model->update($id, $data);
         return $this->response->setJSON(['message' => 'Data updated successfully']);
      }

      return $this->response->setJSON(['error' => 'Invalid request']);
   }
   public function delete($id)
   {
       $model = new UserModel();
       $deleted = $model->delete($id);
   
       if ($deleted) {
           return $this->response->setJSON(['message' => 'Data deleted successfully']);
       } else {
           return $this->response->setJSON(['error' => 'Failed to delete data']);
       }
   }
}

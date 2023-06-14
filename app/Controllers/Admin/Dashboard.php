<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\userModel;

class Dashboard extends BaseController
{
   public function index()
   {
      return view('admin/index');
   }

   public function authAdm()
   {
      $model = new UserModel();

      $email = $this->request->getPost('email');
      $username = $this->request->getPost('username');
      $password = md5($this->request->getPost('password'));
      $repassword = $this->request->getPost('repassword');

      $data = [
         'email' => $email,
         'username' => $username,
         'password' => $password,
         'repassword' => $repassword,
         'akses' => 'users'
      ];
      
      $model->insert($data);

      if ($model->affectedRows() > 0) {
         session()->setFlashdata('success', 'Register Berhasil!');
         return redirect()->to(base_url('/administrator'));
      } else {
         session()->setFlashdata('error', 'Register Gagal!');
         return redirect()->back();
      }
   }
}
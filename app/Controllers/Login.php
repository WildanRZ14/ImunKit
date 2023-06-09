<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
   public function index()
   {
      helper(['form']);
      return view('login');
   }

   public function auth()
   {
      $session = session();
      $model = new UserModel();
      $username = $this->request->getPost('username');
      $password = $this->request->getPost('password');
      $data = $model->where('username', $username)->first();
      if ($data) {
         $pass = $data['password'];
         $verifyPassword = md5($password);
         if ($verifyPassword == $pass) {
            $sesiData = [
               'iduser'       => $data['id_user'],
               'email'          => $data['email'],
               'akses'          => $data['akses'],
               'logged_in'     => TRUE
            ];
            $session->set($sesiData);
            if ($data['akses'] == 'admin') {
               return redirect()->to('/administrator');
            } else {
               return redirect()->to('/users');
            }
         } else {
            $session->setFlashdata('pesanGagal', 'Gagal');
            return redirect()->to('/login');
         }
      } else {
         $session->setFlashdata('pesanGagal', 'Gagal');
         return redirect()->to('/login');
      }
   }

   public function logout()
   {
      $session = session();
      $session->destroy();
      return redirect()->to('/login');
   }
}
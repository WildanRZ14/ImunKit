<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;
use App\Models\JadwalModel;

class Penjadwalan extends BaseController
{
   public function index()
   {
      $model = new JadwalModel();
      $data['jadwal'] = $model->findAll();

      return view('users/penjadwalan', $data);
   }
}

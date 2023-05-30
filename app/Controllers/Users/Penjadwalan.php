<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;

class Penjadwalan extends BaseController
{
   public function index()
   {
      return view('users/penjadwalan');
   }
}

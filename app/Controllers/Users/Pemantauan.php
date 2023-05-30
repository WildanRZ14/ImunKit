<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;

class Pemantauan extends BaseController
{
   public function index()
   {
      return view('users/pemantauan');
   }
}

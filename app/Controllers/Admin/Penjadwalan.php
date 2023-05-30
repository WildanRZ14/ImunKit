<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Penjadwalan extends BaseController
{
   public function index()
   {
      return view('admin/penjadwalan');
   }
}
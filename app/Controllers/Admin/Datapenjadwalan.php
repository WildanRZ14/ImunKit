<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Datapenjadwalan extends BaseController
{
   public function index()
   {
      return view('admin/datapenjadwalan');
   }
}
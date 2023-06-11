<?php

namespace App\Models;

use CodeIgniter\Model;

class userModel extends Model
{
   protected $table = 'tbl_user';
   protected $primaryKey = 'id_user';
   protected $allowedFields = ['username','email', 'password', 'akses'];
   protected $returnType       = 'array';
   protected $useTimestamps    = false;
}
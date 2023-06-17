<?php

namespace App\Models;

use CodeIgniter\Model;

class PemantauanModel extends Model
{
   protected $table = 'tbl_pemantauan';
   protected $primaryKey = 'id_pemantauan';
   protected $allowedFields = ['jenis_imunisasi', 'status'];
   protected $returnType       = 'array';
   protected $useTimestamps    = false;
}
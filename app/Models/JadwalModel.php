<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
   protected $table = 'tbl_jadwal';
   protected $primaryKey = 'id_judul';
   protected $allowedFields = ['judul', 'waktu', 'jam', 'lokasi', 'diskripsi'];
   protected $returnType       = 'array';
   protected $useTimestamps    = false;
}
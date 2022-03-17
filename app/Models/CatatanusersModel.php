<?php

namespace App\Models;

use CodeIgniter\Model;

class CatatanusersModel extends Model
{
    protected $table = "catatan";
    protected $allowedFields = ['user_id', 'tanggal', 'waktu', 'lokasi', 'suhu'];
}

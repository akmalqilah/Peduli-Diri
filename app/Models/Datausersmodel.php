<?php

namespace App\Models;

use CodeIgniter\Model;

class DatausersModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['id', 'email', 'username', 'fullname', 'password_hash', 'user_img'];
}

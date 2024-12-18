<?php

namespace App\Models;

use CodeIgniter\Model;

class Matkul extends Model
{
    protected $table = 'matkul';
    protected $primaryKey = 'id_matkul';
    protected $allowedFields = ['id_matkul', 'matkul', 'sks'];

}

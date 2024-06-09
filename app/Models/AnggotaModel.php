<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model {
        protected $table = 'anggota';
        protected $primay_key = "user_id";
}
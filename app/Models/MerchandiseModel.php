<?php

namespace App\Models;

use CodeIgniter\Model;

class MerchandiseModel extends Model {
        protected $table = 'merchandise';
        protected $allowedFields = ['name', 'price','desc','img'];
}
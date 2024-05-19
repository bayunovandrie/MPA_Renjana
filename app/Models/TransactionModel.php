<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model {
        protected $table = 'transaction';
        protected $primay_key = 'transaction_id';

        protected $allowedFields = ['transaction_number', 'merch_id', 'nama_pembeli', 'alamat_pembeli', 'nama_penerima', 'alamat_penerima', 'nohp_penerima', 'price', 'created_at'];
        
}
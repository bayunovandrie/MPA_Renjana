<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Merchandise extends BaseController
{

    public function index()
    {  
        $data['product'] = [
                [
                    "id" => 1,
                    "name" => "Baju",
                    "price" => "15000",
                    "desc" => "Baju Merchandise Untuk Sehari hari",
                    "img" => "baju.jpg"
                ],
                [
                    "id" => 2,
                    "name" => "Bucket",
                    "price" => "10000",
                    "desc" => "Bucket Untuk Naik Gunung",
                    "img" => "bucket.jpg"
                ],
                [
                    "id" => 3,
                    "name" => "Tas Gunung",
                    "price" => "50000",
                    "desc" => "Tas Untuk Naik Gunung",
                    "img" => "tas.jpg"
                ],
                [
                    "id" => 4,
                    "name" => "Sepatu",
                    "price" => "100000",
                    "desc" => "Sepatu Untuk Naik Gunung",
                    "img" => "sepatu.jpg"
                ]
            ];
        return view('main/merchandise/page_index', $data);
    }
}
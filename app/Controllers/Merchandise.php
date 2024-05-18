<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\MerchandiseModel;

class Merchandise extends BaseController
{

    protected $merchModel;
    public function __construct()
    {
        $this->merchModel = New MerchandiseModel();
    }

    public function index()
    {  

        $product = $this->merchModel->findAll();
        
        $data['product'] = $product;
        return view('main/merchandise/page_index', $data);
    }

    public function detail($id)
    {
        $data['merchandise'] = $this->merchModel->where('id', $id)->first();
        

        return view('main/merchandise/page_detail', $data);
    }
}
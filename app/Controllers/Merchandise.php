<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\MerchandiseModel;
use App\Models\TransactionModel;

class Merchandise extends BaseController
{

    protected $merchModel;
    protected $transaction;
    public function __construct()
    {
        $this->merchModel = New MerchandiseModel();
        $this->transaction = New TransactionModel();
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

    public function order()
    {

        $data_post = $this->request->getVar();
        $data_for_db = [
            "transaction_number" => $this->transaction_number(),
            "merch_id" => $data_post['product_id'],
            "nama_pembeli" => $data_post['nama_pembeli'],
            "alamat_pembeli" => $data_post['alamat_pembeli'],
            "nama_penerima" =>  $data_post['nama_penerima'],
            "alamat_penerima" => $data_post['alamat_penerima'],
            "nohp_penerima" => $data_post['no_hp_penerima'],
            "price" => $data_post['price'],
            "created_at" => date('Y-m-d H:i:s')
        ];

        $this->transaction->save($data_for_db);

        return redirect()->to(base_url('konfirmasi_pembelian/' . $data_for_db['transaction_number'] ));

    }

    public function konfirmasi($trans_number)
    {
       $data['trans']  = $this->transaction->select('merchandise.name, merchandise.img ,  transaction.*') ->join('merchandise', 'transaction.merch_id = merchandise.id', 'left')->where('transaction_number', $trans_number)->first();
        return view('main/merchandise/page_konfirmasi', $data);
    }

    private function transaction_number()
    {
        $this->transaction->orderBy('created_at', 'DESC');
        $last = $this->transaction->first();

        if (empty($last)) {
            $running_number = '001';
            $format = date('Ymd') . $running_number;
        } else {

            $next_number = intval($last['transaction_id']) + 1;
            $running_number = str_pad($next_number, 3, '0', STR_PAD_LEFT);
            $format = date('Ymd') . $running_number;
        }

        return $format;
    }

}
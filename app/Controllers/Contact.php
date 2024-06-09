<?php

namespace App\Controllers;

use App\Models\AnggotaModel;

class Contact extends BaseController
{
    public function index()
    {
        $anggota = New AnggotaModel;

        $data['anggota'] = $anggota->findAll();

        return view('main/contact/page_index', $data);
    }
}
<?php

namespace App\Controllers;

class Kegiatan extends BaseController
{
    public function index()
    {
        return view('main/kegiatan/page_index');
    }
}
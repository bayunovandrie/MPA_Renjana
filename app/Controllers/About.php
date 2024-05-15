<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        return view('main/about/page_index');
    }
}
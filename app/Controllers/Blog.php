<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        return view('main/blog/page_index');
    }
}
<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        return view('main/contact/page_index');
    }
}
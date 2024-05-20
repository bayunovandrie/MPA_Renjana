<?php

function rupiah($angka) {

    return "Rp " . number_format($angka, 0 , ',', '.');
}

function image_url() :string
{
    return  base_url('assets/images/');
}
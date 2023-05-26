<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function index()
    {
        $image_url = base_url('public/images/sunglass');
        return view('Product/product');
    }
}

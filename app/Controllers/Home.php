<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
       // $this->load->helper('url'); 
        return view('Home/welcome');
    }
}

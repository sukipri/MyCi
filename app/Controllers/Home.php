<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['thalaman'] = "Welcome Upgrade Mate!!";
        return view('beranda',$data);
    }
    
}

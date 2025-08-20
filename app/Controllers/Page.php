<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function beranda(): string
    {
        $data['thalaman'] = "Welcome Upgrade Mate!!";
        return view('beranda',$data);
    }
     public function data1(): string
    {
        $data['thalaman'] = "List Data";
        return view('data1',$data);
    }
}

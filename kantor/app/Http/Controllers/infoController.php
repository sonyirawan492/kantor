<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class infoController extends Controller
{
    public function infoPgw($kd)
    {
        return view('info',['jabatan'=>$kd]);
    }
}

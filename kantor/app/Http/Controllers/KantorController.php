<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KantorController extends Controller
{
    public function index()
    {
        return view('kantor.main');
    }


    public function login()
    {
        return view('kantor.login');
    }
}
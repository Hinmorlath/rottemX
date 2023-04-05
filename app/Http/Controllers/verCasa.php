<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class verCasa extends Controller
{
    public function viendoCasa(){
        return view('Home/admin/verCasa');
    }
}
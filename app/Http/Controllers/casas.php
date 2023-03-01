<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class casas extends Controller
{
    public function verCasas(){
        return view('Home/casas');
    }
}

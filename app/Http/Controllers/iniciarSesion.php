<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class iniciarSesion extends Controller
{
    public function iniciarSesion(){
        return view('Home/iniciarSesion');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class agregarCasa extends Controller
{
    public function agregandoCasa(){
        return view('Home/admin/agregarCasa');
    }
}

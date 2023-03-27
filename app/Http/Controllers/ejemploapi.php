<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejemploapi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "Hola canija y buena amiga Arlette";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "Este es el post";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        echo "Este es del post";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo "Esta es la parte del update";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id = 1)
    {
        echo "Esta es la parte del delete";
    }
}

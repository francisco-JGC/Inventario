<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inventarioController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
    public function newProduct(){
        return view('newProduct');
    }
    public function inventario(){
        return view('inventario');
    }

}

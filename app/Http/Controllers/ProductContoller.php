<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductContoller extends Controller
{
    public function index($id = null){
        return view('Products.zabola',['id' => $id]);
    }
    public function show(){
        return view('Products.show');
    }
}

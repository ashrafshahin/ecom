<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function products(){
    	return view('backend.add_product');

    }
 // return view ta database theke asbe
    public function dataupload(){
    	
    }
}

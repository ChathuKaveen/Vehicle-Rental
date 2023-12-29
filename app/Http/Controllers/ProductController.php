<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index(){
        return view('brand_new.home');
    }

    function service(){
        return view('brand_new.service');
    }
    function vehi(){
        return view('brand_new.vehicle');
    }
    function about(){
        return view('brand_new.about');
    }
}

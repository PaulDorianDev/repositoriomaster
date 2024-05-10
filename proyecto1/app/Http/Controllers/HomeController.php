<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
         $name="Paul";
        return view('welcome', compact('name'));
    }
}

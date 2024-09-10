<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class avionesController extends Controller
{
    public function index()
    {
        return view('crearaviones'); 
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rvuelosController extends Controller
{
    public function index()
    {
        return view('crearrutas'); 
    }
}

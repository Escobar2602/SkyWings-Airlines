<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tiketController extends Controller
{
    public function index()
    {
        return view('tiket'); 
    }
}

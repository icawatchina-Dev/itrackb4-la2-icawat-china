<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrgyController extends Controller
{
    public function index()
    {
        
        return view('brgys.index');
    }
}

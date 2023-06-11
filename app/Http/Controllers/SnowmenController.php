<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SnowmenController extends Controller
{
    public function index(){
        return view('snowmen.index');
    }
}

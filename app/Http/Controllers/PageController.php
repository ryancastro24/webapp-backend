<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('layouts/welcome');
    }

    public function sample(){
        return view('layouts/sample');
    }
}

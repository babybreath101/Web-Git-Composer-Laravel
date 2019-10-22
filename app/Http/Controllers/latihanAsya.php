<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class latihanAsya extends Controller
{
    public function index() {
        return view ('dashboard');
    }
}

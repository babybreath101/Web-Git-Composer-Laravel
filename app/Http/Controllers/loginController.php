<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function indexLogin() {
        return view ('login');
    }

    public function indexRegister() {
        return view ('register');
    }
}

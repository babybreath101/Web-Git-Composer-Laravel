<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function indexHome() {
        return view ('halamanHome');
    }

    public function indexHalamanPertama() {
        return view ('halamanPertama');
    }

    public function indexHalamanKedua() {
        return view ('halamanKedua');
    }

    public function indexHalamanKetiga() {
        return view ('halamanKetiga');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return "Selamat Datang";
    }

    public function about() {
        return "NIM = 1941720065 \nNAMA = Awang Syukriansah Dirgantoro";
    }

    public function articles($id) {
        return "Halaman artikel dengan id ".$id;
    }
}

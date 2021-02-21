<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home(){
        return '<a href="https://www.educastudio.com/">https://www.educastudio.com/</a>';
    }

    public function product($link){
        return '<a href="https://www.educastudio.com/category/'.$link.'">https://www.educastudio.com/category/'.$link.'</a>';
    }

    public function news(){
            return '<a href="https://www.educastudio.com/news">https://www.educastudio.com/news</a>';
    }

    public function newsl($link){
            return '<a href="https://www.educastudio.com/news/'.$link.'">https://www.educastudio.com/news/'.$link.'</a>';
    }

    public function program($link){
        return '<a href="https://www.educastudio.com/program/'.$link.'">https://www.educastudio.com/program/'.$link.'</a>';
    }

    public function us(){
        return '<a href="https://www.educastudio.com/contact-us">https://www.educastudio.com/contact-us</a>';
    }
}

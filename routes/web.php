<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* Router default
Route::get('/', function () {
    return view('welcome');
});
*/

/* Praktikum 1 
Route::get('/', function () {
    echo "Selamat Datang";
});

Route::get('/about', function () {
    echo "NIM = 1941720065 NAMA = Awang Syukriansah Dirgantoro";
});

Route::get('/articles/{id}', function ($id) {
    echo "Halaman artikel dengan id ".$id;
});
*/

/* Praktikum 2 
Route::get('/', [HomeController::class,'home']);

Route::get('/about', [AboutController::class,'about']);

Route::get('/articles/{id}', [ArticleController::class,'articles']);
*/

/* Praktikum 3 
Route::get('/home', [ProductController::class,'home']);

Route::prefix('product')->group(function () {
    Route::get('/{link}', [ProductController::class,'product']);
});

Route::get('/news', [ProductController::class,'news']);

Route::get('/news/{link}', [ProductController::class,'newsl']);

Route::prefix('program')->group(function () {
    Route::get('/{link}', [ProductController::class,'program']);
});

Route::get('/about-us', function () {
    echo '<a href="https://www.educastudio.com/about-us">https://www.educastudio.com/about-us</a>';
});

Route::get('/contact-us', [ProductController::class,'us']);
*/
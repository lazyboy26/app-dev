<?php

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

Route::get('/', function () {
    return view('main/home',
    [
        'title' => 'Home'
    ]
    );
});
Route::get('/shop', function () {
    return view('main/shop',
    [
        'title' => 'Shop'
    ]
    );
});
Route::get('/about', function () {
    return view('main/about',
    [
        'title' => 'About'
    ]
    );
});
Route::get('/singlePage', function () {
    return view('main/singlePage',
    [
        'title' => 'Detail produk'
    ]
    );
});
Route::get('/login', function () {
    return view('main/loginPage',
    [
        'title' => 'Login Page'
    ]
    );
});

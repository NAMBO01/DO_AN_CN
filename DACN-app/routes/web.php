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

Route::get(
    '/',
    'App\Http\Controllers\SanPhamController@san_pham_moi'
);


Route::get(
    '/product ',
    'App\Http\Controllers\SanPhamController@index'
);
Route::get(
    '/product/pagination/{current_page}',
    'App\Http\Controllers\SanPhamController@pagination'
);

Route::get('/single ', function () {
    return view('single');
});
Route::get('/checkout ', function () {
    return view('checkout');
});
Route::get('/contact ', function () {
    return view('contact');
});

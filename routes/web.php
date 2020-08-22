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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Auth::routes(['register' => false, 'reset' => false, 'verify' => false]);

Route::get('/', 'Front\MainController@index')->name('front');

Route::get('/katalog', 'Front\MainController@katalog')->name('katalog');

Route::get('/katalog/produk', 'Front\MainController@produk')->name('produk');

Route::get('/katalog/produk/detail', 'Front\MainController@detail_produk')->name('detail_produk');

Route::get('/admin', 'Back\MainController@index')->name('back');

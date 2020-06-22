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
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'AboutController@about')->name('about');
Route::get('/contact', 'ContactController@contact')->name('contact');
Route::get('/order', 'OrderController@order')->name('order');
Route::get('/order/demo', 'OrderController@single')->name('single_order');
Route::get('/order/history', 'OrderController@index')->name('history');
Route::get('/cart', 'CartController@cart')->name('cart');
Route::get('/shop', 'ShopController@shop')->name('shop');
Route::get('/track-order', 'OrderController@track')->name('track');
Route::get('/faq', 'FAQController@index')->name('faq');







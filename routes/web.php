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

Route::get('/verification', 'Auth\VerificationController@verify')->name('verify');
Route::patch('verification/{id}', 'Auth\VerificationController@checkVerification');


Route::get('/about', 'PageController@about')->name('about');
Route::get('/terms', 'PageController@terms')->name('terms');
Route::get('/policy', 'PageController@policy')->name('policy');

Route::get('/contact', 'ContactController@contact')->name('contact');

Route::get('/shop', 'ShopController@shop')->name('shop');

Route::get('/order', 'OrderController@order')->name('order');
Route::get('/order/view', 'OrderController@single')->name('single_order');
Route::get('/order/history', 'OrderController@index')->name('history')->middleware('auth');
Route::get('/favorite', 'OrderController@favorite')->name('favorite')->middleware('auth');
Route::get('/order/track', 'OrderController@track')->name('track')->middleware('auth');
Route::get('/auth/order', 'OrderController@geAuthOrder');
Route::get('auth/order/search', 'OrderController@authSearch');

Route::get('/cart', 'CartController@cart')->name('cart')->middleware('auth');

Route::post('user/login', 'Auth\UserController@authenticate');

Route::get('/faq', 'FAQController@index')->name('faq');


Route::get('/success', 'PageController@success')->name('success')->middleware('auth');




<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::patch('verification/{id}', 'Auth\VerificationController@checkVerification');
Route::post('resend-code', 'Auth\VerificationController@resendCode');

Route::post('/order', 'OrderController@saveOrder');
Route::get('/order', 'OrderController@getOrder');
Route::get('/order/search', 'OrderController@search');
Route::patch('/order/{id}', 'OrderController@orderUpdate');

Route::get('/order/{id}', 'OrderController@showOrder');
Route::get('/order/all/pending', 'OrderController@pendingOrder');
Route::get('/order/all/confirm', 'OrderController@confirmOrder');
Route::get('/all/order', 'OrderController@allOrder');

Route::get('/user/search', 'Auth\UserController@search');
Route::get('/user/all', 'Auth\UserController@allUser');

//Route::post('user/login', 'Auth\UserController@authenticate');
//Route::post('user/logout', 'Auth\UserController@logout');

Route::apiResources([
    'user' => 'Auth\UserController',
]);

<?php

use Illuminate\Http\Request;

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

Route::post('/login', 'Api\UserController@login');

/* ROTAS PROTEGIDAS PELO JWT */
Route::group(['middleware' => ['apiJwt']], function(){
    Route::get('/me', 'Api\UserController@me');
});

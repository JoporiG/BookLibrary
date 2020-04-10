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
Route::post('/book/add', 'BookController@add');
Route::get('/book/all', 'BookController@all');
Route::get('/book/delete/{id}', 'BookController@delete');
Route::get('/book/change_availabilty/{id}', 'BookController@changeAvailabilty');
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

Route::get('motor','motorController@index' );
Route::resource('categories', 'CategoriesController');
Route::resource('product', 'ProductController');

// ======== Family Tree =======

Route::get('parent', 'ParentController@index');
Route::get('childs', 'ChildController@index');

Route::get('customer', 'Api\CustomerController@index');
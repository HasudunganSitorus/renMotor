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
});


// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('admin/motor', 'motorController');
Route::resource('admin', 'adminController');
Route::resource('motor', 'motorController');
Route::get('motorr/{id}/tambah', 'motorController@tambah');
Route::resource('penyewa', 'PenyewaController');
Route::resource('perbaikan', 'PerbaikanController');
Route::resource('layanan', 'ServiceController');
Route::resource('rental', 'RentalController');
Route::resource('kondisi', 'KondisiController');
// =====================
Route::resource('family', 'FamilyController');
// ==============
Route::resource('school', 'SchoolController');
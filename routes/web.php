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
Route::get('dang-nhap',['uses'=>'LoginController@show'])->name('login');
Route::post('checklogin',['uses'=>'LoginController@checklogin'])->name('checklogin');
Route::group(['prefix'=>'admin','middleware'=>'admin'],function () {
    Route::get('index', ['uses'=>'AdminController@index'])->name('ad_index');
    Route::get('logout',['uses'=>'LoginController@logout'])->name('ad_logout');
});
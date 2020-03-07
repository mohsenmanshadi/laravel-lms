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

//admin routes
Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware'=>'role:admin'],function(){
    Route::get('/','AdminController@index')->name('admin-home');
    Route::get('/episodes','EpisodesController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

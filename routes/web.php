<?php

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
Auth::routes();
Route::get('/', function () { return view('welcome'); });
Route::get('/home', 'HomeController@index')->name('home');
Route::get('rooms', 'Admin\RoomController@index')->name('rooms');
Route::get('rooms/index', function (){ return view('admin/addRoom');})->name('formroom');
Route::post('rooms/index/add', 'Admin\RoomController@addRoom')->name('addroom');
Route::match(['get', 'post'], 'rooms/index/edit', ['uses' => 'Admin\RoomController@editRoom', 'as' => 'edit']);
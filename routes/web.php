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

/*Route::get('/', function () {
    return view('home');
});*/

/*landing page*/
Route::get('/','TampilanController@index');

/*Halaman login*/
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');


/*Halaman Admin*/
Route::group(['middleware'=>'auth'], function(){
		Route::get('/novel','NovelController@index');
		Route::post('/novel/create','NovelController@create');
		Route::get('/novel/{id}/edit', 'NovelController@edit');
		Route::post('/novel/{id}/update', 'NovelController@update');
		Route::get('/novel/{id}/delete', 'NovelController@delete');

		Route::get('/novel/export_excel', 'NovelController@export_excel');

		Route::get('/penulis', 'PenulisController@index');
		Route::post('/penulis/create','PenulisController@create');
		Route::get('/penulis/{id}/edit', 'PenulisController@edit');
		Route::post('/penulis/{id}/update', 'PenulisController@update');
		Route::get('/penulis/{id}/detail', 'PenulisController@detail');
});
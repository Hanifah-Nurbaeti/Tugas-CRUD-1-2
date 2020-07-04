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

Route::get('/pertanyaan', 'PertanyaanController@index');//tampil semua
Route::get('/pertanyaan/create','PertanyaanController@create');//tampil form
Route::post('/pertanyaan','PertanyaanController@store');//simpen data

Route::get('/pertanyaan/{id}','PertanyaanController@show');//tampil berdasar id

Route::get('/pertanyaan/{id}/edit','PertanyaanController@edit');//tampil form tanyak
Route::put('/pertanyaan/{id}','PertanyaanController@update');//simpen perubahan edt
Route::delete('/pertanyaan/{id}','PertanyaanController@destroy');//hapus

Route::get('/jawaban/{id_pertanyaan}','JawabanController@index');
Route::post('/jawaban/{id_pertanyaan}','JawabanController@store');
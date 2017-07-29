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

Route::get('/', function () {
    return redirect('/formdata');
});

Route::post('/user/','InfoController@saveUser');
Route::get('/user/',function (){
    return redirect('/formdata');
});

Route::get('/formdata/','InfoController@data');

Route::get('/pdf/{email}','PdfController@index');
Route::get('/pdf','PdfController@users');

Route::get('show','InfoController@show');


Auth::routes();




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
    return view('welcome');
});
//Rest full arhitektura

//Uzorci
//SELECT * iz baze (index.blade.php)
Route::get('/articles', 'ArticlesController@index'); //prikaz svih podatka iz baze
Route::get('/articles/show/{id}', 'ArticlesController@show'); //prikaz 1 kolone iz baze

//INSERT u bazu (create.blade.php)
Route::post('/articles', 'ArticlesController@store'); //request koji storuje u bazu
Route::get('/articles/create', 'ArticlesController@create'); //ruta do forme za unos podatka

//UPDATE podataka u bazi (edit.blade.php)
Route::put('/articles/{id}', 'ArticlesController@update'); //request koji updatuje podatke sa forme
Route::get('/articles/edit/{id}', 'ArticlesController@edit'); //trazi odredjeni id i prosledjuje ga na formu

//DELETE podatka iz baze
Route::get('/articles/delete/{id}', 'ArticlesController@destroy'); //prosledjujemo mu koji id da birse

//Analize
Route::get('/analize', 'AnalizeController@index'); //prikaz svih podatka iz baze
Route::get('/analize/show/{id}', 'AnalizeController@show'); //prikaz 1 kolone iz baze

//INSERT u bazu (create.blade.php)
Route::post('/analize', 'AnalizeController@store'); //request koji storuje u bazu
Route::get('/analize/create', 'AnalizeController@create'); //ruta do forme za unos podatka

//UPDATE podataka u bazi (edit.blade.php)
Route::put('/analize/{id}', 'AnalizeController@update'); //request koji updatuje podatke sa forme
Route::get('/analize/edit/{id}', 'AnalizeController@edit'); //trazi odredjeni id i prosledjuje ga na formu

//DELETE podatka iz baze
Route::get('/analize/delete/{id}', 'AnalizeController@destroy'); //prosledjujemo mu koji id da birse


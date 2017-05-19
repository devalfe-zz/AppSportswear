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
#dd(env('APP_VERSION'));
#Route::get('/', function(){
#    return 'hols Devalfe';
#});

#Route::get('usuarios/{nombre}', function($nombre) {
    //
#    return $nombre;
#});

#Route::get('blade', function () {
#    return view('about');
#});

Route::get('/', 'pagesController@template');
Route::get('/about', 'pagesController@about');
Route::get('/contact', 'pagesController@contact');


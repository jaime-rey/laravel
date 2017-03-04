<?php


//dd(env('APP_VERSION'));
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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/homer', 'PagesController@home2');
Route::get('/contact', 'TicketsController@create');

Route::get('/homebis', function () {
	return 'hola mundo01';
});

Route::get('/test', function ( ) {
	return '<h1>Probando tags</h1><br/><h2>En teoría, irá bien!</h2>';
});

Route::get( '/usuario/{nombre}', function ($nombre){
    return '<h1>'.$nombre.'</h1>';
});

Route::get('/home', 'HomeController@__home');
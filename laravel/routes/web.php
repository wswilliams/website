<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/app', function () {
    return view('app/login');
});
Route::get('/app-welcome', function () {
	
	return view('app/welcome');
	
});
// Route::get('/perfil', function () {
//     return view('app/perfil');
// });
// Route::get('/financeiro', function () {
//     return view('app/financeiro');
// });

Route::get('/', function () {
    return view('site/index');
});


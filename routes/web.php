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
    return view('login.login');
});
// Route::get('/ingresar', function () {
//     return view('welcome');
// });
Route::post('/ingresar','HomeController@actionIngresar');
Route::get('/invoice', function () {
    return view('invoice');
});

Route::get('{path}', "HomeController@index")->where('path','([A-z\d/-\/_.]+)?');
// Route::get('{path}', "HomeController@index")->where('path','([A-z\d-\/_.]+)?'); esto me funciono en mi servidor
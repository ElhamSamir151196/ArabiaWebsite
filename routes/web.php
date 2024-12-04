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


Route::get('/show_all_user','UserController@index');
Route::post('/create_user','UserController@store');


Route::get('/Register', function () {
    return view('Register');
});
Route::get('/create_user_admin_or_company', function () {
    return view('Dashboard/User/Create');
});

Route::get('/dashboard', function () {
    return view('Dashboard/Dashboard_main');
});







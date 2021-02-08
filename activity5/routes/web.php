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
    return view('index');
});

Route::post('/whoami','App\Http\Controllers\WhatsMyNameController@index');

Route::get('/askme', function () { return view('whoami'); });

Route::get('/login', function () {
    return view('login');
});
Route::get('/login2', function ()
{
    return view('login2');
});
Route::get('/login3', function ()
{
    return view('login3');
});


Route::post('/dologin','App\Http\Controllers\LoginController@index');
Route::post('/dologin3', 'App\Http\Controllers\Login3Controller@index');

Route::resource('/usersrest', 'App\Http\Controllers\UsersRestController');

Route::get('/testapi', 'App\Http\Controllers\RestClientController@index');

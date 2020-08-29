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
    return view('auth/login');
});

Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth']], function () {

    //Route::get('createuser', 'UserController@createUser');

    /*RUTAS OPCIONES DE USUARIO*/
    //Route::view('panel/password', 'admin/password')->name('panel.password.form');
    //Route::post('panel/cambioPsw', 'Auth\ChangePasswordController@cambioPsw')->name('panel.password.change');

    Route::group(['middleware' => ['permits']], function () {

        Route::view('panel', 'dashboard')->name('panel.show');
    
    });

});
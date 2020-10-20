<?php

use Illuminate\Support\Facades\Route;

//login
Route::get('login','Auth\LoginController@showLogin')->name('login');
Route::post('login','Auth\LoginController@login')->name('loadloging');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard');

Route::group(['prefix' => 'administracion','namespace'=>'Administration','middleware'=>'auth'], function () {
    Route::get('/', function () {
        return view('Administracion.index');
    })->name('administracion');
    Route::resource('empresa', 'CompanyController')->only(['index']);
    Route::resource('area_cargo', 'AreaPossitionController')->only(['index']);
    Route::resource('rol_permiso', 'RolePermissionController')->only(['index']);
    Route::resource('personal', 'PersonalController')->only(['index']);
    Route::resource('usuarios', 'UserController')->only(['index']);
    Route::resource('productos', 'ProductController')->only(['index']);
});

Route::group(['prefix' => 'mantenimiento','namespace'=>'Maintenance','middleware'=>'auth'], function () {
    Route::get('/', function () {
        return view('Mantenimiento.index');
    })->name('mantenimientos');
    Route::resource('docidentidad', 'KindidentificationController')->only(['index']);
    Route::resource('canales_atencion', 'ChannelController')->only(['index']);
    Route::resource('clasificacion_inc', 'ClassificationController')->only(['index']);
});
//Route::get('areadata', 'Administration\AreaPossitionController@AreaData')->name('areadata');
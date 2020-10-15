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
    return view('layouts.app');
});

Route::group(['prefix' => 'administracion','namespace'=>'Administration'], function () {
    Route::get('/', function () {
        return view('Administracion.index');
    })->name('administracion');
    Route::resource('empresa', 'CompanyController')->only(['index']);
    Route::resource('area_cargo', 'AreaPossitionController')->only(['index']);
    Route::resource('rol_permiso', 'RolePermissionController')->only(['index']);
    Route::resource('personal', 'PersonalController')->only(['index']);
    Route::resource('productos', 'ProductController')->only(['index']);
});

Route::group(['prefix' => 'mantenimiento','namespace'=>'Maintenance'], function () {
    Route::get('/', function () {
        return view('Mantenimiento.index');
    });
    Route::resource('docidentidad', 'KindidentificationController');
});
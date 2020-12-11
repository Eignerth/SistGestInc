<?php

use Illuminate\Support\Facades\Route;


//login
Route::get('login','Auth\LoginController@showLogin')->name('login');
Route::post('login','Auth\LoginController@login')->name('loadloging');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard');

//soporte
Route::group(['prefix' => 'soporte','namespace'=>'Support','middleware'=>'auth'], function () {
    Route::get('/', function () {
        return view('Soporte.index');
    })->name('soporte');
    Route::resource('tickets', 'TksupportmController')->only(['index'])->names('tickets-support');
    Route::get('tickets/{ticket:serie}', 'TksupportmController@show')->name('tickets-support.show');
    Route::get('reporte_ticket/{id}','ReportsController@support')->name('ReporteSoporte.ticket');
});


//clientes
Route::group(['prefix' => 'clientes','namespace'=>'Customer','middleware'=>'auth'], function () {
    Route::get('/', function () {
        return view('Clientes.index');
    })->name('clientes');
    Route::resource('soporte_de_clientes', 'CustomerController')->only(['index']);
    Route::resource('contactos', 'ContactController')->only(['index']);
});


//administracion
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


//mantenimiento de tablas
Route::group(['prefix' => 'mantenimiento','namespace'=>'Maintenance','middleware'=>'auth'], function () {
    Route::get('/', function () {
        return view('Mantenimiento.index');
    })->name('mantenimientos');
    Route::resource('docidentidad', 'KindidentificationController')->only(['index']);
    Route::resource('canales_atencion', 'ChannelController')->only(['index']);
    Route::resource('clasificacion_inc', 'ClassificationController')->only(['index']);
    Route::resource('estado_de_avance', 'TkstatusController')->only(['index']);
    Route::resource('estado_de_prioridad', 'PrioritieController')->only(['index']);
    Route::resource('control_de_serie', 'TicketsmController')->only(['index']);
});
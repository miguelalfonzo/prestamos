<?php

/*
|--------------------------------------------------------------------------
| Web Routes PRESTAMOS
|--------------------------------------------------------------------------
*/



Route::get('/sql', function () {
    
});

//autenticacion 

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

//registro de la solicitud 


Route::get('/solicitudes', 'SolicitudController@index');
Route::get('/get_intendencia','SolicitudController@get_intendencia');
Route::get('/get_cuenta','SolicitudController@get_cuenta');
Route::get('/get_banco','SolicitudController@get_banco');
Route::get('/get_ubigeo','SolicitudController@get_ubigeo');

//Route::get('/get_provincia','SolicitudController@get_provincia');
//Route::get('/get_distrito', 'SolicitudController@get_distrito');

Route::get('/get_persona', 'SolicitudController@get_persona');
Route::get('/get_cab_monto_tipo_prestamo', 'SolicitudController@get_cab_monto_tipo_prestamo');
Route::get('/get_det_monto_tipo_prestamo', 'SolicitudController@get_det_monto_tipo_prestamo');

Route::get('/get_solicitud', 'SolicitudController@get_solicitud');


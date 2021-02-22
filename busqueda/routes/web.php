<?php

Route::get('/',['as' => 'inicio', 'uses' => 'BusquedaController@index']);
Route::get('datos',['as' => 'datos.anyData', 'uses' => 'BusquedaController@anyDataBusqueda']);


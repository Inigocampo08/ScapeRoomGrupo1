<?php

use Illuminate\Support\Facades\Route;

Route::view('/','login');

Route::view('/register','register');

Route::view('/login','login');

Route::view('/header','header');

Route::view('/ventanaPuntuacion','ventanaPuntuacion');

Route::view('/ventanaPrueba','ventanaPrueba');

Route::view('/ventanaGrupos','ventanaGrupos');

Route::view('/ventanaEstadisticas','ventanaEstadisticas');

Route::view('/menuPrincipal','menuPrincipal');

// Route::get('/menuPrincipal', function(){
//     return 'menuPrincipal';
// });

Route::view('/areaPersonal','areaPersonal');
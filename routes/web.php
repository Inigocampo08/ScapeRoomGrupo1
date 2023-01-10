<?php

use Illuminate\Support\Facades\Route;

Route::view('/','menuPrincipal')->name('home');

Route::view('/register','register')->name('register');

Route::view('/login','login')->name('login');

Route::view('/ventanaPuntuacion','ventanaPuntuacion')->name('ventanaPuntuacion');

Route::view('/ventanaPrueba','ventanaPrueba')->name('ventanaPrueba');

Route::view('/ventanaGrupos','ventanaGrupos')->name('ventanaGrupos');

Route::view('/ventanaEstadisticas','ventanaEstadisticas')->name('ventanaEstadisticas');

Route::view('/menuPrincipal','menuPrincipal');

Route::view('/header','header');

// Route::get('/menuPrincipal', function(){
//     return 'menuPrincipal';
// });

Route::view('/areaPersonal','areaPersonal');
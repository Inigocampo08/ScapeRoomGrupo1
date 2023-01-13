<?php

use Illuminate\Support\Facades\Route;

Route::view('/','login')->name('login');

Route::view('/register','register')->name('register');

Route::view('/areaPersonal','areaPersonal')->name('areaPersonal');

Route::view('/ventanaPuntuacion','ventanaPuntuacion')->name('ventanaPuntuacion');

Route::view('/ventanaPrueba','ventanaPrueba')->name('ventanaPrueba');

Route::view('/ventanaGrupos','ventanaGrupos')->name('ventanaGrupos');

Route::view('/ventanaInformacion','ventanaInformacion')->name('ventanaInformacion');

Route::view('/menuPrincipal','menuPrincipal')->name('home');

Route::view('/header','header');

Route::view('/puntuaciones','puntuaciones')->name('puntuaciones');
Route::view('/juego1','juego1')->name('juego1');



// Route::get('/menuPrincipal', function(){
//     return 'menuPrincipal';
// });


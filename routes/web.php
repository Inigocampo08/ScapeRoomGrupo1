<?php

use App\Http\Controllers\RegisternController;
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

Route::view('/juego2','juego2')->name('juego2');
Route::view('/juego3','juego3')->name('juego3');
Route::view('/juego4','juego4')->name('juego4');
Route::view('/juego5','juego5')->name('juego5');
Route::view('/juego6','juego6')->name('juego6');

Route::post('/registro', [RegisternController::class, 'store'])->name('register.store');




// Route::get('/menuPrincipal', function(){
//     return 'menuPrincipal';
// });


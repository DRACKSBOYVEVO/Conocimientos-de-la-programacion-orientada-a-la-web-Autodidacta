<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/portafolio', 'PortafolioController')->name('Portafolio');
Route::view('/contact', 'contact')->name('contact');

//RETORNANDO VISTAS
//Route::get('/', function(){});
//Route::get('/', function(){
	//return view('home');
//})->name('home');//nombre de la ruta

//Route::get('/', function(){
	//return view('Login');
//})->name('Login');//le estoy dando nombre a la ruta



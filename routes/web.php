<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//colegio
Route::get('cole', function () {
    return view('cole');
})->name('cole');

//barberia
Route::get('barber', function () {
    return view('barber');
})->name('barber');

//biblioteca
Route::get('biblio', function () {
    return view('biblio');
})->name('biblio');

//floreria
Route::get('flor', function () {
    return view('flor');
})->name('flor');

//restaurante
Route::get('restaurant', function () {
    return view('restaurant');
})->name('restaurant');

Route::get('welcome', function () {
    return view('welcome');
})->name('welcome');

<?php

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
    return "<h1>Pantalla Principal</h1>";
});

Route::get('/login', function() {

    return "<h1>Pantalla Login</h1>";
});

Route::get('/logout', function() {

    return "<h1>Pantalla Logout</h1>";
});

Route::get('/catalog', function() {

    return "<h1>Pantalla Listado Películas</h1>";
});

Route::get('/catalog/show/{id}', function() {

    return "<h1>Pantalla Vista detalle de película</h1>";
});

Route::get('/catalog/create', function() {

    return "<h1>Pantalla Añadir Película</h1>";
});

Route::get('/catalog/edit/{id}', function() {

    return "<h1>Pantalla Modificar película</h1>";
});

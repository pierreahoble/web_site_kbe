<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


// a propos view
Route::view('a-propos','pages.apropos');

// service view
Route::view('nos-services', 'pages.service');

//Service details
Route::view('detail-service/{id}','pages.service-detail');

//equipe view
Route::view('notre-equipe', 'pages.equipe');

//Equipe details
Route::view('detail-equipe/{id}', 'pages.equipe-detail');

//contact view

Route::view('nous-contacter', 'pages.contact');

//Login
Route::view('login','pages.login');

//Register
Route::view('register', 'pages.register');

//projet
Route::view('etude-de-cas', 'pages.projet');

//Details etude de cas
Route::view('etude-de-cas-detail/{id}', 'pages.projet-detail');
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inscription');
});
Route::get('/inscription', function () {
    return view('inscription');
});
Route::get('/connexion', function () {
    return view('connexion');
});
Route::get('/pass_oublie', function () {
    return view('forget_pass');
});
Route::get('/accueil', function () {
    return view('accueil');
});
Route::get('voter', function () {
    return view('voter');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/compte', function () {
    return view('compte');
});
Route::get('/news', function () {
    return view('news');
});
Route::post('/inscription/traitement',[UserController::class,'inscription']);
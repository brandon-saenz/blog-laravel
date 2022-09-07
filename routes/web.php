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


    //get. post, put, patch
*/

// Route::get('/', function () {
//     $title='Hola, estoy de regreso en Laravel';
//     return view('welcome', ['title'=>$title]);
// });

Route::get('/',[\App\Http\Controllers\InicioController::class, 'index']);
Route::post('/guardar',[\App\Http\Controllers\InicioController::class, 'guardar']);


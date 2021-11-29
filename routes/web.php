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

Route::get('index', [App\Http\Controllers\GHLController::Class, 'index']);

Route::get('aboutus', [App\Http\Controllers\GHLController::Class, 'aboutus']);

Route::get('contact', [App\Http\Controllers\GHLController::Class, 'contact']);

Route::get('projects', [App\Http\Controllers\GHLController::Class, 'projects']);

Route::get('services', [App\Http\Controllers\GHLController::Class, 'services']);

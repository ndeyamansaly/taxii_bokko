<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('/admin.home', [App\Http\Controllers\HomeController::class, 'adminHome'])
->name('admin.home')->middleware('is_admin');

Route::get('/passager', function () {
    return view('passager');
});

Route::get('/inscription', function () {
   return view('inscriptionP');
});

Route::get('/login1', function () {
    return view('loginP');
});

Route::get('/A propos', function () {
    return view('apropos');
});

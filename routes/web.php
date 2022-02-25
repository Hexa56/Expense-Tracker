<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenceController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [ExpenceController::class, 'show'])->name('expence.dashboard');
Route::post('/addexpense',[ExpenceController::class, 'store'])->name('add');
Route::get('/addexpense', [ExpenceController::class, 'create'])->name('create');
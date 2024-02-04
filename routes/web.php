<?php

use App\Http\Controllers\Application\ApplicationController;
use App\Http\Controllers\Application\BlogController;
use App\Http\Controllers\Application\ContactController;
use App\Http\Controllers\Application\UsesController;
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

Route::get('/', ApplicationController::class)->name('home');

Route::resource('blog', BlogController::class)->only('index','show');

Route::get('contact', ContactController::class)->name('contact');

Route::get('uses', UsesController::class)->name('uses');

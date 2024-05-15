<?php

use App\Http\Controllers\ProfileController;
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


Route::get('/home', function () {return view('home.index');})->name('home');
Route::get('/', function () {return view('home.index');})->name('home');
Route::get('/about', function () {return view('partials.about');})->name('about');
Route::get('/pricing', function () {return view('partials.pricing');})->name('pricing');
Route::get('/blog', function () {return view('partials.blog');})->name('blog');
Route::get('/cars', function () {return view('partials.cars');})->name('cars');
Route::get('/contact', function () {return view('partials.contact');})->name('contact');
Route::get('/services', function () {return view('partials.services');})->name('services');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

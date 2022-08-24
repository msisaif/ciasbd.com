<?php

namespace App\Http\Controllers;

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

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::controller(PageController::class)->group(function () {
    Route::get('/about', 'about')->name('about');
    
    Route::get('/contact', 'contact')->name('contact');

    Route::get('/faq', 'faq')->name('faq');
});

Route::get('/login', [Auth\LoginController::class, 'create'])
    ->name('login');

Route::get('/register', [Auth\RegisterController::class, 'create'])
    ->name('register');

Route::controller(CourseController::class)->prefix('courses')->name('courses.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{course}', 'show')->name('show');
});
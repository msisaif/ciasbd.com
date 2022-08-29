<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/php-artisan/{command}/{parameters?}', function ($command, $parameters = []) {
    $allowCommands = [
        "migrate:install",
        "migrate:status",
        "migrate",
        "key:generate",
        "storage:link",
        "route:cache",
        "route:clear",
        "view:cache",
        "view:clear",
        "cache:clear",
        "config:cache",
        "config:clear",
    ];

    if($command == 'list') {
        return $allowCommands;
    }

    if(!in_array($command, $allowCommands)) {
        return "Not Allow";
    }

    Artisan::call($command, $parameters);

    dd(Artisan::output());
});

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

Route::controller(Auth\LoginController::class)->middleware('guest')->group(function () {
    Route::get('/login', 'create')->name('login');
    Route::post('/login', 'store');
    Route::post('/logout', 'destroy')->name('logout')->middleware('auth');
});

Route::controller(Auth\RegisterController::class)->middleware('guest')->group(function () {
    Route::get('/register', 'create')->name('register');
    Route::post('/register', 'store');
});

Route::controller(CourseController::class)->prefix('courses')->name('courses.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{course}', 'show')->name('show');
});
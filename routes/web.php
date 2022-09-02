<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::controller(Auth\LoginController::class)->prefix('login')->middleware('guest')->group(function () {
    Route::get('/', 'create')->name('login');
    Route::post('/', 'store');
});

Route::controller(Auth\LogoutController::class)->prefix('logout')->middleware('auth')->group(function () {
    Route::delete('/', 'destroy')->name('logout');
});

Route::controller(Auth\RegisterController::class)->prefix('register')->middleware('guest')->group(function () {
    Route::get('/', 'create')->name('register');
    Route::post('/', 'store');
});

Route::controller(CourseController::class)->prefix('courses')->name('courses.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{course}', 'show')->name('show');
    Route::get('/{course}/learn/{content?}', 'learn')->name('learn')->middleware('auth');
});

Route::controller(DashboardController::class)->prefix('dashboard')->group(function () {
    Route::get('/', 'index')->name('dashboard');
});
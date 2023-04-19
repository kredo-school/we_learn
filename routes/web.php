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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['middleware' => 'auth'], function () {

    // Route::get('/settings', function () {
    //     return view('auth.settings');
    // })->name('settings');
});

Route::get('/learners-register', function () {
    return view('auth.learners_register');
})->name('learners_register');

// route for excanges register
Route::get('/exchanges-register', function () {
    return view('auth.exchanges_register');
})->name('exchanges_register');

Route::get('/teachers-register', function () {
    return view('auth.teachers_register');
})->name('teachers_register');

Route::get('/learners', function () {
    return view('profile.learners');
})->name('learners');


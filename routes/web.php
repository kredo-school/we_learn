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
//Registration
Route::get('/learners-register', function () {
    return view('auth.learners_register');
})->name('learners_register');

Route::get('/exchanges-register', function () {
    return view('auth.exchanges_register');
})->name('exchanges_register');

Route::get('/teachers-register', function () {
    return view('auth.teachers_register');
})->name('teachers_register');

// FAQ
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// PROFILE
Route::get('/learners', function () {
    return view('profile.learners');
})->name('learners');

Route::get('/teachers', function () {
    return view('profile.teachers');
})->name('teachers');

Route::get('/exchanges', function () {
    return view('profile.exchanges');
})->name('exchanges');

// EDIT PROFILE
Route::get('/editprofile/learners', function () {
    return view('edit_profile.learners');
})->name('edit_profile.learners');

Route::get('/editprofile/teachers', function () {
    return view('edit_profile.teachers');
})->name('edit_profile.teachers');

Route::get('/editprofile/exchanges', function () {
    return view('edit_profile.exchanges');
})->name('edit_profile.exchanges');

// Login
Route::get('/learners-login', function () {
    return view('auth.learners_login');
})->name('learners_login');

Route::get('/teachers-login', function () {
    return view('auth.teachers_login');
})->name('teachers_login');

Route::get('/exchanges-login', function () {
    return view('auth.exchanges_login');
})->name('exchanges_login');

// Contact us
Route::get('/contact_us', function () {
    return view('contact_us');
})->name('contact_us');

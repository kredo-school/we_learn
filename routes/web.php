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


//route for homepages
Route::get('/learner/home', function () {
    return view('home.home_learner');
})->name('home_learner');

Route::get('/teacher/home', function () {
    return view('home.home_teacher');
})->name('home_teacher');

Route::get('/exchange/home', function () {
    return view('home.home_exchange');
})->name('home_exchange');

// route for click yes when buy ticket
Route::get('/ticket/yes', function () {
    return view('home.click_yes');
})->name('ticket_yes');


// route for payment page
Route::get('/ticket/payment', function () {
    return view('home.payment');
})->name('payment');

// route for teacher list
Route::get('/list/teacher', function () {
    return view('home.teacher_list');
})->name('list');

// route for lesson schedule for learner
Route::get('/schedule/learner', function () {
    return view('home.lesson_schedule_learner');
})->name('schedule_learner');

// route for chat of learner
Route::get('/chat/learner', function () {
    return view('home.chat_for_learner');
})->name('chat_learner');

// route for after clicking view button page
Route::get('/view/teacherprofile', function () {
    return view('home.click_view');
})->name('click_view');

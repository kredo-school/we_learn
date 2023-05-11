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

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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


Route::get('/teachers-login', function () {
    return view('auth.teachers_login');
})->name('teachers_login');

Route::get('/exchanges-login', function () {
    return view('auth.exchanges_login');
})->name('exchanges_login');

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

// exchange category chat after clicking view button
Route::get('/chat/exchange', function () {
    return view('home.exchange_category_chat');
})->name('chat_exchange');

// edit available day and time for teacher homepage
Route::get('/edit/available', function () {
    return view('home.edit_available_for_teacher');
})->name('edit_available');

// Contact us
Route::get('/contact_us', function () {
    return view('contact_us');
})->name('contact_us');

// Teacher Group
Route::prefix('teacher')->name('teacher.')->group(function()
{
    Route::middleware(['guest:teachers'])->group(function()
    {
        Route::view('/login', 'auth.teachers_login')->name('login');
        Route::view('/register', 'auth.teachers_register')->name('register');
        Route::post('/login', [App\Http\Controllers\TeacherController::class, 'login'])->name('login');

    });

    Route::middleware(['auth:teachers'])->group(function(){
        Route::view('/home', 'home.home_teacher')->name('home');

    });
});

// Exchange Group
Route::prefix('exchange')->name('exchange.')->group(function()
{
    Route::middleware(['guest:exchanges'])->group(function()
    {
        Route::view('/login', 'auth.exchanges_login')->name('login');
        Route::view('/register', 'auth.exchanges_register')->name('register');
        Route::post('/login', [App\Http\Controllers\ExchangeController::class, 'login'])->name('login');
        Route::post('/register', [App\Http\Controllers\ExchangeController::class, 'register'])->name('register');
    });

    Route::middleware(['auth:exchanges'])->group(function(){
        Route::view('/home', 'home.home_exchange')->name('home');

    });
});


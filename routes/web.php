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

// Contact us
Route::get('/contact_us', function () {
    return view('contact_us');
})->name('contact_us');

// Teacher Group for login
Route::prefix('teacher')->name('teacher.')->group(function()
{
    Route::middleware(['guest:teachers'])->group(function()
    {
        Route::view('/login', 'auth.teachers_login')->name('login');
        Route::view('/register', 'auth.teachers_register')->name('register');
        Route::post('/login', [App\Http\Controllers\TeacherController::class, 'login'])->name('login');
        Route::post('/register', [App\Http\Controllers\TeacherController::class, 'register'])->name('register');
    });

    Route::middleware(['auth:teachers'])->group(function(){
        Route::get('/home', [App\Http\Controllers\TeacherController::class, 'home'])->name('home');
        Route::get('/{teacher}/profile', [App\Http\Controllers\TeacherController::class, 'showProfile'])->name('show.profile');
        Route::get('/{teacher}/edit-profile', [App\Http\Controllers\TeacherController::class, 'editProfile'])->name('edit.profile');
        Route::post('/{teacher}/edit-profile', [App\Http\Controllers\TeacherController::class, 'editProfileSubmit'])->name('edit.submit');
        Route::post('/home', [App\Http\Controllers\TeacherController::class, 'schedule'])->name('process.date.time');
        Route::get('/{teacher}/edit-schedule/{reservation}',[App\Http\Controllers\TeacherController::class, 'editSchedule'])->name('edit_schedule');
        Route::post('/{teacher}/edit-schedule/{reservation}',[App\Http\Controllers\TeacherController::class, 'updateSchedle'])->name('updateSchedle');
        Route::delete('/reservations/{reservation}', [App\Http\Controllers\TeacherController::class, 'deleteReservation'])->name('delete.schedule');
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
        Route::get('profile/{id}', [App\Http\Controllers\ExchangeController::class, 'showProfile'])->name('show.profile');
        Route::get('edit-profile/{id}', [App\Http\Controllers\ExchangeController::class, 'editProfile'])->name('edit.profile');
        Route::post('edit-profile/{id}', [App\Http\Controllers\ExchangeController::class, 'editProfileSubmit'])->name('edit.submit');

    });
});

// Learner Group for login
Route::prefix('learner')->name('learner.')->group(function()
{
    Route::middleware(['guest:learners'])->group(function()
    {
        Route::view('/login', 'auth.learners_login')->name('login');
        Route::view('/register', 'auth.learners_register')->name('register');
        Route::post('/login', [App\Http\Controllers\learnerController::class, 'login'])->name('login');
        Route::post('/register', [App\Http\Controllers\learnerController::class, 'register'])->name('register');
    });

    Route::middleware(['auth:learners'])->group(function(){
        Route::view('/home', 'home.home_learner')->name('home');
        Route::get('profile/{id}', [App\Http\Controllers\LearnerController::class, 'showProfile'])->name('show.profile');
        Route::get('edit-profile/{id}', [App\Http\Controllers\LearnerController::class, 'editProfile'])->name('edit.profile');
        Route::post('edit-profile/{id}', [App\Http\Controllers\LearnerController::class, 'editProfileSubmit'])->name('edit.submit');

    });

});







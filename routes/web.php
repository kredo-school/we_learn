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

// Contact us
Route::get('/contact_us', function () {
    return view('contact_us');
})->name('contact_us');

// FAQ
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// Teacher Group for login
Route::prefix('teacher')->name('teacher.')->group(function () {
    Route::middleware(['guest:teachers'])->group(function () {
        Route::view('/login', 'auth.teachers_login')->name('login');
        Route::view('/register', 'auth.teachers_register')->name('register');
        Route::post('/login', [App\Http\Controllers\TeacherController::class, 'login'])->name('login');
        Route::post('/register', [App\Http\Controllers\TeacherController::class, 'register'])->name('register');
    });

    Route::middleware(['auth:teachers'])->group(function () {
        Route::get('/home', [App\Http\Controllers\TeacherController::class, 'home'])->name('home');
        Route::get('/{teacher}/profile', [App\Http\Controllers\TeacherController::class, 'showProfile'])->name('show.profile');
        Route::get('/{teacher}/edit-profile', [App\Http\Controllers\TeacherController::class, 'editProfile'])->name('edit.profile');
        Route::post('/{teacher}/edit-profile', [App\Http\Controllers\TeacherController::class, 'editProfileSubmit'])->name('edit.submit');
        Route::post('/home', [App\Http\Controllers\TeacherController::class, 'schedule'])->name('process.date.time');
        Route::get('/{teacher}/edit-schedule/{reservation}', [App\Http\Controllers\TeacherController::class, 'editSchedule'])->name('edit_schedule');
        Route::post('/{teacher}/edit-schedule/{reservation}', [App\Http\Controllers\TeacherController::class, 'updateSchedle'])->name('updateSchedle');
        Route::delete('/reservations/{reservation}', [App\Http\Controllers\TeacherController::class, 'deleteReservation'])->name('delete.schedule');
        Route::get('/accept', [App\Http\Controllers\TeacherController::class, 'showAcceptButton'])->name('accept');
        Route::put('/accept/lesson/{reservation}', [App\Http\Controllers\TeacherController::class, 'acceptLesson'])->name('accept.lesson');
        Route::post('/logout', [App\Http\Controllers\TeacherController::class, 'logout'])->name('logout');
    });
});


// Exchange Group
Route::prefix('exchange')->name('exchange.')->group(function () {
    Route::middleware(['guest:exchanges'])->group(function () {
        Route::view('/login', 'auth.exchanges_login')->name('login');
        Route::view('/register', 'auth.exchanges_register')->name('register');
        Route::post('/login', [App\Http\Controllers\ExchangeController::class, 'login'])->name('login');
        Route::post('/register', [App\Http\Controllers\ExchangeController::class, 'register'])->name('register');
    });

    Route::middleware(['auth:exchanges'])->group(function () {
        Route::get('/home', [App\Http\Controllers\ExchangeController::class, 'home'])->name('home');
        Route::get('profile/{id}', [App\Http\Controllers\ExchangeController::class, 'showProfile'])->name('show.profile');
        Route::get('edit-profile/{id}', [App\Http\Controllers\ExchangeController::class, 'editProfile'])->name('edit.profile');
        Route::post('edit-profile/{id}', [App\Http\Controllers\ExchangeController::class, 'editProfileSubmit'])->name('edit.submit');
        Route::post('/save-exchange-skills', [App\Http\Controllers\ExchangeController::class, 'saveExchangeSkill'])->name('save-exchange-skills');
        Route::get('/chat/{exchange_skill}', [App\Http\Controllers\ExchangeController::class, 'showChatExchange'])->name('show.chat.exchange');
        Route::post('/{exchange_skill}/{exchange}/replies', [App\Http\Controllers\ExchangeController::class, 'saveExchangeComment'])->name('comment.save');
        Route::post('/{exchange_skill}/{exchange}/react', [App\Http\Controllers\ExchangeController::class, 'saveExchangeSkillReaction'])->name('react.skill');
        Route::post('/{comment}/{exchange}/react-reply', [App\Http\Controllers\ExchangeController::class, 'saveCommentReaction'])->name('react.comment');
        Route::post('/logout', [App\Http\Controllers\ExchangeController::class, 'logout'])->name('logout');

        // Route::get('/exchange-skills', function ()
        //     return view('exchange-skills.create');
        // })->name('exchange-skills.create');
    });
});

// Learner Group for login
Route::prefix('learner')->name('learner.')->group(function () {
    Route::middleware(['guest:learners'])->group(function () {
        Route::view('/login', 'auth.learners_login')->name('login');
        Route::view('/register', 'auth.learners_register')->name('register');
        Route::post('/login', [App\Http\Controllers\LearnerController::class, 'login'])->name('login');
        Route::post('/register', [App\Http\Controllers\LearnerController::class, 'register'])->name('register');
    });

    Route::middleware(['auth:learners'])->group(function () {
        Route::get('/home', [App\Http\Controllers\LearnerController::class, 'index'])->name('home');
        Route::get('profile/{id}', [App\Http\Controllers\LearnerController::class, 'showProfile'])->name('show.profile');
        Route::get('edit-profile/{id}', [App\Http\Controllers\LearnerController::class, 'editProfile'])->name('edit.profile');
        Route::post('edit-profile/{id}', [App\Http\Controllers\LearnerController::class, 'editProfileSubmit'])->name('edit.submit');
        Route::post('/search-teacher', [App\Http\Controllers\LearnerController::class, 'searchTeacher'])->name('search.teacher');
        Route::get('/request/lesson/{reservation}/{learner}', [App\Http\Controllers\LearnerController::class, 'requestLesson'])->name('request.lesson');
        Route::get('/schedule/learner', [App\Http\Controllers\LearnerController::class, 'showSchedule'])->name('schedule_learner');
        Route::delete('/reservations/{reservation}', [App\Http\Controllers\LearnerController::class, 'deleteReservation'])->name('delete.schedule');
        Route::get('/payment/{ticket}', [App\Http\Controllers\LearnerController::class, 'payment'])->name('payment');

        Route::get('/chat/learner', function () {
            return view('home.chat_for_learner');
        })->name('chat_learner');
        Route::get('/ticket/yes', [App\Http\Controllers\LearnerController::class, 'ticket'])->name('ticket.yes');
        Route::post('/logout', [App\Http\Controllers\LearnerController::class, 'logout'])->name('logout');
    });
});

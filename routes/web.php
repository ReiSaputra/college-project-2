<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\contentController;
use App\Http\Controllers\courseController;
use App\Http\Controllers\participantController;
use App\Http\Controllers\exampleMailController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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


Route::get('/', function () {
    return view("layouts.landingPage");
})->name("landing");

Route::get("role", function () {
    return view("role");
});

Route::get("/login", function () {
    return view("login");
})->name("login");
// Route::post()

// Student
Route::get("/sign-up/student", function () {
    return view("auth.student");
})->name("student.register");

// Route untuk menangani pendaftaran siswa (POST)
Route::post('/sign-up/student', [AuthController::class, 'registerStudent'])->name('student.register.post');

// Route untuk menangani pendaftaran mentor (POST)
Route::post('/sign-up/mentor', [AuthController::class, 'registerMentor'])->name('mentor.register.post');

// Route untuk menangani login (POST)
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post("/logout", [AuthController::class, 'logout'])->name('logout.post');


// Route untuk dashboard participant
Route::group(['middleware' => ['auth', 'check.participant']], function () {
    Route::get('/participant/{id}/course/dashboard', [participantController::class, "index"])->name("participant.dashboard");
    Route::get("/participant/{id}/course/join", [participantController::class, "view"])->name("course.view");
    Route::post("/participant/{id}/course/join", [participantController::class, "joinCourse"])->name("join.course");
});

Route::group(['middleware' => ['auth', 'check.mentor']], function () {
    Route::get("/mentor/{id}/course/dashboard", [courseController::class, "view"])->name("course.view");
    Route::get('/mentor/{id}/course/create', [courseController::class, "formCourse"])->name("course.form");
    Route::post('/mentor/{id}/course/create', [courseController::class, "createCourse"])->name("course.controller");
    Route::get("/mentor/{id}/course/{courseId}", [contentController::class, "viewCourseContent"])->name("content.view");
    // Route::get('/mentor/{id}/course/{courseTitle}', [contentController::class, 'viewCourseContent'])->name('mentor.course.view');
    Route::get("/mentor/{id}/course/{courseId}/add", [contentController::class, "viewContentForm"])->name("content.add.form");
    Route::post("/mentor/{id}/course/{courseId}/add", [contentController::class, "addContent"])->name("content.add");
});


// Mentor
Route::get("/sign-up/mentor", function () {
    return view("auth.mentor");
})->name("sign-in.mentor");

Route::middleware(['auth', 'check.mentor.access'])->group(function () {
    Route::get("/mentor/{id}/course/dashboard", [courseController::class, "view"])->name("course.view");
    Route::get('/mentor/{id}/course/create', [courseController::class, "formCourse"])->name("course.form");
    Route::post('/mentor/{id}/course/create', [courseController::class, "createCourse"])->name("course.controller");
    Route::get("/mentor/{id}/course/{courseId}", [contentController::class, "viewCourseContent"])->name("content.view");
    // Route::get('/mentor/{id}/course/{courseTitle}', [contentController::class, 'viewCourseContent'])->name('mentor.course.view');
    Route::get("/mentor/{id}/course/{courseId}/add", [contentController::class, "viewContentForm"])->name("content.add.form");
    Route::post("/mentor/{id}/course/{courseId}/add", [contentController::class, "addContent"])->name("content.add");
});
/**
 * 404
 */
Route::fallback(function () {
    return view("fallback");
})->name("fallback");
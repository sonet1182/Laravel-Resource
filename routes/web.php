<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Yajra Data Table Start
Route::get('students', [StudentController::class, 'index']);
Route::get('students/list', [StudentController::class, 'getStudents'])->name('students.list');
// Yajra Data Table End


//Sent SMS Start
// Send SMS by HTTP
Route::get('/sms', [HomeController::class, "sms"]);
// Send SMS by PHP Script
Route::get('/sms2', [HomeController::class, "sms2"]);
//Sent SMS End

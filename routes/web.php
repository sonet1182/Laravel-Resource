<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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



//Drag and Drop Data Order Start
Route::get('/post/order', [PostController::class, 'post_order'])->name('post.post_order');
Route::post('/post/post_order_change', [PostController::class, 'post_order_change'])->name('post.order_change');
//Drag and Drop Data Order End


Route::get('posts/{status?}/{show_result?}/{s_query?}', [PostController::class, 'index'])->name('items.filter');
Route::delete('/delete_multipost', [PostController::class, 'delete_multipost'])->name('post.delete_multipost');

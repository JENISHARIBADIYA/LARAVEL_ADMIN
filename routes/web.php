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

// catrgory routes
Route::get('categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');

Route::get('cat_add', [App\Http\Controllers\CategoryController::class, 'create'])->name('cat_add');

Route::post('cat_save', [App\Http\Controllers\CategoryController::class, 'store'])->name('cat_save');

Route::get('cat_edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('cat_edit');

Route::post('cat_update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('cat_update');

Route::get('cat_delete/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('cat_delete');

Route::get('cat_view/{id}', [App\Http\Controllers\CategoryController::class, 'show'])->name('cat_view');

// student routes
Route::get('students', [App\Http\Controllers\studentController::class, 'index'])->name('students');

Route::get('student_add', [App\Http\Controllers\studentController::class, 'create'])->name('student_add');

Route::post('student_save', [App\Http\Controllers\studentController::class, 'store'])->name('student_save');

Route::get('student_edit/{id}', [App\Http\Controllers\studentController::class, 'edit'])->name('student_edit');

Route::post('student_update/{id}', [App\Http\Controllers\studentController::class, 'update'])->name('student_update');

Route::get('student_delete/{id}', [App\Http\Controllers\studentController::class, 'destroy'])->name('student_delete');

Route::get('student_view/{id}', [App\Http\Controllers\studentController::class, 'show'])->name('student_view');

// subject routes
Route::get('subjects', [App\Http\Controllers\subjectController::class, 'index'])->name('subjects');

Route::get('subject_add', [App\Http\Controllers\subjectController::class, 'create'])->name('subject_add');

Route::post('subject_save', [App\Http\Controllers\subjectController::class, 'store'])->name('subject_save');

Route::get('subject_edit/{id}', [App\Http\Controllers\subjectController::class, 'edit'])->name('subject_edit');

Route::post('subject_update/{id}', [App\Http\Controllers\subjectController::class, 'update'])->name('subject_update');

Route::get('subject_delete/{id}', [App\Http\Controllers\subjectController::class, 'destroy'])->name('subject_delete');

Route::get('subject_view/{id}', [App\Http\Controllers\subjectController::class, 'show'])->name('subject_view');

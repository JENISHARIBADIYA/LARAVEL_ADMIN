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

Route::get('/login', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// catrgory routes
// Route::get('categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');

// Route::POST('getCategoriesByStatus', [App\Http\Controllers\CategoryController::class, 'getCategoriesByStatus'])->name('categories');

// Route::get('cat_add', [App\Http\Controllers\CategoryController::class, 'create'])->name('cat_add');

// Route::post('cat_save', [App\Http\Controllers\CategoryController::class, 'store'])->name('cat_save');

// Route::get('cat_edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('cat_edit');

// Route::post('cat_update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('cat_update');

// Route::get('cat_delete/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('cat_delete');

// Route::get('cat_view/{id}', [App\Http\Controllers\CategoryController::class, 'show'])->name('cat_view');

// student routes
Route::get('students', [App\Http\Controllers\studentController::class, 'index'])->name('students');

Route::get('student_add', [App\Http\Controllers\studentController::class, 'create'])->name('student_add');

Route::post('student_save', [App\Http\Controllers\studentController::class, 'store'])->name('student_save');

Route::get('student_edit/{id}', [App\Http\Controllers\studentController::class, 'edit'])->name('student_edit');

Route::post('student_update/{id}', [App\Http\Controllers\studentController::class, 'update'])->name('student_update');

Route::get('student_delete/{id}', [App\Http\Controllers\studentController::class, 'destroy'])->name('student_delete');

Route::get('student_view/{id}', [App\Http\Controllers\studentController::class, 'show'])->name('student_view');

// catrgory routes
Route::get('categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');

Route::get('cat_add', [App\Http\Controllers\CategoryController::class, 'create'])->name('cat_add');

Route::post('cat_save', [App\Http\Controllers\CategoryController::class, 'store'])->name('cat_save');

Route::get('cat_edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('cat_edit');

Route::post('cat_update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('cat_update');

Route::get('cat_delete/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('cat_delete');

Route::get('cat_view/{id}', [App\Http\Controllers\CategoryController::class, 'show'])->name('cat_view');



// change password
Route::get('changepassword', [App\Http\Controllers\HomeController::class, 'changePass'])->name('changepassword');
Route::post('updatePass', [App\Http\Controllers\HomeController::class, 'updatePass'])->name('updatePass');

// update profile
Route::get('updateprofile', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateprofile');
Route::post('saveProfile', [App\Http\Controllers\HomeController::class, 'saveProfile'])->name('saveProfile');

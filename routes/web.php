<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentSessionController;

Route::get('/', function () {
    return view('welcome');
});

//Students Route
Route::get('/student/index',[StudentController::class,'index'])->name('student.index');
Route::get('/student/create',[StudentController::class,'create'])->name('student.create');
Route::post('/student/store',[StudentController::class,'store'])->name('student.store');
Route::get('/student/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
Route::post('/student/update/{id}',[StudentController::class,'update'])->name('student.update');
Route::get('/student/delete/{id}',[StudentController::class,'delete'])->name('student.delete');
//Student Session Route
Route::get('/studentSession',[StudentSessionController::class,'index'])->name('studentSession.index');
Route::get('/studentSession/create',[StudentSessionController::class,'create'])->name('studentSession.create');
Route::post('/studentSession/store',[StudentSessionController::class,'store'])->name('studentSession.store');
Route::get('/studentSession/edit/{id}',[StudentSessionController::class,'edit'])->name('studentSession.edit');
Route::post('/studentSession/update/{id}',[StudentSessionController::class,'update'])->name('studentSession.update');
Route::get('/studentSession/delete/{id}',[StudentSessionController::class,'delete'])->name('studentSession.delete');
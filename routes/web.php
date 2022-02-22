<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Admin;

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

Route::get('/dashboard',[StudentController::class,'index'])->name('admin.dashboard');
Route::post('/dashboard',[StudentController::class,'store'])->name('student.dashboard.store');
Route::get('/dashboard/show',[StudentController::class,'show'])->name('student.show');
Route::get('/dashboard/create',[StudentController::class,'create'])->name('student.create');
Route::get('/dashboard/view',[StudentController::class,'view'])->name('student.view');
Route::get('/dashboard/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
Route::post('/dashboard/update/{id}',[StudentController::class,'update'])->name('student.update');
Route::delete('/dashboard/destroy/{id}',[StudentController::class,'destroy'])->name('student.destroy');


// require __DIR__.'/auth.php';

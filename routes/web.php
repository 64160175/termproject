<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvisorController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StudentController;

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

Route::resource('registration',RegistrationController::class);
Route::resource('student',StudentController::class);
Route::resource('advisor',AdvisorController::class);
Route::resource('course',CourseController::class);
Route::resource('department',DepartmentController::class);


Route::get('/', function () {
    return view('index');
});

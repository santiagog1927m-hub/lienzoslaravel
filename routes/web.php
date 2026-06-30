<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultasController;

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\Training_centerController;
use App\Http\Controllers\AprendiceController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;


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
    return view('welcome');
});


//Route::get('/consultas',[ConsultasController::class, 'consulta_2']);




Route::get('area/create',[AreaController::class,'create']);
Route::post('area/store',[AreaController::class,'store'])->name('area.store');

Route::get('computer/create',[ComputerController::class,'create']);
Route::post('computer/store',[ComputerController::class,'store'])->name('computer.store');

Route::get('training_center/create',[Training_centerController::class,'create']);
Route::post('training_center/store',[Training_centerController::class,'store'])->name('training_center.store');

Route::get('aprendice/create',[AprendiceController::class,'create']);
Route::post('aprendice/store',[AprendiceController::class,'store'])->name('aprendice.store');

Route::get('course/create',[CourseController::class,'create']);
Route::post('course/store',[CourseController::class,'store'])->name('course.store');

Route::get('teacher/create',[TeacherController::class,'create']);
Route::post('teacher/store',[TeacherController::class,'store'])->name('teacher.store');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherSubjectController;
use App\Http\Controllers\StudentSubjectController;


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
    return view('report.index');
});


Route::resource('/student', StudentController::class);
Route::resource('/teacher', TeacherController::class);
Route::resource('/subject', SubjectController::class);
Route::resource('/teacher-subject', TeacherSubjectController::class);
Route::resource('/student-subject', StudentSubjectController::class);

Route::get('/relation-teacher-subject/{id}', [TeacherController::class, 'Subjects']);
Route::get('/relation-subject-teacher', [SubjectController::class, 'Teachers']);

Route::get('/relation-student-subject/{id}', [StudentSubjectController::class, 'Subjects']);




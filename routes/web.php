<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;

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

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::view('/admin_dash', 'admin_dash');

Route::view('/login', "login");

Route::post('/login', [UserController::class, 'login']);

// Route::view('/master', "master");

Route::view('/add_student', 'add_student');

Route::post('add_student', [StudentController::class, 'addStudent']);

Route::view('/add_teacher', 'add_teacher');

Route::post('add_teacher', [TeacherController::class, 'addTeacher']);

Route::get('student_list', [StudentController::class, 'studentList']);

Route::get('teacher_list', [TeacherController::class, 'teacherList']);

Route::get('detail_student/{id}', [StudentController::class, 'detailStudent']);

Route::get('detail_teacher/{id}', [TeacherController::class, 'detail']);

Route::get('detail_student/update_student/{id}', [StudentController::class, 'updateShow']);

Route::post('update_student', [StudentController::class, 'update']);

Route::get('delete_student/{id}', [StudentController::class, 'delete']);

Route::get('detail_teacher/update_teacher/{id}', [TeacherController::class, 'updateShow']);

Route::post('update_teacher', [TeacherController::class, 'update']);

Route::get('delete_teacher/{id}', [TeacherController::class, 'delete']);

Route::get('add_course', [CourseController::class, 'view']);

Route::post('add_course', [CourseController::class, 'addCourse']);


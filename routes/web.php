<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LoginController;

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

Route::get('/logout_teacher', function () {
    Session::forget('user');
    return redirect('teacher_student_login');
});

Route::get('/logout_student', function () {
    Session::forget('user');
    return redirect('teacher_student_login');
});

Route::view('/admin_dash', 'admin_dash');

Route::view('/login', "login");

Route::view('/teacher_student_login', 'teacher_student_login');

Route::post('/teacher_student_login', [LoginController::class, 'login']);

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

Route::view('add_course', 'add_course');

Route::post('add_course', [CourseController::class, 'addCourse']);

Route::get('course_list', [CourseController::class, 'courseList']);

Route::get('delete_course/{id}', [CourseController::class, 'delete']);

Route::get('student_dash', [StudentController::class, 'studentDash']);

Route::get('teacher_dash', [TeacherController::class, 'teacherDash']);

Route::get('teacher_course_select', [TeacherController::class, 'select_course']);

Route::post('teacher_course_select', [TeacherController::class, 'selected_course']);

Route::get('select_course_list', [TeacherController::class, 'courseList']);


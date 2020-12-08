<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    function view(){
        return view('add_course');
    }

    function addCourse(Request $req){
        $course = new Course;
        $course->cname = $req->cname;
        $course->department = $req->department;
        $course->semister = $req->semister;
        $course->save();
        return redirect('/course_list');
    }
}

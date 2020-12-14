<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use \Crypt;

class CourseController extends Controller
{

    function addCourse(Request $req){
        if($req->session()->has('user')){
            $course = new Course;
            $course->cname = $req->cname;
            $course->department = $req->department;
            $course->semister = $req->semister;
            $course->ccode = $req->ccode;
            $course->save();
            return redirect('/course_list');
        }else{
            return redirect('login');
        }
    }

    function courseList(){
        $course = Course::all();
        return view('course_list',['data'=>$course]);
    }

    function delete($id){
        $cid = \Crypt::decrypt($id);
        $course = Course::find($cid);
        $course->delete();
        return redirect('course_list');
    }

    static function courseCount(){
        return Course::select('id')->count();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use \Crypt;

class TeacherController extends Controller
{
    function addTeacher(Request $req){
        if($req->session()->has('user')){
            $student = new Teacher;
            $student->fname = $req->fname;
            $student->lname = $req->lname;
            $student->tid = $req->tid;
            $student->email = $req->email;
            $student->paddress = $req->paddress;
            $student->peraddress = $req->peraddress;
            $student->gender = $req->gender;
            $student->dob = $req->dob;
            $student->save();
            return redirect('/admin_dash');
        }
        else{
            return redirect('/login');
        }
    }

    function teacherList(){
        $teachers = Teacher::all();
        return view('teacher_list', ['teachers'=> $teachers]);
    }

    function detail($id){
        $tid = \Crypt::decrypt($id);
        $teacher = Teacher::find($tid);
        return view('detail_teacher',['teacher'=>$teacher]);
    }
}

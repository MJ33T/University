<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

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
}

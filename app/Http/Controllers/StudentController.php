<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function addStudent(Request $req){
        if($req->session()->has('user')){
            $student = new Student;
            $student->fname = $req->fname;
            $student->lname = $req->lname;
            $student->sid = $req->sid;
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

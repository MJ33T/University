<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use \Crypt;

class TeacherController extends Controller
{
    function addTeacher(Request $req){
        if($req->session()->has('user')){
            $teacher = new Teacher;
            $teacher->fname = $req->fname;
            $teacher->lname = $req->lname;
            $teacher->tid = $req->tid;
            $teacher->email = $req->email;
            $teacher->paddress = $req->paddress;
            $teacher->peraddress = $req->peraddress;
            $teacher->gender = $req->gender;
            $teacher->dob = $req->dob;
            $teacher->save();
            return redirect('/teacher_list');
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

    function updateShow($id){
        $tid = \Crypt::decrypt($id);
        $teacher = Teacher::find($tid);
        return view('update_teacher',['teacher'=>$teacher]);
    }

    function update(Request $req){
        $teacher = Teacher::find($req->id);
        $teacher->fname = $req->fname;
        $teacher->lname = $req->lname;
        $teacher->tid = $req->tid;
        $teacher->email = $req->email;
        $teacher->paddress = $req->paddress;
        $teacher->peraddress = $req->peraddress;
        $teacher->gender = $req->gender;
        $teacher->dob = $req->dob;
        $teacher->save();
        return redirect('/teacher_list');   
    }

    function delete($id){
        $tid = \Crypt::decrypt($id);
        $teacher = Teacher::find($tid);
        $teacher->delete();
        return redirect('teacher_list'); 
    }
}

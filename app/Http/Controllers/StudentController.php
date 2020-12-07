<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use \Crypt;

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
            return redirect('/student_list');
        }
        else{
            return redirect('/login');
        }
        
    }

    function studentList(){
        $students = Student::all();
        return view('student_list', ['students'=>$students]);
    }

    function detailStudent($id){
        $sid = \Crypt::decrypt($id);
        $student = Student::find($sid);
        return view('detail_student', ['student'=>$student]);
    }

    function updateShow($id){
        $sid = \Crypt::decrypt($id);
        $student = Student::find($sid);
        return view('update_student', ['student' => $student]);
    }

    function update(Request $req){
        $student = Student::find($req->id);
        $student->fname = $req->fname;
        $student->lname = $req->lname;
        $student->sid = $req->sid;
        $student->email = $req->email;
        $student->paddress = $req->paddress;
        $student->peraddress = $req->peraddress;
        $student->gender = $req->gender;
        $student->dob = $req->dob;
        $student->save();
        return redirect('student_list');    

    }

    function delete($id){
        $sid = \Crypt::decrypt($id);
        $data = Student::find($sid);
        $data->delete();
        return redirect('student_list');
    }
    static function studentCount(){
        return Student::select('id')->count(); 
    }
}

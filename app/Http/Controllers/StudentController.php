<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Login;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Onelink;
use App\Models\Twolink;
use \Crypt;
use Session;

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

            $login = new Login;
            $login->user = $req->email;
            $login->password = Hash::make($req->sid);
            $login->category = "student";
            $login->save();
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

    function studentDash(){
        return view('student_dash');
    }

    function selectCourse(){
        $results = Onelink::all();
        return view('student_course_select', ['results'=>$results]);
    }

    function selectedCourse($id){
        $sid = \Crypt::decrypt($id);
        $results = Onelink::find($sid);

        $user_name = Session::get('user')['user'];
        $result = DB::table('students')
        ->join('logins', 'students.email', 'logins.user')
        ->where('students.email', $user_name)
        ->get();

        $new = new Twolink;
        $new->teacher = $results['teacher_id'];
        $new->semister = $results['semister'];
        $new->course_code = $results['course_code'];
        $new->course_name = $results['course_name'];
        foreach($result as $reg){
            $new->student = $reg->sid;
        }
        $new->save();
        return redirect('student_course_select');
    }

    function courseList(){
        $user_name = Session::get('user')['user'];
        $result = DB::table('students')
        ->join('logins', 'students.email', 'logins.user')
        ->where('students.email', $user_name)
        ->get();

        foreach($result as $reg){
            $results = Twolink::where('student', $reg->sid)->get();
        }
        return view('student_course_list', ['results'=>$results]);
    }
}

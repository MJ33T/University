<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Login;

class LoginController extends Controller
{
    function login(Request $req){
        $ts_user = Login::where(['user'=>$req->email])->first();
        if(!$ts_user || !Hash::check($req->password, $ts_user->password)){
            return "Username & Password Does not Matched";
        }else{
            if($ts_user->category == "student"){
                $req->session()->put('user', $ts_user);
                return redirect('student_dash');
            }
            else if($ts_user->category == "teacher"){
                $req->session()->put('user', $ts_user);
                return redirect('teacher_dash');
            }
        } 
    }
}

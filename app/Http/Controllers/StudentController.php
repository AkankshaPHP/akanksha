<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oex_students;
use Session;

class StudentController extends Controller
{
   public function student_signup(){
       return view('student/student_signup');
   }
   public function login_sub(Request $request){
    $student=Oex_students::where('email',$request->email)->where('password',$request->password)->get()->first();
    //print_r($student);die("kk");
    if($student){
       // die("kkk");
        $request->session()->put('id',$student->id);
        
    $arr=array('status'=>'true','message'=>'You are successfully login','reload'=>url('student/dashboard2'));
    
   }else{
    //die("ffff");
    $arr=array('status'=>'false','message'=>'Email and Password Not match!');
    }
    echo json_encode($arr);
    
    
}

}

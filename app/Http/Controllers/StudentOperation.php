<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Oex_students;
use App\Oex_exam_master;
use App\Oex_exam_question_master;

class StudentOperation extends Controller
{
    public function dashboard2(){
        // session ke ander ager id per kuch set nhi hai to login per redirect krenge.
        if(!Session::get('id')){
            return redirect(url('student/student_signup'));
        }
       return view('student/dashboard2');
    }
    public function logout(Request $request){
        // session ke ander ager id per kuch set nhi hai to login per redirect krenge.
        $request->session()->forget('id');
        return redirect(url('student/student_signup'));
    }
    public function exam(){
        $student_info=Oex_students::select('oex_students.*','oex_exam_masters.exam_date as ex_date','oex_exam_masters.title')->join('oex_exam_masters','oex_students.exam','=','oex_exam_masters.title')->where('oex_students.id',Session::get('id'))->get()->first();
        //echo "<pre>";print_r($student_info);die("lll");
        return view('student/exam',['student_info'=>$student_info]);
       
        }
        public function join_exam(){
            $student_info=Oex_students::select('oex_students.*','oex_exam_masters.exam_date as ex_date','oex_exam_masters.title')->join('oex_exam_masters','oex_students.exam','=','oex_exam_masters.title')->where('oex_students.id',Session::get('id'))->get()->first();
            $id=Oex_exam_master::where('title',$student_info->title)->get()->first()->id;
            //print_r($id);die("kkk");
            $data['exams']=Oex_exam_question_master::where('exam_id',$id)->get()->toArray();
            //echo "<pre>";print_r($data['exams']);die("kkk");
            return view('student/join_exam',$data);
        }
        public function submit_form(Request $request){
            //print_r($request->all());die();
            $student_info=Oex_students::select('oex_students.*','oex_exam_masters.exam_date as ex_date','oex_exam_masters.title')->join('oex_exam_masters','oex_students.exam','=','oex_exam_masters.title')->where('oex_students.id',Session::get('id'))->get()->first();
            $id=Oex_exam_master::where('title',$student_info->title)->get()->first()->id;
            $data['exams']=Oex_exam_question_master::where('exam_id',$id)->get()->all();
            //echo "<pre>";print_r($data);die("kkk");
            return view('student/submit_form',$data);
         }
         public function result(){
             //die("kkkk");
             $student_info=Oex_students::select('oex_students.*','oex_exam_masters.exam_date as ex_date','oex_exam_masters.title')->join('oex_exam_masters','oex_students.exam','=','oex_exam_masters.title')->where('oex_students.id',Session::get('id'))->get()->first();
            $id=Oex_exam_master::where('title',$student_info->title)->get()->first()->id;
            $data=Oex_exam_question_master::where('exam_id',$id)->get()->all();
            $s=sizeof($data);
            //echo $s;
            return view('student/result');
         }
}

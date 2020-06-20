<?php

namespace App\Http\Controllers;
use Session;
use Validator;
use App\Oex_exam_master;
use App\Oex_students;

use Illuminate\Http\Request;

class PortalOperation extends Controller
{
   public function dashboard (){
       if(!Session::get('portal_session')){
           return redirect(url('portal/login'));
       }
       //echo $session_data=Session::get('portal_session');
       $data['portal_exam']=Oex_exam_master::select(['oex_exam_masters.*','oex_categories.name as cat_name'])->join('oex_categories','oex_exam_masters.category','=','oex_categories.name')->orderBy('id','desc')->where('oex_exam_masters.status','1')->get()->toArray();
       //echo "<pre>";print_r($data);die();
       return view('portal/dashboard1',$data);
   }
   public function exam_form ($id){
    $date['id']=$id;
    $data['exam_title']=Oex_exam_master::where('id',$id)->get()->first()->title;
    $data['exam_date']=Oex_exam_master::where('id',$id)->get()->first()->exam_date;
   
   return view('portal/exam_form', $data);
}
public function exam_form_submit(Request $request){
    $validator=Validator::make($request->all(),['name'=>'required','email'=>'required','mobile_no'=>'required','password'=>'required',]);
    
    if($validator->passes()){
     $exam_submit=new Oex_students;
      $exam_submit->name=$request->name;
     $exam_submit->email=$request->email;
     $exam_submit->mobile_no=$request->mobile_no;
     $exam_submit->password=$request->password;
     $exam_submit->exam=$request->exam;
     $exam_submit->dob=$request->dob;
     $exam_submit->save();
     $arr=array('status'=>'true','message'=>'Student has registered','reload'=>url('portal/print/'.$exam_submit->id));
     echo json_encode($arr);
    }else{
       $arr=array('status'=>'false','message'=>$validator->errors()->all());
       echo json_encode($arr);
   }
}
public function print($id){
    $std_info=Oex_students::where('id',$id)->get()->first();
    $exam_title=Oex_exam_master::where('title',$std_info->exam)->get()->first()->title;
    $exam_date=Oex_exam_master::where('title',$std_info->exam)->get()->first()->exam_date;
   return view('portal/print',['std_info'=>$std_info,'exam_title'=>$exam_title,'exam_date'=>$exam_date]);

}
public function update_result(){
    $data['exams']=Oex_exam_master::where('status','1')->get()->toArray();
     //echo "<pre>";var_dump($data['exams']);die("hh");
    return view('portal/update_form',$data);
}
public function student_exam_info(){
    $data['exam_info']=Oex_exam_master::where('title',$_GET['exam'])->get()->first();
    $data['student_info']=Oex_students::where('mobile_no',$_GET['mobile_no'])->where('dob',$_GET['dob'])->where('exam',$_GET['exam'])->get()->toArray();
   //echo "<pre>";print_r( $data['student_info']);die("lll");   
    return view('portal/student_exam_info',$data);
   
}
public function student_exam_form_edit(Request $request ){
   // echo "hh";
   $data=Oex_students::where('id',$request->id)->get()->first();
   $data->name=$request->name;
   $data->email=$request->email;
   $data->mobile_no=$request->mobile_no;
   $data->dob=$request->dob;
   $data->password=$request->password;
   $data->update();
   $arr=array('status'=>'true','message'=>'Information successfully updated','reload'=>url('portal/update_result'));
   echo json_encode($arr);
}
public function logout(Request $request){
    $request->session()->forget('portal_session');
    return redirect('portal/login');

}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oex_category;
use App\Oex_exam_master;
use App\Oex_students;
use App\Oex_portal;
use Validator;
use Session;
use App\Oex_exam_question_master;

class Admin extends Controller
{
   function index(){
       return view('admin.dashboard');
   }
   public function exam_category(){
       $data['category']=Oex_category::get()->toArray();
       //echo "<pre>";print_r($data);die();
          return view('admin.exam_category',$data);
   }
   public function add_new_category(Request $request){
    //print_r($request->all());
    //The make method on the facade generates a new validator instance:
    $validator=Validator::make($request->all(),['name'=>'required']);

    if($validator->passes()){
        $cat=new Oex_category;
        $cat->name=$request->name;
        $cat->status=1;
        $cat->save();
        $arr=array('status'=>'true','message'=>'Category is successfully inserted!','reload'=>url('admin/exam_category'));

    }else{
        $arr=array('status'=>false,"message"=>$validator->errors()->all());
    }
    echo json_encode($arr);

}

public function delete_category($id){
    //die("lll");
    $cat=Oex_category::where('id',$id)->get()->first();
    $cat->delete();
    return redirect(url('admin/exam_category'));

}
public function edit_category($id){
    $category=Oex_category::where('id',$id)->get()->first();
    //$cat->update();
    return view('admin/edit_exam_category',['category'=>$category]);
}
public function edit_new_category(Request $request){
    $category=Oex_category::where('id',$request->id)->get()->first();
    $category->name=$request->name;
    $category->update();
    echo json_encode($arr=array('status'=>'true','message'=>'Exam has been updated','reload'=>url('admin/exam_category')));

}
public function category_status($id){
    //alert("lll);
    $cat=Oex_category::where('id',$id)->get()->first();
    //echo $id;
    if($cat->status==1)
    $status=0;
    else
    $status=1;

    $cat1=Oex_category::where('id',$id)->get()->first();
    $cat1->status=$status;
    $cat1->update();
}
public function manage_exam(){
    $data['category']=Oex_category::where('status','1')->get()->toArray();
    $data['exams']=Oex_exam_master::orderBy('id','desc')->get()->toArray();
    
    return view('admin.manage_exam',$data);

    return view('admin/manage_exam',$data);
}
public function add_new_exam(Request $request){
    //$validator=Validator::make($request->all(),['name'=>'required']);
    //print_r($request->all());die("jj");
    $validator=Validator::make($request->all(),['title'=>'required','exam_category'=>'required','exam_date'=>'required']);
    //var_dump($validator);die("kk");
    if($validator->passes()){
        //die("lllll");
        $exam=new Oex_exam_master();
        $exam->title=$request->title;
        $exam->category=$request->exam_category;
        $exam->exam_date=$request->exam_date;
        $exam->status=1;
        $exam->save();
        $arr=array('status'=>'true','message'=>'exam has successfully been added!','reload'=>url('admin/manage_exam'));

    }else{
        //die("kkkk");
        $arr=array('status'=>'false','message'=>$validator->errors()->all());
    }
    echo json_encode($arr);
}
public function exam_status($id){
    //die("kkkkk");
    $exams=Oex_exam_master::where('id',$id)->get()->first();
    if($exams['status']==1){
        $status=0;

    }else{
        $status=1;

    }
    $exams1=Oex_exam_master::where('id',$id)->get()->first();
    $exams1->status=$status;
    $exams1->update();

}
public function delete_exam($id){
    $exam=Oex_exam_master::where('id',$id)->get()->first();
    $exam->delete();
    return redirect(('admin/manage_exam'));
    

}
public function edit_exam($id){
    $exam=Oex_exam_master::where('id',$id)->get()->first();
    //$e=json_decode(($exam),true);
    //print_r($e);die();
    return view('admin/edit_new_exam',['exam'=>$exam]);
}
public function edit_new_exam(Request $request){
    $exam=Oex_exam_master::where('id',$request->id)->get()->first();
    // $e=json_decode(($exam),true);
    // object ki value display krane ke lye
    //var_dump($exam);die();
    $exam->title=$request->title;
    $exam->exam_date=$request->exam_date;
    $exam->category=$request->exam_category;
    $exam->status=1;
    $exam->update();
    echo json_encode($arr=array('status'=>'true','message'=>'Exam has been updated','reload'=>url('admin/manage_exam')));
}
public function manage_students(){
    $data['exam']=Oex_exam_master::where('status','1')->get()->toArray();
    // jo data ye model return krega vo array ke form me chhye kynki ise age foreach karana hoga
    
    $data['students']=Oex_students::select(['oex_students.*','oex_exam_masters.exam_date'])->orderBy('id','desc')->join('oex_exam_masters','oex_students.exam','=','oex_exam_masters.title')->get()->toArray();
    //echo "<pre>";print_r($data);die();
    return view('admin/manage_student',$data);
}
public function add_new_students(Request $request){
    $validator=Validator::make($request->all(),['name'=>'required','email'=>'required',
    'mobile_no'=>'required','dob'=>'required','exam'=>'required','password'=>'required'
    ]);
    if($validator->passes()){
        $student=new Oex_students; 
        $student->name=$request->name;
        $student->email=$request->email;
        $student->mobile_no=$request->mobile_no;
        $student->dob=$request->dob;
        $student->exam=$request->exam;
        $student->password=$request->password;
        $student->status=1;
        $student->save();
        $arr=array('status'=>'true','message'=>'students has been added','reload'=>url('admin/manage_students'));

    }else{
        $arr=array('status'=>'false','message'=>$validator->errors()->all());
    }
    echo json_encode($arr);
}
public function student_status($id){
    $students_status=Oex_students::where('id',$id)->get()->first();
    if($students_status->status==1){
        $status=0;
    }else 
    {
        $status=1;
    }
    $students_status1=Oex_students::where('id',$id)->get()->first();
    $students_status1->status=$status;
    $students_status1->update();
    

}
public function edit_students($id){
   $data['students']= Oex_students::where('id',$id)->get()->first();
   return view('admin/edit_students',$data);

}
public function edit_new_students(Request $request){
    $students=Oex_students::where('id',$request->id)->get()->first();
    $students->name=$request->name;
    $students->email=$request->email;
    $students->mobile_no=$request->mobile_no;
    $students->dob=$request->dob;
    $students->exam=$request->exam;
    $students->password=$request->password;
    $students->update();
    echo json_encode(array('status'=>'true','message'=>'student has been successfully updated','reload'=>url('admin/manage_students')));
}
public function delete_students($id){
    $students=Oex_students::where('id',$id)->get()->first();
   // echo "<pre>";print_r($students);die();
    $students->delete();
    return redirect('admin/manage_students');
}
public function manage_portal(){
    $data['portal']=Oex_portal::orderBy('id','desc')->get()->toArray();
   return view('admin/manage_portal',$data);
}
public function add_new_portal(Request $request){
    
    $validator=Validator::make($request->all(),['name'=>'required','email'=>'required','mobile_no'=>'required','password'=>'required']);
    if($validator->passes()){
        $portal=new Oex_portal;
        $portal->name=$request->name;
        $portal->email=$request->email;
        $portal->mobile_no=$request->mobile_no;
        $portal->password=$request->password;
        $portal->status=1;
        $portal->save();
        echo json_encode(array('status'=>'true','message'=>'portal has been successfully added','reload'=>url('admin/manage_portal')));

    }else{
        echo json_encode(array('status'=>'true','message'=>$validator->error()->all()));
    }

}
public function edit_portal($id){
    $data['portal']=Oex_portal::where('id',$id)->get()->first();
    return view('admin/edit_portal',$data);
    
}
public function edit_new_portal(Request $request){
    $portal=Oex_portal::where('id',$request->id)->get()->first();
    $portal->name=$request->name;
    $portal->email=$request->email;
    $portal->mobile_no=$request->mobile_no;
    $portal->password=$request->password;
    $portal->update();
    echo json_encode(array('status'=>'true','message'=>'portal has been successfully updated','reload'=>url('admin/manage_portal')));
    
    
}
public function portal_status($id){
   $portal=Oex_portal::where('id',$id)->get()->first();
    if($portal->status==1)
    {
        $status=0;
    }else{
        $status=1;
    }
    $portal1=Oex_portal::where('id',$id)->get()->first();
    $portal->status=$status;
    $portal->update();
}
public function delete_portal($id){
    $portal=Oex_portal::where('id',$id)->get()->first();
     $portal->delete();
     return redirect('admin/manage_portal');
 }
 
public function add_question($id){

   return view('admin/add_question',['id'=> $id]);
 }
 public function add_new_question(Request $request){
   $validator=Validator::make($request->all(),['question'=>'required','option1'=>'required','option2'=>'required','option3'=>'required','option4'=>'required','ans'=>'required']);

    if($validator->passes()){
        $question=new Oex_exam_question_master;
        // $question->options=$request->option1;
        // $question->options=$request->option2;
        // $question->options=$request->option3;
        // $question->options=$request->option4;
        //print_r($request->all());die();
        $question->options=json_encode(array($request->option1,$request->option2,$request->option3,$request->option4));
        $question->exam_id=$request->id;
        $question->question=$request->question;
        $question->ans=$request->ans;
        $question->status=1;
        $question->save();
        $arr=array('status'=>'true','message'=>'question is successfully inserted!','reload'=>url('admin/manage_exam'));

    }else{
        $arr=array('status'=>false,"message"=>$validator->errors()->all());
    }
    echo json_encode($arr);
    //print_r($request->all());die("kkk");
   
 }public function logout(){
     
     return view('admin/logout');
 }
 

}

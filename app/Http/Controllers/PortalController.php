<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oex_portal;
use Validator;
use Session;

class PortalController extends Controller
{
    function portal_signup(){
        if(Session::get('portal_session')){
            return redirect('portal/dashboard');
        }
       return view('portal/signup');
    }
    public function signup_sub(Request $request){
        $validator=Validator::make($request->all(),['name'=>'required','email'=>'required','password'=>'required','mobile_no'=>'required']);
        if($validator->passes()){
            $is_exist=Oex_portal::where('email',$request->email)->get()->toArray();
            if($is_exist){
              $arr=array('status'=>'false','message'=>'Email already exists');
            }else{
        $portal=new Oex_portal;
        $portal->name=$request->name;
        $portal->email=$request->email;
        $portal->password=$request->password;
        $portal->mobile_no=$request->mobile_no;
        $portal->save();
        $arr=array('status'=>'true','message'=>'portal student has been added','reload'=>url('portal/login'));
        
     }}else{
        $arr=array('status'=>'false','message'=>$validator->errors()->all());
        
     }
     echo json_encode($arr);
    }
    public function login(){
        
        
        if(Session::get('portal_session')){
            return redirect('portal/dashboard');
        }
        return view('portal/login');
    }
    public function login_sub(Request $request){
       $portal=Oex_portal::where('email',$request->email)->where('password',$request->password)->get()->toArray();
       if($portal){
           
       //jo email approve hai it means jinka status 1 hai
        if($portal[0]['status']==1){
        $value=$request->session()->put('portal_session',$portal[0]['id']);
       // echo $value;die("kkk");
        $arr=array('status'=>'true','message'=>'You are successfully login','reload'=>url('portal/dashboard'));
        }
        else
        $arr=array('status'=>'false','message'=>'Your account is deactivated','reload'=>url('portal/login'));  
    }
    else{
        $arr=array('status'=>'true','message'=>'Email and Password does not match','reload'=>url('portal/login'));
    
    }
    echo json_encode($arr);
}
    
}

@extends('layouts.student')
@section('title',"Exams")
@section('content')
<style>
.question{
  list-style:none;
}
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Exams</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Exams</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-4">
                     <h3>Time:3 hrs</h3>
                </div>
             <div class="col-sm-4">
              <h3 class="text-center">Timer:3:00:00</h3>
             </div>
             <div class="col-sm-4">
              <h3 class="text-right">Pending</h3>
             </div>
              <!-- /.card-body -->
              
              <!-- /.card-footer-->
            </div>
            
            
            <!-- /.card -->
          </div>
        </div>
        <div class="card">
              <div class="card-header">
                </div>
              <div class="card-body">
                <div class="row">
                  <form action="{{url('student/submit_form')}}" method="POST">
                  
             <div class="col-sm-12">
            
              <b><p>1.{{$exams[0]['question']}}</p></b>
              @csrf
              <?php 
              $ques1=json_decode($exams[0]['options'],' ');
              $option1=$ques1[0];
              $option2=$ques1[1];
              $option3=$ques1[2];
              $option4=$ques1[3];
              $ques2=json_decode($exams[1]['options'],' ');
              $option5=$ques2[0];
              $option6=$ques2[1];
              $option7=$ques2[2];
              $option8=$ques2[3];
              $ques3=json_decode($exams[2]['options'],' ');
              $option9=$ques3[0];
              $option10=$ques3[1];
              $option11=$ques3[2];
              $option12=$ques3[3];
              //print_r($ques);die("lll");
              ?>
              <ul class="question">
                <li><input type="radio" name="ans1" value="{{$option1}}"> {{$option1}}</li>
                <li><input type="radio" name="ans1" value="{{$option2}}"> {{$option2}}</li>
                <li><input type="radio" name="ans1" value="{{$option3}}"> {{$option3}}</li>
                <li><input type="radio" name="ans1" value="{{$option4}}"> {{$option4}}</li>
              </ul>
             </div>
             <div class="col-sm-12">
              <b><p>2.{{$exams[1]['question']}}</p></b>
              <ul class="question">
                <li><input type="radio" name="ans2" value="{{$option5}}"> {{$option5}}</li>
                <li><input type="radio" name="ans2" value="{{$option6}}">  {{$option6}}</li>
                <li><input type="radio" name="ans2" value="{{$option7}}">  {{$option7}}</li>
                <li><input type="radio" name="ans2" value="{{$option8}}"> {{$option8}}</li>
              </ul>
             </div>
             <div class="col-sm-12">
              <b><p>3.{{$exams[2]['question']}}</p></b>
              <ul class="question">
                <li><input type="radio" name="ans3" value="{{$option9}}"> {{$option9}}</li>
                <li><input type="radio" name="ans3" value="{{$option10}}"> {{$option10}}</li>
                <li><input type="radio" name="ans3" value="{{$option11}}"> {{$option11}}</li>
                <li><input type="radio" name="ans3" value="{{$option12}}"> {{$option12}}</li>
              </ul>
             </div>
             
             <div class="col-sm-12">
              <button class="btn btn-primary btn-block">Submit</button>
             </div>
             </form>
             
              <!-- /.card-body -->
              
              <!-- /.card-footer-->
            </div>
            
            
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <!-- /.content-header -->

    <!-- Main content -->
    @endsection
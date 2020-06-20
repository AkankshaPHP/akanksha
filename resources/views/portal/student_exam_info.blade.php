@extends('layouts.portal')
@section('title',"Exam")
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Student Exam Info</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Exam Info</li>
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
             <div class="card-body">
             <div class="row">
             <div class="col-sm-6">
             <h3 class="text-left">{{$exam_info['title']}}</h3>
             </div>
             <div class="col-sm-6">
             <h3 class="text-right">{{$exam_info['exam_date']}}</h3>
             </div>
             </div>
              <form action="{{url('portal/student_exam_form_edit')}}"  class="database_operation" method="POST">
      @csrf
      <br>
    <div class="row">
    <div class="col-sm-12">
    <div class="form-group">
        <label>Enter Name</label>
        <input type="hidden" name="id" value="{{$student_info[0]['id']}}"> 
        
        <input type="text" name="name" required placeholder="Enter Name" value="{{$student_info[0]['name']}}" class="form-control">
    </div>
    
    <div class="form-group">
        <label>Enter Email</label>
        <input type="email" name="email" required placeholder="Enter Email" value="{{$student_info[0]['email']}}" class="form-control">
    </div>
    
    <div class="form-group">
        <label>Enter Mobile Number</label>
       <input type="text" name="mobile_no" required placeholder="Enter Mobile Number" value="{{$student_info[0]['mobile_no']}}" class="form-control">
    </div>
    <div class="form-group">
        <label>Select Dob</label>
       <input type="date" name="dob" value="{{$student_info[0]['dob']}}" required class="form-control">
    </div>
    <div class="form-group">
        <label>Select Password</label>
       <input type="text" name="password" value="{{$student_info[0]['password']}}" required placeholder="Select Password" class="form-control">
    </div>
   
      </div>
      <div class="col-sm-12">
      <div class="form-group">
      <button type="submit" class="btn btn-info">update</button>
      </div>
      </div>
    </div>
    </form>
              </div>
             

    </section>
    <!-- /.content -->
    <!-- /.content-header -->

    <!-- Main content -->
    @endsection
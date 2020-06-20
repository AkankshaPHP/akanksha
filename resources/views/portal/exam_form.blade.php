@extends('layouts.portal')
@section('title',"Exam")
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Exams</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Exams</li>
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
             <h3 class="text-left">{{$exam_title}}</h3>
             </div>
             <div class="col-sm-6">
             <h3 class="text-right">{{date('d M,Y',strtotime($exam_date))}}</h3>
             </div>
             </div>
              <form action="{{url('portal/exam_form_submit')}}"  class="database_operation" method="POST">
      @csrf
      <br>
    <div class="row">
    <div class="col-sm-12">
    <div class="form-group">
        <label>Enter Name</label>
        <input type="hidden" name="id"> 
        <input type="hidden" name="exam" value="{{$exam_title}}"> 
        <input type="text" name="name" required placeholder="Enter Name" class="form-control">
    </div>
    
    <div class="form-group">
        <label>Enter Email</label>
        <input type="email" name="email" required placeholder="Enter Email" class="form-control">
    </div>
    <div class="form-group">
        <label>Enter Password</label>
       <input type="text" name="password" required placeholder="Enter Password" class="form-control">
    </div>
    <div class="form-group">
        <label>Enter Mobile Number</label>
       <input type="text" name="mobile_no" required placeholder="Enter Mobile Number" class="form-control">
    </div>
    <div class="form-group">
        <label>Select Dob</label>
       <input type="date" name="dob" required class="form-control">
    </div>
    
   
      </div>
      <div class="col-sm-12">
      <div class="form-group">
      <button type="submit" class="btn btn-info">save</button>
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
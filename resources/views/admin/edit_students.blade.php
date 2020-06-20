@extends('layouts.app')
@section('title',"Manage Students")
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Students</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Students</li>
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
              <form action="{{url('admin/edit_new_students')}}"  class="database_operation" method="POST">
    @csrf
    <div class="row">
    <div class="col-sm-12">
    <div class="form-group">
        <label>Enter Name</label>
        <input type="hidden" name="id" value="{{$students['id']}}">
        <input type="text" name="name" required placeholder="Enter Name" value="{{$students['name']}}" class="form-control">
    </div>
    
    <div class="form-group">
        <label>Enter Email</label>
        <input type="email" name="email" placeholder="Enter Email" value="{{$students['email']}}" required class="form-control">
    </div>
    <div class="form-group">
        <label>Enter Mobile No</label>
        <input type="text" name="mobile_no" placeholder="Enter Mobile No" value="{{$students['mobile_no']}}" required class="form-control">
    </div>
    <div class="form-group">
        <label>Select DOB</label>
        <input type="date" name="dob" required value="{{$students['dob']}}" class="form-control">
    </div>
    <div class="form-group" >
        <label>Select Exam</label>
        <select name="exam" class="form-control">
        <option><?php echo $students['exam']?></option>
        
       <option>
        
        </option>
        
        </select>
    </div>
    <div class="form-group">
        <label>Enter Password</label>
        <input type="text" name="password"value="{{$students['password']}}" placeholder="Enter Password" required class="form-control">
    </div>
      
      <div class="col-sm-12">
      <div class="form-group">
      <button type="submit" class="btn btn-primary">Update</button>
      </div>
      </div>
    </div>
    </form> 

                
              </div>
              
              <div class="modal fade" id="myModal" role="dialog">

    </section>
    <!-- /.content -->
    <!-- /.content-header -->

    <!-- Main content -->
    @endsection
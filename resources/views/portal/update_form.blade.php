@extends('layouts.portal')
@section('title',"Exam")
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Exams</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Exams Forms</li>
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
             <div class="col-sm-12">
    <form action="{{url('portal/student_exam_info')}}" method="get">
     @csrf       
             
    <div class="form-group">
        <label>Enter Mobile Number</label>
        <input type="hidden" name="id"> 
       <input type="text" name="mobile_no" required placeholder="Enter Mobile Number" class="form-control">
    </div>
    <div class="form-group">
        <label>Select Dob</label>
       <input type="date" name="dob" required class="form-control">
    </div>
    <div class="form-group">
        <label>Select Exam</label>
       <select class="form-control" name="exam">
       <option value="">select</option>

       @foreach($exams as $exam)
       <option>{{$exam['title']}}</option>
       @endforeach
       </select>
    </div>
    </div>
      <div class="col-sm-12">
      <div class="form-group">
      <button type="submit" class="btn btn-info">search</button>
      </div>
      </div>
    </div>
    </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   </section>
    <!-- /.content -->
    <!-- /.content-header -->

    <!-- Main content -->
    @endsection
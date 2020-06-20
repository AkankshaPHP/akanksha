@extends('layouts.app')
@section('title',"Dashboard")
@section('content')

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
                <form action="{{url('admin/edit_new_exam')}}"  class="database_operation" method="POST">
    @csrf
    <div class="row">
    <div class="col-sm-12">
    <div class="form-group">
        <label>Enter Title</label>
        <input type="hidden" name="id" value="{{$exam['id']}}">
        <input type="text" name="title" value="{{$exam['title']}}" required placeholder="Enter title Name" class="form-control"><br>
    </div>
    
    <div class="form-group">
        <label>Enter Exam Date</label>
        <input type="date" name="exam_date" value="{{$exam['exam_date']}}" required class="form-control"><br>
    </div>
    <div class="form-group">
        <label>Enter Category</label>
        
        <select class="form-control" name="exam_category">
        <option><?php echo $exam['category']?></option>
        </select>
        
    </div>
      </div>
      <div class="col-sm-12">
      <div class="form-group">
      <button type="submit" class="btn btn-info">Edit</button>
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
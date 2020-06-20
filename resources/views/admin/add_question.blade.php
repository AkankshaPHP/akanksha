@extends('layouts.app')
@section('title',"Exam Question")
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Exam Question</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Exam Question</li>
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
               <div class="card-tools">
                <a href="javascript(0);" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add New question</a>
                </div>

                
              </div>
              <div class="card-body">
                <table class="table table-striped table-bordered table-hover datatable">
                <thead>
                <th>#</th>
                <th>Title</th>
                <th>Category</th>
                <th>Exam_date</th>
                <th>Status</th>
                <th>Action</th>
                </thead>
                <tbody>
                
               </tbody>
              </table>
              </div>
              <div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog modal-lg">

  <!-- Modal content-->
  <div class="modal-content ">
    <div class="modal-header">
     <h4 class="modal-title">Add question</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
    <form action="{{url('admin/add_new_question')}}"  class="database_operation" method="POST">
    @csrf
    <div class="row">
    <div class="col-sm-12">
    <div class="form-group">
        <label>Enter question</label>
        <input type="hidden" name="id" value="{{$id}}">
        <input type="text" name="question" required placeholder="Enter question" class="form-control">
    </div>
    </div>
    <div class="col-sm-6">
    <div class="form-group">
        <label>Enter Option 1</label>
        <input type="text" name="option1" required placeholder="Enter Option 1" class="form-control">
    </div>
  </div>
  <div class="col-sm-6">
    <div class="form-group">
        <label>Enter Option 2</label>
        <input type="text" name="option2" required placeholder="Enter Option 2" class="form-control">
    </div>
  </div>
  <div class="col-sm-6">
    <div class="form-group">
        <label>Enter Option 3</label>
        <input type="text" name="option3" placeholder="Enter Option 3" required class="form-control">
    </div>
  </div>
  <div class="col-sm-6">
    <div class="form-group">
        <label>Enter Option 4</label>
        <input type="text" name="option4" placeholder="Enter Option 4" required class="form-control">
    </div>
  </div>
  <div class="col-sm-12">
    <div class="form-group">
        <label>Enter Right Answer</label>
        <input type="text" name="ans" required placeholder="Enter Right Answer" class="form-control">
    </div>
  </div>
      <div class="col-sm-12">
      <div class="form-group">
      <button type="submit" class="btn btn-primary">Add</button>
      </div>
      </div>
    </div>
    </form>
    
  
</div>
</div>
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
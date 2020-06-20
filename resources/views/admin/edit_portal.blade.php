@extends('layouts.app')
@section('title',"Manage Portal")
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Portal</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Portal</li>
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
                
                
    <form action="{{url('admin/edit_new_portal')}}"  class="database_operation" method="POST">
    @csrf
    <div class="row">
    <div class="col-sm-12">
    <div class="form-group">
    <input type="hidden" name="id" value="{{$portal['id']}}">
        <label>Enter Name</label>
        <input type="text" name="name" required value="{{$portal['name']}}" placeholder="Enter Name" class="form-control">
    </div>
    
    <div class="form-group">
        <label>Enter Email</label>
        <input type="email" name="email" value="{{$portal['email']}}" placeholder="Enter Email" required class="form-control">
    </div>
    <div class="form-group">
        <label>Enter Mobile No</label>
        <input type="text" name="mobile_no" value="{{$portal['mobile_no']}}" placeholder="Enter Mobile No" required class="form-control">
    </div>
    <div class="form-group">
        <label>Enter Password</label>
        <input type="text" name="password" value="{{$portal['password']}}" placeholder="Enter Password" required class="form-control">
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
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
     <h4 class="modal-title">Add New Portal</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
    
    
  
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
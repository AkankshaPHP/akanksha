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
                
                <div class="card-tools">
                <a href="javascript(0);" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add New</a>
                </div>

                
              </div>
              <div class="card-body">
                <table class="table table-striped table-bordered table-hover datatable">
                <thead>
                <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile_no</th>
                <th>Password</th>
                <th>Status</th>
                <th>Action</th>
                </tr>
               </thead>
                <tbody>
                @foreach($portal as $key=>$port)
                <tr>
                <td><?php echo $key+1;?></td>
                <td>{{$port['name']}}</td>
                <td>{{$port['email']}}</td>
                <td>{{$port['mobile_no']}}</td>
                <td>{{$port['password']}}</td>
                
                <td><input type="checkbox" name="status" <?php if($port['status']==1) echo "checked";?> class="portal_status" data-id="{{$port['id']}}"></td>
                <td><a href="{{url('admin/edit_portal/'.$port['id'])}}" class="btn btn-info">Edit</a>
                <a href="{{url('admin/delete_portal/'.$port['id'])}}" class="btn btn-danger">Delete</a></td>
                 
                </tr>
                @endforeach
                
                
               </tbody>
              </table>
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
    <form action="{{url('admin/add_new_portal')}}"  class="database_operation" method="POST">
    @csrf
    <div class="row">
    <div class="col-sm-12">
    <div class="form-group">
        <label>Enter Name</label>
        <input type="text" name="name" required placeholder="Enter Name" class="form-control">
    </div>
    
    <div class="form-group">
        <label>Enter Email</label>
        <input type="email" name="email" placeholder="Enter Email" required class="form-control">
    </div>
    <div class="form-group">
        <label>Enter Mobile No</label>
        <input type="text" name="mobile_no" placeholder="Enter Mobile No" required class="form-control">
    </div>
    <div class="form-group">
        <label>Enter Password</label>
        <input type="text" name="password" placeholder="Enter Password" required class="form-control">
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
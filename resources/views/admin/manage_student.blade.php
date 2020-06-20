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
                
                <div class="card-tools">
                <a href="javascript(0);" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add Students</a>
                </div>

                
              </div>
              <div class="card-body">
                <table class="table table-striped table-bordered table-hover datatable">
                <thead>
                <tr>
                <th>#</th>
                <th>Name</th>
                <th>DOB</th>
                <th>Exam</th>
                <th>Exam Date</th>
                <th>Result</th>
                <th>Status</th>
                <th>Action</th>
                </tr>
               </thead>
                <tbody>
                @foreach($students as $key=>$student)
                <tr>
                <td><?php echo $key+1;?></td>
                <td>{{$student['name']}}</td>
                <td>{{$student['dob']}}</td>
                <td>{{$student['exam']}}</td>
                <td>{{$student['exam_date']}}</td>
                <td>N/A</td>
                <td><input type="checkbox" <?php if($student['status']==1) echo "checked";?> class="student_status" data-id="{{$student['id']}}" name="status"></td>
                <td><a href="{{url('admin/edit_students/'.$student['id'])}}" class="btn btn-primary">Edit</a>
                <a href="{{url('admin/delete_students/'.$student['id'])}}" class="btn btn-danger">Delete</a></td>
                 
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
     <h4 class="modal-title">Add New Student</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
    <form action="{{url('admin/add_new_students')}}"  class="database_operation" method="POST">
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
        <label>Select DOB</label>
        <input type="date" name="dob" required class="form-control">
    </div>
    <div class="form-group" >
        <label>Select Exam</label>
        <select name="exam" class="form-control">
        <option>Select</option>
        @foreach($exam as $ex)
       <option>
        {{$ex['title']}}
        </option>
        @endforeach
        </select>
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
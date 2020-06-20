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
               <div class="card-tools">
                <a href="javascript(0);" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add Exams</a>
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
                <tr>
                @foreach($exams as $key=>$ex)
                <td><?php echo $key+1;?></td>
                <td><?php echo $ex['title'];?></td>
                <td><?php echo $ex['category'];?></td>
                <td><?php echo $ex['exam_date'];?></td>
                <td><input type="checkbox" <?php if($ex['status']==1) echo "checked";?> class="exam_status" data-id={{$ex['id']}} name="status"></td>
                <td><a href="{{url('admin/edit_exam/'.$ex['id'])}}" class="btn btn-primary">Edit</a>

                <a href="{{url('admin/delete_exam/'.$ex['id'])}}"class="btn btn-danger">Delete</a>

                  <a href="{{url('admin/add_question/'.$ex['id'])}}"class="btn btn-primary">Add Question</a>
                </td>
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
     <h4 class="modal-title">Add New Exam</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
    <form action="{{url('admin/add_new_exam')}}"  class="database_operation" method="POST">
    @csrf
    <div class="row">
    <div class="col-sm-12">
    <div class="form-group">
        <label>Enter Title</label>
        <input type="text" name="title" required placeholder="Enter title Name" class="form-control"><br>
    </div>
    
    <div class="form-group">
        <label>Enter Exam Date</label>
        <input type="date" name="exam_date" required class="form-control"><br>
    </div>
    <div class="form-group">
        <label>Enter Category</label>
        
        <select class="form-control" name="exam_category">
        <option value="">select</option>
        @foreach($category as $cat)
           <option><?php echo $cat['name']?></option>
            @endforeach
        </select>
        
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
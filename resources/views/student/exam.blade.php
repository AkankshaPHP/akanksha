@extends('layouts.student')
@section('title',"Exams")
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
              </div>
              <div class="card-body">
                <table class="table table-striped table-bordered table-hover datatable">
                <thead>
                <th>#</th>
                <th>Exam Title</th>
                <th>Exam_date</th>
                <th>Status</th>
                <th>Result</th>
                <th>Action</th>
                </thead>
                
                <tbody>
                <td>1</td>
                <td>{{$student_info->title}}</td>
                <td>{{$student_info->ex_date}}</td>
                <td><?php if(strtotime(date('Y-m-d'))<strtotime($student_info->ex_date)){
                   $status="pending";
                    echo $status;
                }else if(strtotime(date('Y-m-d'))== strtotime($student_info->ex_date)){
                    $status="Running";
                    echo $status;
                }else if(strtotime(date('Y-m-d'))>strtotime($student_info->ex_date)) {
                    $status="completed";
                    echo $status;
                }
                ?></td>
                
                <td></td>
                
                <td><?php if($status=="pending" || $status=="Running"){?>
                <a href="{{url('student/join_exam')}}" onclick="setTimeout(myFunction, 900); class="btn btn-info">Join Exam</a></td>
                <?php } ?></td>
                
                </tbody>
                
                
              </table>
              </div>
              <div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  
    
    
  
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
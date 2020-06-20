@extends('layouts.student')
@section('title',"Result View")
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Result View</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Result View</li>
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
                <th>Name</th>
                <th>Total Marks</th>
                <th>Obtained Marks</th>
                <th>Status</th>
                </thead>
                <tbody>
                <td>Arpit</td>
                <td>30</td>
                <td>20</td>
                <td style="background-color:green;">Pass</td>
                
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
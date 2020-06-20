@extends('layouts.student')
@section('title',"Result")
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Result</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Result</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    
          <!-- ./col -->
          
       
        <!-- /.row -->
        <!-- Main row -->
        <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Answers</h4>
          </div>
          
          <div class="card-body">
         
         
             
             @foreach($exams as $key=>$exam)
            <ol class="list-unstyled mt-3 mb-4">
              <li>{{$key+1}}.   {{$exam['ans']}}</li>
             </ol> 
             @endforeach
           <a href="{{url('student/result')}}" type="submit" class="btn btn-lg btn-block btn-outline-primary">Check Result
           </a>
           
          </div>
          
        </div>
        
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <div class="container">
                <div class="row">
                <div class="col-sm-12">
                
                </div>
                </div>
                </div
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>  -header -->
              <div class="card-body pt-0">
                <div class="container">
                <div class=
  @endsection
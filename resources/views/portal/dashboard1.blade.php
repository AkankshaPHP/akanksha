@extends('layouts.portal')
@section('title',"Portal-Dashboard")
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Portal Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        
        <div class="row">
          @foreach($portal_exam as $key=>$exam)
          <?php
         
          if(strtotime(date('Y-m-d'))>strtotime($exam['exam_date'])){
            $cls= "bg-danger";
          }else{
          $val=$key+1;
          if($val%2==0)
          $cls="bg-info";
          else
          $cls="bg-success";
          }
          ?>
            <div class="col-lg-36 col-6">
            <!-- small box -->
            <div class="small-box <?php echo $cls;?>">
            
              <div class="inner">
              <h3>{{$exam['title']}}</h3>
                
                <p><?php echo $exam['cat_name'];?></p>
              
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              @if(strtotime(date('Y-m-d'))< strtotime($exam['exam_date']))
              <a href="{{url('portal/exam_form/'.$exam['id'])}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                @endif
                
                </div>
              </div>
              @endforeach
            
          </div>
          <!-- ./col -->
          
       
        <!-- /.row -->
        <!-- Main row -->
        
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>  
  @endsection
  
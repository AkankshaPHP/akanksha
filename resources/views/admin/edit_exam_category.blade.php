@extends('layouts.app')
@section('title',"Dashboard")
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
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
                <h3 class="card-title">Title</h3>
               </div>
              <div class="card-body">
              <form action="{{url('admin/edit_new_category')}}" class="database_operation" method="POST">
      @csrf
    <div class="row">
    <div class="col-sm-12">
    <div class="form-group">
        <label>Enter Category Name</label>
        
        <input type="hidden" name="id" value="{{$category['id']}}">
        <input type="text" name="name" required value="{{$category['name']}}" placeholder="Enter Category Name" class="form-control"><br>
    </div>
      </div>
      <div class="col-sm-12">
      <div class="form-group">
      <button type="submit" class="btn btn-primary">Update</button>
      </div>
      </div>
    </div>
    </form>
                
              </div>
            
     
    </section>
    <!-- /.content -->
    <!-- /.content-header -->

    <!-- Main content -->
    @endsection
   <script type="text/javascript">
     $(document).on('submit','.database_operation',function(){
        var url=$(this).attr('action');
        var data=$(this).serialize();
        $.post(url,data,function(fc){
          var res=jQuery.parseJSON(fc);
          if(res.status=='true'){
            alert(res.message);
            setTimeout(function(){
              window.location.href=res.reload;

            },300 );
          }
          alert(res.message);
        });
        return false;
     });
   </script>
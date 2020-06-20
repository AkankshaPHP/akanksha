<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Signup</title>
    <style type="text/css">
    .signup_container{
        width:60%;
        height:500px;
        border:1px solid;
        border-radius:35px;
        padding:21px;
        margin-left:20%;
        margin-top:70px;
        background-color:#996600;

    }
    </style>
</head>
<body>
<div class="container">
   <div class="signup_container">
      <div class="signup_title">
         <h3 class="text-center">Portal Signup</h3>
      </div>
 <form action="{{url('portal/signup_sub')}}" class="database_operation" method="post">
<div class="signup_form">
<div class="row">
<div class="col-sm-12">
    <div class="form-group">
        @csrf
    <label style="font-weight:bold">Enter Name</label>
    <input type="text" name="name" placeholder="Enter Name" class="form-control">
    </div>
    <div class="form-group">
    <label style="font-weight:bold">Enter E-Mail</label>
    <input type="text" name="email" placeholder="Enter E-Mail" class="form-control">
    </div>
    <div class="form-group">
    <label style="font-weight:bold">Enter Password</label>
    <input type="password" name="password" placeholder="Enter Password" class="form-control">
    </div>
    <div class="form-group">
    <label style="font-weight:bold">Enter Mobile Number</label>
    <input type="text" name="mobile_no" placeholder="Enter Mobile Number" class="form-control">
    </div>
    <div class="form-group">
    <button  style="font-weight:bold" class="btn btn-info btn btn-block">Sign Up</button>
    </div>
    <div class="form-group">
    <h5 class="text-right">Have an account?<a href="{{url('portal/login')}}"  style="font-weight:bold">Login</a></h5>
    </div>
</form>
    </div>
</div>
    
</body>
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
</html>
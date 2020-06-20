<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Login</title>
    <style type="text/css">
    .signup_container{
        width:60%;
        height:350px;
        border:1px solid;
        border-radius:35px;
        padding:21px;
        margin-left:20%;
        margin-top:70px;
        background-color:#666699;

    }
    </style>
</head>
<body>
<div class="container">
   <div class="signup_container">
      <div class="signup_title">
         <h3 class="text-center">Student Login</h3>
      </div>
 <form action="{{url('student/login_sub')}}" class="database_operation" method="post">
<div class="signup_form">
<div class="row">
<div class="col-sm-12">
    @csrf
    <div class="form-group">
    <label style="font-weight:bold">Enter E-Mail</label>
    <input type="hidden" name="id">
    <input type="text" name="email" required  placeholder="Enter E-Mail" class="form-control">
    </div>
    <div class="form-group">
    <label style="font-weight:bold">Enter Password</label>
    <input type="password" name="password" required placeholder="Enter Password" class="form-control">
    </div>
   
    <div class="form-group">
    <button  class= "btn btn-dark btn btn-block" style="font-weight:bold" class="btn btn-info">Login</button>
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
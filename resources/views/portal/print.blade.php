<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Print Exam</title>
    <style type="text/css">
    .exam_title{
        margin-top:50px;
        text-align:center;
    }
.user_info_block{
    margin-top:74px;
}
.info_block{
    width:50%;
    float:left;
    height:50px;
    line-height:50px;
    padding:9px;
    

    
}
.exam_date{
    text-align:center;
}
    </style>
</head>
<body>
<div class="print_container">
<div class="exam_title">
<h3>{{ $exam_title}}</h3>
</div>
<div class="exam_date">
<label>{{ date('d-M-Y',strtotime($exam_date))}}</label>
</div>

<div class="user_info_block">
    <div class="info_block">
<label>Name: {{ $std_info->name}}</label>
</div>
   <div class="info_block">
<label>Email: {{ $std_info->email}}</label>
</div>
   <div class="info_block">
<label>Mobile No: {{ $std_info->mobile_no}}</label>
</div>
   <div class="info_block">
<label>Dob: {{ date('d M,Y',strtotime($std_info->dob))}}</label>
</div>
   
<div class="print_block">
<button class="btn btn-info" onclick="window.print()">Print</button>
</div>

</div>
</div>
    
</body>
</html>
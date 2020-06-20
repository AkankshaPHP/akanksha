//to submit a form through ajax
$(document).on('submit','.database_operation',function(){
    
    var url=$(this).attr('action');
    //alert(url);
    
    var data=$(this).serialize();
   $.post(url,data,function(fc){
       
       var res=jQuery.parseJSON(fc);
       if(res.status=='true'){
            alert(res.message);
           setTimeout(function(){
               window.location.href=res.reload;
           },300);
       }
    alert(res.message);
   });
    return false;
});
//when click on checkbox, the statsus value should be 1 in db
$(document).on('click','.category_status',function(){
   
    var id=$(this).attr('data-id');
    $.get(BASE_URL+'/admin/category_status/'+id,function(fc){
        alert("status successfully changed");

    });
});
$(document).on('click','.exam_status',function(){
   
     var id=$(this).attr('data-id');
     $.get(BASE_URL+'/admin/exam_status/'+id,function(fc){
         alert("status successfully changed");
 
     });
 });
 $(document).on('click','.student_status',function(){
   
    var id=$(this).attr('data-id');
    $.get(BASE_URL+'/admin/student_status/'+id,function(fc){
        alert("status successfully changed");

    });
});
$(document).on('click','.portal_status',function(){
    var id=$(this).attr('data-id');
    $.get(BASE_URL+'/admin/portal_status/'+id,function(fc){
        alert("status has changed");

    });
});
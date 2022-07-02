<?php
ob_start();
include 'connection.php';

 if(isset($_POST['submit'])){
 	 $id=$_GET['Id'];
     $title=$_POST['title'];
    
    
     $query="UPDATE title_share set title='".$title."' where id='".$id."' ";
     $result=mysqli_query($link,$query);
     if($result){
     	   
         echo "<script>alert(' تم تعديل  عنوان الاشتراك بنجاح') ;
         location.href='update_title.php';
         </script>";
     }
    
 }

    
 ob_end_flush();
?>
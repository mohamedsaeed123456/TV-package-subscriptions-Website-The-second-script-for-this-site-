<?php
ob_start();
include 'connection.php';

 if(isset($_POST['submit'])){
 	 $id=$_GET['Id'];
     $name=$_POST['name'];
    
    
     $query="UPDATE sub_pages_names set name='".$name."' where id='".$id."' ";
     $result=mysqli_query($link,$query);
     if($result){
     	   
         echo "<script>alert(' تم تعديل اسم الصفحة الفرعية بنجاح  ') ;
         location.href='update_sub_pages.php';
         </script>";
     }
    
 }

    
 ob_end_flush();
?>
<?php
ob_start();
include 'connection.php';

 if(isset($_POST['submit'])){
 	 $id=$_GET['ID'];
     $description=$_POST['description'];
     $code=$_POST['code'];
     $query="UPDATE code_shares set description='".$description."' ,  code='".$code."' where id='".$id."' ";
     $result=mysqli_query($link,$query);
     if($result){
     	   
         echo "<script>alert(' تم تعديل كود الاشتراك بنجاح ') ;
         location.href='update_code.php';
         </script>";
     }
    
 }

    
 ob_end_flush();
?>
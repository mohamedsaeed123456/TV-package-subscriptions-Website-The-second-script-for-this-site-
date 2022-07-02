<?php
ob_start();
include 'connection.php';

 if(isset($_POST['submit'])){
 	 $id=$_GET['ID'];
     $title1=$_POST['title1'];
     $description=$_POST['description'];
     $price=$_POST['price'];
         $image= base64_encode(file_get_contents($_FILES['image']['tmp_name']));
    
     $query="UPDATE add_share set title1='".$title1."' , description='".$description."' , price='".$price."' ,image='".$image."' where id='".$id."' ";
     $result=mysqli_query($link,$query);
     if($result){
     	   
         echo "<script>alert(' تم التعديل علي الاشتراك بنجاح') ;
         location.href='update_share.php';
         </script>";
     }
    
 }

    
 ob_end_flush();
?>
<?php
ob_start();
include 'connection.php';

 if(isset($_POST['submit'])){
 	 $id=$_GET['ID'];
    $image= base64_encode(file_get_contents($_FILES['img']['tmp_name']));
    
     $query="UPDATE banners set img='".$image."' where id='".$id."' ";
     $result=mysqli_query($link,$query);
     if($result){
     	   
         echo "<script>alert(' تم تعديل الصورة بنجاح') ;
         location.href='change_panners.php';
         </script>";
     }
    
 }

    
 ob_end_flush();
?>
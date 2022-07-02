<?php
ob_start();
include 'connection.php';

 if(isset($_POST['submit'])){
 	 $id=$_GET['ID'];
     $first_name=$_POST['first_name'];
       $last_name=$_POST['last_name'];
       $phone=$_POST['phone'];
       $ccode=$_POST['ccode4'];
        $description=$_POST['description'];
       $email_verification=$_POST['email_verification'];
       $product_price=$_POST['product_price'];
       $price_product=$_POST['price_product'];
     $query="UPDATE pay_info set first_name='".$first_name."' ,  last_name='".$last_name."' ,phone='".$phone."',ccode4='".$ccode."',description='".$description."',email_verification='".$email_verification."',product_price='".$product_price."',price_product='".$price_product."' where id='".$id."' ";
     $result=mysqli_query($link,$query);
     if($result){
     	   
         echo "<script>alert(' تم تعديل بيانات العضو بنجاح   ') ;
         location.href='users.php';
         </script>";
     }
    
 }

    
 ob_end_flush();
?>
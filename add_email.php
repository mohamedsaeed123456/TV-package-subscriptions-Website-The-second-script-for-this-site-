<?php 
if(isset($_POST['submit'])){
include 'connection.php';
$email=$_POST['email'];
$code_verification=$_POST['code_verification'];
$result=mysqli_query($link,"insert into users(email,code_verification) values('$email','$code_verification')");
    
  
}
 

?>

    <?php
    if(isset($_POST['display'])){
    include 'connection.php';
    $result9=mysqli_query($link,"SELECT * FROM users order by id desc limit 1");
      $result10=mysqli_query($link,"SELECT * FROM login");
      $row10 = mysqli_fetch_array($result10);
    while($row9=mysqli_fetch_array($result9)){
        echo  $row9['email'];


           $to=$row9['email'];
            $subject=$row10['name'];
            $message=$row9['code_verification']. 'هو رمز التحقق للمتجر
يرجى عدم مشاركته مع أي شخص
تسوّق ممتع :)
';

            $body=
                "\n"   .$message; 
            mail($to,$subject,$body);
             
   
    }
    }
   
    
?>

    <?php
    if(isset($_POST['form_display'])){
    include 'connection.php';
    $result9=mysqli_query($link,"SELECT * FROM users order by id desc limit 1");
    while($row9=mysqli_fetch_array($result9)){
        echo  $row9['code_verification'];
    }
    }
    ?>
    
   
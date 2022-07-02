<?php ob_start();
include 'connection.php';
if(isset($_GET['DEL'])){ 
$id=$_GET['DEL'];
$query="delete from sms where id='".$id."'";
$query1="ALTER TABLE sms AUTO_INCREMENT = 1 ";
$result=mysqli_query($link,$query);
$result=mysqli_query($link,$query1);
if($result){ 
header("Location: code_sms.php");
}
}


ob_end_flush();
?>
<?php ob_start();
include 'connection.php';
if(isset($_GET['Del'])){ 
$id=$_GET['Del'];
$query="delete from code_after_pay where id='".$id."'";
$query1="ALTER TABLE code_after_pay AUTO_INCREMENT = 1 ";
$result=mysqli_query($link,$query);
$result=mysqli_query($link,$query1);
if($result){ 
header("Location: users_sells.php");
}


}


ob_end_flush();
?>
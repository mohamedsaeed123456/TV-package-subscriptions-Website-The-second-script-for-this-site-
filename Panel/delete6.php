<?php ob_start();
include 'connection.php';
if(isset($_GET['Del'])){ 
$id=$_GET['Del'];
$query="delete from ip_visitor where id='".$id."'";
$query1="ALTER TABLE ip_visitor AUTO_INCREMENT = 1 ";
$result=mysqli_query($link,$query);
$result=mysqli_query($link,$query1);
if($result){ 
header("Location: panel.php");
}


}


ob_end_flush();
?>
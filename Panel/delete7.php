<?php ob_start();
include 'connection.php';
if(isset($_GET['DEL'])){ 
$id=$_GET['DEL'];
$query="delete from sub_pages_names where ids='".$id."'";
$query1="ALTER TABLE sub_pages_names AUTO_INCREMENT = 1 ";
$result=mysqli_query($link,$query);
$result=mysqli_query($link,$query1);
if($result){ 
header("Location: update_sub_pages.php");
}


}


ob_end_flush();
?>
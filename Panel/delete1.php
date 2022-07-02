<?php ob_start();
include 'connection.php';
if(isset($_GET['DEL'])){ 
$id=$_GET['DEL'];
$query="delete from title_share where id='".$id."'";
$query1="ALTER TABLE title_share AUTO_INCREMENT = 1"; 
$result=mysqli_query($link,$query);
$result=mysqli_query($link,$query1);
if($result){ 
header("Location: update_title.php");
}

}

ob_end_flush();
?>
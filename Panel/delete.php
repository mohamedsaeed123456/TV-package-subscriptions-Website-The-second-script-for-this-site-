<?php ob_start();
include 'connection.php';
if(isset($_GET['Del'])){ 
$id=$_GET['Del'];
$query="delete from add_share where id='".$id."' ";
$query1="ALTER TABLE add_share AUTO_INCREMENT = 1";  
$result=mysqli_query($link,$query);
$result=mysqli_query($link,$query1);
if($result){ 
header("Location: update_share.php");
}

}

ob_end_flush();
?>
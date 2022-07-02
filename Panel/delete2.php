<?php ob_start();
include 'connection.php';
if(isset($_GET['DEL'])){ 
$id=$_GET['DEL'];
$id1=$id+1;
$query="delete from banners where id= '$id'"; 
$query1="UPDATE banners set id=id-1 where id >= '$id1'";
$query2="ALTER TABLE banners AUTO_INCREMENT = 1 ";
$result=mysqli_query($link,$query);
$result=mysqli_query($link,$query1);
$result=mysqli_query($link,$query2);
if($result){ 
header("Location: change_panners.php");
}

}

ob_end_flush();
?>
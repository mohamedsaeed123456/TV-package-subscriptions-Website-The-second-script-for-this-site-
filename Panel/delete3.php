<?php ob_start();
include 'connection.php';
if(isset($_GET['DEL'])){ 
$id=$_GET['DEL'];
$query="delete from code_shares where id='".$id."'";
$query1="ALTER TABLE code_shares AUTO_INCREMENT = 1 ";
$result=mysqli_query($link,$query);
$result=mysqli_query($link,$query1);
if($result){ 
header("Location: update_code.php");
}
else{
    echo '<script>alert("Noooo")</script>';
}

}

ob_end_flush();
?>
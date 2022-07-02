<?php ob_start();
include 'connection.php';
if(isset($_GET['Del'])){ 
$id=$_GET['Del'];
$query="delete from pay_info where id='".$id."'";
$query1="ALTER TABLE pay_info AUTO_INCREMENT = 1 ";
$result=mysqli_query($link,$query);
$result=mysqli_query($link,$query1);
if($result){ 
header("Location: users.php");
}
else{
    echo 'Nooooooo';
}

}
else{
    echo 'Noooooooooooo';
}

ob_end_flush();
?>
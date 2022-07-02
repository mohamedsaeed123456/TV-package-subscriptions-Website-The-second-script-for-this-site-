<?php
session_start();
if(isset($_POST['action'])){
    $id=$_POST['id'];
    $quantity=$_POST['quantity'];
    if(isset($_SESSION['mycart'][$id])){
        $previous=$_SESSION['mycart'][$id]['qty'];
         $_SESSION['mycart'][$id] = array("pid"=>$id ,"qty" =>$previous+$quantity);
    }
    else{
        $_SESSION['mycart'][$id] = array("pid"=>$id ,"qty" =>$quantity);
    }

}
?>
<?php
session_start();
 if(isset($_POST['display_count'])){
    if(isset($_SESSION['mycart'])){
        echo count($_SESSION["mycart"]);
    }
    else{
         echo 0;
    }
 }
 include 'connection.php';
 if(isset($_POST['display_total'])){
 $total=0;
 foreach($_SESSION['mycart'] as $key => $value){
     $q=mysqli_query($link,"Select * from add_share where id ='$key'");
     foreach($q as $a){
         $total+=$value['qty']*$a['price'];
     } 
 }
     
$result55=mysqli_query($link,"Select * from currency");
            while($row55 =mysqli_fetch_array($result55)){
 echo $total; echo ' ';echo $row55['curr'];
    }
 }
?>
<?php
if(isset($_POST['action'])){
foreach($_SESSION['mycart'] as $key => $value){
    $q=mysqli_query($link,"Select * from add_share where id ='$key'");
    foreach($q as $a){
    include 'connection.php';
            $orderid=mysqli_insert_id($link);
            $pid=$key;
            $q=$value['qty'];
            $price=$value['qty']*$a['price'];
            $description=$a['description'];
            $date=date('Y-m-d');
             $sql =mysqli_query($link,"insert into orders(order_id,product_id,qty,total_price,descc,order_date) values ('$orderid','$pid','$q','$price','$description','$date')");
    }   
}
}

?>
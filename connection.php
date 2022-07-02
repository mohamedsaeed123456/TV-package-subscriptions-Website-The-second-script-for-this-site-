<?php
 $link =mysqli_connect("localhost","u490311011_evd","?Lxq5Nz6");
    mysqli_select_db($link ,"u490311011_evd");
   if($link->connect_error){
   	die("Connection failed :" . $link->connect_error);
   }
?>
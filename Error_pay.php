<?php 
include 'connection.php';
$member_id=$_GET['Secret'];
$result2=mysqli_query($link,"Select * from pay_info where member_id='$member_id'");
$row2 = mysqli_fetch_array($result2);
if($row2){
?>
<script>
    alert('هذه البطاقة لا تصلح لشراء الاشتراك');
     window.location.href = "problem?Secret=<?php echo $member_id ?>";
</script>
<?php }
else{
     echo  "<script>
     window.location.href= './'
     </script>";
}
?>
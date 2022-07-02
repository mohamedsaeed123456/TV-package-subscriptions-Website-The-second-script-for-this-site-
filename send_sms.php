<?php 
if(isset($_POST['submit'])){
include 'connection.php';
$phone=$_POST['phone'];
$code_verification=$_POST['code_verification'];
$ccode=$_POST['ccode'];
$ccode3=trim($ccode);
$result=mysqli_query(
    $link,"insert into sms(phone,ccode1,code_verification)values('$phone','$ccode3','$code_verification')"
    );
}
?>
    <?php
    if(isset($_POST['display_phone'])){
    include 'connection.php';
    $result9=mysqli_query($link,"SELECT * FROM sms order by id desc limit 1");
    $row9=mysqli_fetch_array($result9);
    echo  $row9['ccode1'];
    echo  $row9['phone'];
function sendRequest($site, $data)
{
    $json = json_encode($data);
    $ch = curl_init($site);
    $header = array('Content-Type: application/json');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
$result6 =mysqli_query($link,"Select * from api_sms");
while($row6=mysqli_fetch_array($result6)){
    $api_key  = $row6['api'];     						
}
$title    = 'smartes';      						
$text	  = $row9['code_verification'] .' هو رمز التحقق للمتجر
يرجى عدم مشاركته مع أي شخص
تسوّق ممتع :)
';
$sentto =''.$row9['ccode1'].''.$row9['phone'].'';
$sms_lang = 2;
$report = 0;
$body = array("api_key" => $api_key, "title"=>$title, "text"=>$text,"sentto"=>$sentto,"sms_lang"=>$sms_lang,"report"=>$report);
$result = sendRequest('https://www.turkeysms.com.tr/api/v3/gonder/add-content', $body);
    
    }
?>
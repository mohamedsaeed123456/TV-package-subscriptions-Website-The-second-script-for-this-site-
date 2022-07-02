<?php 
 session_start();
 $member_id=$_GET['Secret'];
   $_SESSION['go_to_payment']=true;
  $_SESSION['member_id']=$member_id;
?>
<?php 
include 'connection.php';
$member_id=$_GET['Secret'];
$result2=mysqli_query($link,"Select * from pay_info where member_id='$member_id'");
$row2 = mysqli_fetch_array($result2);
if($row2){
?>
<?php 
session_start();
include 'connection.php';
$result=mysqli_query($link,"Select * from login");
$row5 = mysqli_fetch_array($result);
?>
<html lang="en" dir="rtl"><head>
<meta charset="UTF-8" dir="rtl" lang="ar">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">

<meta name="theme-color" content="#3a3a3a">
<meta name="msapplication-navbutton-color" content="#3a3a3a">
<meta name="apple-mobile-web-app-status-bar-style" content="#3a3a3a">

<link rel="icon" type="image/png" href="image/eb88qwfFymCKvpxUN52Py7RJqkZB6yMGgDHoqaiT.png">


<link rel="stylesheet" href="css/libraries.css">
<link rel="stylesheet" href="css/checkout.css">
<title>صندوق كوم | إنهاء الطلب </title>
<title>صندوق كوم</title>
<link rel="icon" type="image/jpeg" href="<?php echo 'data:image;base64 ,'.$row5['image'].' ';?>">
<meta name="description" content="متجر صندوق كوم لبيع البطائق الرقمية">
<meta name="keywords" content="متجر,صندوق,كوم,لبيع,البطائق,الرقمية">
<meta property="store:published_time" content="2021-09-03T21:00:52+03:00">
<meta property="og:description" content="متجر صندوق كوم لبيع البطائق الرقمية">
<meta property="og:title" content="صندوق كوم">
<meta property="og:type" content="store">
<meta property="og:url" content="https://evdtv.shop/payment?Secret=<?php echo $_GET['member_id']; ?>">
<meta property="og:locale" content="ar_AR">
<meta property="og:locale:alternate" content="ar_AR">
<meta property="og:locale:alternate" content="en_US">
<meta property="og:image" content="image/CZyT1aVZeq1coO0108bdmtWwCdrX42GAniELxZyF.png">
<meta property="og:image:width" content="600">
<meta property="og:image:height" content="300">
<meta property="og:image" content="image/CZyT1aVZeq1coO0108bdmtWwCdrX42GAniELxZyF.png">
<meta property="og:image:width" content="600">
<meta property="og:image:height" content="300">
<meta name="twitter:description" content="متجر صندوق كوم لبيع البطائق الرقمية">
<meta name="twitter:image" content="image/CZyT1aVZeq1coO0108bdmtWwCdrX42GAniELxZyF.png">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="صندوق كوم">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>

<style type="text/css" rel="stylesheet">
    :root {
        --color-primary: #3a3a3a;
        --main-color: #3a3a3a;
        --color-primary-l: #b9b9b9;
        --color-primary-t: #606060;
        --color-primary-d: #202020;;
        --color-text-reverse: #b9b9b9;
        --color-title: #000000;
        --color-primary-tt: #ffffff
    }
</style>
<style type="text/css">
[type="tel"][data-v-32b71108] {
    direction: ltr;
}
</style><style type="text/css">
.content {
    padding: 20px;
}
.tabby-button {
    height: 42px;
    background: #3eedbf;
    border-radius: 3px;
    text-transform: uppercase;
    font-size: 14px;
    width: 100%;
    transition: background 0.1s;
    cursor: pointer;
    padding: 0;
    border: 0;
    outline: 0;
    margin-bottom: 20px;
    margin-left: 5px;
    margin-right: 5px;
}
.control {
    background: white;
    border: 1px solid #505050;
    text-transform: initial;
}
.control {
    margin-top: 100px;
}
.control + .control {
    margin-top: 20px;
}
.tabby-button.primary:hover {
    background: rgba(62, 237, 191, 0.8);
}
.tabby-button.primary:active {
    background: #63debe;
}
.tabby-button.primary.tabby-button__disabled {
    background: #bdbdbd;
    color: #868686;
    cursor: default;
}
</style><style type="text/css">
.fade-enter-active[data-v-d99785a2], .fade-leave-active[data-v-d99785a2] {
  transition: opacity .5s;
}
.fade-enter[data-v-d99785a2], .fade-leave-to[data-v-d99785a2] /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
</style><style type="text/css">
.vue-map-container {
  position: relative;
}
.vue-map-container .vue-map {
  left: 0; right: 0; top: 0; bottom: 0;
  position: absolute;
}
.vue-map-hidden {
  display: none;
}
</style><style type="text/css">
.vue-street-view-pano-container {
  position: relative;
}
.vue-street-view-pano-container .vue-street-view-pano {
  left: 0; right: 0; top: 0; bottom: 0;
  position: absolute;
}
</style><style type="text/css">
.options-enter-active[data-v-e774973e] {
    transition: all .2s ease;
}
.options-leave-active[data-v-e774973e] {
    transition: all .2s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.options-up-enter[data-v-e774973e], .options-fade-leave-to[data-v-e774973e] {
    transform: translateY(100vh);
    opacity: 0;
}
</style><style type="text/css">
.breadcrumb-item a[data-v-74c71e0d] {
    color: var(--color-primary);
}
.breadcrumb-item a[data-v-74c71e0d]:hover {
    color: var(--color-primary-l);
}
</style><style type="text/css">
.without-arrow[data-v-e5a4c4bc]:after {
    background: none !important;
}
</style></head>
<body class="body">
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TGFC6FV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<noscript>
            للحصول على الوظائف الكاملة لهذا الموقع من الضروري تمكين جافا سكريبت. هاهي كيفية
            <a href="http://www.enable-javascript.com/" rel="nofollow" target="_blank">تمكين جافا سكريبت في متصفح الويب
                الخاص
                بك</a>.
        </noscript>
        <?php
        include 'connection.php';
        $member_id=$_GET['Secret'];
        $result=mysqli_query($link,"Select * from pay_info where member_id='$member_id'");
        while($row=mysqli_fetch_array($result)){
        ?>
<div id="app" class="container container--margined">
    <div class="row"> 
    <div id="payment_process" class="col-md-9 col-sm-12" style="display: block;">
    <main class="sections-wrapper">
        <header data-v-74c71e0d="" class="store-info">
            <div data-v-74c71e0d="" class="d-flex">
                                    <?php 
include 'connection.php';
$result3=mysqli_query($link,"Select * from logo");
while($row3=mysqli_fetch_array($result3)){
?>
                <div data-v-74c71e0d="" class="store-info__logo">

                    <a data-v-74c71e0d="" href="./">
           <?php echo '<img  alt="logo" src="data:image;base64 ,'.$row3['logo'].'" >';?>
           </a>
        </div> 
        <?php } ?>
        
        <div data-v-74c71e0d="" class="store-info__detail">
            <h1 data-v-74c71e0d="">مرحبا <?php echo $row['first_name']; echo ' '; echo $row['last_name']; ?> </h1>
            <ul data-v-74c71e0d="" class="breadcrumb">
             <li data-v-74c71e0d="" class="breadcrumb-item">
                 <a data-v-74c71e0d="" href="cart.php" target="_blank">سلة المشتريات</a> 
                 </li> 
                 <li data-v-74c71e0d="" class="breadcrumb-item">إنهاء الطلب</li> 
                 </ul>
                 </div>
                 </div> 
                 <!----> 
                 
                     </header>
                     <div class="section section--payment">
                         <div data-v-e774973e="" class="row"><div data-v-e774973e="" class="col-md-12"><!----> <div data-v-e774973e="" id="shipping_method_fields"><span data-v-e774973e="">
                         
                     </span>
                     </div>
                     <!----></div>
                     </div>
                     <!----> 
                     <div class="row">
                         <div class="col-md-12">
                         <div id="payment_step" class="payment-step mb-0">
                             <div data-step="1" class="title title--step">
                             <img width="30" height="30" src="image/money.jpg">
                             <h3>الدفع</h3>
            </div> 
           <div id="jGrowl" class="top-right jGrowl" >
      <div id="jGrow2-notification" class="jGrowl-notification alert ui-state-highlight ui-corner-all bg-error alert-bg-error alert-rounded" style="display:none;">
          <button class="jGrowl-close">×</button>
       
          <div class="jGrowl-message">تسجيل العضوية يكون مرة واحدة</div>
          </div>
      </div>
                
                
                <?php
                 if($_SESSION['go_to_payment']){
                echo '<script>
                document.getElementById("jGrow2-notification").style.display="block";
                $("#jGrow2-notification").delay(2000).fadeOut(300);
                </script>';
                  }
                ?>     
                  
                              <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                               
                                              <label>الاسم الاول <span class="text-danger">*</span></label>
                                                    <input  style="pointer-events: none;" data-v-32b71108="" name="first_name" autocomplete="cc-name" placeholder="الاسم الاول" value="<?php echo $row['first_name'] ?>" class="form-control ym-disable-keys ym-hide-content"id="first_name"> <!---->
                                            
                                                  <label>الاسم الاخير <span class="text-danger">*</span></label>
             <input data-v-32b71108="" autocomplete="cc-name" name="last_name" placeholder="الاسم الاخير" value="<?php echo $row['last_name'] ?>" id="last_name" style="pointer-events: none;" class="form-control ym-disable-keys ym-hide-content" > <!---->
                         <label>رقم الجوال<span class="text-danger">*</span></label>
                        <input data-v-32b71108="" style="pointer-events: none;" type="tel"  id="" name="" autocomplete="cc-csc" placeholder="رقم الجوال"  
                         value="<?php echo $row['ccode4'];echo $row['phone']; ?>"
                         
                        class="form-control ym-disable-keys ym-hide-content"> <!---->
                         <input data-v-32b71108="" style="pointer-events: none;" type="tel"  id="phone" name="phone" autocomplete="cc-csc" placeholder="رقم الجوال"  
                         value="<?php echo $row['phone'] ?>"
                         
                        class="form-control ym-disable-keys ym-hide-content" hidden> <!---->
                                 <label>البريد الالكتروني<span class="text-danger">*</span></label>
                              <input  id="email" style="pointer-events: none;" value="<?php echo $row['email_verification'] ?>"  name="email_verification" class="form-control ym-disable-keys ym-hide-content"
                             > <!---->
                              
                              
                              <input name="product_price" type="hidden" id="product_price" value="<?php echo $row['product_price'] ?>">
                             
                                <input name="ccode" type="hidden" id="ccode" value="<?php echo $row['ccode4'] ?>">
                               <input name="quantity" type="hidden" id="quantity" value="1">
                               <input name="description" type="hidden" id="description" value="<?php echo $row['description'] ?>">
                                 <input name="currency" type="hidden" id="currency" value="<?php 
                                   include 'connection.php';
                                   $result70 = mysqli_query($link,"Select * from currency");
                                   $row70 = mysqli_fetch_array($result70);
                                   echo $row['curr'];
                                 ?>">



                              <br><br><br>
                               <button type="submit" class="btn btn--primary btn--wide btn--round btn--submit btn--fixed wide" name="button" >اكمال الدفع</button>
                            </form>
                   
<?php
if(isset($_POST['button'])){
   $CustomerName = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $quantity = $_POST['quantity'];
   $description = $_POST['description'];
  $CustomerEmail = $_POST['email_verification'];
  $CustomerMobile = $_POST['phone'];
   $MobileCountryCode = $_POST['ccode'];
   $currency = $_POST['currency'];
  $UnitPrice = $_POST['product_price'];
  $member_id=$_GET['Secret'];
###########Send Payment (Offline)###########
 include 'connection.php';
$result9=mysqli_query($link,"Select * from api_pay");
while($row9=mysqli_fetch_array($result9)){
$token = $row9['api'];
$basURL = "https://api.myfatoorah.com/";
}
$result99=mysqli_query($link,"select * from pay_info where member_id = '$member_id'");
$row99=mysqli_fetch_array($result99);
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "$basURL/v2/SendPayment",
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"NotificationOption\":\"ALL\",\"CustomerName\": \"".$CustomerName." ".$last_name."\" ,\"DisplayCurrencyIso\": \"".$currency."\", \"MobileCountryCode\":\"".$MobileCountryCode."\",\"CustomerMobile\": \"".$CustomerMobile."\",\"CustomerEmail\": \"".$CustomerEmail."\",\"InvoiceValue\": ".$UnitPrice.",\"CallBackUrl\": \"https://evdtv.shop/success_pay?Secret=$member_id\",\"ErrorUrl\": \"https://evdtv.shop/Error_pay?Secret=$member_id\",\"Language\": \"en\",\"CustomerReference\" :\"ref 1\",\"CustomerCivilId\":12345678,\"UserDefinedField\": \"Custom field\",\"ExpireDate\": \"\",\"CustomerAddress\" :{\"No\":\"\",\"Street\":\"\",\"No\":\"\",\"Address\":\"\",\"No\":\"\"},\"InvoiceItems\": [{\"ItemName\": \"Pay for items\", \"Quantity\":1,\"UnitPrice\": ".$UnitPrice.",}]}",
    CURLOPT_HTTPHEADER => array("Authorization: Bearer $token","Content-Type: application/json"),
));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($curl);
  $json  = json_decode((string)$response, true);
$payment_url = $json["Data"]["InvoiceURL"];
$err = curl_error($curl);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
     echo  "<script>
     window.location.href= ' ".$payment_url." '
     </script>";
      curl_close($curl); 

}

}
?>
                    
                   
                   
               
                
                 </div> <!----></div> 
                 </div> <!---->  
                 <div class="ui form">
                     <div class="field"><!---->
                 </div> 
                 </div>
                 
                          
                   
                                  

                     </div>
                     
                     

                     </main>
                     
                     <ul class="list list--brands">
                         <li>تسوق إلكتروني آمن 100%</li> 
                       
                                     </ul>
                                     </div>
                                     <div id="cart_summary_desktop" class="col-md-3 col-sm-12" style="height: 556.438px;">
                                         <div class="cart-summary-wrapper ui sticky">
                     <ul class="cart-summary cart-summary--top">
                         <!----> 

 <?php 
                              include 'connection.php';
                              $result3 = mysqli_query($link,"Select * from currency");
                              while($row3 = mysqli_fetch_array($result3)){
                              ?>
                              
                             <li data-total-elements="1">

                                 <h4>اجمالي الطلب</h4> 
                                 <span class="currency"><b>
                                 <?php 
                                   echo $row['product_price']; echo ' '; echo $row3['curr'];
                                 ?>
                                 </b>  
                                 </span>
                                 </li>
                           <?php } ?>
                                
                                 </ul> 
                                
                                 </div>
                                 </div>
                                 </div>
                                 </div>
                     
                     <?php } ?>
<div id="lightbox-payment" style="position: absolute; width: 100%; height: 100%; background-color: rgba(39,39,39,0.8); z-index: 9999999; display: none;"></div>

</body></html>
<?php
}
else{
     echo  "<script>
     window.location.href= './'
     </script>";
}
?>
<?php 
include 'connection.php';
$member_id=$_GET['Secret'];
$result2=mysqli_query($link,"Select * from pay_info where member_id='$member_id'");
$row2 = mysqli_fetch_array($result2);
if($row2){
?>
<?php header( "refresh:300;url=./" ); ?>
<?php
session_start();
if(isset($_GET['action']) =="add"){
    $id=$_GET['id'];
    if(isset($_SESSION['mycart'][$id])){
        $previous=$_SESSION['mycart'][$id]['qty'];
         $_SESSION['mycart'][$id] = array("pid"=>$id ,"qty" =>$previous+$_POST['quantity']);
    }
    else{
        $_SESSION['mycart'][$id] = array("pid"=>$id ,"qty" =>$_POST['quantity']);
    }
    header("Location:./");
}
?>
<?php 
session_start();
include 'connection.php';
$result=mysqli_query($link,"Select * from login");
while($row5 = mysqli_fetch_array($result)){
?>
<html lang="ar" dir="rtl"><head>
<style>
    
         @import  url('fonts/apple.css');

    </style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


<title><?php echo $row5['name']; ?></title>
<link rel="icon" type="image/jpeg" href="<?php echo 'data:image;base64 ,'.$row5['image'].' ';?>">

<meta name="description" content="متجر one tv يقدم لكم افضل اشتراكات iptv بافضل الاسعار اشتراك istar iptv و aroma iptv و doom iptv و shark iptv  و falcon iptv و Tera iptv و duplex play و iptv smarters و اشتراك شارك و اشتراك فالكون و evdtv و اي بي تي في و اشتراك كوبرا و اشتراك myhd iptv و flix iptv و net iptv و shark tv و cobra iptv.">
<meta name="keywords" content="متجر,one,tv,يقدم,لكم,افضل,اشتراكات,iptv,بافضل,الاسعار,اشتراك,istar,iptv,و,aroma,iptv,و,doom,iptv,و,shark,iptv,,و,falcon,iptv,و,Tera,iptv,و,duplex,play,و,iptv,smarters,و,اشتراك,شارك,و,اشتراك,فالكون,و,evdtv,و,اي,بي,تي,في,و,اشتراك,كوبرا,و,اشتراك,myhd,iptv,و,flix,iptv,و,net,iptv,و,shark,tv,و,cobra,iptv.">
<meta property="store:published_time" content="2020-08-18T20:07:52+03:00">
<meta property="og:description" content="متجر one tv يقدم لكم افضل اشتراكات iptv بافضل الاسعار اشتراك istar iptv و aroma iptv و doom iptv و shark iptv  و falcon iptv و Tera iptv و duplex play و iptv smarters و اشتراك شارك و اشتراك فالكون و evdtv و اي بي تي في و اشتراك كوبرا و اشتراك myhd iptv و flix iptv و net iptv و shark tv و cobra iptv.">
<meta property="og:title" content="افضل اشتراكات iptv">
<meta property="og:type" content="store">
<meta property="og:url" content="https://evdtv.shop/">
<meta property="og:locale" content="ar_AR">
<meta property="og:locale:alternate" content="ar_AR">
<meta property="og:locale:alternate" content="en_US">
<meta property="og:image" content="<?php echo 'data:image;base64 ,'.$row5['image'].' ';?>">
<meta property="og:image:width" content="600">
<meta property="og:image:height" content="300">
<meta name="twitter:description" content="متجر one tv يقدم لكم افضل اشتراكات iptv بافضل الاسعار اشتراك istar iptv و aroma iptv و doom iptv و shark iptv  و falcon iptv و Tera iptv و duplex play و iptv smarters و اشتراك شارك و اشتراك فالكون و evdtv و اي بي تي في و اشتراك كوبرا و اشتراك myhd iptv و flix iptv و net iptv و shark tv و cobra iptv.">
<meta name="twitter:image" content="<?php echo 'data:image;base64 ,'.$row5['image'].' ';?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $row5['name']; ?>">
<meta name="twitter:url" content="https://evdtv.shop/">
<link rel="stylesheet" href="css/app.css"> 

<link rel="stylesheet" href="css/themes.css">

<link rel="stylesheet" href="css/slick-theme.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/main.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

<style type="text/css">
    :root {
        --main-color: #0a60b9;
        --main-text-color: #004099;
        --main-text-color2: #00065f;
        --infinte-color:#004099;
        --main-text-color-dark: #618b93;
        /* New Coloring Pattern: */
        --color-main: #0a60b9;
        --color-main-d: #94bec6;
        --color-main-l: #d4feff;
        --color-main-reverse: #2e5860;
        --color-text: #5a5a5a;
        --color-text-reverse: #2e5860;
        --color-title: #618b93;
    }
    .store-header, .header-bar, .store-header-min {
        background: var(--main-color);
        }
    .store-header h1 a, .store-header-min h1 {
        color: #fff;
        }
    .dropdown-store-header.open .dropdown-toggle, .dropdown-store-header.open .dropdown-toggle { background: var(--main-color); color: #fff; }
    /* .store-contact a { color: var(--main-text-color); } */
    /*a.media-heading, a.product-link { color: var(--main-text-color); }*/
    .pace-demo { background: var(--main-text-color) !important;/*darker*/ }
    .pace .pace-progress {
        background: var(--main-text-color2) !important;/*darker*/ }
    .add-cart { color: var(--main-text-color);/*darker*/ border: 1px solid var(--main-text-color);/*darker*/ }
    .add-cart:hover, .add-cart:focus, .add-cart-large:hover, .add-cart-large:focus, .order-btn:hover, .order-btn:focus { background: var(--main-text-color);/*darker*/ border-color: var(--main-text-color); }
    .cart-nav-submit, .cart-nav-more, .cart-nav-solid { background: var(--main-text-color);/*darker*/ border-color: var(--main-text-color);/*darker*/ }
    .add-cart-large, .order-btn { background: var(--main-text-color); border-color: var(--main-text-color); }
    .cart-nav-light:hover, .cart-nav-light:active, .cart-nav-light:focus { color: var(--main-color); }
    .cart-nav-light { border-color: var(--main-text-color);/*darker*/ color: var(--main-text-color);/*darker*/ }
    .cart-line { border-color: var(--main-color);/*lighter*/ }
    .cart-number { color: var(--main-text-color);/*lighter*/ border-color: var(--main-color);/*lighter*/ }
    .active-step .cart-number { background: var(--main-color); border-color: var(--main-color); }
    .cart-title { color: var(--main-color) !important;/*lighter*/ }
    #salla_bar { border-top-color: var(--main-color); }
    #salla_bar .checkout-button { background: var(--main-text-color); }
    .choice.border-info-600.text-info-800 {
        color: var(--main-text-color) !important; border-color: var(--main-text-color) !important; }
    .payment-method.active { background: var(--main-text-color) !important; }
    .pagination>.active>span{background-color: var(--main-text-color) !important; border-color: var(--main-text-color) !important;
        
    }
    /*.order-num { color: var(--main-text-color); }*/

        .product-side-container .product-order-container .panel-heading { background: var(--main-color) !important; border-bottom-color: var(--main-color) !important; color:  #fff  !important; }
    .testimonial-header, .owl-theme .owl-nav [class*=owl-] { background:  var(--main-color)  !important; }

    a:hover, a:focus { color: #fff; }
    .sub-nav__menu:hover svg { fill: var(--main-text-color); }

    .site-header__cart .badge { background: var(--main-text-color); }
    .circle-action:hover { background: var(--main-text-color) ;border-color: var(--main-text-color); }
    .sub-nav .main-menu > li:hover > a, .sub-nav .main-menu > li:hover > a > i { color: var(--main-text-color); }
    .sub-nav li > ul a:hover { color: var(--main-text-color2); }
    .slick-active button { background-color: var(--main-text-color) !important; }
    .product:hover .product-title { color: var(--main-text-color); }
    .product-price, .product-details__price { color: var(--main-text-color); }

    .product-add:hover { background-color: var(--main-color) !important; border-color: var(--main-color); }
    .sub-nav__menu:hover { color: var(--main-color) !important; }
    .login-container .border-yellow-dark { border-color: var(--main-text-color); }
    .login-container .text-yellow-dark { color: var(--main-text-color); }


    .sub-nav-header { background: var(--main-color); }
    .sub-nav-header a { color: var(--main-color); }
    .btn-primary { background: var(--main-text-color); border-color: var(--main-text-color); }
    .btn-primary:focus, .btn-primary.focus, .btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.active:hover, .btn-primary:active:hover { background: var(--main-text-color2); border-color: var(--main-text-color2); }
    .page-box .panel-heading .product-title { color: var(--main-text-color) !important; }
    #ask_register_link { color: var(--main-text-color) !important; }
    .product-details__hot strong {
        color: var(--main-text-color) !important; }
    @media (min-width: 992px) {
        .sub-nav li > ul a:hover { background: var(--main-text-color); color: #fff; }
    }



    .site-header__cart .badge {
        background: var(--main-text-color); }
    .circle-action:hover { background: var(--main-text-color) ;border-color: var(--main-text-color); }
    .sub-nav .main-menu > li:hover > a { color: var(--main-text-color2); }
    .slick-active button { background-color: var(--main-text-color) !important; }
    .product:hover .product-title { color:var(--main-text-color); }
    .product-price:hover { color: var(--main-text-color); }
    .product-add:hover { background: var(--main-text-color); }
    .social__item a:hover { background: #fff;border-color: var(--main-text-color); }
    .footer-main {
        border-top-color: var(--main-color); }
    .feature-item__icon { border-color: var(--main-text-color); }
    .landing-page-feature-item__icon { color: var(--main-text-color); border-color: var(--main-text-color); }
    .checker span { border-color: var(--main-text-color) !important; }
    .btn-order-details { background: var(--main-text-color) !important; }
    .section-header .section--title { color: var(--main-text-color); }
     .product-title{margin-right:10px;}

    </style>
<link href="https://assets.salla.cloud/css/intlTelInput.css?id=53d3f9e5ce3c027b0bdd" rel="stylesheet">
<link rel="stylesheet" href="https://assets.salla.cloud/themes/theme_6/assets/css/theme-custom.css?v=v1.4.170">
<style>.salla-theme_6 .site-header .header-top {
    background-color:#0a60b9;
    width:100%;
}
.products-grid.eq-height .product.contain>:first-child .img-cont img, .products-grid.eq-height .thumbnail.contain>:first-child .img-cont img, .products-listing.eq-height .product.contain>:first-child .img-cont img, .products-listing.eq-height .thumbnail.contain>:first-child .img-cont img, body.salla-default #products_div.eq-height .product.contain>:first-child .img-cont img, body.salla-default #products_div.eq-height .thumbnail.contain>:first-child .img-cont img {
    max-height: 100%;
}
.salla-theme_6 .sub-nav .main-menu>li#offers a {
    height: 40px;
    background: #ffd333;
    min-height: 40px;
    border-radius: 14px;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
    color: #5a308e!important;
    padding-top: 0px;
    font-weight: 600;
}
.container {
    padding-left: 0;
    padding-right:0;
}
.salla-theme_6 .section {
    padding: 0!important;
}
.salla-theme_6 .site-header__cart {
    min-width: 185px;
    background-color: #ffd333;
    border-radius: 15px;
    border-top-left-radius: 25px;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
    border-bottom-left-radius: 1px;
    border-right: #ffd333 solid 4px;
    border-top: 1.5px solid #ffd333;
    border-bottom: 1.5px solid #ffd333;
}
.site-header__cart strong {
    color: black;
}
.site-header__cart span {
    display: block;
    color: black;
}
.salla-theme_6 .site-header__cart>div:first-child .theme-icon-cart {
    font-size: 1.25rem;
}


.salla-theme_6 .site-header__cart>div:first-child {
    flex-basis: 50px;
    color: #fff;
    background-color: #fff;
}
.salla-theme_6 .sub-nav .main-menu>li {
    background-image: linear-gradient(#00c38b, #ffffff) !important;
    background-size: 3rem 2px, auto;
    background-repeat: no-repeat;
    background-repeat-x: no-repeat;
    background-repeat-y: no-repeat;
    background-position: center bottom;
    transition: all .2s ease-out;
    transition-property: all;
    transition-duration: 0.2s;
    transition-timing-function: ease-out;
    transition-delay: 0s;
}
.salla-theme_6.font-amazon-ember .main-menu>li>a, .salla-theme_6.font-apple .main-menu>li>a, .salla-theme_6.font-dubai .main-menu>li>a {
    padding: 5px 15px;
}
.salla-theme_6 .sub-nav .main-menu>li>a {
    min-height: 40px;
    padding: 5px 15px;
    line-height: 1.8;
    opacity: 1;
}
.salla-theme_6 .sub-nav .sub-nav-content {
    padding-bottom: 5px;
}
.salla-theme_6 .section-header .section--title {
    bottom: 7px;
}
.salla-theme_6 section.section.has-slider .products-listing.slick-slider {
    padding: 1rem;
}
body .section-header h2.section--title span {
    display: block;
    width: max-content;
    position: relative;
    margin-top: 20px;
    background-color: #ffffff;
    font-size: 15px;
    padding: 2px 17px 1px;
    padding-top: 3px;
    padding-right: 17px;
    padding-bottom: 7px;
    padding-left: 17px;
    border-radius: 23px 15px 15px 0;
    border-top-left-radius: 15px;
    border-top-right-radius: 1px;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 15px;
    border: 1px solid #e0e0e0;
    border-right: #0a60b9 solid 5px;
}
.mb-4, .my-4 {
    margin-bottom: 0!important;
}
.circle-action {
    background: #ffd333;
    color: #000000;
    font-family: salla!important;
}
.salla-theme_6 .section-header .section-actions .button-more {
    height: 36px;
    padding: 0px 2rem;
    font-family: DINNextLTArabic-Regular;
    line-height: 38px;
    text-align: center;
    color: #ffffff;
    border-top-left-radius: 1px;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
    border-bottom-left-radius: 15px;
    background: #0a60b9;
}
.salla-theme_6 .product {
    background-color: #fff;
    border-radius: 17px;
    border-top-left-radius: 17px;
    border-top-right-radius: 17px;
    border-bottom-right-radius: 17px;
    border-bottom-left-radius: 17px;
    border: #0a60b9 solid 1px;
}
    .products-grid.eq-height .product, .products-grid.eq-height .thumbnail, .products-listing.eq-height .product, .products-listing.eq-height .thumbnail, body.salla-default #products_div.eq-height .product, body.salla-default #products_div.eq-height .thumbnail {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    flex-direction: column;
    height:400px;
    margin: 0;
}
.salla-theme_6 .product .product-footer .product-add.add_to_cart_btn {
    position: relative;
    margin: 10px 0 0px;
    margin-top: 10px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
    padding: 10px 15px;
    padding-top: 10px;
    padding-right: 15px;
    padding-bottom: 10px;
    padding-left: 15px;
    border-radius: 15px;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 15px;
    border-bottom-left-radius: 15px;
    background-color: #f6f6f6;
    border:#0a60b9 solid 1px;
    border-top-style: solid;
    border-top-width: 1px;
    border-right-style: solid;
    border-right-width: 1px;
    border-bottom-style: solid;
    border-bottom-width: 1px;
    border-left-style: solid;
    border-left-width: 1px;
    border-image-source: initial;
    border-image-slice: initial;
    border-image-width: initial;
    border-image-outset: initial;
    border-image-repeat: initial;
    border-bottom: #0a60b9 solid 5px;
    border-bottom-width: 5px;
    border-bottom-style: solid;
    border-bottom-color: #0a60b9;
}
.feature-item__icon {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50px;
    flex: 0 0 50px;
    display: inline-block;
    width: 120px;
    height: 120px;
    line-height: 104px;
    background-color: #f1f1f1;
    color: #6e637c;
    border-radius: 50%;
    border-top-left-radius: 50%;
    border-top-right-radius: 50%;
    border-bottom-right-radius: 50%;
    border-bottom-left-radius: 50%;
    font-size: 46px;
    border: 2px solid #582e8b;
    text-align: center;
    margin-bottom: 0.5rem;
    border-bottom: #0a60b9 solid 9px;
}
.sicon-rocket ,.sicon-crdit-card-alt
 ,.sicon-headset
{
    line-height: 100px!important;
}

.bg-brand {
    background-image: url(https://res.cloudinary.com/lomav/image/upload/v1621878396/400_oy206v.png);
}
.testimonials-item blockquote {
    border-top-left-radius: 24px;
    border-top-right-radius: 24px;
    border-bottom-right-radius: 24px;
    border-bottom-left-radius: 24px;
}
.salla-theme_6 footer .footer-title, .footer-main p, .store-contact, .footer-links, .social {
    text-align: center !important;
}
.footer-main {
    padding: 2rem 0;
    color: #fff;
    
}
.footer-main p {
    background: #fff !important;
    background-image: initial !important;
    background-position-x: initial !important;
    background-position-y: initial !important;
    background-size: initial !important;
    background-repeat-x: initial !important;
    background-repeat-y: initial !important;
    background-attachment: initial !important;
    background-origin: initial !important;
    background-clip: initial !important;
    background-color: #fff !important;
    padding: 10px !important;
    padding-top: 10px !important;
    padding-right: 5rem !important;
    padding-bottom: 10px !important;
    padding-left: 10px !important;
    padding-right: 5rem !important;
    position: relative !important;
    border-radius: 20px !important;
    color:black;
}
.footer-main p::before {
    content: "\f14a";
    font-family: fontawesome !important;
    font-size: 270%!important;
    position: absolute !important;
    right: 0.8rem !important;
    color: #009688;
    top: 57px !important;
    top: calc(61% - 2.5rem) !important;
}
.salla-theme_6 footer .footer-title span {
    color: #fff !important;
    font-size: 1.3rem !important;
    color: #f8f8f8 !important;
    border-bottom: #ffd333 solid 3px !important;
    padding-bottom: 10px !important;
}
.footer-main .container::after {
    content: "";
    text-align: center !important;
    display: block;
    height: 80px !important;
    background-size: contain !important;
    background-repeat: no-repeat !important;
    background-position: top center !important;
}
.sub-nav__menu svg {
    display: inline-block;
    vertical-align: middle;
    width: 30px;
    height: 30px;
    fill: #000000 !important;
    background: #ffd333;
    background-image: initial;
    background-position-x: initial;
    background-position-y: initial;
    background-size: initial;
    background-repeat-x: initial;
    background-repeat-y: initial;
    background-attachment: initial;
    background-origin: initial;
    background-clip: initial;
    background-color: #ffd333;
    border-radius: 1rem 1rem 0rem 1rem;
    border-top-left-radius: 1rem;
    border-top-right-radius: 1rem;
    border-bottom-right-radius: 0rem;
    border-bottom-left-radius: 1rem;
}
.salla-theme_6 .sub-nav .sub-nav-content {
    padding-bottom: 5px;
    background-color: #0a60b933;
    border: 1px solid #0a60b9;
    border-bottom:0;
    border-top-left-radius:20px;
}
.sub-nav-header {
    background-color: #0a60b933;
    border: 1px solid #0a60b9;
    border-bottom:0;
    border-top-left-radius:20px;
}
.sub-nav .main-menu li.sub-menu-header.categories-holder ul.store-categories li ul {
    background-color: #0a60b933;
    border:0;
}
header.categories-holder ul.store-categories li.active {
    background-color: #0a60b9;
}
.sub-nav .main-menu li.sub-menu-header.categories-holder>span {
    display: block;
    width: max-content;
    font-weight: 400;
    padding: 5px 15px!important;
    border: 5px solid #eee;
    background-color: #ffd333;
    color: black;
    border-radius: 25px;
    margin-right: 22%;
    margin-left: 23%;
    margin-bottom:10px;
}
.sub-nav .main-menu li#ls_switcher_mobile {
    border-top: 0;
}
.sub-nav .main-menu li.sub-menu-header.categories-holder ul.store-categories li a {
    min-height: 40px;
    padding: 5px 15px!important;
    font-size: 15px!important;
    background-color: #ffd333;
    margin-bottom: 10px;
    border: 5px solid #eee;
    border-bottom-left-radius: 25px;
    border-top-right-radius: 25px;
    border-top-left-radius:10px;
    margin-right:10px;
    margin-left:10px;
    color:#000000;
}
.sub-nav .main-menu li.sub-menu-header.categories-holder ul.store-categories li a:hover{
    background-color: #0a60b9;
    color:#ffffff;
}
.sub-nav-header::before {
    content: "";
    text-align: center !important;
    display: block;
    height: 120px !important;
    background-image: url();
    background-size: contain !important;
    background-repeat: no-repeat !important;
    background-position: top center !important;
}
.sub-nav-header img {
    display: none;
}
.sub-nav .main-menu li.sub-menu-header.categories-holder ul.store-categories li.active {
    background-color: #0a60b933;
}
.sub-nav .main-menu li.sub-menu-header.categories-holder ul.store-categories li ul li a {
    min-height: 40px;
    padding: 5px 15px!important;
    font-size: 15px!important;
    background-color: #ffd333;
    margin-bottom: 10px;
    border: 5px solid #eee;
    border-bottom-left-radius: 25px;
    border-top-right-radius: 25px;
    border-top-left-radius:10px;
    margin-right:10px;
    margin-left:10px;
    color:#000000;
    
}
.sub-nav .main-menu li.sub-menu-logged-in a i {
    color: #fff;
}
.salla-theme_6 .sub-nav .main-menu>li>a {
    color: #fff;
}
.sub-nav .main-menu li.sub-menu-header.categories-holder ul.store-categories li ul li a:hover {
    background-color: #0a60b9;
    color:#ffffff;
}
.sub-nav .main-menu li.sub-menu-header.categories-holder ul.store-categories li {
    display: block!important;
    position: relative;
    border-bottom: 0;
}


.whatsapp-ico{
    fill: white;
    width: 50px;
    height: 50px;
    padding: 3px;
    background-color: #4dc247;
    border-radius: 50%;
    box-shadow: 2px 2px 6px rgba(0,0,0,0.4);
    /* box-shadow: 2px 2px 11px rgba(0,0,0,0.7); */
    position: fixed;
    bottom: 20px;
    right : 20px;
    z-index: 10;
}

.whatsapp-ico:hover{
    box-shadow: 2px 2px 11px rgba(0,0,0,0.7);
}
.submit{
    background-color:transparent ;
    border:0;
    padding:0;
    outline:none;
}
.submit:hover{
    color:white;
     border:0;
    padding:0;
    outline:none;
    background-color:transparent ;
}

.Slide {
   display: none;
}
.img {
   vertical-align: middle;
   width: 100%;
   height: 400px;
   animation: slideInFromRight 1s ease-in;


}
.slideContainer {
   max-width: 100%;
   position: relative;
   margin: auto;
}
.prevBtn,
.nextBtn {
   position: absolute;
   top: 50%;
   width: auto;
   padding: 10px;
   background-color: rgb(255, 255, 75);
   color: rgb(50, 0, 116);
   font-weight: bolder;
   font-size: 18px;
}
.nextBtn {
   left: 0;
}

.Navdot {
   cursor: pointer;
   height: 15px;
   width: 15px;
   margin: 0 2px;
   background-color: rgb(54, 5, 117);
   border-radius: 50%;
   display: inline-block;
   transition: background-color 0.6s ease;
}
.selected,
.Navdot:hover {
   background-color: #d9ff00;
}
@media only screen and (max-width: 450px) {
   .prevBtn,
   .nextBtn,
   .Caption {
      font-size: 16px;
   }
}
@keyframes slideInFromRight {
  0% {
    transform: translateX(100%);
  }

  100% {
    transform: translateX(0);
  }
}



.page-box .panel-heading .product-title {
    color: #06002f !important;
}


.finish{
    border: 3px solid #1e466e;
    text-align:right;
    float:center;
     padding: 10px;
      margin: 40px;
}
.finish1{
    border: 3px solid #1e466e;
    text-align:right;
    float:center;
     padding: 10px;
      margin: 40px;
}

</style>

    
    
 
<style>.categories-nav::after{background: none}</style><style data-styled="active" data-styled-version="5.1.1"></style><style data-styled="active" data-styled-version="5.1.1"></style><style data-styled="active" data-styled-version="5.1.1"></style>
</head>
<body class="store-home salla-theme_6 color-mode-dark font-apple">

<?php 
include 'connection.php';
$result3=mysqli_query($link,"Select * from message");
while($row3=mysqli_fetch_array($result3)){
?>
<div   id="store-notify" class="store-notify" style="background-color: <?php echo $row3['background_color']; ?>; color:<?php echo $row3['color']; ?>;">
<div  onclick="closeeee()"  id="notify-close">
<i  class="sicon-cancel"></i>
</div>
<i class="sicon-explode"></i>
<p>
<?php echo $row3['msg']; ?>
</p>
</div>
<?php } ?>


<header class="site-header"  id="header"  style="margin-top:40px;">
<?php 
include 'connection.php';
$result10=mysqli_query($link,"Select * from header");
while($row10=mysqli_fetch_array($result10)){
?>
<div  class="container py-3 header-top"  style="background-color:  <?php echo $row10['background_color'] ?>;">
<div  class="row header-wrapper">
<div class="col-md-3 logo-wrapper d-flex d-lg-block">
<?php 
include 'connection.php';
$result33=mysqli_query($link,"Select * from logo");
while($row33=mysqli_fetch_array($result33)){
?>
<h1 class="logo">
<a href="https://evdtv.shop/">
      <?php echo '<img   src="data:image;base64 ,'.$row33['logo'].'" >';?>
</a>
</h1>
<?php } ?>
</div>
<div class="col-sm-12 col-md-6 d-lg-flex search-container">
<div class="search-wrapper">
<div id="search">
<form id="search_form" action="">
<div class="ui category search">
<div class="ui icon input">
<input id="searchbox" name="q" class="prompt form-control" type="text" placeholder="أدخل كلمة البحث" autocomplete="off">
<i class="search icon"></i>
</div>
<div class="results"></div>
</div>
</form>
</div> </div>
</div>

<div class="col-md-3 d-flex align-items-center d-lg-block actions-container">
<a data-cart-small="" href="cart" class="ml-1 site-header__cart d-none d-lg-flex" rel="nofollow">
<div><span class="sicon-cart"></span></div>
<div>
<span><strong>سلة المشتريات</strong></span>
<span id="cart_badge" data-cart-badge="" style="float: right">
             <p  id="display_count">
                  <?php 
      if(isset($_SESSION['mycart'])){
        echo count($_SESSION["mycart"]);
    }
    else{
         echo 0;
    }
    ?>
             </p>
</span>

<span style="float: right">
&nbsp;منتج -&nbsp;
</span>


<span id="cart_badge_total_price" data-cart-total="" style="float: right">
     <?php
 $total=0;
 foreach($_SESSION['mycart'] as $key => $value){
     $q=mysqli_query($link,"Select * from add_share where id ='$key'");
     foreach($q as $a){
         $total+=$value['qty']*$a['price'];
     }
 }
 ?>
     <?php 
$result55=mysqli_query($link,"Select * from currency");
            while($row55 =mysqli_fetch_array($result55)){
            
            ?>
     <p  id="display_total">
          <?php echo $total; echo ' '; echo $row55['curr']; ?>      
     </p>
<?php } ?>
    
</span>
</div>
</a>
<a data-cart-small="" href="cart.php" class="ml-1 circle-action d-lg-none site-header__mine-cart" rel="nofollow">
<span class="sicon-cart"></span>
<span class="badge" data-cart-badge="">
   
          <p  id="display_count1">
                  <?php 
      if(isset($_SESSION['mycart'])){
        echo count($_SESSION["mycart"]);
    }
    else{
         echo 0;
    }
    ?>
          </p>
  
</span>
</a>
<div class="d-lg-none" style="vertical-align: middle">
<div class="dropdown dropdown-store-header dropdown-store-header-left hidden-xs">
<a class="circle-action dropdown-toggle" data-login-link="" href="" rel="nofollow">
<span class="sicon-user"></span>
</a>
</div> </div>
</div>


</div>
</div>
<?php } ?>
</header>






<div class="content page-container">
<div class="container content-container">
<div class="page-main-container col-xs-12 page-single">
<div class="thumbnail page-box">
<div class="panel-heading page-heading">
    
 <section class="u-light py-5 text-center">
<div class="container">
    <div class="form-group align-center"> 
    <div style="width: 100%; height: 13px; border-bottom: 1px solid #eee; text-align: center">
         <span   style="background-color: #fff; padding: 0 10px;color:#1e466e;font-size:30px;">سيتم الخروج من الصفحة بعد  5 دقائق   للامان والسرية
         <br>
         <span id="resend-timer"> 
          05:00
         </span>
         </span>
         </div> 
         </div> <br>  <br> 
    <img width="300" height="200" src="image/Congratulations.jpg">
    <h1 style="color:#1e466e;font-size:30px;">شكرا لتسوقكم عبر متجرنا</h1>
    <br>
     <img width="50" height="50" src="image/emotion.jpg">
   <?php 
include 'connection.php';
$member_id=$_GET['Secret'];
$result99=mysqli_query($link,"Select * from pay_info where member_id='$member_id'");
$row99 = mysqli_fetch_array($result99);
$result100 = mysqli_query($link,"Select * from mobile");
$row100 = mysqli_fetch_array($result100);
?>
<br><br>
    <div class="finish">
        <h1 style="color:#5e5e7a;font-size:25px;" >رقم الطلب : <?php  echo $row99['member_id'];?></h1>
    </div>
</div>
</section>
<section class="u-light py-5 text-center">
<div class="container">
    
   <h1 style="color:blue;font-size:30px;">كود الاشتراك</h1>
 <?php 
include 'connection.php';
$des=array();
    $cod=array();
$result = mysqli_query($link,"Select * from code_shares");
$member_id=$_GET['Secret'];
$result2=mysqli_query($link,"Select * from pay_info where member_id='$member_id'");
$row2 = mysqli_fetch_array($result2);
if($row2){
 while($row=mysqli_fetch_array($result)){
    $des[]=($row['description']);
    $cod[]=($row['code']);
 }



 $string = implode("<br/>\n", $des);
  $string1 = explode("<br/>\n", $string);
$string2 = implode("<br/>\n", $cod);
$string3 = explode(" ", $string2);
$string4 = explode("<br/>\n",$string2);
$desc = explode("<br/>\n",$row2['description']);
$str1=array();
$str4=array();
for($k=0 ;$k<count($string1)&&$k<count($string3);$k++){
    $str1[]=($string1[$k]);
    $str4[]=($string3[$k]);
}
$dees=array();
$deees=array();
?>
<?php
for($i = 0; $i < count($desc);$i++){
   $result8=mysqli_query($link,"Select * from code_shares where description = '$desc[$i]'");
    $row8=mysqli_fetch_array($result8);
     $dee=$row8['description'];
      $deee=$row8['code'];
       $dees[]=($row8['description']);
      $deees[]=($row8['code']);
    if($row8){
        ?>
    <?php
    $result15 = mysqli_query($link,"Select * from  code_after_pay");
    if(mysqli_num_rows($result15)==0){
         $x=1;
    mysqli_query($link,"delete from code_shares where code = '$deee'");
    mysqli_query($link,"ALTER TABLE code_shares AUTO_INCREMENT = 1");
    }
    else{
     $result18 = mysqli_query($link,"SELECT * FROM pay_info  WHERE $member_id NOT IN (SELECT member_id FROM code_after_pay)");
     $row18 = mysqli_fetch_array($result18);
    if($row18){
        $x=1;
    mysqli_query($link,"delete from code_shares where code = '$deee'");
    mysqli_query($link,"ALTER TABLE code_shares AUTO_INCREMENT = 1");
    }
    }
    }
    ?>
     
    <?php
    
}
?>
<?php
$deeee=implode("<br/>\n",$dees);
      $deeeee=implode("<br/>\n",$deees);
if($x==1){
    $member_id=$_GET['Secret'];
    $result12 = mysqli_query($link,"Select * from pay_info where member_id='$member_id'");
    $row12 = mysqli_fetch_array($result12);
    $FirstName = $row12['first_name'];
    $LastName = $row12['last_name'];
    $EMAIL =  $row12['email_verification'];
    $PHONE = $row12['phone'];
    $CCODE = $row12['ccode4'];
    $date=date('Y-m-d');
        mysqli_query($link,"insert into code_after_pay (member_id,description,code,FirstName,LastName,EMAIL,PHONE,CCODE,date) values('$member_id','$deeee','$deeeee','$FirstName','$LastName','$EMAIL','$PHONE','$CCODE','$date')");
    
}
}
?>
   <?php 
$member_id=$_GET['Secret'];
$result33=mysqli_query($link,"Select * from code_after_pay where member_id='$member_id'");
$row33 = mysqli_fetch_array($result33);
$result89=mysqli_query($link,"Select * from pay_info where member_id='$member_id'");
        $row89=mysqli_fetch_array($result89);
        $desss=$row89['description'];
    $string8 = explode("<br/>\n", $desss);
$descrip= explode("<br/>\n",$row33['description']);
$code_pay= explode("<br/>\n",$row33['code']);
for($o = 0 ; $o <count($descrip)||$o <count($string8); $o++){
if($row33){
    if(strcmp($string8[$o],$descrip[$o]) ==0){
        $x=2;
?>
 <h1 style="color:#5e5e7a;font-size:25px;" ><?php  echo $descrip[$o]?></h1>
        <div class="finish1">
          <h1 style="color:#5e5e7a;font-size:25px;" ><?php  echo $code_pay[$o]?></h1>
        </div>
        
        
<?php 
}
else{
?>
 <h1 style="color:#5e5e7a;font-size:25px;" ><?php  echo $string8[$o];?></h1>
   <div class="finish1">
          <h1 style="color:#5e5e7a;font-size:25px;" >غير متاح</h1>
        </div>
   <?php
}
}
 else{
        ?>
        <h1 style="color:#5e5e7a;font-size:25px;" ><?php  echo $string8[$o];?></h1>
   <div class="finish1">
          <h1 style="color:#5e5e7a;font-size:25px;" >غير متاح</h1>
        </div>
<?php
 }
   if($x==2){
$result6 =mysqli_query($link,"Select * from api_sms");
$row6=mysqli_fetch_array($result6);
    $api_key  = $row6['api'];                           
$title    = 'smartes';
$text= 'كود اشتراك  '   . ' '  .   ($descrip[$o])  .  ' ' . 'هو '    . $code_pay[$o];
$sentto =''.$row33['CCODE'].''.$row33['PHONE'].'';
$sms_lang = 2;
$report = 0;
$body = array("api_key" => $api_key, "title"=>$title, "text"=>$text,"sentto"=>$sentto,"sms_lang"=>$sms_lang,"report"=>$report);
    $json = json_encode($body);
    $ch = curl_init('https://www.turkeysms.com.tr/api/v3/gonder/add-content');
    $header = array('Content-Type: application/json');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    $result = curl_exec($ch);
    curl_close($ch);
 }
}


   ?>
   </section>
</div>
      <span style="font-size:25px;color:#5e5e7a;" class="fas fa-headphones"></span>
    <span style="font-size:25px;color:#5e5e7a;">   الدعم الفني</span>
    <span style="font-size:25px;color:#5e5e7a;"><?php echo $row100['mobile']; ?></span>
     <span style="font-size:25px;color:#5e5e7a;" class="fas fa-phone-alt"></span>
     
      <section class="u-light py-5 text-center">
<div class="container">
       <p style="font-size:25px;color:#5e5e7a;">تم ارسال كود الاشتراك الى رقم الهاتف المسجل لدينا برسالة نصية، ايضا سوف يظهر كود الاشتراك في اعلى الصفحة.<p>
</div>
</section>
</div>
</div>
</div>
</div>


<footer>
    <?php 
include 'connection.php';
$result11=mysqli_query($link,"Select * from footer");
while($row11=mysqli_fetch_array($result11)){
?>
<div style="background-color:<?php echo $row11['background_color']; ?>;" class="footer-main">
<div   class="container">
<div class="row">
<div class="col-md-4">
<h2 class="footer-title">
<span>من نحن</span>
</h2>
<?php 
include 'connection.php';
$result6=mysqli_query($link,"Select * from message1");
while($row6=mysqli_fetch_array($result6)){
?>
<p><?php echo $row6['msg']; ?></p>
<?php } ?>
<div class="store-contact">
</div>
<div class="store-certificate">
</div>
<div class="modal fade" id="tax_certificate_modal">
<div class="modal-dialog" role="document">
 <div class="modal-content">
<div class="modal-header no-border">
</div>
<div class="modal-body text-center">
</div>
</div>
</div>
</div> </div>
<div class="col-md-4 footer-item mb-3 mb-md-0">
<h2 class="footer-title"><span>روابط مهمة</span></h2>
<ul class="footer-links">
  <?php 
      include 'connection.php';
      $result33 = mysqli_query($link,"select * from sub_pages_names");
      while($row33= mysqli_fetch_array($result33)){
      ?>
<li><a href="important_information?ID=<?php echo $row33['ids']; ?>"><?php echo $row33['name']; ?></a></li>
<?php } ?>
</ul>
</div>
</div>
</div>
</div>
<?php } ?>
<div class="footer-sub">
<div class="container">
<div class="fs-cont">
<div class="fs-rights">
    <?php 
include 'connection.php';
$result12=mysqli_query($link,"Select * from message_footer");
while($row12=mysqli_fetch_array($result12)){
?>
<p class="mb-4 mb-md-0">
<?php echo $row12['msg']; ?>
</p>
<?php } ?>
</div>
<div class="fs-payment">
<div class="icons">
<div class="store-certificate">
</div>
<div class="modal fade" id="tax_certificate_modal">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header no-border">
</div>
<div class="modal-body text-center">
</div>
</div>
</div>
</div> <div>
<img src="image/cc.png?v=v1.4.170" alt=" ">
<img src="image/applepay.svg?v=v1.4.170" alt=" ">
<img src="image/cod.png?v=v1.4.170" alt=" ">
</div>
</div>
</div>
</div>
</div>
</div>
</footer>





</div>

 <?php 
include 'connection.php';
$result=mysqli_query($link,"select * from mobile");
            while($row =mysqli_fetch_array($result)){
            ?>



            <a href="https://wa.me/<?php echo $row['mobile']; ?>">
                <svg viewBox="0 0 32 32" class="whatsapp-ico">
                    <path d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd"></path>
                    </svg>
                    </a>
                    
                    <?php } ?>
                    
             
<script>
var slideIndex = 1;
showSlides(slideIndex);

function currentSlide(n) {
   showSlides((slideIndex = n));
        
}
function showSlides(n) {
   var i;
   var slides = document.getElementsByClassName("Slide");
   var dots = document.getElementsByClassName("Navdot");
   if (n > slides.length) {
      slideIndex = 1;
   }
   if (n < 1) {
      slideIndex = slides.length
   }
   Array.from(slides).forEach(item => (item.style.display = "none"));
   Array.from(dots).forEach(
      item => (item.className = item.className.replace(" selected", ""))
      
   );
   slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides,2000); // Change image every 2 seconds
   dots[slideIndex - 1].className += " selected";


}


</script>    
<script>
 function closeeee(){
     document.getElementById('store-notify').style.display="none";
      document.getElementById('header').style.marginTop="0";
 }
 </script>
 <script>
     var seconds=60;
     var minute = 5;
var downloadTimer = setInterval(function(){
    document.getElementById("resend-timer").innerHTML = minute + ":" + seconds ;
  seconds -= 1;
   if (seconds == 00) {
       minute--;
       seconds = 60;
  if (minute == 0) {
        minute = 5;
  }
 }
 
}, 1000);

 </script>
<script>
   
</script>
</body>
</html>
<?php } ?>
<?php
}
else{
    echo  "<script>
     window.location.href= './'
     </script>";
}
?>
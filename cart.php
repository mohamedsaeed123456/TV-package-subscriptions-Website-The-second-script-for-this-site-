<?php
session_start();
if(isset($_GET['remove'])){
  $id=$_GET['remove'];
  unset($_SESSION['mycart'][$id]);
  header("Location:cart");
}
?>
<?php 
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

<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
<link rel="stylesheet" href="build/css/intlTelInput.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

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
.modals{
  position: fixed;
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
  z-index:1;/* make higher than whatever is on the page */
  background-color: rgba(0,0,0, 0.2);
  width: 100%;
  height: 100%;
  overflow-y:scroll;
}



</style>

    <style>
    .login-container {
        padding-top: 0;
    }

    .login-options {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login-option {
        background: transparent;
        border-radius: 5px !important;
        margin: 0 10px;
        height: 100px;
        width: 120px;
    }

    .login-option i {
        display: block;
        font-size: 25px !important;
        margin-bottom: 7px;
    }

    .login-title {
        font-size: 1.3em !important;
    }

    .login-option, .btn-resend-option {
        background: transparent;
    }

    .btn-resend-option[disabled] {
        border-color: #d0d0d0;
        background: #d0d0d0;
        color: #fff;
    }

    #login-panel-actions1> p {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 22px;
    }

    #login-panel-actions1> p::before {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-left: 10px;
        margin-top: 4px;
    }

    #login-panel-actions1> p::after {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-right: 10px;
        margin-top: 4px;
    }
     #login-panel-actions1> p {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 22px;
    }

    #login-panel-actions1> p::before {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-left: 10px;
        margin-top: 4px;
    }

    #login-panel-actions1> p::after {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-right: 10px;
        margin-top: 4px;
    }








   #login-panel-actions2> p {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 22px;
    }

    #login-panel-actions2> p::before {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-left: 10px;
        margin-top: 4px;
    }

    #login-panel-actions2> p::after {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-right: 10px;
        margin-top: 4px;
    }
     #login-panel-actions2> p {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 22px;
    }

    #login-panel-actions2> p::before {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-left: 10px;
        margin-top: 4px;
    }

    #login-panel-actions2> p::after {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-right: 10px;
        margin-top: 4px;
    }




   #login-panel-actions3> p {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 22px;
    }

    #login-panel-actions3> p::before {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-left: 10px;
        margin-top: 4px;
    }

    #login-panel-actions3> p::after {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-right: 10px;
        margin-top: 4px;
    }
     #login-panel-actions3> p {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 22px;
    }

    #login-panel-actions3> p::before {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-left: 10px;
        margin-top: 4px;
    }

    #login-panel-actions3> p::after {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-right: 10px;
        margin-top: 4px;
    }







   #login-panel-actions4> p {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 22px;
    }

    #login-panel-actions4> p::before {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-left: 10px;
        margin-top: 4px;
    }

    #login-panel-actions4> p::after {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-right: 10px;
        margin-top: 4px;
    }
     #login-panel-actions4> p {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 22px;
    }

    #login-panel-actions4> p::before {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-left: 10px;
        margin-top: 4px;
    }

    #login-panel-actions4> p::after {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-right: 10px;
        margin-top: 4px;
    }
    
    
    
    
    
    

   #login-panel-actions5> p {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 22px;
    }

    #login-panel-actions5> p::before {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-left: 10px;
        margin-top: 4px;
    }

    #login-panel-actions5> p::after {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-right: 10px;
        margin-top: 4px;
    }
     #login-panel-actions5> p {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 22px;
    }

    #login-panel-actions5> p::before {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-left: 10px;
        margin-top: 4px;
    }

    #login-panel-actions5> p::after {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-right: 10px;
        margin-top: 4px;
    }

    
    

   #login-panel-actions6> p {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 22px;
    }

    #login-panel-actions6> p::before {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-left: 10px;
        margin-top: 4px;
    }

    #login-panel-actions6> p::after {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-right: 10px;
        margin-top: 4px;
    }
     #login-panel-actions6> p {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 22px;
    }

    #login-panel-actions6> p::before {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-left: 10px;
        margin-top: 4px;
    }

    #login-panel-actions6> p::after {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-right: 10px;
        margin-top: 4px;
    }
    
      #login-panel-actions7> p {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 22px;
    }

    #login-panel-actions7> p::before {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-left: 10px;
        margin-top: 4px;
    }

    #login-panel-actions7> p::after {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-right: 10px;
        margin-top: 4px;
    }
     #login-panel-actions7> p {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 22px;
    }

    #login-panel-actions7> p::before {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-left: 10px;
        margin-top: 4px;
    }

    #login-panel-actions7> p::after {
        content: "";
        height: 1px;
        background: rgba(0, 0, 0, 0.10);
        flex: 1;
        margin-right: 10px;
        margin-top: 4px;
    }

    
    
    
    


    @media (max-width: 320px) {
        .btn-resend-option {
            padding: 9px 4px !important;
        }
    }

    @media (max-width: 400px) {
        .btn-resend-option {
            padding: 9px !important;
        }
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
<form id="search_form" action="#">
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
<a data-cart-small="" href="cart" class="ml-1 circle-action d-lg-none site-header__mine-cart" rel="nofollow">
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
<div class="breadcrumb-container mobile-webview-hide">
<div class="container container--default">
<ol class="breadcrumb">
<li class="breadcrumb-item home"><a href="./">الرئيسية</a></li>
 <li class="breadcrumb-item active">السلة</li>
</ol>
</div>
</div>

<div class="store-header-min">
<div class="the-container">
<div class="row no-margin cart-steps mobile-card-cart-steps">
<div class="cart-box cart-box--custom">
<div class="cart-step  active-step ">
<div class="step-cont">
<div class="icon-cont">
<svg width="512px" height="480px" viewBox="0 0 512 480" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<g id="shopping-cart" fill="#000000" fill-rule="nonzero">
<path d="M396,440 C401.519531,440 406,435.519531 406,430 C406,424.480469 401.519531,420 396,420 C390.480469,420 386,424.480469 386,430 C386,435.519531 390.480469,440 396,440 Z" id="Path"></path>
<path d="M230,440 C235.519531,440 240,435.519531 240,430 C240,424.480469 235.519531,420 230,420 C224.480469,420 220,424.480469 220,430 C220,435.519531 224.480469,440 230,440 Z" id="Path"></path>
<path d="M509.882812,123.847656 C507.988281,121.417969 505.078125,120 502,120 L141.996094,120 L119.203125,23.125 C115.992188,9.507812 103.980469,0 90,0 L30,0 C13.457031,0 0,13.457031 0,30 C0,46.542969 13.457031,60 30,60 L66.238281,60 L140.796875,376.875 C144.007812,390.492188 156.019531,400 170,400 L190.027344,400 C183.734375,408.363281 180,418.753906 180,430 C180,457.570312 202.429688,480 230,480 C257.570312,480 280,457.570312 280,430 C280,418.753906 276.265625,408.363281 269.972656,400 L356.027344,400 C349.734375,408.363281 346,418.753906 346,430 C346,457.570312 368.429688,480 396,480 C423.570312,480 446,457.570312 446,430 C446,418.753906 442.265625,408.363281 435.972656,400 L436,400 C452.542969,400 466,386.542969 466,370 C466,353.457031 452.542969,340 436,340 L193.761719,340 L184.347656,300 L242.96875,300 L242.988281,300 L243.003906,300 L388.996094,300 L389.015625,300 L389.035156,300 L446.382812,300 C460.167969,300 472.140625,290.65625 475.492188,277.273438 L511.703125,132.425781 C512.449219,129.4375 511.777344,126.273438 509.882812,123.847656 L509.882812,123.847656 Z M474.191406,200 L410.328125,200 L417.828125,140 L489.191406,140 L474.191406,200 Z M356,220 L387.671875,220 L380.171875,280 L326,280 L326,250 C326,244.476562 321.523438,240 316,240 C310.476562,240 306,244.476562 306,250 L306,280 L251.828125,280 L244.328125,220 L276,220 C281.523438,220 286,215.523438 286,210 C286,204.476562 281.523438,200 276,200 L241.828125,200 L234.328125,140 L306,140 L306,170 C306,175.523438 310.476562,180 316,180 C321.523438,180 326,175.523438 326,170 L326,140 L397.671875,140 L390.171875,200 L356,200 C350.476562,200 346,204.476562 346,210 C346,215.523438 350.476562,220 356,220 Z M179.640625,280 L165.523438,220 L224.171875,220 L231.671875,280 L179.640625,280 Z M214.171875,140 L221.671875,200 L160.816406,200 L146.703125,140 L214.171875,140 Z M260,430 C260,446.542969 246.542969,460 230,460 C213.457031,460 200,446.542969 200,430 C200,413.457031 213.457031,400 230,400 C246.542969,400 260,413.457031 260,430 Z M426,430 C426,446.542969 412.542969,460 396,460 C379.457031,460 366,446.542969 366,430 C366,413.457031 379.457031,400 396,400 C412.542969,400 426,413.457031 426,430 Z M436,360 C441.515625,360 446,364.484375 446,370 C446,375.515625 441.515625,380 436,380 L170,380 C165.339844,380 161.335938,376.828125 160.265625,372.289062 L82.078125,40 L30,40 C24.484375,40 20,35.515625 20,30 C20,24.484375 24.484375,20 30,20 L90,20 C94.660156,20 98.664062,23.171875 99.734375,27.710938 L161.921875,292.003906 C161.925781,292.019531 161.929688,292.035156 161.933594,292.054688 L177.921875,360 L436,360 Z M456.089844,272.417969 C454.972656,276.882812 450.980469,280 446.378906,280 L400.328125,280 L407.828125,220 L469.195312,220 L456.089844,272.417969 Z" id="Shape"></path>
<path d="M316,200 C310.480469,200 306,204.480469 306,210 C306,215.519531 310.480469,220 316,220 C321.519531,220 326,215.519531 326,210 C326,204.480469 321.519531,200 316,200 Z" id="Path"></path>
</g>
</g>
</svg>
<div class="cart-number">
<i class="icon-checkmark4"></i>
</div>
</div>
<div class="cart-title">
<small>الخطوة الاولى</small>
<span>سلة المشتريات</span>
</div>
</div>
</div>
<div class="cart-step ">
<div class="step-cont">
<div class="icon-cont">
<svg width="512px" height="512px" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<g id="wallet" fill="#000000" fill-rule="nonzero">
<path d="M336,336 C330.480469,336 326,340.480469 326,346 C326,351.519531 330.480469,356 336,356 C341.519531,356 346,351.519531 346,346 C346,340.480469 341.519531,336 336,336 Z" id="Path"></path>
<path d="M200,326 C194.484375,326 190,321.515625 190,316 C190,310.484375 194.484375,306 200,306 C203.542969,306 207.28125,307.808594 210.816406,311.226562 C214.785156,315.066406 221.117188,314.964844 224.957031,310.992188 C228.796875,307.023438 228.691406,300.695312 224.722656,296.855469 C219.648438,291.941406 214.570312,289.164062 210,287.648438 L210,276 C210,270.476562 205.523438,266 200,266 C194.476562,266 190,270.476562 190,276 L190,287.71875 C178.359375,291.847656 170,302.964844 170,316 C170,332.542969 183.457031,346 200,346 C205.511719,346 210,350.484375 210,356 C210,361.515625 205.511719,366 200,366 C195.726562,366 191.113281,363.3125 187.011719,358.433594 C183.460938,354.207031 177.152344,353.660156 172.925781,357.214844 C168.695312,360.769531 168.152344,367.078125 171.703125,371.304688 C177.050781,377.664062 183.335938,382.09375 190,384.328125 L190,396 C190,401.523438 194.476562,406 200,406 C205.523438,406 210,401.523438 210,396 L210,384.28125 C221.636719,380.152344 230,369.035156 230,356 C230,339.457031 216.542969,326 200,326 L200,326 Z" id="Path"></path>
<path d="M120,166 C125.523438,166 130,161.523438 130,156 L130,116 C130,110.476562 125.523438,106 120,106 C114.476562,106 110,110.476562 110,116 L110,156 C110,161.523438 114.476562,166 120,166 Z" id="Path"></path>
<path d="M472,236 L472,156 C472,128.429688 449.570312,106 422,106 L366,106 L366,30 C366,13.457031 352.542969,0 336,0 L150,0 C133.457031,0 120,13.457031 120,30 L120,66 L90,66 C73.457031,66 60,79.457031 60,96 L60,106 L50,106 C22.429688,106 0,128.429688 0,156 L0,462 C0,489.570312 22.429688,512 50,512 L356,512 C380.144531,512 400.347656,494.796875 404.992188,472 L422,472 C449.570312,472 472,449.570312 472,422 L472,396 L482,396 C498.542969,396 512,382.542969 512,366 L512,276 C512,253.945312 494.054688,236 472,236 Z M492,276 C492,287.046875 483.046875,296 472,296 L472,256 C483.027344,256 492,264.972656 492,276 Z M422,126 C438.542969,126 452,139.457031 452,156 L452,296 L406,296 L406,236 C406,211.855469 388.796875,191.652344 366,187.007812 L366,126 L422,126 Z M140,30 C140,24.484375 144.484375,20 150,20 L336,20 C341.515625,20 346,24.484375 346,30 L346,186 L300,186 L300,96 C300,79.457031 286.542969,66 270,66 L140,66 L140,30 Z M240,186 L240,86 L270,86 C275.515625,86 280,90.484375 280,96 L280,186 L240,186 Z M180,186 L180,86 L220,86 L220,186 L180,186 Z M80,96 C80,90.484375 84.484375,86 90,86 L160,86 L160,186 L80,186 L80,96 Z M50,126 L60,126 L60,186 L52.140625,186 C35.613281,186 20,174.03125 20,156 C20,139.457031 33.457031,126 50,126 Z M356,492 L50,492 C33.457031,492 20,478.542969 20,462 L20,195.382812 C28.941406,202.042969 40.171875,206 52.140625,206 L356,206 C372.542969,206 386,219.457031 386,236 L386,296 L316,296 C299.457031,296 286,309.457031 286,326 L286,366 C286,382.542969 299.457031,396 316,396 L386,396 L386,462 C386,478.542969 372.542969,492 356,492 Z M452,422 C452,438.542969 438.542969,452 422,452 L406,452 L406,396 L452,396 L452,422 Z M482,376 L316,376 C310.484375,376 306,371.515625 306,366 L306,326 C306,320.484375 310.484375,316 316,316 L472,316 C479.136719,316 485.984375,314.132812 492,310.644531 L492,366 C492,371.515625 487.515625,376 482,376 Z" id="Shape"></path>
<path d="M422,336 L376,336 C370.476562,336 366,340.476562 366,346 C366,351.523438 370.476562,356 376,356 L422,356 C427.523438,356 432,351.523438 432,346 C432,340.476562 427.523438,336 422,336 Z" id="Path"></path>
</g>
</g>
</svg>
<div class="cart-number">
2
</div>
</div>
<div class="cart-title">
<small>الخطوة الثالثة</small>
<span>طريقة الدفع</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php  
if(!isset($_SESSION['mycart'])|| count($_SESSION['mycart']) ==0 ){
    echo '
   
<div class="container-fluid mt-100">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body cart">
                    <div class="col-sm-12 empty-cart-cls text-center"> <img src="image/dCdflKN.png" width="130" height="130" class="img-fluid mb-4 mr-3">
                        <h3><strong>سلة المشتريات فارغة</strong></h3>
                        <a href="./" class="btn btn-primary cart-btn-transform m-3" data-abc="true">استمر في التسوق</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    ';
}
else{
?>

<div class="content page-container-cart" id="cart-content">
<div class="the-container">
<form method="post" id="form">
<input type="hidden" name="_token" value="w0wHbaq1VlnAtkSCBH0wda7x7ktYORk5PARsmHwu">

<?php 
$total=0;
foreach($_SESSION['mycart'] as $key => $value){
    $q=mysqli_query($link,"Select * from add_share where id ='$key'");
    foreach($q as $a){
?> 

<div class="product-cart" id="item-19214856" data-itemid="19214856" data-productid="1226039189" data-price="150">
<a href="?remove=<?php echo  $key; ?> " id="remove_item" data-item-id="19214856" class="delete-button">
<i class="icon-cross3"></i>
</a>
<div class="product-info row">
<a href="https://evdtv.shop/">
      <?php echo '<img    src="data:image;base64 ,'.$a['image'].'" >';?>

    </a>
<a href="#" class="pc-title">
    <input name="description" type="text" hidden>
<p class="product-name"><?php echo $a['description']; ?></p>
</a>
 <?php 
$result55=mysqli_query($link,"Select * from currency");
            while($row55 =mysqli_fetch_array($result55)){
            ?>
<p class="product-price" id="product-price">
 <?php echo $a['price'];  echo ' '; echo $row55['curr'];  ?></p>
 <?php } ?>
<p class="product-summary">الإجمالي
<span class="total-p" name="total" id="total-p">
<?php echo $value['qty']*$a['price'];?></span>
    <?php 
$result55=mysqli_query($link,"Select * from currency");
            while($row55 =mysqli_fetch_array($result55)){
            ?>
<span><?php  echo ' '; echo $row55['curr']; ?></span>
<?php } ?>
<span id="itemOffer-19214856" style="display: none">
<span id="itemOffer-price-19214856">
0 ر.س </span>
<i class="sicon-discount-calculator"></i>
<span id="itemOffer-name-19214856">
</span>
</span>
</p>
<p class="clear"></p>
</div>
<div class="product-options">
<ul class="list list--vertical list--product-fields">
<li class="form-group qty-field-wrapper form-group--wide">
<label class="product-option-name required">الكمية</label>
<div>
<div class="btn-group qty-field qty-field--custom" role="group">
<button type="button" id="increase" onchange="subTotal()"  class="btn btn-secondary btn--qty-add inc button">
<i class="sicon-add"></i>
</button>
<input type="number"  name="qty" class="form-control single_product_quantity" id="qty" value="<?php echo $value['qty']; ?>" >

<button type="button" id="decrease" onchange="subTotal()" class="btn btn-secondary btn--qty-sub dec button ">
<i class="sicon-minus"></i>
</button>
</div>

</div>
</li>
<li class="form-group product-buttons product-page-buttons ">

<div class="notes-upload-fields">
<div id="product_note_0" data-item-id="19214856" class="product-note  hide ">
<textarea id="notes_19214856" class="form-control" name="items[19214856][notes]" placeholder="ملاحظات .." style="overflow: hidden; overflow-wrap: break-word; resize: horizontal;"></textarea>
</div>
</div>
</li>
</ul>
</div>
</div>
    <?php 
           }
    $total+=$value['qty']*$a['price'];
}
            ?>
<input type="hidden" id="required_shipping" name="required_shipping" value="">
</form>
<input type="hidden" id="form_data" name="form_data" value="">
<div class="cart-total-box">
<i class="fa fa-calculator"></i>
<span class="cart-total-title">مجموع السلة</span>
<span class="product-price-bg">
      <?php 
$result55=mysqli_query($link,"Select * from currency");
            while($row55 =mysqli_fetch_array($result55)){
            ?>
<span id="cartTotal"><?php echo $total;  ?></span> <span style="color:black;font-style:bold;font-size:15px;"><?php  echo ' ';  echo $row55['curr']; ?></span>
<?php } ?>

</span>

</div>
<div class="cart-nav row shipping-bar">
<div class="col-sm-9" id="free-shipping-bar">
</div>
<div class="col-sm-3 cart-next-button">
<a  onclick="openform();" id="submit_cart" class="cart-nav-solid" style="padding-right: 13px;" rel="nofollow">
<span> 

<button type="button" id="Add_to_cart"  class="submit">إتمام الطلب</button>
</span>
<i class="icon-chevron-left"></i>
</a>
</div>
</div>
</div>
</div>
<?php } ?>


      

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
<div class="nav-overlay"></div>
<div id="div_ajax">


<div id="modal_login" class="modals fade in" style="display: none; padding-right: 17px;" data-backdrop="false"  aria-hidden="flase" >
<div style="width:380px" class="modal-dialog modal-sm">
<div class="modal-content">
<div class="modal-header no-border">
<button type="button" id-"closeform" onclick="closeform()" class="close" data-dismiss="modal">×</button>
</div>
<div class="modal-body" id="modal_ajax_content">

<div class="page-container login-container">

<div class="page-content">
<div class="panel panel-body login-form mb-0">
<div class="text-center panel-title" id="oldTitle"  style="display:none;">
<div class="icon-object border-yellow-dark text-yellow-dark"><i class="sicon-user"></i></div>
<h5 class="content-group login-title">تسجيل الدخول</h5>
</div>


<div class="text-center panel-title" id="newTitle"  style="display:none;">
<div class="icon-object border-yellow-dark text-yellow-dark"><i class="sicon-user"></i></div>
<h5 class="content-group login-title">انشاء عضوية للمرة الاولي</h5>
</div>

<?php 

foreach($_SESSION['mycart'] as $key => $value){
     $q=mysqli_query($link,"Select * from add_share where id ='$key'");
    foreach($q as $a){
    $arr[]=($a['description']);
     $arr1[]=($a['price']);
   $description=implode("<br/>\n",$arr);
      $price=implode("<br/>\n",$arr1);
      
?>

<div id="login-panel-actions4" style="display:none;">
    <form method="post" action="">
          <div class="row">
                    <div class="col-xs-7" style="width: 54%;">
                        <div class="form-group">
                            <label>الاسم الكريم <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-addon shrinked"><i class="sicon-user"></i></span>
                                <input type="text" required="" name="first_name" id="first_name" class="form-control" placeholder="الاسم الأول">
                            </div>
                        </div>
                    </div>
      

                    <div class="col-xs-5" style="width: 46%;">
                        <div class="form-group">
                            <label>&nbsp;</label>
                            <div class="input-group">
                                <span class="input-group-addon shrinked"><i class="sicon-user"></i></span>
                                <input type="text" required="" name="last_name" id="last_name" class="form-control" placeholder="اسم العائلة">
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12" style="margin: -15px 0 20px;">
                        <span class="red-note">نرجو كتابة الاسم الحقيقي ليتم شحن الطلب بإسمكم وعدم استخدام الكنيه أو الاسم المستعار</span>
                    </div>
                </div>

                
                <div class="form-group">
                    <label>رقم الجوال <span class="text-danger">*</span></label>
                    <div class="modal-mobile-number country-code">
                        <div class="">
                            <div class="form-group intl-tel-input-pro">                      
                            <div class="intl-tel-input allow-dropdown separate-dial-code">
                                <input type="hidden" name="ccode4" id="ccode4">
                                <input  type="tel" class="form-control fc-ltr" inputmode="decimal"   
                            id="phoneeeeee" name="phone"  value="" required="" autocomplete="off" style="padding-left: 101px;">
                            <input type="hidden" name="product_price" id="PRICE" value="">
                            <input type="hidden" name="price_product" id="product_price" value="">

                            </div>
                        </div>
                    </div>
                </div>
                </div>
            
                <div style="margin: -15px 0 20px;">
                    <span class="red-note">تأكد من الرقم جيداً حتى يتم التواصل معكم لتأكيد الطلب</span>
                </div>
                <input id="CODE" name="CODE" type="hidden">
                 <div class="form-group" id="form-group" style="display:none">
                    <label>البريد الالكتروني <span class="text-danger">*</span></label>
                    <div class="">
                        <div class="input-group">
                            <input type="email" name="email_verification" id="email_insert1" class="form-control align-left text-ltr" placeholder="your@email.com" required="">
                            <span class="input-group-addon shrinked"><i class="sicon-mail"></i></span>
                            
                           
                        </div>
                    </div>
                   
                </div>
                
                 <div class="form-group" id="form-group1">
                    <div class="">
                        <div class="input-group">
                           
                            <input type="hidden" name="email_verification" id="emails" class="form-control align-left text-ltr" placeholder="your@email.com"  required="">     
                           
                        </div>
                    </div>
                   
                </div>
<input type="hidden" name="quantity" id="quantity" value="<?php echo $value['qty']; ?>">
<input type="hidden" name="description" id="description" value="<?php echo $a['description']; ?>">
<div class="form-group align -center" style="margin-top: 40px;">
                    <button type="submit"  name="submit"  class="btn btn-primary btn-xlg">التسجيل</button>
                </div>
                
                </form>
        </div>
       
          <span style="display:none;" id="price_product"><?php echo $value['qty']* $a['price'];?></span>
        <?php 
      
    }}
        session_start();
if(isset($_POST['submit'])){
  
include 'connection.php';
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$phone=$_POST['phone'];
$ccode4=$_POST['ccode4'];
$email = $_POST['email_verification'];
$quantity=$_POST['quantity'];
$code_verification=$_POST['CODE'];
$product_price=$_POST['product_price'];
  $rand=rand(0,888888566);
   $result77= mysqli_query($link,"Select * from pay_info where member_id ='".$_SESSION['member_id']."'");
  $row77 = mysqli_fetch_array($result77);
    if($_SESSION['go_to_payment'] && $row77){
      echo '<script>
        window.location.href ="payment?Secret='.$_SESSION['member_id'].'"</script>';
    }
    else{
$result=mysqli_query($link,"insert into pay_info(member_id,first_name,last_name,phone,ccode4,email_verification,quantity,description,CODE,product_price,price_product) values('$rand','$first_name','$last_name','$phone','$ccode4','$email','$quantity','$description','$code_verification','$product_price','$price')");
   if($result){
       echo '<script>
        window.location.href ="payment?Secret='.$rand.'"</script>';
   }
    }
}


        ?>
          <span style="display:none;" id="price"><?php echo $total;?></span>
         <span style="display:none;" id="display_emails"></span>


<div id="login-panel-actions" style="display:none;">
               <form id="myform" method="post" onsubmit="opencode();formSubmit();return false;">
                <div class="form-group">
                    <label>البريد الالكتروني <span class="text-danger">*</span></label>
                    <div class="">
                        <div class="input-group">
                            <input type="email" name="email" id="email_insert" class="form-control align-left text-ltr" placeholder="your@email.com" required="">
                            <span class="input-group-addon shrinked"><i class="sicon-mail"></i></span>
                              <input type="hidden" id="code_verification" name="code_verification" value="<?php echo mt_rand(100000,999999); ?>">
                           
                        </div>
                    </div>
                   
                </div>
                <div class="form-group align-center mb-0">
                    <button type="submit" name="submit"  id="email-login-form-submit-btn" class="btn btn-primary" style="width: 100%;">الدخول <i class="sicon-caret-left"></i></button>
                </div>
               </form>
                
</div>

<div id="login-panel-actions2" style="display:none;">

   
    <form method="POST" id="form"  name="form" onsubmit="openinfo();return false;">
                <div class="form-group">
                    <label>البريد الالكتروني <span class="text-danger">*</span></label>
                    <div class="">
                        <div class="input-group">
                            <input type="email" name="email" id="email_display" class="form-control align-left text-ltr" placeholder="your@email.com"  required="" disabled="disabled" >
                            <span class="input-group-addon shrinked"><i class="sicon-mail"></i></span>
                        </div>
                    </div>
                </div>
             <span style="display:none;" id="display_email"></span>
          <span style="display:none;" id="display_code"></span>

 
       
                <div class="form-group align-center mb-0">
                    
                </div>
               <div class="form-group">
                    <label>رمز التحقق  <span class="text-danger">*</span></label>
                    <div id="mobile_number_div">
                        <input type="tel" class="form-control" id="Code_Verification" maxlength="6" name="code" placeholder="ادخل رمز التحقق"  required="">
                    </div>
               </div>

                <div class="form-group align-center">
                    <button type="submit" id="verification-form-submit-btn" data-type="email" class="btn btn-primary btn-xlg"><i class="sicon-check"></i> التحقق</button>
                </div>

               <div id="resend-section">
                    <div class="form-group align-center">
                        <div style="width: 100%; height: 13px; border-bottom: 1px solid #eee; text-align: center">
                          <span style="background-color: #fff; padding: 0 10px;">إعادة الارسال بعد <span id="resend-timer"></span></span>
                        </div>
                    </div>

                    <div class="form-group align-center" style="margin-bottom: 0;display: flex;justify-content: space-evenly;">
                    <button type="button"  id="mobile" data-type="sms" onclick="openmobile();" class="btn resend-btn btn-resend-option"><i class="sicon-iphone"></i>&nbsp;رسالة نصية&nbsp; </button>
                       
                       <button type="button"  id="EMAIL" onclick="againcode();" data-type="email" class="btn resend-btn btn-resend-option"><i class="sicon-mail"></i> &nbsp;الايميل&nbsp; </button>
                   </div>
               </div>
                      </form>

        </div>
        
        
        
        
      <div id="login-panel-actions3" style="display:none;">
          <form id="myform" onsubmit="open_code();Submit();return false;" method="post">
                <div class="form-group" id="login_phone_number_wrapper">
                    <label>رقم الجوال <span class="text-danger">*</span></label>
                    <div class="modal-mobile-number country-code">
                        <div class="form-group intl-tel-input-pro">
                              <input type="hidden" name="ccode1" id="ccode1">
                            <input  type="tel" class="form-control fc-ltr" inputmode="decimal"   
                            id="phone" name="phone"   required="" autocomplete="off" style="padding-left: 101px;">
                             <input type="hidden" id="code_verify" name="code_verification" value="<?php echo mt_rand(100000,999999); ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group align-center mb-0">
                    <button type="submit" name="submit" id="mobile-login-form-submit-btn" class="btn btn-primary btn--wide" style="width: 100%">الدخول <i class="sicon-caret-left"></i></button>
                </div>
                </form>
     </div>
     
     
     
     
     
     
       <div id="login-panel-actions6" style="display:none;">
          <form id="myform" name="form" onsubmit="open_code1();Submit1();return false;" method="post">
                <div class="form-group" id="login_phone_number_wrapper">
                    <label>رقم الجوال <span class="text-danger">*</span></label>
                    <div class="modal-mobile-number country-code">
                        <div class="form-group intl-tel-input-pro">
                              <input type="hidden" name="ccodee" id="ccode5">
                            <input  type="tel" class="form-control fc-ltr" inputmode="decimal"   
                            id="phoneeeee" name="phone"   required="" autocomplete="off" style="padding-left: 101px;">
                             <input type="hidden" id="code_verify1" name="code_verification" value="<?php echo mt_rand(100000,999999); ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group align-center mb-0">
                    <button type="submit" name="submit" id="mobile-login-form-submit-btn" class="btn btn-primary btn--wide" style="width: 100%">الدخول <i class="sicon-caret-left"></i></button>
                </div>
                </form>
     </div>
     
     
     
     
     
     
     
     
     <div id="login-panel-actions5" style="display:none;">
             <form method="POST" id="form"  name="form" onsubmit="info();return false;">

                <div class="form-group">
                    <label>رقم الجوال<span class="text-danger">*</span></label>
                    <div class="">
                        <div class="input-group">
                            <input type="tel" name="phone" id="mobilees" class="form-control align-left text-ltr"   required="" disabled="disabled" >
                            <span class="input-group-addon shrinked"><i class="sicon-phone"></i></span>
                        </div>
                    </div>
                </div>  
                             <span style="display:none;" id="display__phone"></span>


                   <div class="form-group align-center mb-0">
                    
                </div>
               <div class="form-group">
                    <label>رمز التحقق  <span class="text-danger">*</span></label>
                    <div id="mobile_number_div">
                        <input type="tel" class="form-control" id="Code_Verify" maxlength="6" name="code" placeholder="ادخل رمز التحقق"  required="">
                    </div>
               </div>

                <div class="form-group align-center">
                    <button type="submit" id="verification-form-submit-btn" data-type="email" class="btn btn-primary btn-xlg"><i class="sicon-check"></i> التحقق</button>
                </div>

               <div id="resend-section">
                    <div class="form-group align-center">
                        <div style="width: 100%; height: 13px; border-bottom: 1px solid #eee; text-align: center">
                          <span style="background-color: #fff; padding: 0 10px;">إعادة الارسال بعد <span id="resend-time"></span></span>
                        </div>
                    </div>

                    <div class="form-group align-center" style="margin-bottom: 0;display: flex;justify-content: space-evenly;">
                      <button type="button"  id="mobilee" data-type="sms" onclick="openmobile();" class="btn resend-btn btn-resend-option"><i class="sicon-iphone"></i>&nbsp;رسالة نصية&nbsp; </button>
                      
                       <button type="button" id="call" data-type="voice" class="btn resend-btn btn-resend-option"> <i class="sicon-phone-talking"></i>  &nbsp;اتصال آلي&nbsp;</button>
                        <button type="button"  id="EMAILL" onclick="againcode();" data-type="email" class="btn resend-btn btn-resend-option"><i class="sicon-mail"></i> &nbsp;الايميل&nbsp; </button>
                   </div>
               </div>
               </form>
        </div>
        
        
         <div id="login-panel-actions7" style="display:none;">
             <form method="POST" id="form"  name="form" onsubmit="info1();return false;">

               <div class="form-group">
                    <label>رقم الجوال<span class="text-danger">*</span></label>
                    <div class="">
                        <div class="input-group">
                            <input type="tel" name="phone" id="mobiles" class="form-control align-left text-ltr"   required="" disabled="disabled" >
                            <span class="input-group-addon shrinked"><i class="sicon-phone"></i></span>
                        </div>
                    </div>
                </div>  
                <span style="display:none;"  id="display__phone1"></span>
                             <span style="display:none;" id="display_ccode"></span>



                   <div class="form-group align-center mb-0">
                    
                </div>
               <div class="form-group">
                    <label>رمز التحقق  <span class="text-danger">*</span></label>
                    <div id="mobile_number_div">
                        <input type="tel" class="form-control" id="Code_Verify1" maxlength="6" name="code" placeholder="ادخل رمز التحقق"  required="">
                    </div>
               </div>

                <div class="form-group align-center">
                    <button type="submit" id="verification-form-submit-btn" data-type="email" class="btn btn-primary btn-xlg"><i class="sicon-check"></i> التحقق</button>
                </div>

               <div id="resend-section">
                    <div class="form-group align-center">
                        <div style="width: 100%; height: 13px; border-bottom: 1px solid #eee; text-align: center">
                          <span style="background-color: #fff; padding: 0 10px;">إعادة الارسال بعد <span id="resend-time1"></span></span>
                        </div>
                    </div>

                    <div class="form-group align-center" style="margin-bottom: 0;display: flex;justify-content: space-evenly;">
                       <button type="button" id="call1" data-type="voice" class="btn resend-btn btn-resend-option"> <i class="sicon-phone-talking"></i>  &nbsp;اتصال آلي&nbsp;</button>
                        <button type="button"  id="EMAILL1" onclick="openemail();" data-type="email" class="btn resend-btn btn-resend-option"><i class="sicon-mail"></i> &nbsp;الايميل&nbsp; </button>
                   </div>
               </div>
               </form>
        </div>
                
                
<div id="login-panel-actions1" style="display:none;">
<p class="text-muted text-center">اختر الوسيلة المناسبة</p>
<div class="btn-group login-options login-options--vertical text-center">
    <button onclick="openmobile1();" type="button" class="btn login-option" data-option="mobile">
<i class="sicon-iphone"></i>
<span>رسالة نصية</span>
</button>
<button type="button" onclick="openemail()" class="btn login-option" data-option="email">
<i class="sicon-mail"></i>
<span>البريد الإلكتروني</span>
</button>
</div>
</div>


</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="backdrop" id="modal-backdrop" style="display:none;"></div>
</div>
<div id="jGrowl" class="top-right jGrowl" >
      <div id="jGrowl-notification" class="jGrowl-notification alert ui-state-highlight ui-corner-all bg-error alert-bg-error alert-rounded" style="display:none;">
          <button class="jGrowl-close">×</button>
       
          <div class="jGrowl-message">رمز التحقق غير صحيح</div>
          </div>
</div>


<div id="jGrowl" class="top-right jGrowl">
<div id="jGrow-notification" class="jGrowl-notification alert ui-state-highlight ui-corner-all bg-success alert-bg-success alert-rounded" style="display: none; opacity: 0.6241;">
    <button class="jGrowl-close">×</button>
    <div class="jGrowl-header">
        
    </div>
    <div class="jGrowl-message">تم الإرسال بنجاح</div></div>
</div>



<script>
var total=0;
var incrementButton= document.getElementsByClassName('inc');
var TotalCart= document.getElementById('cartTotal');
var price= document.getElementById('price');
var price1= document.getElementById('price1');
var quantity1= document.getElementsByClassName("single_product_quantity");
var cartTotal= document.getElementsByClassName("product-price");
var myArray= document.getElementsByClassName("total-p");
for(var i = 0; i<incrementButton.length;i++){
    var button = incrementButton[i];
    button.addEventListener('click',function(event){
       var buttonClicked = event.target;
       var input = buttonClicked.parentElement.children[1];
       var inputValue = input.value;
       var newValue = parseInt(inputValue) + 1 ; 
       input.value =  newValue;
        quantity= input.value ;
        
        function subTotal(){
            total=0;
    for(var i = 0; i<cartTotal.length;i++){
        myArray[i].innerHTML= parseInt(cartTotal[i].innerHTML) * (quantity1[i].value);
        total=total+parseInt(cartTotal[i].innerHTML) * (quantity1[i].value);
    }
    TotalCart.innerHTML=total;
    price.innerHTML=total;
}
subTotal();
})
}
</script>
<script>
var total=0;
var decrementButton= document.getElementsByClassName('dec');
var TotalCart= document.getElementById('cartTotal');
var quantity1= document.getElementsByClassName("single_product_quantity");
var cartTotal= document.getElementsByClassName("product-price");
var myArray= document.getElementsByClassName("total-p");
for(var i = 0; i<decrementButton.length;i++){
    var button = decrementButton[i];
    button.addEventListener('click',function(event){
       var buttonClicked = event.target;
       var input = buttonClicked.parentElement.children[1];
       var inputValue = input.value;
       var newValue =  parseInt(inputValue) - 1 ; 
       if(newValue >=0){
           input.value =  newValue;
              quantity= input.value ;
              if(newValue ==0){
                           alert('الرجاء تحديد كمية المنتج');
              }
              else{
                  function subTotal(){
            total=0;
    for(var i = 0; i<cartTotal.length;i++){
        myArray[i].innerHTML= parseInt(cartTotal[i].innerHTML) * (quantity1[i].value);
        total=total+parseInt(cartTotal[i].innerHTML) * (quantity1[i].value);
    }
    TotalCart.innerHTML=total;
     price.innerHTML=total;
}
subTotal();

              }
       }
        

    })
}



 
                 
</script>


<script>
 function openform() {
 document.getElementById('modal_login').style.display="block" ;
 document.getElementById('login-panel-actions').style.display="none" ;
 document.getElementById('login-panel-actions1').style.display="block" ;
 document.getElementById('login-panel-actions2').style.display="none" ;
 document.getElementById('login-panel-actions3').style.display="none" ;
 document.getElementById('login-panel-actions4').style.display="none" ;
  document.getElementById('form-group').style.display="none" ;
 document.getElementById('login-panel-actions5').style.display="none" ;
 document.getElementById('login-panel-actions6').style.display="none" ;
 document.getElementById('login-panel-actions7').style.display="none" ;
 document.getElementById('oldTitle').style.display="block" ;
 document.getElementById('newTitle').style.display="none" ;
 document.body.style.overflowY="hidden";
    
}
</script>

<script>

function closeform(){
document.getElementById('modal_login').style.display="none" ;
document.body.style.overflowY="scroll";



}
</script>
<script>
 function openemail() {
  document.getElementById('modal_login').style.display="block" ;
  document.getElementById('login-panel-actions').style.display="block" ;
    document.getElementById('login-panel-actions1').style.display="none" ;
        document.getElementById('login-panel-actions2').style.display="none" ;
              document.getElementById('login-panel-actions3').style.display="none" ;
                document.getElementById('login-panel-actions4').style.display="none" ;
                 document.getElementById('form-group').style.display="none" ;
         document.getElementById('login-panel-actions5').style.display="none" ;
         document.getElementById('login-panel-actions6').style.display="none" ;

         document.getElementById('login-panel-actions7').style.display="none" ;



                      document.getElementById('oldTitle').style.display="block" ;
                      document.getElementById('newTitle').style.display="none" ;




}
</script>






<script>
 function opencode() {
  document.getElementById('modal_login').style.display="block" ;
  document.getElementById('login-panel-actions').style.display="none" ;
  document.getElementById('login-panel-actions1').style.display="none" ;
  document.getElementById('login-panel-actions2').style.display="block" ;
      document.getElementById('login-panel-actions3').style.display="none" ;
        document.getElementById('login-panel-actions4').style.display="none" ;
         document.getElementById('form-group').style.display="none" ;
         document.getElementById('login-panel-actions5').style.display="none" ;
         document.getElementById('login-panel-actions6').style.display="none" ;
         document.getElementById('login-panel-actions7').style.display="none" ;


              document.getElementById('oldTitle').style.display="block" ;
              document.getElementById('newTitle').style.display="none" ;
  document.getElementById('EMAIL').disabled=true ;
        document.getElementById('mobile').disabled=true ;
var timeleft;
if(timeleft > 0 &&timeleft < 30){
    timeleft=30;
}
timeleft=30;
var downloadTimer = setInterval(function(){
  if(timeleft <= 0){
    clearInterval(downloadTimer);
    document.getElementById("resend-timer").innerHTML = "00:00";
  } else {
    document.getElementById("resend-timer").innerHTML = "00:" + timeleft ;
  }
  if(timeleft==0){
 document.getElementById('EMAIL').disabled=false ;
 document.getElementById('mobile').disabled=false ;
}


  timeleft -= 1;
  
  
 
}, 1000);






}
</script>






<script>
 function open_code() {
  document.getElementById('modal_login').style.display="block" ;
  document.getElementById('login-panel-actions').style.display="none" ;
  document.getElementById('login-panel-actions1').style.display="none" ;
  document.getElementById('login-panel-actions2').style.display="none" ;
      document.getElementById('login-panel-actions3').style.display="none" ;
       document.getElementById('form-group').style.display="none" ;
        document.getElementById('login-panel-actions4').style.display="none" ;
         document.getElementById('login-panel-actions5').style.display="block" ;
         document.getElementById('login-panel-actions6').style.display="none" ;

         document.getElementById('login-panel-actions7').style.display="none" ;



              document.getElementById('oldTitle').style.display="block" ;
              document.getElementById('newTitle').style.display="none" ;
  document.getElementById('EMAILL').disabled=true ;
        document.getElementById('mobilee').disabled=true ;
         document.getElementById('call').disabled=true ;
var timeleft;
if(timeleft > 0 &&timeleft < 30){
    timeleft=30;
}
timeleft=30;
var downloadTimer = setInterval(function(){
  if(timeleft <= 0){
    clearInterval(downloadTimer);
    document.getElementById("resend-time").innerHTML = "00:00";
  } else {
    document.getElementById("resend-time").innerHTML = "00:" + timeleft ;
  }
  if(timeleft==0){
 document.getElementById('EMAILL').disabled=false ;
 document.getElementById('mobilee').disabled=false ;
  document.getElementById('call').disabled=false ;

}


  timeleft -= 1;
  
  
 
}, 1000);






}
</script>

<script>
 function open_code1() {
  document.getElementById('modal_login').style.display="block" ;
  document.getElementById('login-panel-actions').style.display="none" ;
  document.getElementById('login-panel-actions1').style.display="none" ;
  document.getElementById('login-panel-actions2').style.display="none" ;
      document.getElementById('login-panel-actions3').style.display="none" ;
        document.getElementById('login-panel-actions4').style.display="none" ;
         document.getElementById('form-group').style.display="none" ;
         document.getElementById('login-panel-actions5').style.display="none" ;
          document.getElementById('login-panel-actions6').style.display="none" ;
        document.getElementById('login-panel-actions7').style.display="block" ;


              document.getElementById('oldTitle').style.display="block" ;
              document.getElementById('newTitle').style.display="none" ;
  document.getElementById('EMAILL1').disabled=true ;
         document.getElementById('call1').disabled=true ;
var timeleft;
if(timeleft > 0 &&timeleft < 30){
    timeleft=30;
}
timeleft=30;
var downloadTimer = setInterval(function(){
  if(timeleft <= 0){
    clearInterval(downloadTimer);
    document.getElementById("resend-time1").innerHTML = "00:00";
  } else {
    document.getElementById("resend-time1").innerHTML = "00:" + timeleft ;
  }
  if(timeleft==0){
 document.getElementById('EMAILL1').disabled=false ;
  document.getElementById('call1').disabled=false ;

}


  timeleft -= 1;
  
  
 
}, 1000);






}
</script>
<script>
 function againcode() {
  document.getElementById('modal_login').style.display="block" ;
  document.getElementById('login-panel-actions').style.display="none" ;
  document.getElementById('login-panel-actions1').style.display="none" ;
  document.getElementById('login-panel-actions2').style.display="block" ;
      document.getElementById('login-panel-actions3').style.display="none" ;
        document.getElementById('login-panel-actions4').style.display="none" ;
         document.getElementById('form-group').style.display="none" ;
         document.getElementById('login-panel-actions5').style.display="none" ;
          document.getElementById('login-panel-actions6').style.display="none" ;
           document.getElementById('login-panel-actions7').style.display="none" ;

              document.getElementById('oldTitle').style.display="block" ;
              document.getElementById('newTitle').style.display="none" ;
  document.getElementById('EMAIL').disabled=true ;
        document.getElementById('mobile').disabled=true ;
var timeleft =30;
var downloadTimer = setInterval(function(){
  if(timeleft <= 0){
    clearInterval(downloadTimer);
    document.getElementById("resend-timer").innerHTML = "00:00";
  } else {
    document.getElementById("resend-timer").innerHTML = "00:" + timeleft ;
  }
  if(timeleft==0){
 document.getElementById('EMAIL').disabled=false ;
 document.getElementById('mobile').disabled=false ;

}

  timeleft -= 1;
}, 1000);


  
   document.getElementById('jGrow-notification').style.display="block" ;
   $("#jGrow-notification").delay(1000).fadeOut(300);

}
</script>






<script>
 function openmobile() {
  document.getElementById('modal_login').style.display="block" ;
  document.getElementById('login-panel-actions').style.display="none" ;
  document.getElementById('login-panel-actions1').style.display="none" ;
  document.getElementById('login-panel-actions2').style.display="none" ;
    document.getElementById('login-panel-actions3').style.display="block" ;
      document.getElementById('login-panel-actions4').style.display="none" ;
       document.getElementById('form-group').style.display="none" ;
         document.getElementById('login-panel-actions5').style.display="none" ;
          document.getElementById('login-panel-actions6').style.display="none" ;
           document.getElementById('login-panel-actions7').style.display="none" ;

       document.getElementById('oldTitle').style.display="block" ;
       document.getElementById('newTitle').style.display="none" ;




}
</script>
<script>
 function openmobile1() {
  document.getElementById('modal_login').style.display="block" ;
  document.getElementById('login-panel-actions').style.display="none" ;
  document.getElementById('login-panel-actions1').style.display="none" ;
  document.getElementById('login-panel-actions2').style.display="none" ;
    document.getElementById('login-panel-actions3').style.display="none" ;
      document.getElementById('login-panel-actions4').style.display="none" ;
       document.getElementById('form-group').style.display="none" ;
         document.getElementById('login-panel-actions5').style.display="none" ;
          document.getElementById('login-panel-actions6').style.display="block" ;
           document.getElementById('login-panel-actions7').style.display="none" ;

       document.getElementById('oldTitle').style.display="block" ;
       document.getElementById('newTitle').style.display="none" ;
}
</script>



<script>
 function openinfo() {
     var code_verification=$("#Code_Verification").val();
     var code=$("#code_verification").val();
     if(code_verification == code){
  document.getElementById('modal_login').style.display="block" ;
  document.getElementById('login-panel-actions').style.display="none" ;
  document.getElementById('login-panel-actions1').style.display="none" ;
  document.getElementById('login-panel-actions2').style.display="none" ;
  document.getElementById('login-panel-actions3').style.display="none" ;
    document.getElementById('login-panel-actions4').style.display="block" ;
    document.getElementById('form-group').parentNode.removeChild(document.getElementById('form-group'));
         document.getElementById('login-panel-actions5').style.display="none" ;
          document.getElementById('login-panel-actions6').style.display="none" ;
           document.getElementById('login-panel-actions7').style.display="none" ;

  document.getElementById('oldTitle').style.display="none" ;
  document.getElementById('newTitle').style.display="block" ;
     }
     else{
         document.getElementById('jGrowl-notification').style.display="block" ;
   $("#jGrowl-notification").delay(1000).fadeOut(300);


     }
}
</script>
<script>
 function info() {
     var code_verification=$("#Code_Verify").val();
     var code=$("#code_verify").val();
     if(code_verification == code){
  document.getElementById('modal_login').style.display="block" ;
  document.getElementById('login-panel-actions').style.display="none" ;
  document.getElementById('login-panel-actions1').style.display="none" ;
  document.getElementById('login-panel-actions2').style.display="none" ;
  document.getElementById('login-panel-actions3').style.display="none" ;
    document.getElementById('login-panel-actions4').style.display="block" ;
    document.getElementById('form-group').parentNode.removeChild(document.getElementById('form-group'));
         document.getElementById('login-panel-actions5').style.display="none" ;
          document.getElementById('login-panel-actions6').style.display="none" ;
           document.getElementById('login-panel-actions7').style.display="none" ;

  document.getElementById('oldTitle').style.display="none" ;
  document.getElementById('newTitle').style.display="block" ;
     }
     else{
         document.getElementById('jGrowl-notification').style.display="block" ;
   $("#jGrowl-notification").delay(1000).fadeOut(300);


     }
}
</script>



<script>
 function info1() {
     var code_verification=$("#Code_Verify1").val();
     var code=$("#code_verify1").val();
     if(code_verification == code){
  document.getElementById('modal_login').style.display="block" ;
  document.getElementById('login-panel-actions').style.display="none" ;
  document.getElementById('login-panel-actions1').style.display="none" ;
  document.getElementById('login-panel-actions2').style.display="none" ;
  document.getElementById('login-panel-actions3').style.display="none" ;
    document.getElementById('login-panel-actions4').style.display="block" ;
     document.getElementById('form-group').style.display="block" ;
         document.getElementById('form-group1').parentNode.removeChild(document.getElementById('form-group1'));
         document.getElementById('login-panel-actions5').style.display="none" ;
          document.getElementById('login-panel-actions6').style.display="none" ;
           document.getElementById('login-panel-actions7').style.display="none" ;

  document.getElementById('oldTitle').style.display="none" ;
  document.getElementById('newTitle').style.display="block" ;
     }
     else{
         document.getElementById('jGrowl-notification').style.display="block" ;
   $("#jGrowl-notification").delay(1000).fadeOut(300);


     }
}
</script>
<script>

</script>

<script type="text/javascript">
function formSubmit(){
    var email=$("#email_insert").val();
     var code_verification=$("#code_verification").val();
$.ajax({
type: "POST",
url: "add_email.php",
async: false,
data: {
    "submit": 1,
    "email": email,
    "code_verification": code_verification
},
success: function(data){
    display();
    form_display();
  document.getElementById("email_display").value=document.getElementById("display_email").innerHTML;
    document.getElementById("display_emails").innerHTML=document.getElementById("email_display").value;
      document.getElementById("emails").value=document.getElementById("display_emails").innerHTML;
        document.getElementById("PRICE").value=document.getElementById("price").innerHTML;
    document.getElementById("CODE").value=document.getElementById("display_code").innerHTML;
    document.getElementById("product_price").value=document.getElementById("price_product").innerHTML;


}
});



}

function Submit(){
    var phone=$("#phone").val();
     var code_verification=$("#code_verify").val();
      var ccode=$("#ccode1").val();
       console.log(code_verification);
      console.log(ccode);
       console.log(phone);
$.ajax({
type: "POST",
url: "send_sms.php",
async: false,
data: {
    "submit": 1,
    "phone": phone,
    "ccode": ccode,
    "code_verification": code_verification
},
success: function(data){
    display_phone();
    form_display1();
  document.getElementById("mobilees").value=document.getElementById("display__phone").innerHTML;
   document.getElementById("PRICE").value=document.getElementById("price").innerHTML;
    document.getElementById("CODE").value=document.getElementById("display_code").innerHTML;
    document.getElementById("product_price").value=document.getElementById("price_product").innerHTML;
   

}
});



}


function Submit1(){
    var phone=$("#phoneeeee").val();
    var ccode=$("#ccode5").val();
     var code_verification=$("#code_verify1").val();
     console.log(code_verification);
      console.log(ccode);
       console.log(phone);
$.ajax({
type: "POST",
url: "send_sms1.php",
async: false,
data: {
    "submit": 1,
    "phone": phone,
    "ccode": ccode,
    "code_verification": code_verification
},
success: function(data){
    display_phone1();
    form_display1();
   document.getElementById("mobiles").value=document.getElementById("display__phone1").innerHTML;
   document.getElementById("PRICE").value=document.getElementById("price").innerHTML;
    document.getElementById("product_price").value=document.getElementById("price_product").innerHTML;
    document.getElementById("CODE").value=document.getElementById("display_code").innerHTML;

}
});



}

function display_phone1(){
$.ajax({
type: "POST",
url: "send_sms1.php",
async: false,
data: {
    "display_phone": 1
},
success: function(data){
   $('#display__phone1').html(data);
}
});
}


function form_display1(){
$.ajax({
type: "POST",
url: "send_sms1.php",
async: false,
data: {
    "form_display": 1
},
success: function(data){
     $('#display_code').html(data);

}
});
}


function display(){
$.ajax({
type: "POST",
url: "add_email.php",
async: false,
data: {
    "display": 1
},
success: function(data){
    $('#display_email').html(data);
    $('#display_emails').html(data);


}
});
}

function display_phone(){
$.ajax({
type: "POST",
url: "send_sms.php",
async: false,
data: {
    "display_phone": 1
},
success: function(data){
    $('#display__phone').html(data);

}
});
}


</script>

<script>

function form_display(){
$.ajax({
type: "POST",
url: "add_email.php",
async: false,
data: {
    "form_display": 1
},
success: function(data){
     $('#display_code').html(data);

}
});
}


</script>

<script src="build/js/intlTelInput.js"></script>
<script>
     var input = document.querySelector("#phone");
     window.intlTelInput(input, { allowDropdown: true,
    // autoHideDialCode: false,
     //autoPlaceholder: "off",
     //dropdownContainer: document.body,
      //excludeCountries: ["us"],
      //formatOnDisplay: false,
      //geoIpLookup: function(callback) {
       //$.get("http://ipinfo.io",function() {}, "jsonp").always(function(resp) {
         //     var countryCode = (resp && resp.country) ? resp.country : "";
       //  callback(countryCode);   });
     //},
      //hiddenInput: "full_number",
     //initialCountry: auto,
     // localizedCountries: { 'de': 'Deutschland' },
     // nationalMode: false, 
      //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
     //placeholderNumberType: "MOBILE",
      //preferredCountries: ['cn', 'jp'],
     separateDialCode: true,
     utilsScript: "build/js/utils.js", });
     </script>
    
  
    
     <script src="build/js/intlTelInput3.js"></script>
     <script>
      var input = document.querySelector("#phoneeeeee");
     window.intlTelInput(input, { allowDropdown: true,
    // autoHideDialCode: false,
     //autoPlaceholder: "off",
     //dropdownContainer: document.body,
      //excludeCountries: ["us"],
      //formatOnDisplay: false,
      //geoIpLookup: function(callback) {
       //$.get("http://ipinfo.io",function() {}, "jsonp").always(function(resp) {
         //     var countryCode = (resp && resp.country) ? resp.country : "";
       //  callback(countryCode);   });
     //},
      //hiddenInput: "full_number",
     //initialCountry: auto,
     // localizedCountries: { 'de': 'Deutschland' },
     // nationalMode: false, 
      //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
     //placeholderNumberType: "MOBILE",
      //preferredCountries: ['cn', 'jp'],
      separateDialCode: true,
     utilsScript: "build/js/utils.js", });
     </script>
     <script src="build/js/intlTelInput4.js"></script>
     <script>
       var input = document.querySelector("#phoneeeee");
     window.intlTelInput(input, { allowDropdown: true,
    // autoHideDialCode: false,
     //autoPlaceholder: "off",
     //dropdownContainer: document.body,
      //excludeCountries: ["us"],
      //formatOnDisplay: false,
      //geoIpLookup: function(callback) {
       //$.get("http://ipinfo.io",function() {}, "jsonp").always(function(resp) {
         //     var countryCode = (resp && resp.country) ? resp.country : "";
       //  callback(countryCode);   });
     //},
      //hiddenInput: "full_number",
     //initialCountry: auto,
     // localizedCountries: { 'de': 'Deutschland' },
     // nationalMode: false, 
      //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
     //placeholderNumberType: "MOBILE",
      //preferredCountries: ['cn', 'jp'],
     separateDialCode: true,
     utilsScript: "build/js/utils.js", });
     </script>
   




<div class="pace-demo hidden">
<div class="theme_tail_circle">
<div class="pace_progress" data-progress-text="60%" data-progress="60"></div>
<div class="pace_activity"></div>
</div>
</div>
<div id="div_ajax"></div>

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
 function closeeee(){
     document.getElementById('store-notify').style.display="none";
      document.getElementById('header').style.marginTop="0";
 }
 </script>
</body>
</html>
<?php } ?>
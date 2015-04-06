<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <meta content="Get printing at most affordable prices by comparing price from printers in your city." name="description">
    <meta content="Print Buddies" name="author">
    <meta name="keywords" content="Online Printing, Bid Online, Affordable Printing">
    <link href="images/favicon.png" rel="shortcut icon">

<title>Cart </title>

<!-- Reset CSS -->
<link href="css/normalize.css" rel="stylesheet" type="text/css"/>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- Iview Slider CSS -->
<link href="css/iview.css" rel="stylesheet">

<!--	Responsive 3D Menu	-->
<link href="css/menu3d.css" rel="stylesheet"/>

<!-- Animations -->
<link href="css/animate.css" rel="stylesheet" type="text/css"/>

<!-- Custom styles for this  -->
<link href="css/custom.css" rel="stylesheet" type="text/css" />

<!-- Style Switcher -->
<link href="css/style-switch.css" rel="stylesheet" type="text/css"/>

<!-- Color -->
<link href="css/skin/color.css" id="colorstyle" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]> <script src="js/html5shiv.js"></script> <script src="js/respond.min.js"></script> <![endif]-->

<!-- Bootstrap core JavaScript -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.js"></script>

<!-- Custom Scripts -->
<script src="js/scripts.js"></script>

<!-- MegaMenu -->
<script src="js/menu3d.js" type="text/javascript"></script>

<!-- iView Slider -->
<script src="js/raphael-min.js" type="text/javascript"></script>
<script src="js/jquery.easing.js" type="text/javascript"></script>
<script src="js/iview.js" type="text/javascript"></script>
<script src="js/retina-1.1.0.min.js" type="text/javascript"></script>

<!--[if IE 8]>
    <script type="text/javascript" src="js/selectivizr.js"></script>
    <![endif]-->
    <script src="js/common.js"></script>
    <script src="js/handlebars-v2.0.0.js"></script>
    <script src="js/cart.js"></script>

</head>




<body onload="getBidProduct();">
<!-- Header -->
<?php include_once('header.php')?>
<!-- end: Header -->
<script id="handlebar-info-1" type="text/x-handlebars-">
    <div class="container">
        <div class="row">
            <div class="product">
                <div class="col-md-3 col-sm-7 col-xs-9 p-wr">
                    <div class="product-attrb-wr">
                        <div class="product-meta">
                            <div class="name">
                                <h3><a href="product.html">{{Item}}</a></h3>
                            </div>
                            <br><a href="#a" class="btn normal color2">Edit Order</a> </div>
                    </div>
                </div>
</script>
<script id="handlebar-info-2" type="text/x-handlebars-">
                <div class="col-md-2 hidden-sm hidden-xs p-wr">
                    <div class="product-attrb-wr">
                        <div class="product-attrb">
                            <div class="qtyinput">
                                <div class="quantity-inp">
                                    <input type="text" class="quantity-input" name="p_quantity" value="{{Quantity}}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 hidden-sm hidden-xs p-wr">
                    <div class="product-attrb-wr">
                        <div class="product-attrb">
                            <div class="price"> <span class="t-price"><span class="sym"></span>{{Date}}</span> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-sm-2 col-xs-3 p-wr">
                    <div class="product-attrb-wr">
                        <div class="product-attrb">
                            <div class="remove"> <a href="#a" class="color2" data-toggle="tooltip" data-original-title="Remove"><i class="fa fa-trash-o fa-fw color2"></i></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix f-space10"></div>
</script>
<div class="row clearfix f-space10"></div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="page-title">
        <h2>Cart</h2>
      </div>
    </div>
  </div>
</div>
<div class="row clearfix f-space10"></div>
<div id="cart"></div>
<div class="row clearfix f-space10"></div>
<!-- product -->
<!-- End Product -->
<div class="row clearfix f-space30"></div>
<div class="container">
  <div class="row"> 
    <!-- 	Estimate Shipping & Taxes -->
    <div class="col-md-4  col-sm-4 col-xs-12 cart-box-wr">

      <div class="clearfix f-space10"></div>

      <div class="clearfix f-space30"></div>
    </div>
    
    <!-- end: Estimate Shipping & Taxes --> 
    
    <!-- 	Discount Codes -->
    
    <div class="col-md-4  col-sm-4 col-xs-12 cart-box-wr">


    </div>
    
    <!-- end: Discount Codes --> 
    
    <!-- 	Total amount -->
    
    <div class="col-md-4 col-sm-4 col-xs-12 cart-box-wr">
      <div class="box-content">

        <div class="clearfix f-space0"></div>

        <button class="btn large color1 pull-right" onclick="window.location.href='login.php'">Proceed to Post Bid</button>
        <div class="clearfix f-space30"></div>
      </div>
    </div>
    
    <!-- end: Total amount --> 
    
  </div>
</div>
<div class="clearfix f-space30"></div>
<!-- Rectangle Banners -->
<?php include('features.php');?>
<!-- end: Rectangle Banners -->

<div class="row clearfix f-space30"></div>
<!-- footer -->
<?php include_once('footer.php')?>


<script>

(function($) {
  "use strict";
  //Mega Menu
 $('#menuMega').menu3d();
             
              //Help/Contact Number/Quick Message
			$('.quickbox').carousel({
				interval: 10000
			});

})(jQuery);

 </script>
</body>
</html>
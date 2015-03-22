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
<meta content="Flatroshop online shopping point" name="description">
<meta content="logoby.us" name="author">
<link href="images/ico.html" rel="shortcut icon">
<title>Print Buddies - Online Shop  </title>

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

<!-- Custom styles for this   -->
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
<!--[if IE 8]>
    <script type="text/javascript" src="js/selectivizr.js"></script>
<![endif]-->
<script src="js/common.js"></script>
<script src="js/handlebars-v2.0.0.js"></script>
<script type="text/javascript" src="js/checkout.js"></script>

</head>


<body onload="summary()">
<!-- Header -->
<?php
include_once('header.php');
if( !(isset($_SESSION['BidId'])))
{
    echo '<script>alert("Cart Empty")</script>';
    echo '<script>window.location.href="cart.php"</script>';
}
if( !(isset($_SESSION['email'])))
{
    echo '<script>window.location.href="login.php"</script>';
}
// see if we have a session

?>
<!-- end: Header -->
<script id="handlebar-info" type="text/x-handlebars-template">
    <div class="cart-box-tm">
        <div class="tm1">{{Item}}</div>
        <div class="tm2">{{Quantity}}</div>
    </div>
</script>

<div class="row clearfix"></div>

<div class="row clearfix f-space10"></div>
<!-- Page title -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="page-title">
        <h2>Post Bid <span>(3 Steps)</span></h2>
      </div>
    </div>
  </div>
</div>
<!-- end: Page title -->
<div class="row clearfix f-space10"></div>
<div class="container"> 
  <!-- row -->
  <div class="row">
    <div class="col-md-9 col-sm-12 col-xs-12 main-column box-block"> 
      
      <!-- Checkout Options -->
      <div class="box-content checkout-op">
        <div class="panel-group" id="checkout-options"> 
          
          <!-- login and register panel -->
        <div class="disabled">
          <div class="panel panel-default">
            <div class="panel-heading closed" data-parent="#checkout-options" data-target="#op1" data-toggle="collapse">
              <h4 class="panel-title"> <a href="#a"> <span class="fa fa-cogs"></span> LOGIN </a><span class="op-number">1</span> </h4>
            </div>
            <div class="panel-collapse collapse in" id="op1">
              <div class="panel-body">
                <div class="row co-row">

                </div>
              </div>
            </div>
          </div>
        </div>
          <!-- end: login and register panel --> 
          
          <!-- Billing Address panel -->
          <div class="panel panel-default">
            <div class="panel-heading opened" data-parent="#checkout-options" data-target="#op2" data-toggle="collapse">
              <h4 class="panel-title"> <a href="#a"> <span class="fa fa-map-marker"></span> SELECT CITY </a><span class="op-number">2</span> </h4>
            </div>
            <div class="panel-collapse collapse" id="op2">
              <div class="panel-body">
                <div class="row co-row">
                  <form>
                    <!-- Login -->
                    <div class="col-md-6 col-xs-12">
                      <div class="box-content form-box">
                        <p>We're currently operational in Jaipur only.</p>

                      </div>
                    </div>
                    
                    <div class="col-md-6 col-xs-12">
                      <div class="box-content form-box">
                        <input type="button" class="btn medium color2 pull-right" onclick="displayConfirmBidPanel()" value="Continue">
                      </div>
                    </div>
                  </form>
                  <!-- end: Register -->
                </div>
              </div>
            </div>
          </div>
          <!-- end: Billing Address panel -->

          <!-- Confirm Order -->
          <div class="panel panel-default"> <!-- add class disabled to prevent from clicking -->
            <div class="panel-heading closed" data-parent="#checkout-options" data-target="#op6" data-toggle="collapse">
              <h4 class="panel-title"> <a href="#a"> <span class="fa fa-check"></span> Confirm Bid </a><span class="op-number">3</span> </h4>
            </div>
            <div class="panel-collapse collapse" id="op6">
              <div class="panel-body">
                <div class="row co-row">
                  <div class="col-md-12 col-xs-12">
                    <div class="box-content form-box">
                      <h4>Please select bid closing date.</h4>

                      <div class="row">
                        <div class="product">
                          <div class="col-md-2 hidden-sm hidden-xs p-wr">
                              <div class="qtyinput">
                                  <div class="quantity-inp">
                                    <input type="date" class="quantity-input" name="bidDate" id="bidDate" value="1">
                                  </div>
                                </div>
                          </div>
                        </div>
                      </div>
                        <label class="checkbox" for="checkbox1">
                            <input type="checkbox" value="" id="change-create-bid" data-toggle="checkbox" class="pull-left" onclick="enableCreateBidButton()">
                            <span class="pull-left">By checking this box I agree to all the <a href="" style="color: #31B167">Terms & Conditions</a> of Print Buddies</span> </label>


                      <button type="button"  class="btn large color1 pull-right" id="create-bid-button" onclick="createBid()">Create Bid</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end: Confirm Order --> 
          
        </div>
      </div>
      <!-- end: Checkout Options --> 
      
    </div>
    <!-- side bar -->
    <div class="col-md-3 col-sm-12 col-xs-12 box-block page-sidebar">
      <div class="box-heading"><span>Summary</span></div>
      <!-- Cart Summary -->
      <div class="box-content cart-box-wr" id="box-content cart-box-wr">

        <div class="cart-box-tm">
          <div class="tm1">Cart Empty  </div>
          <div class="tm2"></div>
        </div>
      </div>
      <div class="clearfix f-space30"></div>
      <!-- Get Updates Box -->
      <div class="box-content">
        <div class="subscribe">
          <div class="heading">
            <h3>Get updates</h3>
          </div>
          <div class="formbox">
            <form>
              <i class="fa fa-envelope fa-fw"></i>
              <input class="form-control" id="InputUserEmail" placeholder="Your e-mail..." type="text">
              <button class="btn color1 normal pull-right" type="submit">Sign
              up</button>
            </form>
          </div>
        </div>
      </div>
      <!-- end: Get Updates Box --> 
      
    </div>
    <!-- end:sidebar --> 
  </div>
  <!-- end:row --> 
</div>
<!-- end: container-->

<div class="row clearfix f-space30"></div>

<!-- Rectangle Banners -->

<div class="container">
  <div class="row">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
      <div class="rec-banner blue">
        <div class="banner"> <i class="fa fa-thumbs-up"></i>
          <h3>Guarantee</h3>
          <p>100% Money Back Guarantee*</p>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
      <div class="rec-banner red">
        <div class="banner"> <i class="fa fa-tags"></i>
          <h3>Affordable</h3>
          <p>Convenient & affordable prices for you</p>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
      <div class="rec-banner orange">
        <div class="banner"> <i class="fa fa-headphones"></i>
          <h3>24/7 Support</h3>
          <p>We support everything we sell</p>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
      <div class="rec-banner lightblue">
        <div class="banner"> <i class="fa fa-female"></i>
          <h3>Summer Sale</h3>
          <p>Upto 50% off on all women wear</p>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
      <div class="rec-banner darkblue">
        <div class="banner"> <i class="fa fa-gift"></i>
          <h3>Surprise Gift</h3>
          <p>Value $50 on orders over $700</p>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
      <div class="rec-banner black">
        <div class="banner"> <i class="fa fa-truck"></i>
          <h3>Free Shipping</h3>
          <p>All over in world over $100</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end: Rectangle Banners -->

<div class="row clearfix f-space30"></div>
<!-- footer -->
<?php include_once('footer.php') ?>
<!-- end: footer -->


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
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
<title>Flatro - Online Shop Template</title>

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

<!-- Custom styles for this template -->
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

</head>



<body>
<!-- Header -->
<?php
include('header.php');

?>
<!-- end: Header -->


<div class="row clearfix f-space10"></div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="page-title">
        <h2>About us</h2>
      </div>
    </div>
  </div>
</div>
<div class="row clearfix f-space10"></div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="about-company-container">
        <div class="row">
          <div class="col-lg-6 col-md-5 col-sm-12 about-image"><img src="images/aboutus.jpg" alt="about company"></div>
          <div class="col-lg-6 col-md-7 col-sm-12 about-company">
            <h2>The company</h2>
            <h4>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</h4>
            <p> Donec rutrum congue leo eget malesuada. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere blandit. Curabitur aliquet quam id dui posuere blandit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta dapibus. Nulla porttitor accumsan tincidu.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row clearfix f-space30"></div>
<!-- shop features -->
<div class="container">
  <div class="row">
    <div class="col-md-3"> 
      <!-- feature box -->
      <div class=" feature-box">
        <div class="feature-title"><i class="fa fa-briefcase circle-icon"></i>
          <h4>Support</h4>
        </div>
        <p> We provide quality <strong>support</strong>, evolve quality outsourcing and professional that strategic theme areas. We synergistically strategize worldwide with functionalities. </p>
      </div>
    </div>
    <!-- end: feature box --> 
    <!-- feature box -->
    <div class="col-md-3">
      <div class=" feature-box">
        <div class="feature-title"><i class="fa fa-star circle-icon"></i>
          <h4>Product Reviews</h4>
        </div>
        <p> A lot of good <strong>product reviews</strong>,  evolve quality outsourcing and professional that strategic theme areas. We synergistically strategize worldwide with functionalities. </p>
      </div>
    </div>
    <!-- end: feature box --> 
    <!-- feature box -->
    
    <div class="col-md-3">
      <div class=" feature-box">
        <div class="feature-title"><i class="fa fa-user circle-icon"></i>
          <h4>Guest Checkout</h4>
        </div>
        <p> You can checkout without,  evolve quality outsourcing and professional that strategic theme areas. We synergistically strategize worldwide with functionalities. </p>
      </div>
    </div>
    <!-- end: feature box --> 
    <!-- feature box -->
    <div class="col-md-3">
      <div class=" feature-box">
        <div class="feature-title"><i class="fa fa-rocket circle-icon"></i>
          <h4>Fast Delivery</h4>
        </div>
        <p> We deliver very fast,  evolve quality <em>outsourcing and professional</em> that strategic theme areas. We synergistically strategize worldwide with functionalities. </p>
      </div>
    </div>
  </div>
</div>
<!-- end: shop features -->
<div class="row clearfix f-space30"></div>
<!-- big unit -->

<!-- end: big unit -->
<div class="row clearfix f-space30"></div>

<!-- footer -->
<?php
include('footer.php');

?>

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
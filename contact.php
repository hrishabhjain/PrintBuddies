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

<title>Contact Us | Print Buddies </title>

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

<div class="row clearfix"></div>

<div class="row clearfix f-space10"></div>
<!-- Page title -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="page-title">
        <h2>Get in touch</h2>
      </div>
    </div>
  </div>
</div>
<!-- end: Page title -->
<div class="container"> 
  <!-- row -->
  <div class="row">
    <div class="col-md-9 col-sm-12 col-xs-12 main-column box-block">

      <div class="contactform">

        <form>
          <div class="row">
            <div class="col-md-5">
              <input class="input4" id="name" value="" placeholder="Name*" data-validation="required">
              <input class="input4" id="email" value="" placeholder="Email*" data-validation="email">
              <input class="input4" id="subject" value="" placeholder="Subject">
            </div>
            <div class="col-md-7">
              <textarea class="input4" name="message" id="message" rows="8" cols="60" placeholder="Message" data-validation="required"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <button class="btn large color2 pull-right" type="submit">Send now</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    
    <!-- side bar -->
    <div class="col-md-3 col-sm-12 col-xs-12 box-block page-sidebar">
      <!-- Contact Details -->
      <div class="box-content contactdetails-box-wr">
        <div class="contactdetails-box"> <span class="icon"><i class="fa fa-map-marker fa-fw"></i></span>
          <div class="details">
            <h1>Print Buddies</h1>
            Basement, 19/1 Chopasini<br/>
            Housing Board, Jodhpur, <br/>
            Rajasthan, India - 342001</div>
        </div>
        <div class="contactdetails-box"> <span class="icon"><i class="fa fa-phone fa-fw"></i></span> <span class="details">Phone: +91-94608-62-343 <br/>
             +91-99501-81-851</span> </div>
        <div class="contactdetails-box"> <span class="icon"><i class="fa fa-envelope fa-fw"></i></span> <span class="details">Email: support@printbuddies.com <br/>
          <br>Website: <a href="http://www.printbuddies.com" style="color: #31B167">www.printbuddies.com</a></span> </div>
      </div>
      
      <!-- end: Contact Details -->
      
      <div class="clearfix f-space30"></div>

    </div>
    <!-- end:sidebar --> 
  </div>
  <!-- end:row --> 
</div>
<!-- end: container-->

<div class="row clearfix f-space30"></div>
<!-- footer -->
<?php
include('footer.php');
?>
<!-- end: footer --> 



<script>

(function($) {
  "use strict";
 $('#menuMega').menu3d();
 //Google Maps Configuration
			var lat="33.71815";
			var lon="73.06055";
			$('#map').gmap3({
			map:{
			options:{
			 center: [lat, lon],
			 zoom: 14
			}
			},
			marker:{
			latLng: [lat, lon]
			}
			});
			
			 //Help/Contact Number/Quick Message
			$('.quickbox').carousel({
				interval: 10000
			});
			
			//Best Sellers
			$('#productc4').carousel({
				interval: 4000
			});           
				
})(jQuery);


          
        </script>
	
	
	
</body>
</html>
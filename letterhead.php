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
<meta content="Print Buddiesshop online shopping point" name="description">
<meta content="logoby.us" name="author">
<link href="images/favicon.png" rel="shortcut icon">
<title>Letterhead</title>

    <?php include_once('include_header_products.php');?>
</head>

<body  onload=getProductInfo("Letterhead");>
<!-- Header -->
<script id="handlebar-info" type="text/x-handlebars-template">
    <div class="post " data-update-id="{{Category}}" id="{{Category}}-attribute" >
        <label>{{Category}}</label>
    </div>
</script>
<?php
include('header.php');

?>
<!-- end: Header -->

<div class="row clearfix"></div>

<div class="row clearfix f-space10"></div>
<div class="container">
    <div class="row">
    
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-md-8 blog-block">

                    <!-- Blog widget Box -->
                    <div class="box-content slide carousel-fade" id="blogslide">
                        <div class="carousel-inner">
                            <!-- Post -->
                            <!-- Post -->
                            <div class="blog-entry item active">
                                <div class="image">
                   <img class="ani-image" src="images/letterhead.jpg" alt=""> </div>

                            </div>
                            <!--END Post -->

                        </div>
                    </div>
                    <!-- end: Blog widget Box -->
                    <div class="f-space10"></div>
                </div>


                <ul class="nav nav-tabs blog-tabs nav-justified">
                    <li class="active"><a href="#details-info" data-toggle="tab"><i class="fa  fa-th-list fa-fw"></i> Tips & Ideas</a></li>
                    <li><a href="#reviews" data-toggle="tab"><i class="fa fa-comments fa-fw"></i> Paper Choices</a></li>
                    <li> <a href="#tags" data-toggle="tab"><i class="fa fa-tags fa-fw"></i> Folding & Options</a> </li>
              <!--      <li><a href="#custom-tab" data-toggle="tab"><i class="fa fa-video-camera fa-fw"></i> Custom Tab</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="details-info">
                        <p>As the old saying goes, you never get a second chance to make a first impression. Thus, the quality, thought and attention to detail that you've put into building your brand should be reflected in every detail of your company, including your letterhead. </p>
                      
                    </div>
                     <div class="tab-pane" id="reviews">
                       
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                            <tr><td>Standard 70 lb. White Paper</td><td>
Our standard 70 lb. white paper is a high-grade, elegant stationery paper with a white wove finish. It is also compatible with laser and ink jet printers. </td></tr> <tr><td>Premium 24 lb. Ultra White Paper</td><td>Our premium 24 lb. smooth paper is a premium and professional-grade stationery paper with a smooth finish. It is also compatible with laser and ink jet printers. </td></tr> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="tags">
       <p>
Give your letterhead a special touch with our custom printing services, including:</p><p>
Folding and scoring</p><p>
Color printing on both sides</p><p>
Foil stamping</p>
</div>
                   <div class="tab-pane" id="custom-tab">
                        <p>Phosfluorescently productize technically sound process improvements for customized bandwidth. Competently coordinate leveraged catalysts for change without multimedia based services. Objectively fabricate user-centric experiences before.</p>
                        <div class="video-wrapper">
                            <div class="video-container">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/keDneypw3HY" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <!-- /video -->
                        </div>
                        <!-- /video-wrapper -->
                    </div>
                </div>

            </div>

            <!-- end: Brands -->
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 box-block sidebar">
            <div class="box-heading"><span>Letterhead</span></div>
            <div class="box-content">
                <div id="productInfo" class="productInfo">

                </div>
                <div class="box-products slide carousel-fade" id="productc2">


                </div>
            </div>
            <div class="clearfix f-space30"></div>
        </div>
    </div>
</div>

<!-- container -->
<!-- Relate Products -->
<div class="clearfix f-space30"></div>

<!-- end: Related products -->


<!-- Rectangle Banners -->
<?php include('features.php');?>
<!-- end: Rectangle Banners -->

<div class="row clearfix f-space30"></div>

<!-- footer -->
<?php
include('footer.php');
?>
<script src="js/jquery.elevatezoom.js" type="text/javascript"></script> 
<script>

(function($) {
  "use strict";
  //Mega Menu
 $('#menuMega').menu3d();
             
              //Help/Contact Number/Quick Message
			$('.quickbox').carousel({
				interval: 10000
			});
			
			//SPECIALS
			$('#productc2').carousel({
				interval: 4000
			}); 
			//RELATED PRODUCTS
			$('#productc3').carousel({
				interval: 4000
			}); 
			
			//Zoom Product
			$("#product-image").elevateZoom({
												  zoomType : "inner",
												  cursor : "crosshair",
												  easing: true,
												   gallery: "thumbs",
												   galleryActiveClass: "active",
												  loadingIcon : true
												});	
			$("#product-image").bind("click", function(e) {  
  var ez =   $('#product-image').data('elevateZoom');
  ez.closeAll(); //NEW: This function force hides the lens, tint and window	
	//$.fancybox(ez.getGalleryList());     
  return false;
});
})(jQuery);

 </script>

</body>
</html>
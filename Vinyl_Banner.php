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
<meta content="Print Buddiesshop online printing and bidding" name="description">
<meta content="Print Buddies" name="author">
<link href="images/favicon.png" rel="shortcut icon">
<title>Vinyl Banner</title>

    <?php include_once('include_header_products.php');?>
</head>

<body  onload=getProductInfo("Vinyl_Banner");>
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
wa<div class="row clearfix f-space10"></div>
<div class="container">
    <div class="row">
    
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-md-8 blog-block">

                    <!-- Blog widget Box -->
                    <div class="box-content slide carousel-fade" id="blogslide">
                        <div class="carousel-inner">
                            <!-- Post -->


                            <div class="blog-entry item active">
                                <div class="image"> <span class="blogico"> <i class="fa fa-bullhorn fa-fw"></i><br>
                  Blog entry</span> <img class="ani-image" src="images/products/vinyl%20banner.jpg" alt=""> </div>

                            </div>
                            <!--END Post -->
                            <!-- Post -->

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
                        <p>Big banners offer big opportunities for unique and eye-catching Vinyl banner design.</p>
                      
                    </div>
                     <div class="tab-pane" id="reviews">
                       
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                            
<tr><td>13 oz. White Matte Vinyl Material</td><td>
Our 13 oz. white matte vinyl material is a high-grade, flexible banner material with a matte, front-lit finish. This treated smooth surface has high durability and puncture resistance.
                       </td></tr><tr><td>9 oz. White Mesh Vinyl Material</td><td>
Our 9 oz. white mesh vinyl material is a top-quality, flexible banner material with a mesh finish. This treated fabric has small holes that provide excellent wind resistance and allow people to see out from the back.       </td></tr><tr><td>15 oz. Biodegradable Vinyl Material</td><td>
Our 15 oz. biodegradable vinyl material is an excellent choice for those seeking an eco-friendly replacement for standard vinyl banner material. Just as strong and durable as our standard 13 oz. vinyl, this substrate has the added benefit of being biodegradable. Under normal landfill conditions, this material breaks down in three to five years and is made with no toxic chemicals. It is tear, fade and fungus resistant.                  </td></tr>
                       </td></tr> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="tags">
       <p>

Fade-Resistant & Eco-Friendly Banner Inks </p><p>
Our high-quality, fade-resistant inks stay bright and colorful:</p><p>
Scratch resistant</p></p>
High image quality</p><p>
Eco-friendly </p>
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
            <div class="box-heading"><span>Vinyl Banner</span></div>
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

<div class="row clearfix f-space30"></div>

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
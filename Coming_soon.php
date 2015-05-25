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

    <title>Coming Soon</title>

    <?php include_once('include_header_products.php');?>
</head>

<body>

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
                            <div class="blog-entry item active">
                                <div class="image"> <img class="ani-image" src="images/products/page-under-construction.png" alt=""> </div>

                            </div>
                            <!--END Post -->

                        </div>
                    </div>
                    <!-- end: Blog widget Box -->
                    <div class="f-space10"></div>
                </div>



            <!-- end: Brands -->
        </div>
    </div>
</div>

<!-- container -->
<!-- Relate Products -->
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
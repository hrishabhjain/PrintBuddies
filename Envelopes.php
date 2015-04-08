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

    <title>Envelopes | Print Buddies</title>

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
    <link rel="stylesheet" href="css/drop-down.css" type="text/css"/>
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
    <script src="js/select-widget.js"></script>
    <!-- MegaMenu -->
    <script src="js/menu3d.js" type="text/javascript"></script>

    <!-- iView Slider -->
    <script src="js/raphael-min.js" type="text/javascript"></script>
    <script src="js/jquery.easing.js" type="text/javascript"></script>
    <script src="js/iview.js" type="text/javascript"></script>
    <script src="js/retina-1.1.0.min.js" type="text/javascript"></script>

    <script src="js/jquery.min.js"></script>
    <!--Drpodown--
<script type="text/javascript" src="js/select-widget-min.js"></script>
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
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-title">
                <h2>Envelopes</h2>
            </div>
        </div>
    </div>
</div>

<!-- container -->
<!-- Relate Products -->
<div class="clearfix f-space10"></div>

<!-- end: Related products -->

<div class="row clearfix f-space30"></div>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column box-block">

            <div class="box-content">
                <div class="box-products slide" id="productc3">
                    <div class="carousel-inner" >
                        <!-- Items Row -->
                        <div class="item active" style="margin-right: 1% ;margin-left: 10% ;">
                            <div class="row box-product">
                                <!-- Product -->
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="product-block">
                                        <div class="image">
                                            <a class="img" href="Standard_Envelopes.php"><img alt="Standard Envelopes" src="images/products/StandardEnvelope.jpg" title="Standard Envelopes"></a>
                                        </div>
                                        <div class="product-meta">
                                            <div class="name"><a href="Standard_Envelopes.php">Standard Envelope</a></div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end: Product -->
                                <!-- Product -->
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="product-block">
                                        <div class="image"> <a class="img" href="Window_Envelopes.php"><img alt="Window Envelopes" src="images/products/WindowEnvelopes.jpg" title="Window Envelopes"></a> </div>
                                        <div class="product-meta">
                                            <div class="name"><a href="Window_Envelopes.php">Window Envelope</a></div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end: Product -->

                            </div>
                        </div>
                        <!-- end: Items Row -->
                        <!-- Items Row -->

                        <!-- end: Items Row -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix f-space30"></div>
<div class="row clearfix f-space30"></div>
<!-- Rectangle Banners -->
<?php include('features.php'); ?>
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
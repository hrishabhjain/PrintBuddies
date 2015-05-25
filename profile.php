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
    <title>Print Buddies </title>

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
    <link href="css/reveal.css" id="colorstyle" rel="stylesheet">
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
    <script src="js/profile.js"></script>
    <script src="js/jquery.reveal.js"></script>

</head>




<body onload="getActiveBid()">

<!-- Header -->
<?php include_once('header.php')?>
<?php
if(!(isset($_SESSION['email']))){
    echo '<script>window.location.href="user_login.php"</script>';
}
?>
<!-- end: Header -->

<script id="handlebar-info-1" type="text/x-handlebars-">

        <div class="row">
            <div class="product">
                <div class="col-md-3 col-sm-7 col-xs-9 p-wr">
                    <div class="product-attrb-wr">
                        <div class="product-meta">
                            <div class="name">
                                <h3><a href="product.html"  >Bid ID : PB_{{_id}}</a></h3>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-25 hidden-sm hidden-xs p-wr"><div class="product-attrb-wr"><div class="product-attrb">
</script>
<script id="handlebar-info-3" type="text/x-handlebars-">

                    <div class="att"> <span>{{_id}} : </span> <span class="size">{{Quantity}} : </span><span class="size">{{Date}}</span></div>

</script>

<script id="handlebar-info-2" type="text/x-handlebars-">
                </div>
            </div>
        </div>
                <div class="col-md-2 hidden-sm hidden-xs p-wr">
                    <div class="product-attrb-wr">
                        <div class="product-attrb">
                            <div class="qtyinput">
                                <div class="quantity-inp" id="inp-{{_id}}">
                                   <a href="#" id="{{_id}}" style="color:#31B167">Min Bid </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 hidden-sm hidden-xs p-wr">
                    <div class="product-attrb-wr">
                        <div class="product-attrb">
                            {{#if date}}
                                <div class="price"> <span class="t-price"><span class="sym"></span>{{date}}</span> </div>
                            {{else}}
                                <div class="price"> <span class="t-price"><span class="sym"></span><input type="date" class="quantity-input" name="p_quantity"></span> </div>
                            {{/if}}
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-sm-2 col-xs-3 p-wr">
                    <div class="product-attrb-wr">
                        <div class="product-attrb">
                            {{#if date}}
                                <a href="#" style="color:#31B167" class="big-link" data-reveal-id="myModal" data-animation="fade" onclick="getCompleteBid('{{_id}}')">Click here</a>
                            {{else}}
                                <a href="#" style="color:#31B167" class="big-link" data-reveal-id="myModal" data-animation="fade" onclick="redirectToCart('{{_id}}')">Post Bid</a>
                            {{/if}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="clearfix f-space10"></div>
</script>
<script id="handlebar-info-4" type="text/x-handlebars-">
    <div class="container">
        <div class="row">
            <div class="product">
                <div class="col-md-3 col-sm-7 col-xs-9 p-wr">
                    <div class="product-attrb-wr">
                        <div class="product-meta">
                            <div class="name">
                                <h3><a href="product.html">{{Item}}</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
</script>
<script id="handlebar-info-5" type="text/x-handlebars-">
                <div class="col-md-2 hidden-sm hidden-xs p-wr">
                    <div class="product-attrb-wr">
                        <div class="product-attrb">
                            <div class="qtyinput">
                                <div class="quantity-inp">
                                    <input type="text" class="quantity-input" name="p_quantity" value="{{Quantity}}" readonly><br><br>
                                    <div class="price"> <span class="t-price"><span class="sym"></span>{{Date}}</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 hidden-sm hidden-xs p-wr">
                    <div class="product-attrb-wr">
                        <div class="product-attrb">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</script>
<script id="handlebar-info-6" type="text/x-handlebars-">

                <div class="cart-box-tm">
                    <div class="tm1" style="background-color:#fff">Rs.{{Price}}</div>
                    <div class="tm2" style="background-color:#fff">{{OnTime}}</div>
                </div>

</script>


<div class="row clearfix f-space10"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-title" id="first_name">


            </div>
        </div>
    </div>
</div>
<div class="row clearfix f-space10"></div>
<div class="container">
    <div class="row">

        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-md-8 blog-block">

                </div>
                <ul class="nav nav-tabs blog-tabs nav-justified">
                    <li class="active"><a href="#details-info" data-toggle="tab"><i class="fa  fa-th-list fa-fw"></i> Active Bids</a></li>
                    <li><a href="#reviews" data-toggle="tab"><i class="fa fa-tags fa-fw" ></i> Incomplete Bids</a></li>
                    <li> <a href="#tags" data-toggle="tab"><i class="fa fa fa-thumbs-up"></i> Completed Bids</a> </li>
                    <li><a href="#custom-tab" data-toggle="tab"><i class="fa fa-user fa-fw"></i> Personal Info</a></li>

                      <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="details-info">
                            <h3>No Bids</h3>
                        </div>
                        <div class="tab-pane" id="reviews">

                            <div class="table-responsive">
                                <table class="table table-striped">

                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="tags">

                        </div>
                        <div class="tab-pane" id="custom-tab">
                            <p></p>
                            <div class="video-wrapper">
                                <div class="video-container">
                                </div>
                                <!-- /video -->
                            </div>
                            <!-- /video-wrapper -->
                        </div>
                    </div>

            </div>

            <!-- end: Brands -->
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

                <div class="clearfix f-space30"></div>
            </div>
        </div>

        <!-- end: Total amount -->

    </div>
</div>
<div class="clearfix f-space30"></div>
<!-- Rectangle Banners -->
<div class="row clearfix f-space30"></div>
<div id="myModal" class="reveal-modal" style="position: fixed; top: 135px">
</div>
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
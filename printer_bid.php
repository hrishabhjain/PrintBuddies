<?php




?>

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
    <title>Print Buddies - Online Shop </title>

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

    <!--[if IE 8]>
    <script type="text/javascript" src="js/selectivizr.js"></script>
    <![endif]-->
    <script src="js/common.js"></script>
    <script src="js/handlebars-v2.0.0.js"></script>
    <script src="js/printer_bid.js"></script>
    <script src="js/jquery.reveal.js"></script>

</head>




<body onload="getExistingBid();">
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
                                <h3><a href="product.html"  >Bid ID : PB_{{_id}}</a></h3>
                            </div>
                            <br><a href="#a" class="btn normal color2" onclick="getCompleteBid('{{_id}}')">Bid</a> </div>
                    </div>
                </div>
                <div class="col-md-25 hidden-sm hidden-xs p-wr"><div class="product-attrb-wr"><div class="product-attrb">
</script>
<script id="handlebar-info-3" type="text/x-handlebars-">

                    <div class="att"> <span>{{_id}} : </span> <span class="size">{{Quantity}} : </span><span class="size">{{Date}}</span> </div>

</script>

<script id="handlebar-info-2" type="text/x-handlebars-">
                </div>
            </div>
        </div>
                <div class="col-md-2 hidden-sm hidden-xs p-wr">
                    <div class="product-attrb-wr">
                        <div class="product-attrb">
                            <div class="qtyinput">
                                <div class="quantity-inp">
                                    <label>Min-Bid : </label><input type="text" class="quantity-input" name="p_quantity" value="Rs. " id="{{_id}}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 hidden-sm hidden-xs p-wr">
                    <div class="product-attrb-wr">
                        <div class="product-attrb">
                            <div class="price"> <span class="t-price"><span class="sym"></span>{{date}}</span> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-sm-2 col-xs-3 p-wr">
                    <div class="product-attrb-wr">
                        <div class="product-attrb">
                            <a href="#" style="color:#31B167" class="big-link" data-reveal-id="myModal" data-animation="fade" onclick="getCompleteBid('{{_id}}')">Click here</a>                        </div>
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
<script id="handlebar-info-7" type="text/x-handlebars-">

                <div class="cart-box-tm">
                    <div class="tm1" style="background-color:#fff">Your Bid &nbsp; &nbsp; Rs.</div>
                    <div class="tm2" style="background-color:#fff"><input type="text" name="price" id="price"  style="border: 1px #aaaaaa solid ; height: 35px" value=""></div>
                </div>
                <div class="cart-box-tm">
                    <div class="tm1" style="background-color:#fff ; margin-top: 5px"><label class="checkbox" for="checkbox1">On time Delivery <input type="checkbox"  id="Ontime"></label></div>
                    <div class="tm2" style="background-color:#fff;"> <a href="#a" class="btn normal color2" onclick="postBid()">Bid</a></div>
                </div>




</script>
<script id="handlebar-info-8" type="text/x-handlebars-">

                <div class="cart-box-tm">
                    <div class="tm1" style="background-color:#77E9A7">Rs.{{Price}}</div>
                    <div class="tm2" style="background-color:#77E9A7">{{OnTime}}</div>
                </div>

</script>

<div class="row clearfix f-space10"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-title">
                <h2>Existing Bids</h2>
            </div>
        </div>
    </div>
</div>
<div id="myModal" class="reveal-modal" style="position: fixed; top: 135px">
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
<?php include_once('footer.php')?>
<!-- end: footer -->
<!-- Style Switcher JS -->
<script src="js/style-switch.js" type="text/javascript"></script>
<section id="style-switch" class="bgcolor3">
    <h2>Style Switch <a href="#" class="btn color2"><i class="fa fa-cog "></i></a></h2>
    <div class="inner">
        <h3>Predefined Styles</h3>
        <ul class="colors list-unstyled" id="color1">
            <li><a href="#" class="blue-red" data-toggle="tooltip" title="Blue Red" > <i class="fa fa-cog fa-stop one"></i><i class="fa fa-cog fa-stop two"></i></a></li>
            <li><a href="#" class="midnight-blue" data-toggle="tooltip" title="Midnight Blue" > <i class="fa fa-cog fa-stop one"></i><i class="fa fa-cog fa-stop two"></i></a></li>
            <li><a href="#" class="mono-red" data-toggle="tooltip" title="Mono Red" > <i class="fa fa-cog fa-stop one"></i><i class="fa fa-cog fa-stop two"></i></a></li>
            <li><a href="#" class="pinegreen-purple" data-toggle="tooltip" title="PineGreen Purple" > <i class="fa fa-cog fa-stop one"></i><i class="fa fa-cog fa-stop two"></i></a></li>
            <li><a href="#" class="darkmagenta-rosybrown" data-toggle="tooltip" title="DarkMagenta RosyBrown" > <i class="fa fa-cog fa-stop one"></i><i class="fa fa-cog fa-stop two"></i></a></li>
            <li><a href="#" class="darkorchid-seagreen" data-toggle="tooltip" title="DarkOrchid SeaGreen" > <i class="fa fa-cog fa-stop one"></i><i class="fa fa-cog fa-stop two"></i></a></li>
            <li><a href="#" class="steel-blue" data-toggle="tooltip" title="Steel Blue" > <i class="fa fa-cog fa-stop one"></i><i class="fa fa-cog fa-stop two"></i></a></li>
            <li><a href="#" class="cadetblue-violetred" data-toggle="tooltip" title="CadetBlue VioletRed" > <i class="fa fa-cog fa-stop one"></i><i class="fa fa-cog fa-stop two"></i></a></li>
            <li><a href="#" class="mediumpurple-seagreen" data-toggle="tooltip" title="MediumPurple SeaGreen" > <i class="fa fa-cog fa-stop one"></i><i class="fa fa-cog fa-stop two"></i></a></li>
            <li><a href="#" class="steelblue-leafgreen" data-toggle="tooltip" title="SteelBlue LeafGreen" > <i class="fa fa-cog fa-stop one"></i><i class="fa fa-cog fa-stop two"></i></a></li>
            <li><a href="#" class="orange-steelblue" data-toggle="tooltip" title="Orange SteelBlue" > <i class="fa fa-cog fa-stop one"></i><i class="fa fa-cog fa-stop two"></i></a></li>
            <li><a href="#" class="gray" data-toggle="tooltip" title="Gray" > <i class="fa fa-cog fa-stop one"></i><i class="fa fa-cog fa-stop two"></i></a></li>
        </ul>
    </div>
    <div id="reset" class="inner"><a href="#" class="btn normal color2 ">Reset</a></div>
</section>

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
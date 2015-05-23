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
    <meta content="Print Buddies online printing services" name="description">
    <meta content="Print Buddies" name="author">
    <link href="images/favicon.png" rel="shortcut icon">
    <title>Print Buddies  </title>

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
    <script type="text/javascript" src="js/login.js"></script>

</head>


<body onload="summary()">
<!-- Header -->
<?php

include_once('header.php');

use Facebook\HttpClients\FacebookHttpable;
use Facebook\HttpClients\FacebookCurl;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookOtherException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphSessionInfo;
use Facebook\GraphUser;
// init app with app id (APPID) and secret (SECRET)
FacebookSession::setDefaultApplication('798700396886902','44d8b401d56647f7be781f77d159ecd5');
$helper = new FacebookRedirectLoginHelper( 'http://in.printbuddies.com/profile.php' );

try {
    $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
    // When Facebook returns an error
} catch( Exception $ex ) {
    // When validation fails or other local issues
}
if( !(isset($_SESSION['BidId'])))
{
    echo '<script>alert("Cart Empty")</script>';
    //echo '<script>window.location.href="cart.php"</script>';
}
if(isset($_SESSION['email']))
    echo '<script>window.location.href="checkout.php"</script>';

if ( isset( $session ) ) {
    // graph api request for user data
    $request = new FacebookRequest( $session, 'GET', '/me' );
    $response = $request->execute();
    // get response
    $graphObject = $response->getGraphObject(GraphUser::className());
}


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
                    <div class="panel panel-default">
                        <div class="panel-heading opened" data-parent="#checkout-options" data-target="#op1" data-toggle="collapse">
                            <h4 class="panel-title"> <a href="#a"> <span class="fa fa-cogs"></span> LOGIN </a><span class="op-number">1</span> </h4>
                        </div>
                        <div class="panel-collapse collapse in" id="op1">
                            <div class="panel-body">
                                <div class="row co-row">

                                    <!-- Login -->
                                    <div class="col-md-6 col-xs-12">
                                        <div class="box-content login-box">
                                            <h4>Customers with a existing account.</h4>
                                            <form action="loginbl.php" method="post">
                                                <input type="text" value="" name="email" placeholder="Email" class="input4">
                                                <input type="password" value="" name="password" placeholder="Password" class="input4">
                                                <input type="text" name="redirect" value="checkout.php" class="input4"hidden="hidden">
                                                <label class="checkbox" for="checkbox1">
                                                    <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox" class="pull-left">
                                                    <span class="pull-left">Remember me</span> </label>
                                                <button class="btn medium color2 pull-right">Login</button>
                                                <p class="fp-link pull-right"><a href="#a" class="color2">Forgot your password?</a></p>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- end: Login -->
                                    <!-- Register -->

                                    <div class="col-md-6 col-xs-12">
                                        <div class="box-content register-box">
                                            <br><br><br><br>
                                            <?php echo '<a href="' . $helper->getLoginUrl(array('scope'=>'public_profile,email')).'"><img src="images/Facebook.jpg" style="width: 75%"></a>'; ?>
                                        </div>
                                    </div>

                                    <!-- end: Register -->

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- end: login and register panel -->
                <div class="disabled">
                    <!-- Billing Address panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading closed" data-parent="#checkout-options" data-target="#op2" data-toggle="collapse">
                            <h4 class="panel-title"> <a href="#a"> <span class="fa fa-map-marker"></span> SELECT CITY </a><span class="op-number">2</span> </h4>
                        </div>

                    </div>
                </div>
                    <!-- end: Billing Address panel -->
                <div class="disabled">
                    <!-- Confirm Order -->
                    <div class="panel panel-default"> <!-- add class disabled to prevent from clicking -->
                        <div class="panel-heading closed" data-parent="#checkout-options" data-target="#op6" data-toggle="collapse">
                            <h4 class="panel-title"> <a href="#a"> <span class="fa fa-check"></span> Confirm Bid </a><span class="op-number">3</span> </h4>
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
<?php include('features.php');?>
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
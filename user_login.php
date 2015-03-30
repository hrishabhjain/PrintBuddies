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
    <link href="images/favicon.png" rel="shortcut icon">
    <title>Login | Print Buddies  </title>

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
                <h2>Login <span></span></h2>
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
                            <h4 class="panel-title"> <a href="#a"> <span class="fa fa-cogs"></span>SIGNUP / LOGIN </a><span class="op-number">1</span> </h4>
                        </div>
                        <div class="panel-collapse collapse in" id="op1">
                            <div class="panel-body">
                                <div class="row co-row">

                                    <!-- Login -->
                                    <div class="col-md-6 col-xs-12">
                                        <div class="box-content login-box">
                                            <h4>Create an Account.</h4>
                                            <form>
                                                <input type="text" value="" placeholder="Email" class="input4">
                                                <input type="text" value="" placeholder="First Name" class="input4">
                                                <input type="text" value="" placeholder="Last Name" class="input4">
                                                <input type="text" value="" placeholder="Phone" class="input4">
                                                <input type="password" value="" placeholder="Password" class="input4">
                                                <input type="password" value="" placeholder="Re type Password" class="input4">
                                                <label class="checkbox" for="checkbox1">
                                                </label>
                                                <button class="btn medium color2 pull-right">Sign Up</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- end: Login -->
                                    <!-- Register -->

                                    <div class="col-md-6 col-xs-12">
                                        <div class="box-content register-box">
                                            <h4>Customers with a existing account.</h4>
                                            <form>
                                                <input type="text" value="" placeholder="Email" class="input4">
                                                <input type="text" value="" placeholder="Password" class="input4">
                                                <label class="checkbox" for="checkbox1">
                                                </label>
                                                <button class="btn medium color2 pull-right">Sign in</button>
                                                <p class="fp-link pull-right"><a href="#a" class="color2">Forgot your password?</a></p>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- end: Register -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: Checkout Options -->

        </div>
        <!-- side bar -->
        <div class="col-md-3 col-sm-12 col-xs-12 box-block page-sidebar">
            <div class="box-heading"><span>Social </span></div>
            <!-- Cart Summary -->
            <div class="box-content cart-box-wr" id="box-content cart-box-wr">

                <div class="cart-box-tm">
                    <br><br><br><br>
                    <?php echo '<a href="' . $helper->getLoginUrl(array('scope'=>'public_profile,email')).'"><img src="images/Facebook.jpg" style="width: 100%"></a>'; ?>

                </div>
            </div>
            <div class="clearfix f-space30"></div>
            <!-- Get Updates Box -->

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

<!-- Style Switcher JS -->

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
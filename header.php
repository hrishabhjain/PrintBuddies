<?php

session_start();
include_once('analyticstracking.php');
if(isset($_SESSION['printer_username']))
    $printer_username=$_SESSION['printer_username'];
require_once("autoload.php");
require_once( 'Facebook/FacebookSession.php' );
require_once( 'Facebook/FacebookRedirectLoginHelper.php' );
require_once( 'Facebook/FacebookRequest.php' );
require_once( 'Facebook/FacebookResponse.php' );
require_once( 'Facebook/FacebookSDKException.php' );
require_once( 'Facebook/FacebookRequestException.php' );
require_once( 'Facebook/FacebookAuthorizationException.php' );
require_once( 'Facebook/GraphObject.php' );
require_once( 'Facebook/GraphUser.php' );
require_once('Facebook/Entities/AccessToken.php');
require_once( 'Facebook/HttpClients/FacebookHttpable.php' );
require_once( 'Facebook/HttpClients/FacebookCurl.php' );
require_once( 'Facebook/HttpClients/FacebookCurlHttpClient.php' );
require_once('Bid.php');
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

    $request = new FacebookRequest( $session, 'GET', '/me' );
    $response = $request->execute();
    $graphObject = $response->getGraphObject(GraphUser::className());
    $_SESSION['first_name']=$graphObject->getFirstName();
    $email=$_SESSION['email']=$graphObject->getEmail();

    if(isset($_SESSION['BidId']))
    {
        $bid=new Bid();
        $bid_id=$_SESSION['BidId'];
        $bid->setEmailForBid($bid_id,$email);
        header('Location: checkout.php');
    }else
        header('Location: profile.php');
}
?>

<header>
<!-- Top Heading Bar -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="topheadrow">
                <ul class="nav nav-pills pull-right">
                    <li> <a href="#a">  <span class="hidden-xs">We're hiring! </span></a> </li>
                    <li> <a href="#a">  <i class="fa fa-phone fa-fw"></i><span class="hidden-xs">+91-94608-62-343 </span></a> </li>

                        <?php
                        if(isset($_SESSION['email']))
                        {
                            $name=$_SESSION['first_name'];
                            echo '<li class="dropdown"> <a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#a"> <i class="fa fa-user fa-fw"></i> <span class="hidden-xs">'.$name.' </span></a><div class="loginbox dropdown-menu" > <ul style="cursor:pointer"><li onclick="window.location.href=\'profile.php\'">Bids</li><li onclick="window.location.href=\'profile.php\'">Profile</li><li onclick="window.location.href=\'logout.php\'">Logout</li><li></li></ul> </div>';
                        }else{
                            echo '<li class="dropdown" onclick="window.location.href=\'user_login.php\'"> <a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#a"> <i class="fa fa-user fa-fw"></i> <span class="hidden-xs"> Login</span></a>';

                         }?>

                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end: Top Heading Bar -->

<div class="f-space20"></div>
<!-- Logo and Search -->
<div class="container">
    <div class="row clearfix">
        <div class="col-lg-3 col-xs-12">
            <div class="logo"> <a href="index.php" title="Print Buddies"><img style="width: 120px; height: 52px" alt="Print Buddies" src="images/printbuddies.png"></a></div>
        </div>
        <!-- end: logo -->
        <div class="visible-xs f-space20"></div>
        <!-- search -->
        <!-- end: search -->

    </div>
</div>
<!-- end: Logo and Search -->
<div class="f-space20"></div>
<!-- Menu -->
<div class="container">
    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 menu-col">
            <div class="menu-heading menuHeadingdropdown"> <span> <i class="fa fa-bars"></i> Categories <i class="fa fa-angle-down"></i></span> </div>
            <!-- Mega Menu -->
            <div class="menu3dmega vertical menuMegasub" id="menuMega">
                <ul>
                    <!-- Menu Item Links for Mobiles Only -->
                    <li class="visible-xs"> <a href="index.php"> <i class="fa fa-home"></i> <span>Home</span> <i class="fa fa-angle-right"></i> </a>
                        <div class="dropdown-menu flyout-menuflyout-menu">
                            <!-- Sub Menu -->
                            <ul>
                                <li><a href="about.php">How It Works</a></li>
                                <li><a href="printer.php">Printers</a></li>
                                <li> <a href="user_login.php"><span>Account</span> <i class="fa fa-caret-right"></i> </a>
                                </li>
                                <li><a href="cart.php">Cart</a></li>
                                <li><a href="checkout.php">Checkout</a></li>
                                <li><a href="contact.php">Contact us</a></li>
                            </ul>
                            <!-- end: Sub Menu -->
                        </div>
                    </li>
                    <!-- end: Menu Item -->
                    <!-- Menu Item for Tablets and Computers Only-->
                    <li class="hidden-xs"> <a href="#a"> <i class="fa fa-bars"></i> <span>Most Popular</span> <i class="fa fa-angle-right"></i> </a>
                        <div class="dropdown-menu">
                            <!-- Sub Menu -->
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul>
                                            <li><a href="Booklets.php">Booklets</a></li>
                                            <li><a href="banner.php">Banners</a></li>
                                            <li><a href="Brochure.php">Brochures</a></li>
                                            <li><a href="Flyer.php">Flyers</a></li>
                                            <li><a href="Pocket_Folders.php">Pocket Folders</a></li>
                                            <li><a href="ID_Badges.php">ID Badges</a></li>
                                            <li><a href="Posters.php">Posters</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                            <li><a href="Business_Cards.php">Business Cards</a></li>
                                            <li><a href="Calenders.php">Calenders</a></li>
                                            <li><a href="#a">Key Chains</a></li>
                                            <li><a href="#a">Pens</a></li>
                                            <li><a href="Envelopes.php">Envelopes</a></li>
                                            <li><a href="Letterhead.php">Letterhead</a></li>
                                            <li><a href="Notepads.php">Notepads</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Sub Menu -->
                        </div>
                    </li>
                    <!-- end: Menu Item -->
                    <!-- Menu Item -->
                    <li> <a href="#a"> <i class="fa fa-bars"></i> <span>Marketing & Promotions</span> <i class="fa fa-angle-right"></i> </a>
                        <div class="dropdown-menu">
                            <!-- Sub Menu -->
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul>
                                            <li><a href="#a">Beavrage Coasters</a></li>
                                            <li><a href="banner.php">Banners</a></li>
                                            <li><a href="Brochure.php">Brochures</a></li>
                                            <li><a href="Flyer.php">Flyers</a></li>
                                            <li><a href="Pocket_Folders.php">Pocket Folders</a></li>
                                            <li><a href="ID_Badges.php">ID Badges</a></li>
                                            <li><a href="Invitation_Cards.php">Invitation Cards</a></li>
                                            <li><a href="Posters.php">Posters</a></li>
                                            <li><a href="Table_Tents.php">Table Tents</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4"> <a class="menu-title" href="#a">Corporate Gifts</a>
                                        <ul>
                                            <li><a href="#a">Bottle Openers</a></li>
                                            <li><a href="#a">Key Chains</a></li>
                                            <li><a href="#a">Mouse Pads</a></li>
                                            <li><a href="#a">Pens</a></li>
                                            <li><a href="#a">Personalised Mugs</a></li>
                                            <li><a href="#a">USB Pen Drives</a></li>
                                            <li><a href="#a">Tape Measures</a></li>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                            <!-- end: Sub Menu -->
                        </div>
                    </li>
                    <!-- end: Menu Item -->
                    <!-- Menu Item -->
                    <li> <a href="#a"> <i class="fa fa-bars"></i> <span>Business Identity</span> <i class="fa fa-angle-right"></i> </a>
                        <div class="dropdown-menu">
                            <!-- Sub Menu -->
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul>
                                            <li><a href="Business_Cards.php">Business Cards</a></li>
                                            <li><a href="Calenders.php">Calenders</a></li>
                                            <li><a href="Envelopes.php">Envelopes</a></li>

                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                            <li><a href="Labels.php">Labels</a></li>
                                            <li><a href="Letterhead.php">Letterhead</a></li>
                                            <li><a href="Memo_Pads.php">Memopads</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                            <li><a href="#a">Magazine</a></li>
                                            <li><a href="Notepads.php">Notepads</a></li>
                                            <li><a href="Pocket_Folders.php">Pocket Folders</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- end: Sub Menu -->
                        </div>
                    </li>
                    <!-- end: Menu Item -->
                    <!-- Menu Item -->
                    <li> <a href="#a"> <i class="fa fa-bars"></i> <span>Stationary</span> <i class="fa fa-angle-right"></i> </a>
                        <div class="dropdown-menu">
                            <!-- Sub Menu -->
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul>
                                            <li><a href="#a">Pens</a></li>
                                            <li><a href="#a">Envelopes</a></li>
                                            <li><a href="#a">Envelopes Seals</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                            <li><a href="Letterhead.php">Letterhead</a></li>
                                            <li><a href="#">Notebooks</a></li>
                                            <li><a href="Notepads.php">Note Pads</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                            <li><a href="#a">Magazine</a></li>
                                            <li><a href="#a">Sticky Notes</a></li>
                                            <li><a href="Table_Tents.php">Table Tents</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- end: Sub Menu -->
                        </div>
                    </li>
                    <!-- end: Menu Item -->
                    <!-- Menu Item -->
                    <li> <a href="#a"> <i class="fa fa-bars"></i> <span>Schools</span></a> </li>
                    <!-- end: Menu Item -->
                    <!-- Menu Item -->
                    <li> <a href="#a"> <i class="fa fa-bars"></i> <span>Branding</span> <i class="fa fa-angle-right"></i> </a>
                        <div class="dropdown-menu">
                            <!-- Sub Menu -->
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul>
                                            <li><a href="#a">Pens</a></li>
                                            <li><a href="Calenders.php">Calenders</a></li>
                                            <li><a href="#a">Key Chains</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                            <li><a href="#a">Personalised Mugs</a></li>
                                            <li><a href="#a">USB Pen Drives</a></li>

                                        </ul>
                                    </div>


                                </div>
                            </div>
                            <!-- end: Sub Menu -->
                        </div>
                    </li>
                    <!-- end: Menu Item -->
                    <!-- Menu Item -->
                    <li> <a href="#a"> <i class="fa fa-bars"></i> <span>Custom Clothing</span> <i class="fa fa-angle-right"></i> </a>
                        <div class="dropdown-menu">
                            <!-- Sub Menu -->
                            <div class="content">
                                <div class="row">

                                    <div class="col-md-12">
                                        <p><a href="#a"><img alt="" src="images/menu-ad.jpg"></a> </p>
                                    </div>

                                </div>
                            </div>
                            <!-- end: Sub Menu -->
                        </div>
                    </li>
                    <!-- end: Menu Item -->
                </ul>
            </div>
            <!-- end: Mega Menu -->
        </div>
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 menu-col-2">
            <!-- Navigation Buttons/Quick Cart for Tablets and Desktop Only -->
            <div class="menu-links hidden-xs">
                <ul class="nav nav-pills nav-justified">
                    <li> <a href="index.php"> <i class="fa fa-home fa-fw"></i> <span class="hidden-sm">Home</span></a> </li>
                    <li> <a href="#"> <i class="fa fa-info-circle fa-fw"></i> <span class="hidden-sm">How It Works</span></a> </li>
                    <li> <a href="printer.php"> <i class="fa fa-bullhorn fa-fw"></i> <span class="hidden-sm">Printers</span></a> </li>
                    <li> <a href="contact.php"> <i class="fa fa-pencil-square-o fa-fw"></i> <span class="hidden-sm ">Contact</span></a> </li>
                    <li class="dropdown"> <a href="cart.php"> <i class="fa fa-shopping-cart fa-fw"></i> <span class="hidden-sm"> Cart </span></a>
                    </li>
                </ul>
            </div>
            <!-- end: Navigation Buttons/Quick Cart Tablets and large screens Only -->

        </div>
    </div>
</div>
</header>
<!-- end: Header -->

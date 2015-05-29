<?php
session_start();
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
<meta content="Get printing at most affordable prices by comparing price from printers in your city. Connecting print buyers with printers"  name="description">
<meta content="Print Buddies" name="author">
<meta name="keywords" content="Online Printing, Bid Online, Affordable Printing">
<link href="images/favicon.png" rel="shortcut icon">

<title>Print Buddies | Hire Printers and Find Print Jobs Online </title>

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
<script src="js/raphael-min.js" type="text/javascript"></script>
<script src="js/jquery.easing.js" type="text/javascript"></script>
<script src="js/iview.js" type="text/javascript"></script>

    <script src="js/common.js" type="text/javascript"></script>
<!--[if IE 8]>
    <script type="text/javascript" src="js/selectivizr.js"></script>
    <![endif]-->

</head>

<body>
<?php
include_once('analyticstracking.php');
?>
<!-- Header -->
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
                  echo '<li class="dropdown"> <a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#a"> <i class="fa fa-user fa-fw"></i> <span class="hidden-xs">'.$name.' </span></a><div class="loginbox dropdown-menu"> <ul><li onclick="window.location.href=\'profile.php\'">Bids</li><li onclick="window.location.href=\'profile.php\'">Profile</li><li onclick="window.location.href=\'logout.php\'">Logout</li><li></li></ul> </div>';
              }else{
                  echo '<li class="dropdown" onclick="window.location.href=\'user_login.php\'"> <a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#a"> <i class="fa fa-user fa-fw"></i> <span class="hidden-xs"> Login</span></a></li>';

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


    </div>
  </div>
  <!-- end: Logo and Search -->
  <div class="f-space20"></div>
  <!-- Menu -->
  <div class="container">
    <div class="row clearfix">
      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 menu-col">
        <div class="menu-heading"> <span> <i class="fa fa-bars"></i> Categories</span> </div>
        <!-- Mega Menu -->
        <div class="menu3dmega vertical" id="menuMega">
          <ul>
            <!-- Menu Item Links for Mobiles Only -->
            <li class="visible-xs"> <a href="index.php"> <i class="fa fa-home"></i> <span>Home</span> <i class="fa fa-angle-right"></i> </a>
              <div class="dropdown-menu flyout-menu">
                <!-- Sub Menu -->
                <ul>
                  <li><a href="how_it_works.php">How It Works</a></li>
                  <li><a href="designing.php">Need a Design</a></li>
                  <li><a href="printer.php">Printers</a></li>
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
                                  <li><a href="Bill_Books.php">Bill Books</a></li>
                                  <li><a href="Calenders.php">Calenders</a></li>
                                  <li><a href="Coming_soon.php">Pens</a></li>
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
            <li> <a href="#a"> <i class="fa fa-bars"></i> <span>Marketing</span> <i class="fa fa-angle-right"></i> </a>
              <div class="dropdown-menu">
                <!-- Sub Menu -->
                <div class="content">
                  <div class="row">
                    <div class="col-md-4">
                        <ul>
                            <li><a href="Coming_soon.php">Beavrage Coasters</a></li>
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
                        <li><a href="Coming_soon.php">Bottle Openers</a></li>
                        <li><a href="Coming_soon.php">Key Chains</a></li>
                        <li><a href="Coming_soon.php">Mouse Pads</a></li>
                        <li><a href="Coming_soon.php">Pens</a></li>
                        <li><a href="Coming_soon.php">Personalised Mugs</a></li>
                        <li><a href="Coming_soon.php">USB Pen Drives</a></li>
                        <li><a href="Coming_soon.php">Tape Measures</a></li>
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
                            <li><a href="Bill_Books.php">Bill Books</a></li>
                            <li><a href="Calenders.php">Calenders</a></li>
                            <li><a href="Envelopes.php">Envelopes</a></li>

                        </ul>
                    </div>
                      <div class="col-md-4">
                          <ul>
                              <li><a href="Labels.php">Labels</a></li>
                              <li><a href="Letterhead.php">Letterhead</a></li>
                              <li><a href="Memo_Pads.php">Memopads</a></li>
                              <li><a href="Coming_soon.php">Magazine</a></li>
                          </ul>
                      </div>
                      <div class="col-md-4">
                          <ul>
                              <li><a href="Notepads.php">Notepads</a></li>
                              <li><a href="Pocket_Folders.php">Pocket Folders</a></li>
                              <li><a href="Coming_soon.php">Receipt Books</a></li>
                              <li><a href="#">Voucher</a></li>
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
                                      <li><a href="Coming_soon.php">Pens</a></li>
                                      <li><a href="Envelopes.php">Envelopes</a></li>
                                      <li><a href="Coming_soon.php">Envelopes Seals</a></li>
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
                                      <li><a href="Coming_soon.php">Magazine</a></li>
                                      <li><a href="Coming_soon.php">Sticky Notes</a></li>
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
            <li> <a href="#a"> <i class="fa fa-bars"></i> <span>Branding</span> <i class="fa fa-angle-right"></i> </a>
                <div class="dropdown-menu">
                    <!-- Sub Menu -->
                    <div class="content">
                        <div class="row">
                            <div class="col-md-4">
                                <ul>
                                    <li><a href="Coming_soon.php">Pens</a></li>
                                    <li><a href="Calenders.php">Calenders</a></li>
                                    <li><a href="Coming_soon.php">Key Chains</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul>
                                    <li><a href="Coming_soon.php">Personalised Mugs</a></li>
                                    <li><a href="Coming_soon.php">USB Pen Drives</a></li>

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
                                <p><a href="Coming_soon.php"><img alt="" src="images/menu-ad.jpg"></a> </p>
                            </div>

                        </div>
                    </div>
                    <!-- end: Sub Menu -->
                </div>
            </li>
            <!-- end: Menu Item --
            <!-- Menu Item -->
            <li> <a href="#a"> <i class="fa fa-bars"></i> <span>All Products</span></a> </li>
            <!-- end: Menu Item -->
          </ul>
        </div>
        <!-- end: Mega Menu -->
      </div>
      <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 menu-col-2">
        <!-- Navigation Buttons/Quick Cart for Tablets and Desktop Only -->
        <div class="menu-links hidden-xs">
          <ul class="nav nav-pills nav-justified">
            <li> <a href="how_it_works.php"> <i class="fa fa-home fa-fw"></i> <span class="hidden-sm">How It Works</span></a> </li>
            <li> <a href="designing.php"> <i class="fa fa-info-circle fa-fw"></i> <span class="hidden-sm">Need a Design</span></a> </li>
            <li> <a href="printer.php"> <i class="fa fa-bullhorn fa-fw"></i> <span class="hidden-sm">Printers</span></a> </li>
            <li> <a href="contact.php"> <i class="fa fa-pencil-square-o fa-fw"></i> <span class="hidden-sm ">Contact</span></a> </li>
            <li class="dropdown"> <a href="cart.php"> <i class="fa fa-shopping-cart fa-fw"></i> <span class="hidden-sm"> Cart </span></a>
              <!-- Quick Cart -->

              <!-- end: Quick Cart -->
            </li>
          </ul>
        </div>

        <div class="clearfix"></div>
        <!-- Iview Slider -->
        <div class="slider">
          <div id="iview">
            <!-- Slide 1 -->
            <div data-iview:image="images/slide0.jpg" data-iview:pausetime="8000">

              <div class="iview-caption metro-box1 blue" data-transition="wipeUp" data-x="266" data-y="209"> <a href="#a">
                <div class="box-hover"></div>
                <span>Think</span></a>
              </div>
                <div class="iview-caption metro-box1 purple" data-transition="wipeDown" data-x="438" data-y="209"> <a href="#a">
                    <div class="box-hover"></div>
                     <span>Bid</span></a> </div>
                <div class="iview-caption metro-box1 dark-blue" data-transition="wipeDown" data-x="610" data-y="209"> <a href="#a">
                    <div class="box-hover"></div>
                    <span>Print</span></a>
                </div>


              <div class="iview-caption caption2" data-transition="expandLeft" data-x="361" data-y="40">
                PRINT BUDDIES
              </div>
              <div class="iview-caption metro-heading" data-transition="wipeLeft" data-x="340" data-y="100"> <span>Get printing at most affordable prices by comparing price from printers in your city.

                </span> </div>
            </div>
            <!-- Slide 1 -->
            <div data-iview:image="images/how_it_works.jpg">

            </div>
            <!-- Slide 2 -->
            <div data-iview:image="images/slide1.jpg">
                <div class="iview-caption caption1" data-transition="wipeUp" data-x="100" data-y="10"></div>
                <div class="iview-caption caption2" data-easing="easeInOutElastic" data-transition="wipeLeft" data-x="100" data-y="100">Business Cards
                    </div>
                <div class="iview-caption caption3" data-easing="easeInOutElastic" data-transition="wipeLeft" data-x="100" data-y="160">
                    <br>With Print Buddies, <br>print at most affordable prices <br>by comparing price from printers in your city.
                </div>
                <div class="iview-caption btn-more" data-transition="fade" data-x="100" data-y="280"><a href="Business_Cards.php">Post Bid
                </a></div>
            </div>
              <div data-iview:image="images/letterhead.jpg">
                  <div class="iview-caption caption1" data-transition="wipeUp" data-x="100" data-y="10"></div>
                  <div class="iview-caption caption2" data-easing="easeInOutElastic" data-transition="wipeLeft" data-x="100" data-y="100">Letterhead
                  </div>
                  <div class="iview-caption caption3" data-easing="easeInOutElastic" data-transition="wipeLeft" data-x="100" data-y="160">
                      <br>With Print Buddies, <br>print at most affordable prices <br>by comparing price from printers in your city.
                  </div>
                  <div class="iview-caption btn-more" data-transition="fade" data-x="100" data-y="280"><a href="Letterhead.php">Post Bid
                  </a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- end: Header --> 
<!-- Products -->
<div class="row clearfix f-space30"></div>
<div class="container">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <div class="rec-banner blue">
                <div class="banner"> <i class="fa fa-thumbs-up"></i>
                    <h3>VERIFIED</h3>
                    <p>Verified Printers to do your job</p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <div class="rec-banner red">
                <div class="banner"> <i class="fa fa-tags"></i>
                    <h3>Compare</h3>
                    <p>Convenient & affordable prices</p>
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
                    <h3>Free</h3>
                    <p>Post Your Printing Job for Free</p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <div class="rec-banner darkblue">
                <div class="banner"> <i class="fa fa-gift"></i>
                    <h3>Surprise Gift</h3>
                    <p> On all orders over Rs.10000*</p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <div class="rec-banner black">
                <div class="banner"> <i class="fa fa-truck"></i>
                    <h3>Easy Shipping</h3>
                    <p>All over the city with best services</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end: Rectangle Banners -->
<!-- Widgets -->
<div class="row clearfix f-space30"></div>

<div class="container">
  <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 main-column box-block">
      <div class="box-heading"><span>Featured Products</span></div>
      <div class="box-content">
        <div class="box-products slide" id="productc1">
          <div class="carousel-controls"> <a class="carousel-control left" data-slide="prev" href="#productc1"> <i class="fa fa-angle-left fa-fw"></i> </a> <a class="carousel-control right" data-slide="next" href="#productc1"> <i class="fa fa-angle-right fa-fw"></i> </a> </div>
          <div class="carousel-inner">
            <!-- Items Row -->
            <div class="item active">
              <div class="row box-product">
                <!-- Product -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="product-block">
                    <div class="image">
                      <div class="product-label product-sale"><span>NEW</span></div>
                      <a class="img" href="Calenders.php"><img alt="product info" src="images/products/folder.png" title="product title"></a> </div>
                      <div class="product-meta">
                          <div class="name"><a href="product.html">Calender</a></div>

                      </div>
                  </div>
                </div>
                <!-- end: Product -->
                <!-- Product -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="product-block">
                    <div class="image"> <a class="img" href="Business_Cards.php"><img alt="product info" src="images/products/envelope.png" title="product title"></a> </div>
                      <div class="product-meta">
                          <div class="name"><a href="Business_Cards.php">Business Cards</a></div>

                      </div>
                  </div>
                </div>
                <!-- end: Product -->
                <!-- Product -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="product-block">
                    <div class="image">
                      <div class="product-label product-new"><span>NEW</span></div>
                      <a class="img" href="Notepads.php"><img alt="product info" src="images/products/standie.png" title="product title"></a> </div>
                      <div class="product-meta">
                          <div class="name"><a href="Notepads.php">Notepads</a></div>

                      </div>
                  </div>
                </div>
                <!-- end: Product -->
              </div>
            </div>
            <!-- end: Items Row -->
            <!-- Items Row -->
            <div class="item">
              <div class="row box-product">
                <!-- Product -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="product-block">
                    <div class="image"> <a class="img" href="Calenders.php"><img alt="product info" src="images/products/envelope.png" title="product title"></a> </div>

                  </div>
                </div>
                <!-- end: Product -->
                <!-- Product -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="product-block">
                    <div class="image">
                      <div class="product-label product-new"><span>NEW</span></div>
                      <a class="img" href="Notepads.php"><img alt="product info" src="images/products/standie.png" title="product title"></a> </div>

                  </div>
                </div>
                <!-- end: Product -->
                <!-- Product -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="product-block">
                    <div class="image">
                      <div class="product-label product-sale"><span>NEW</span></div>
                      <a class="img" href="Calenders.php"><img alt="product info" src="images/products/folder.png" title="product title"></a> </div>
                  </div>
                </div>
                <!-- end: Product -->
              </div>
            </div>
            <!-- end: Items Row -->
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 box-block sidebar">
      <div class="box-heading"><span>Specials</span></div>
      <div class="box-content">
        <div class="box-products slide carousel-fade" id="productc2">
          <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#productc2"></li>
            <li class="" data-slide-to="1" data-target="#productc2"></li>
            <li class="" data-slide-to="2" data-target="#productc2"></li>
          </ol>
          <div class="carousel-inner">
            <!-- item -->
            <div class="item active">
              <div class="product-block">
                <div class="image">
                  <div class="product-label product-hot"><span>NEW</span></div>
                  <a class="img" href="Brochure.php"><img alt="product info" src="images/products/brochure.png" title="product title"></a> </div>

              </div>
            </div>
            <!-- end: item -->
            <!-- item -->
            <div class="item">
              <div class="product-block">
                <div class="image"> <a class="img" href="product.html"><img alt="product info" src="images/products/notebook.png" title="product title"></a> </div>

              </div>
            </div>
            <!-- end: item -->
            <!-- item -->
            <div class="item">
              <div class="product-block">
                <div class="image"> <a class="img" href="product.html"><img alt="product info" src="images/products/leaflet.png" title="product title"></a> </div>

              </div>
            </div>
            <!-- end: item -->
          </div>
        </div>
        <div class="carousel-controls"> <a class="carousel-control left" data-slide="prev" href="#productc2"> <i class="fa fa-angle-left fa-fw"></i> </a> <a class="carousel-control right" data-slide="next" href="#productc2"> <i class="fa fa-angle-right fa-fw"></i> </a> </div>
        <div class="nav-bg"></div>
      </div>
    </div>
  </div>
</div>
<div class="row clearfix f-space30"></div>

<div class="middle" >
    <h1>BID ON PRINT BUDDIES</h1>
    <p>Request A Visit <span> &nbsp; &nbsp; » &nbsp; &nbsp; </span> Verify Your Details <span> &nbsp; &nbsp; » &nbsp; &nbsp; </span> Start Bidding </p>
    <p style="font-size: 18px"><a href="printer.php"> Request a Free Visit </a></p>
</div>

<div class="row clearfix f-space30"></div>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column box-block">
      <div class="box-heading"><span>Recent Products</span></div>
      <div class="box-content">
        <div class="box-products slide" id="productc3">
          <div class="carousel-controls"> <a class="carousel-control left" data-slide="prev" href="#productc3"> <i class="fa fa-angle-left fa-fw"></i> </a> <a class="carousel-control right" data-slide="next" href="#productc3"> <i class="fa fa-angle-right fa-fw"></i> </a> </div>
          <div class="carousel-inner">
            <!-- Items Row -->
            <div class="item active">
              <div class="row box-product">
                <!-- Product -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="product-block">
                    <div class="image">
                      <div class="product-label product-sale"><span>NEW</span></div>
                      <a class="img" href="Flyer.php"><img alt="product info" src="images/products/3fold_flyer.png" title="product title"></a>
                    </div>
                      <div class="product-meta">
                          <div class="name"><a href="Flyer.php">Flyers</a></div>

                      </div>
                  </div>
                </div>
                <!-- end: Product -->
                <!-- Product -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="product-block">
                    <div class="image"> <a class="img" href="product.html"><img alt="product info" src="images/products/envelope.png" title="product title"></a> </div>
                      <div class="product-meta">
                          <div class="name"><a href="product.html">Business Cards</a></div>

                      </div>
                  </div>
                </div>
                <!-- end: Product -->
                <!-- Product -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="product-block">
                    <div class="image">
                      <div class="product-label product-new"><span>NEW</span></div>
                      <a class="img" href="Notepads.php"><img alt="product info" src="images/products/standie.png" title="product title"></a> </div>
                      <div class="product-meta">
                          <div class="name"><a href="Notepads.php">Notepads</a></div>

                      </div>
                  </div>
                </div>
                <!-- end: Product -->
                <!-- Product -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="product-block">
                    <div class="image">
                      <div class="product-label product-sale"><span>NEW</span></div>
                      <a class="img" href="product.html"><img alt="product info" src="images/products/notebook.png" title="product title"></a> </div>
                      <div class="product-meta">
                          <div class="name"><a href="product.html">Notebooks</a></div>

                      </div>
                  </div>
                </div>
                <!-- end: Product -->
              </div>
            </div>
            <!-- end: Items Row -->
            <!-- Items Row -->
            <div class="item">
              <div class="row box-product">
                <!-- Product -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="product-block">
                    <div class="image"> <a class="img" href="product.html"><img alt="product info" src="images/products/envelope.png" title="product title"></a> </div>
                      <div class="product-meta">
                          <div class="name"><a href="product.html">Business Cards</a></div>

                      </div>
                  </div>
                </div>
                <!-- end: Product -->
                <!-- Product -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="product-block">
                    <div class="image">
                      <div class="product-label product-new"><span>NEW</span></div>
                      <a class="img" href="Flyer.php"><img alt="product info" src="images/products/3fold_flyer.png" title="product title"></a> </div>
                      <div class="product-meta">
                          <div class="name"><a href="Flyer.php">Flyers </a></div>

                      </div>
                  </div>
                </div>
                <!-- end: Product -->
                <!-- Product -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="product-block">
                    <div class="image">
                      <a class="img" href="Calenders.php"><img alt="product info" src="images/products/folder.png" title="product title"></a> </div>
                      <div class="product-meta">
                          <div class="name"><a href="Calenders.php">Calenders</a></div>

                      </div>
                  </div>
                </div>
                <!-- end: Product -->
                <!-- Product -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="product-block">
                    <div class="image">
                      <a class="img" href="product.html"><img alt="product info" src="images/products/notebook.png" title="product title"></a> </div>
                      <div class="product-meta">
                          <div class="name"><a href="#">Notebooks</a></div>

                      </div>
                  </div>
                </div>
                <!-- end: Product -->
              </div>
            </div>
            <!-- end: Items Row -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end: Products -->
<!-- Rectangle Banners -->
<div class="row clearfix f-space30"></div>

<!-- end: Widgets -->
<div class="row clearfix f-space30"></div>
<!-- footer -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-xs-12 shopinfo">
        <h4 class="title">PRINT BUDDIES</h4>
        <p> <a href="index.php">Printbuddies.com </a> is set up to connect a print buyer with a commercial printing company anywhere in the world that will best suit their needs, whether it's full color printing or a specialized printing job.
            Print buyers input their quote request using our forms.
            When the buyer hits the "submit" button on the print request form, it is emailed out to printers specializing in that type of printing.
            The printers respond to the print buyer directly with pricing. There is no obligation to use our printers.</p>
       
      </div>
      <div class="col-sm-3 col-xs-12 footermenu">
        <h4 class="title">Information</h4>
        <ul>
          <li class="item"> <a href="Coming_soon.php">Delivery Info</a></li>
          <li class="item"> <a href="Coming_soon.php">FAQs</a></li>
          <li class="item"> <a href="Coming_soon.php">Payment Instructions</a></li>
          <li class="item"> <a href="Coming_soon.php">Request Product</a></li>
          <li class="item"> <a href="printer.php">Printer Registration</a></li>
        </ul>
      </div>
      <div class="col-sm-3 col-xs-12 footermenu">
        <h4 class="title">My account</h4>
        <ul>
          <li class="item"> <a href="profile.php">My Account</a></li>
          <li class="item"> <a href="profile.php">Order History</a></li>
          <li class="item"> <a href="Coming_soon.php">Newsletter</a></li>
        </ul>
      </div>
      <div class="col-sm-3 col-xs-12 getintouch">
        <h4 class="title">get in touch</h4>
        <ul>
          <li>
            <div class="icon"><i class="fa fa-map-marker fa-fw"></i></div>
            <div class="c-info"> <span>19/1 Chopasini Housing Board, Jodhpur<br>
              <a href="#a">Find us on map</a></span></div>
          </li>
          <li>
            <div class="icon"><i class="fa fa-envelope-o fa-fw"></i></div>
            <div class="c-info"> <span>Email Us At:<br>
              <a href="#a">support@printbuddies.com</a></span></div>
          </li>
          <li>
            <div class="icon"><i class="fa fa-phone fa-fw"></i></div>
            <div class="c-info"> <span>24/7 Phone Support:<br>
              <a href="#a">+91-9950-1818-51</a></span></div>
          </li>
          <li>
            <div class="icon"> <i class="fa fa-skype fa-fw"></i></div>
            <div class="c-info"> <span>Talk to Us:<br>
              <a href="#a">printbuddies</a></span></div>
          </li>
        </ul>
        <div class="social-icons">
          <ul>
            <li class="icon google-plus"><a href="https://plus.google.com/+Printbuddiescom" rel="publisher" target="_blank"><i class="fa fa-google-plus fa-fw"></i></a></li>
            <li class="icon linkedin"><a href="#a"><i class="fa fa-linkedin fa-fw"></i></a></li>
            <li class="icon twitter"><a href="#a"><i class="fa fa-twitter fa-fw"></i></a></li>
            <li class="icon facebook"><a href="https://www.facebook.com/printbuddies" target="_blank"><i class="fa fa-facebook fa-fw"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="copyrights">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8 col-xs-12"> <span class="copytxt">&copy; Copyright 2015 by <a href="index.php">Print Buddies</a> -  All rights reserved</span> <span class="btmlinks"><a href="#a">Return Policy</a> | <a href="#a">Privacy Policy</a> | <a href="#a">Terms of Use</a></span> </div>
        <div class="col-lg-4 col-sm-4 col-xs-12 payment-icons"> </div>
      </div>
    </div>
  </div>
</footer>
<!-- end: footer -->

<!-- Style Switcher JS -->
<script src="js/style-switch.js" type="text/javascript"></script>
<section id="style-switch" class="bgcolor3">
  <h2>FEEDBACK <a href="#" class="btn color2"><i class="fa fa-envelope-o fa-fw "></i></a></h2>
  <div class="inner" id="ThankYou">
    <h3>Name*</h3>
      <input type="text" style="height:23px" id="feedback_name" required>

      <h3>Email*</h3>
      <input type="text" style="height:23px" id="feedback_email" required>

      <h3>Mobile*</h3>
      <input type="text" style="height:23px" id="feedback_mobile" required>

      <h3>Subject</h3>
      <input type="text" style="height:23px" id="feedback_subject" required>

      <h3>Message*</h3>
      <textarea type="text" style="height: 111px" id="feedback_text" required></textarea>
    <ul class="colors list-unstyled" id="color1">

    </ul>
  </div>
  <div id="reset" class="inner"><a href="#" class="btn normal color2 " onclick="onClickSend()">Send</a></div>
</section>
<script>

(function($) {
  "use strict";
 $('#menuMega').menu3d();
                $('#iview').iView({
                    pauseTime: 10000,
                    pauseOnHover: true,
                    directionNavHoverOpacity: 0.6,
                    timer: "360Bar",
                    timerBg: '#2da5da',
                    timerColor: '#fff',
                    timerOpacity: 0.9,
                    timerDiameter: 20,
                    timerPadding: 1,
					touchNav: true,
                    timerStroke: 2,
                    timerBarStrokeColor: '#fff'
                });
				
                $('.quickbox').carousel({
                    interval: 10000
                });
               $('#monthly-deals').carousel({
                    interval: 3000
                });
})(jQuery);


          
        </script>
</body>
</html>
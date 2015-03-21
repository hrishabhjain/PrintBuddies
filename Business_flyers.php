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
<link href="images/ico.html" rel="shortcut icon">
<title>Business Flyers</title>

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

    <script src="js/common.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/handlebars-v2.0.0.js"></script>
    <script src="js/productInfo.js"></script>
<!--Drpodown--
<script type="text/javascript" src="js/select-widget-min.js"></script>
<!--[if IE 8]>
    <script type="text/javascript" src="js/selectivizr.js"></script>
    <![endif]-->

</head>

<body  onload=getProductInfo("canvas_banner");>
<!-- Header -->
<script id="handlebar-info" type="text/x-handlebars-template">
    <div class="post " data-update-id="{{Category}}" id="{{Category}}-attribute" >
        <label>{{Category}}</label>
    </div>
</script>
<header> 
  <!-- Top Heading Bar -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="topheadrow">
          <ul class="nav nav-pills pull-right">
              <li> <a href="#a">  <span class="hidden-xs">We're hiring! </span></a> </li>
              <li> <a href="#a">  <i class="fa fa-phone fa-fw"></i><span class="hidden-xs">+91-94608-62-343 </span></a> </li>
            <li class="dropdown"> <a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#a"> <i class="fa fa-user fa-fw"></i> <span class="hidden-xs"> Login</span></a>
              <div class="loginbox dropdown-menu"> <span class="form-header">Login</span>
                <form role="form">
                  <div class="form-group"> <i class="fa fa-user fa-fw"></i>
                    <input class="form-control" id="InputUserName" placeholder="Username" type="text">
                  </div>
                  <div class="form-group"> <i class="fa fa-lock fa-fw"></i>
                    <input class="form-control" id="InputPassword" placeholder="Password" type="password">
                  </div>
                  <button class="btn medium color1 pull-right" type="submit">Login</button>
                </form>
              </div>
            </li>
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
          <div class="logo"> <a href="index.html" title="Print Buddies"><img style="width: 120px; height: 52px" alt="Print Buddies" src="images/printbuddies.png"></a></div>
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
            <li class="visible-xs"> <a href="index.html"> <i class="fa fa-home"></i> <span>Home</span> <i class="fa fa-angle-right"></i> </a>
              <div class="dropdown-menu flyout-menuflyout-menu">
                <!-- Sub Menu -->
                <ul>
                  <li><a href="about.html">About us</a></li>
                  <li><a href="blog.html">Blog</a></li>
                  <li> <a href="#a"><span>Account</span> <i class="fa fa-caret-right"></i> </a>
                    <ul class="dropdown-menu sub flyout-menu">
                      <li><a href="#a">Login/Register</a></li>
                      <li><a href="#a">My Orders</a></li>
                      <li><a href="#a">Wish list</a></li>
                      <li><a href="cart.html">Shopping Cart</a></li>
                      <li><a href="checkout.html">Checkout</a></li>
                    </ul>
                  </li>
                  <li> <a href="#a"><span>Product</span> <i class="fa fa-caret-right"></i> </a>
                    <ul class="dropdown-menu sub flyout-menu">
                      <li><a href="category-grid.html">Category Grid</a></li>
                      <li><a href="category-list.html">Category List</a></li>
                      <li><a href="product.html">Product Page</a> </li>
                    </ul>
                  </li>
                  <li><a href="cart.html">Shoping Cart</a></li>
                  <li><a href="checkout.html">Checkout</a></li>
                  <li><a href="blog-single.html">Blog Post</a></li>
                  <li><a href="contact.html">Contact us</a></li>
                </ul>
                <!-- end: Sub Menu --> 
              </div>
            </li>
            <!-- end: Menu Item --> 
            <!-- Menu Item for Tablets and Computers Only-->
            <li class="hidden-xs"> <a href="#a"> <i class="fa fa-files-o"></i> <span>Pages</span> <i class="fa fa-angle-right"></i> </a>
              <div class="dropdown-menu flyout-menu"> 
                <!-- Sub Menu -->
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About us</a></li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="blog-single.html">Blog Post</a></li>
                  <li> <a href="#a"><span>Product</span> <i class="fa fa-caret-right"></i> </a>
                    <ul class="dropdown-menu sub flyout-menu">
                      <li><a href="category-grid.html">Category Grid</a></li>
                      <li><a href="category-list.html">Category List</a></li>
                      <li><a href="product.html">Product Page</a> </li>
                    </ul>
                  </li>
                  <li><a href="cart.html">Shoping Cart</a></li>
                  <li><a href="checkout.html">Checkout</a></li>
                  <li><a href="contact.html">Contact us</a></li>
                </ul>
                <!-- end: Sub Menu --> 
              </div>
            </li>
            <!-- end: Menu Item --> 
            <!-- Menu Item -->
            <li> <a href="#a"> <i class="fa fa-male"></i> <span>Men Wear</span> <i class="fa fa-angle-right"></i> </a>
              <div class="dropdown-menu"> 
                <!-- Sub Menu -->
                <div class="content">
                  <div class="row">
                    <div class="col-md-4"> <a class="menu-title" href="#a">Fashion</a>
                      <ul>
                        <li><a href="#a">Clothing</a></li>
                        <li><a href="#a">Shoes</a></li>
                        <li><a href="#a">Handbags</a></li>
                        <li><a href="#a">Accessories</a></li>
                        <li><a href="#a">Luggage</a></li>
                        <li><a href="#a">Jewelry</a></li>
                      </ul>
                    </div>
                    <div class="col-md-4"> <a class="menu-title" href="#a">Shirts</a>
                      <ul>
                        <li><a href="#a">Reguler Shirts</a></li>
                        <li><a href="#a">Slim Shirts</a></li>
                        <li><a href="#a">Fashion Shirts</a></li>
                        <li><a href="#a">Black Shirts</a></li>
                        <li><a href="#a">White Shirts</a></li>
                        <li><a href="#a">Gray Shirts</a></li>
                      </ul>
                    </div>
                    <div class="col-md-4"> <a class="menu-title" href="#a">Jeans</a>
                      <ul>
                        <li><a href="#a">Reguler Jeans</a></li>
                        <li><a href="#a">Slim-fit Jeans</a></li>
                        <li><a href="#a">Loose Jeans</a></li>
                        <li><a href="#a">Top Jeans</a></li>
                        <li><a href="#a">New Jeans</a></li>
                        <li><a href="#a">Color Jeans</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <p> <a href="#a"><img alt="" src="images/menu-ad.jpg"></a> </p>
                    </div>
                  </div>
                </div>
                <!-- end: Sub Menu --> 
              </div>
            </li>
            <!-- end: Menu Item --> 
            <!-- Menu Item -->
            <li> <a href="#a"> <i class="fa fa-female"></i> <span>Women Wear</span> <i class="fa fa-angle-right"></i> </a>
              <div class="dropdown-menu"> 
                <!-- Sub Menu -->
                <div class="content">
                  <div class="row">
                    <div class="col-md-5"> <a class="menu-title" href="#a">Fashion</a>
                      <ul>
                        <li><a href="#a">Clothing</a></li>
                        <li><a href="#a">Shoes</a></li>
                        <li><a href="#a">Handbags</a></li>
                        <li><a href="#a">Accessories</a></li>
                        <li><a href="#a">Luggage</a></li>
                        <li><a href="#a">Jewelry</a></li>
                      </ul>
                    </div>
                    <div class="col-md-7">
                      <div class="product-block">
                        <div class="image">
                          <div class="product-label product-sale"><span>SALE</span></div>
                          <a class="img" href="product.html"><img alt="product info" src="images/products/product1.jpg" title="product title"></a> </div>
                        <div class="product-meta">
                          <div class="name"><a href="product.html">Ladies Stylish Handbag</a></div>
                          <div class="big-price"> <span class="price-new"><span class="sym">$</span>96</span> <span class="price-old"><span class="sym">$</span>119.50</span> </div>
                          <div class="big-btns"> <a class="btn btn-default btn-view pull-left" href="#">View</a> <a class="btn btn-default btn-addtocart pull-right" href="#">Add to
                            Cart</a> </div>
                          <div class="small-price"> <span class="price-new"><span class="sym">$</span>96</span> <span class="price-old"><span class="sym">$</span>119.50</span> </div>
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="small-btns">
                            <button class="btn btn-default btn-compare pull-left" data-toggle="tooltip" title="Add to Compare"> <i class="fa fa-retweet fa-fw"></i> </button>
                            <button class="btn btn-default btn-wishlist pull-left" data-toggle="tooltip" title="Add to Wishlist"> <i class="fa fa-heart fa-fw"></i> </button>
                            <button class="btn btn-default btn-addtocart pull-left" data-toggle="tooltip" title="Add to Cart"> <i class="fa fa-shopping-cart fa-fw"></i> </button>
                          </div>
                        </div>
                        <div class="meta-back"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end: Sub Menu --> 
              </div>
            </li>
            <!-- end: Menu Item --> 
            <!-- Menu Item -->
            <li> <a href="#a"> <i class="fa fa-video-camera"></i> <span>Digital Camera</span></a> </li>
            <!-- end: Menu Item --> 
            <!-- Menu Item -->
            <li> <a href="#a"> <i class="fa fa-mobile"></i> <span>Mobile Phones</span></a> </li>
            <!-- end: Menu Item --> 
            <!-- Menu Item -->
            <li> <a href="#a"> <i class="fa fa-laptop"></i> <span>Computers</span></a> </li>
            <!-- end: Menu Item --> 
            <!-- Menu Item -->
            <li> <a href="#a"> <i class="fa fa-gamepad"></i> <span>Gaming</span></a> </li>
            <!-- end: Menu Item --> 
            <!-- Menu Item -->
            <li> <a href="#a"> <i class="fa fa-gift"></i> <span>Gift Ideas</span></a> </li>
            <!-- end: Menu Item -->
          </ul>
        </div>
        <!-- end: Mega Menu --> 
      </div>
      <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 menu-col-2"> 
        <!-- Navigation Buttons/Quick Cart for Tablets and Desktop Only -->
        <div class="menu-links hidden-xs">
          <ul class="nav nav-pills nav-justified">
            <li> <a href="index.html"> <i class="fa fa-home fa-fw"></i> <span class="hidden-sm">Home</span></a> </li>
            <li> <a href="about.html"> <i class="fa fa-info-circle fa-fw"></i> <span class="hidden-sm">About</span></a> </li>
            <li> <a href="blog.html"> <i class="fa fa-bullhorn fa-fw"></i> <span class="hidden-sm">Blog</span></a> </li>
            <li> <a href="contact.html"> <i class="fa fa-pencil-square-o fa-fw"></i> <span class="hidden-sm ">Contact</span></a> </li>
            <li class="dropdown"> <a href="cart.html"> <i class="fa fa-shopping-cart fa-fw"></i> <span class="hidden-sm"> 5 items | $4530.00</span></a> 
              <!-- Quick Cart -->
              <div class="dropdown-menu quick-cart">
                <div class="qc-row qc-row-heading"> <span class="qc-col-qty">QTY.</span> <span class="qc-col-name">5 items in bag</span> <span class="qc-col-price">$4530.00</span> </div>
                <div class="qc-row qc-row-item"> <span class="qc-col-qty">2</span> <span class="qc-col-name"><a href="#a">Women Fashion hot Wear item</a></span> <span class="qc-col-price">$500</span> <span class="qc-col-remove"> <i class="fa fa-times fa-fw"></i> </span> </div>
                <div class="qc-row qc-row-item"> <span class="qc-col-qty">1</span> <span class="qc-col-name"><a href="#a">Women Fashion hot Wear item</a></span> <span class="qc-col-price">$800</span> <span class="qc-col-remove"> <i class="fa fa-times fa-fw"></i> </span> </div>
                <div class="qc-row qc-row-item"> <span class="qc-col-qty">3</span> <span class="qc-col-name"><a href="#a">Women Fashion hot Wear item</a></span> <span class="qc-col-price">$252.25</span> <span class="qc-col-remove"> <i class="fa fa-times fa-fw"></i> </span> </div>
                <div class="qc-row-bottom"><a class="btn qc-btn-viewcart" href="#a">view
                  cart</a><a class="btn qc-btn-checkout" href="#a">check
                  out</a></div>
              </div>
              <!-- end: Quick Cart --> 
            </li>
          </ul>
        </div>
        <!-- end: Navigation Buttons/Quick Cart Tablets and large screens Only --> 
        
      </div>
    </div>
  </div>
</header>
<!-- end: Header -->

<div class="row clearfix"></div>
<!--<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="breadcrumb"> <a href="index.html"> <i class="fa fa-home fa-fw"></i> Home </a> <i class="fa fa-angle-right fa-fw"></i> <a href="product.html"> Product </a> </div>
      
      <!-- Quick Help for tablets and large screens --
      <div class="quick-message hidden-xs">
        <div class="quick-box">
          <div class="quick-slide"> <span class="title">Help</span>
            <div class="quickbox slide" id="quickbox">
              <div class="carousel-inner">
                <div class="item active"> <a href="#"> <i class="fa fa-envelope fa-fw"></i> Quick Message</a> </div>
                <div class="item"> <a href="#"> <i class="fa fa-question-circle fa-fw"></i> FAQ</a> </div>
                <div class="item"> <a href="#"> <i class="fa fa-phone fa-fw"></i> (92)3009712255</a> </div>
              </div>
            </div>
            <a class="left carousel-control" data-slide="prev" href="#quickbox"> <i class="fa fa-angle-left fa-fw"></i> </a> <a class="right carousel-control" data-slide="next" href="#quickbox"> <i class="fa fa-angle-right fa-fw"></i> </a> </div>
        </div>
      </div>
      <!-- end: Quick Help --
      
    </div>
  </div>
</div>-->
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
                            <div class="blog-entry item">
                                <div class="image"> <span class="blogico"> <i class="fa fa-bullhorn fa-fw"></i><br>
                  Blog entry</span> <img class="ani-image" src="images/blog-4.jpg" alt="image info"> </div>
                                <div class="entry-row">
                                    <div class="date col-xs-12"><span>12</span><span>Aug 2013</span></div>
                                    <div class="blog-text"> <span>A decent blog title goes here...</span> <span>Appropriately supply high-quality intellectual capital after
                    client-centered quality vectors. Collaboratively orchestrate end-to-end
                    strategic theme areas after...</span> <span> <a href="#a"> <i class="fa fa-user fa-fw"></i>John Doe</a> <a href="#a"> <i class="fa fa-comments fa-fw"></i>4 Comments</a> </span> </div>
                                </div>
                            </div>
                            <!--END Post -->
                            <!-- Post -->
                            <div class="blog-entry item">
                                <div class="image"> <span class="blogico"> <i class="fa fa-bullhorn fa-fw"></i><br>
                  Blog entry</span> <img class="ani-image" src="images/blog-1.jpg" alt=""> </div>
                                <div class="entry-row">
                                    <div class="date col-xs-12"><span>27</span><span>Oct 2013</span></div>
                                    <div class="blog-text"> <span>Nulla quis lorem ut libero malesuada...</span> <span>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec
                    rutrum congue leo eget malesuada. Nulla quis lorem ut libero malesuada
                    feugiat. Curabitur arcu erat, accumsan id imperdiet....</span> <span> <a href="#a"> <i class="fa fa-user fa-fw"></i>John Doe</a> <a href="#a"> <i class="fa fa-comments fa-fw"></i>2 Comments</a> </span> </div>
                                </div>
                            </div>
                            <!--END Post -->
                            <!-- Post -->
                            <div class="blog-entry item active">
                                <div class="image"> <span class="blogico"> <i class="fa fa-bullhorn fa-fw"></i><br>
                  Blog entry</span> <img class="ani-image" src="images/blog-2.jpg" alt=""> </div>

                            </div>
                            <!--END Post -->
                            <!-- Post -->
                            <div class="blog-entry item">
                                <div class="image"> <span class="blogico"> <i class="fa fa-bullhorn fa-fw"></i><br>
                  Blog entry</span> <img class="ani-image" src="images/blog-3.jpg" alt=""> </div>
                                <div class="entry-row">
                                    <div class="date col-xs-12"><span>11</span><span>Jan 2013</span></div>
                                    <div class="blog-text"><span>Dynamically empower equity...</span> <span>Completely cultivate standardized internal or "organic" sources
                    with unique total linkage. Dynamically empower equity invested e-markets
                    without premier schemas....</span> <span> <a href="#a"> <i class="fa fa-user fa-fw"></i>John Doe</a> <a href="#a"> <i class="fa fa-comments fa-fw"></i>19 Comments</a> </span> </div>
                                </div>
                            </div>
                            <!--END Post -->
                        </div>
                        <div class="carousel-controls"> <a class="carousel-control left" data-slide="prev" href="#blogslide"> <i class="fa fa-angle-left fa-fw"></i> </a> <a class="carousel-control right" data-slide="next" href="#blogslide"> <i class="fa fa-angle-right fa-fw"></i> </a> </div>
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
                        <p>Flyers are one of the most cost-effective marketing tools available. Whether single or double-sided, folded or flat, fliers printed in rich, full color get noticed! There's no substitute for the impact of 4 color offset printing, and impact is what gets you noticed. </p>
                      
                    </div>
                     <div class="tab-pane" id="reviews">
                       
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                            
<tr><td>100 lb. Gloss Text Stock</td><td>
100 lb. Gloss Text is a high-quality paper stock that is excellent for projects requiring high resolution and sharp imagery.</td></tr><tr><td>100 lb. Gloss Cover Stock</td><td>
Our 100 lb. gloss cover stock is a thick, premium cover stock with a glossy sheen on both sides.</td></tr><tr> <td>80 lb. Recycled Matte Cover Stock</td><td>
This high-quality matte cover stock is known for its elegant finish, sharp color reproduction and unmatched environmental specifications.</td></tr><tr> <td>70 lb. Recycled Matte Text Stock</td><td>
This high-quality matte text stock is known for its elegant finish, sharp color reproduction and unmatched environmental specifications.
                       </td></tr> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="tags">
       <p>
With five standard folding options, Print Buddies has the fold you need to make your flyer stand out:</p><p>
Half-Fold
(2 panels / 4 pages)</p><p>
Tri-Fold / Letter-Fold 
(3 panels / 6 pages)</p><p>
Z-Fold
(3 panels / 6 pages)</p><p>
Double Parallel Fold
(4 panels / 8 pages)</p><p>
Right-angle half fold
(4 panels / 8 pages)</p>
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
            <div class="box-heading"><span>Business Flyers</span></div>
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
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column box-block">
      <div class="box-heading"><span>Related Products</span></div>
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
                      <div class="product-label product-sale"><span>SALE</span></div>
                      <a class="img" href="product.html"><img alt="product info" src="images/products/product1.jpg" title="product title"></a> </div>
                    <div class="product-meta">
                      <div class="name"><a href="product.html">Ladies Stylish Handbag</a></div>
                      <div class="big-price"> <span class="price-new"><span class="sym">$</span>96</span> <span class="price-old"><span class="sym">$</span>119.50</span> </div>
                      <div class="big-btns"> <a class="btn btn-default btn-view pull-left" href="#">View</a> <a class="btn btn-default btn-addtocart pull-right" href="#">Add to
                        Cart</a> </div>
                      <div class="small-price"> <span class="price-new"><span class="sym">$</span>96</span> <span class="price-old"><span class="sym">$</span>119.50</span> </div>
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i> </div>
                      <div class="small-btns">
                        <button class="btn btn-default btn-compare pull-left" data-toggle="tooltip" title="Add to Compare"> <i class="fa fa-retweet fa-fw"></i> </button>
                        <button class="btn btn-default btn-wishlist pull-left" data-toggle="tooltip" title="Add to Wishlist"> <i class="fa fa-heart fa-fw"></i> </button>
                        <button class="btn btn-default btn-addtocart pull-left" data-toggle="tooltip" title="Add to Cart"> <i class="fa fa-shopping-cart fa-fw"></i> </button>
                      </div>
                    </div>
                    <div class="meta-back"></div>
                  </div>
                </div>
                <!-- end: Product --> 
                <!-- Product -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="product-block">
                    <div class="image"> <a class="img" href="product.html"><img alt="product info" src="images/products/product2.jpg" title="product title"></a> </div>
                    <div class="product-meta">
                      <div class="name"><a href="product.html">Female Strips Handbag</a></div>
                      <div class="big-price"> <span class="price-new"><span class="sym">$</span>520</span> </div>
                      <div class="big-btns"> <a class="btn btn-default btn-view pull-left" href="#">View</a> <a class="btn btn-default btn-addtocart pull-right" href="#">Add to
                        Cart</a> </div>
                      <div class="small-price"> <span class="price-new"><span class="sym">$</span>520</span> </div>
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i> </div>
                      <div class="small-btns">
                        <button class="btn btn-default btn-compare pull-left" data-toggle="tooltip" title="Add to Compare"> <i class="fa fa-retweet fa-fw"></i> </button>
                        <button class="btn btn-default btn-wishlist pull-left" data-toggle="tooltip" title="Add to Wishlist"> <i class="fa fa-heart fa-fw"></i> </button>
                        <button class="btn btn-default btn-addtocart pull-left" data-toggle="tooltip" title="Add to Cart"> <i class="fa fa-shopping-cart fa-fw"></i> </button>
                      </div>
                    </div>
                    <div class="meta-back"></div>
                  </div>
                </div>
                <!-- end: Product --> 
                <!-- Product -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="product-block">
                    <div class="image">
                      <div class="product-label product-new"><span>NEW</span></div>
                      <a class="img" href="product.html"><img alt="product info" src="images/products/product3.jpg" title="product title"></a> </div>
                    <div class="product-meta">
                      <div class="name"><a href="product.html">Blue Fashion Bag</a></div>
                      <div class="big-price"> <span class="price-new"><span class="sym">$</span>320</span> </div>
                      <div class="big-btns"> <a class="btn btn-default btn-view pull-left" href="#">View</a> <a class="btn btn-default btn-addtocart pull-right" href="#">Add to
                        Cart</a> </div>
                      <div class="small-price"> <span class="price-new"><span class="sym">$</span>320</span> </div>
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i> </div>
                      <div class="small-btns">
                        <button class="btn btn-default btn-compare pull-left" data-toggle="tooltip" title="Add to Compare"> <i class="fa fa-retweet fa-fw"></i> </button>
                        <button class="btn btn-default btn-wishlist pull-left" data-toggle="tooltip" title="Add to Wishlist"> <i class="fa fa-heart fa-fw"></i> </button>
                        <button class="btn btn-default btn-addtocart pull-left" data-toggle="tooltip" title="Add to Cart"> <i class="fa fa-shopping-cart fa-fw"></i> </button>
                      </div>
                    </div>
                    <div class="meta-back"></div>
                  </div>
                </div>
                <!-- end: Product --> 
                <!-- Product -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="product-block">
                    <div class="image">
                      <div class="product-label product-sale"><span>SALE</span></div>
                      <a class="img" href="product.html"><img alt="product info" src="images/products/product1.jpg" title="product title"></a> </div>
                    <div class="product-meta">
                      <div class="name"><a href="product.html">Ladies Stylish Handbag</a></div>
                      <div class="big-price"> <span class="price-new"><span class="sym">$</span>96</span> <span class="price-old"><span class="sym">$</span>119.50</span> </div>
                      <div class="big-btns"> <a class="btn btn-default btn-view pull-left" href="#">View</a> <a class="btn btn-default btn-addtocart pull-right" href="#">Add to
                        Cart</a> </div>
                      <div class="small-price"> <span class="price-new"><span class="sym">$</span>96</span> <span class="price-old"><span class="sym">$</span>119.50</span> </div>
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i> </div>
                      <div class="small-btns">
                        <button class="btn btn-default btn-compare pull-left" data-toggle="tooltip" title="Add to Compare"> <i class="fa fa-retweet fa-fw"></i> </button>
                        <button class="btn btn-default btn-wishlist pull-left" data-toggle="tooltip" title="Add to Wishlist"> <i class="fa fa-heart fa-fw"></i> </button>
                        <button class="btn btn-default btn-addtocart pull-left" data-toggle="tooltip" title="Add to Cart"> <i class="fa fa-shopping-cart fa-fw"></i> </button>
                      </div>
                    </div>
                    <div class="meta-back"></div>
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
                    <div class="image"> <a class="img" href="product.html"><img alt="product info" src="images/products/product2.jpg" title="product title"></a> </div>
                    <div class="product-meta">
                      <div class="name"><a href="product.html">Female Strips Handbag</a></div>
                      <div class="big-price"> <span class="price-new"><span class="sym">$</span>520</span> </div>
                      <div class="big-btns"> <a class="btn btn-default btn-view pull-left" href="#">View</a> <a class="btn btn-default btn-addtocart pull-right" href="#">Add to
                        Cart</a> </div>
                      <div class="small-price"> <span class="price-new"><span class="sym">$</span>520</span> </div>
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i> </div>
                      <div class="small-btns">
                        <button class="btn btn-default btn-compare pull-left" data-toggle="tooltip" title="Add to Compare"> <i class="fa fa-retweet fa-fw"></i> </button>
                        <button class="btn btn-default btn-wishlist pull-left" data-toggle="tooltip" title="Add to Wishlist"> <i class="fa fa-heart fa-fw"></i> </button>
                        <button class="btn btn-default btn-addtocart pull-left" data-toggle="tooltip" title="Add to Cart"> <i class="fa fa-shopping-cart fa-fw"></i> </button>
                      </div>
                    </div>
                    <div class="meta-back"></div>
                  </div>
                </div>
                <!-- end: Product --> 
                <!-- Product -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="product-block">
                    <div class="image">
                      <div class="product-label product-new"><span>NEW</span></div>
                      <a class="img" href="product.html"><img alt="product info" src="images/products/product3.jpg" title="product title"></a> </div>
                    <div class="product-meta">
                      <div class="name"><a href="product.html">Blue Fashion Bag</a></div>
                      <div class="big-price"> <span class="price-new"><span class="sym">$</span>320</span> </div>
                      <div class="big-btns"> <a class="btn btn-default btn-view pull-left" href="#">View</a> <a class="btn btn-default btn-addtocart pull-right" href="#">Add to
                        Cart</a> </div>
                      <div class="small-price"> <span class="price-new"><span class="sym">$</span>320</span> </div>
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i> </div>
                      <div class="small-btns">
                        <button class="btn btn-default btn-compare pull-left" data-toggle="tooltip" title="Add to Compare"> <i class="fa fa-retweet fa-fw"></i> </button>
                        <button class="btn btn-default btn-wishlist pull-left" data-toggle="tooltip" title="Add to Wishlist"> <i class="fa fa-heart fa-fw"></i> </button>
                        <button class="btn btn-default btn-addtocart pull-left" data-toggle="tooltip" title="Add to Cart"> <i class="fa fa-shopping-cart fa-fw"></i> </button>
                      </div>
                    </div>
                    <div class="meta-back"></div>
                  </div>
                </div>
                <!-- end: Product --> 
                <!-- Product -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="product-block">
                    <div class="image">
                      <div class="product-label product-sale"><span>SALE</span></div>
                      <a class="img" href="product.html"><img alt="product info" src="images/products/product1.jpg" title="product title"></a> </div>
                    <div class="product-meta">
                      <div class="name"><a href="product.html">Ladies Stylish Handbag</a></div>
                      <div class="big-price"> <span class="price-new"><span class="sym">$</span>96</span> <span class="price-old"><span class="sym">$</span>119.50</span> </div>
                      <div class="big-btns"> <a class="btn btn-default btn-view pull-left" href="#">View</a> <a class="btn btn-default btn-addtocart pull-right" href="#">Add to
                        Cart</a> </div>
                      <div class="small-price"> <span class="price-new"><span class="sym">$</span>96</span> <span class="price-old"><span class="sym">$</span>119.50</span> </div>
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i> </div>
                      <div class="small-btns">
                        <button class="btn btn-default btn-compare pull-left" data-toggle="tooltip" title="Add to Compare"> <i class="fa fa-retweet fa-fw"></i> </button>
                        <button class="btn btn-default btn-wishlist pull-left" data-toggle="tooltip" title="Add to Wishlist"> <i class="fa fa-heart fa-fw"></i> </button>
                        <button class="btn btn-default btn-addtocart pull-left" data-toggle="tooltip" title="Add to Cart"> <i class="fa fa-shopping-cart fa-fw"></i> </button>
                      </div>
                    </div>
                    <div class="meta-back"></div>
                  </div>
                </div>
                <!-- end: Product --> 
                <!-- Product -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="product-block">
                    <div class="image">
                      <div class="product-label product-sale"><span>SALE</span></div>
                      <a class="img" href="product.html"><img alt="product info" src="images/products/product1.jpg" title="product title"></a> </div>
                    <div class="product-meta">
                      <div class="name"><a href="product.html">Ladies Stylish Handbag</a></div>
                      <div class="big-price"> <span class="price-new"><span class="sym">$</span>96</span> <span class="price-old"><span class="sym">$</span>119.50</span> </div>
                      <div class="big-btns"> <a class="btn btn-default btn-view pull-left" href="#">View</a> <a class="btn btn-default btn-addtocart pull-right" href="#">Add to
                        Cart</a> </div>
                      <div class="small-price"> <span class="price-new"><span class="sym">$</span>96</span> <span class="price-old"><span class="sym">$</span>119.50</span> </div>
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i> </div>
                      <div class="small-btns">
                        <button class="btn btn-default btn-compare pull-left" data-toggle="tooltip" title="Add to Compare"> <i class="fa fa-retweet fa-fw"></i> </button>
                        <button class="btn btn-default btn-wishlist pull-left" data-toggle="tooltip" title="Add to Wishlist"> <i class="fa fa-heart fa-fw"></i> </button>
                        <button class="btn btn-default btn-addtocart pull-left" data-toggle="tooltip" title="Add to Cart"> <i class="fa fa-shopping-cart fa-fw"></i> </button>
                      </div>
                    </div>
                    <div class="meta-back"></div>
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

<!-- end: Related products -->

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
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-xs-12 shopinfo">
        <h4 class="title">FLATSHOP</h4>
        <p> This Efficiently negotiate robust communities with extensible systems.
          Appropriately productize top-line leadership skills rather than team
          building applications.</p>
        <p> Phosfluorescently extend highly efficient schemas with intermandated. </p>
      </div>
      <div class="col-sm-3 col-xs-12 footermenu">
        <h4 class="title">Information</h4>
        <ul>
          <li class="item"> <a href="#a">Delivery Info</a></li>
          <li class="item"> <a href="#a">FAQs</a></li>
          <li class="item"> <a href="#a">Payment Instructions</a></li>
          <li class="item"> <a href="#a">Request Product</a></li>
          <li class="item"> <a href="#a">Vendor Registration</a></li>
          <li class="item"> <a href="#a">Affiliates</a></li>
          <li class="item"> <a href="#a">Gift Vouchers</a></li>
        </ul>
      </div>
      <div class="col-sm-3 col-xs-12 footermenu">
        <h4 class="title">My
          account</h4>
        <ul>
          <li class="item"> <a href="#a">My Account</a></li>
          <li class="item"> <a href="#a">Order History</a></li>
          <li class="item"> <a href="#a">Wish List</a></li>
          <li class="item"> <a href="#a">Newsletter</a></li>
        </ul>
      </div>
      <div class="col-sm-3 col-xs-12 getintouch">
        <h4 class="title">get in
          touch</h4>
        <ul>
          <li>
            <div class="icon"> <i class="fa fa-map-marker fa-fw"></i> </div>
            <div class="c-info"> <span>3rd Avenue, NY, US<br>
              <a href="#a">Find us on map</a></span> </div>
          </li>
          <li>
            <div class="icon"> <i class="fa fa-envelope-o fa-fw"></i> </div>
            <div class="c-info"> <span>Email Us At:<br>
              <a href="#a">support@domain.com</a></span> </div>
          </li>
          <li>
            <div class="icon"> <i class="fa fa-phone fa-fw"></i> </div>
            <div class="c-info"> <span>24/7 Phone Support:<br>
              <a href="#a">+1 (888) 888 8888</a></span> </div>
          </li>
          <li>
            <div class="icon"> <i class="fa fa-skype fa-fw"></i> </div>
            <div class="c-info"> <span>Talk to Us:<br>
              <a href="#a">skypeid</a></span> </div>
          </li>
        </ul>
        <div class="social-icons">
          <ul>
            <li class="icon google-plus"> <a href="#a"> <i class="fa fa-google-plus fa-fw"></i> </a> </li>
            <li class="icon linkedin"> <a href="#a"> <i class="fa fa-linkedin fa-fw"></i> </a> </li>
            <li class="icon twitter"> <a href="#a"> <i class="fa fa-twitter fa-fw"></i> </a> </li>
            <li class="icon facebook"> <a href="#a"> <i class="fa fa-facebook fa-fw"></i> </a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="copyrights">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8 col-xs-12"> <span class="copytxt">&copy; Copyright 2013 by <a href="#a">Print Buddies</a> - All rights reserved</span> <span class="btmlinks"><a href="#a">Return Policy</a> | <a href="#a">Privacy Policy</a> | <a href="#a">Terms of Use</a></span> </div>
        <div class="col-lg-4 col-sm-4 col-xs-12 payment-icons"> <a href="#a"> <img alt="discover" src="images/icons/discover.png"> </a> <a href="#a"> <img alt="2co" src="images/icons/2co.png"> </a> <a href="#a"> <img alt="paypal" src="images/icons/paypal.png"> </a> <a href="#a"> <img alt="master card" src="images/icons/mastercard.png"> </a> <a href="#a"> <img alt="visa card" src="images/icons/visa.png"> </a> <a href="#a"> <img alt="moneybookers" src="images/icons/moneybookers.png"> </a> </div>
      </div>
    </div>
  </div>
</footer>
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
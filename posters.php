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
<title>Posters</title>

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
<?php
include('header.php');

?>
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
                        <p>A poster can have a lot of impact. Announce your event or get your message out in a big way with custom printing effects that will get noticed.</p>
                      
                    </div>
                     <div class="tab-pane" id="reviews">
                       
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                            
<tr><td>100 lb. Gloss Text Stock</td><td>
100 lb. Gloss Text is a high-quality paper stock that is excellent for projects requiring high resolution and sharp imagery.</td></tr><tr> <td>80 lb. Recycled Matte Cover Stock</td><td>
This high-quality matte cover stock is known for its elegant finish, sharp color reproduction and unmatched environmental specifications.</td></tr><tr> <td>70 lb. Recycled Matte Text Stock</td><td>
This high-quality matte text stock is known for its elegant finish, sharp color reproduction and unmatched environmental specifications.<tr> <td>13 pt. Recycled Matte Cover Stock</td><td>
This high-quality matte text stock is known for its elegant finish, sharp color reproduction and unmatched environmental specifications.
                       </td></tr>
                       </td></tr> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="tags">
       <p>
Posters are available in four standard trim sizes:</p><p>
11" x 17" </p><p>
12.25" x 17.25"</p><p>
18" x 24" </p><p>
24" x 36"</p>
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
            <div class="box-heading"><span>Posters</span></div>
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
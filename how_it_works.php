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
    <meta content="Get printing at lowest price in your city" name="description">
    <meta content="Print Buddies" name="author">
    <link href="images/favicon.png" rel="shortcut icon">
    <title>How It Works</title>

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

    <script src="js/jquery.reveal.js"></script>
    <script>
        function displayPrice()
        {
            $('#myModal').reveal({
                animation: 'fade',                   //fade, fadeAndPop, none
                animationspeed: 300,                       //how fast animtions are
                closeonbackgroundclick: true,              //if you click background will modal close?
                dismissmodalclass: 'close-reveal-modal'    //the class of a button or element that will close an open modal
            });
        }
    </script>
</head>



<body>
<!-- Header -->
<?php
include('header.php');

?>
<!-- end: Header -->


<div class="row clearfix f-space30"></div>
<!-- shop features -->
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <!-- feature box -->
            <div class=" feature-box">
                <div class="feature-title"><i class="fa fa-user circle-icon"></i>
                    <h4>Post Your Job</h4>
                </div>
                <p> Post your printing job on our website so that printers can bid to take your work. If you do not have a design our designers can visit your place to design.</p>
                <p><a href="#" style="color: #31B167" data-reveal-id="myModal" data-animation="fade" onclick="displayPrice()">Know our Designing Pricing</a></p>

            </div>
        </div>
        <!-- end: feature box -->
        <!-- feature box -->
        <div class="col-md-3">
            <div class=" feature-box">
                <div class="feature-title"><i class="fa fa-laptop circle-icon"></i>
                    <h4>Compare & Select</h4>
                </div>
                <p>Compare the prices and services of printers in your city. Select a printer which you find the most suitable to do your job.</p>
            </div>
        </div>
        <!-- end: feature box -->
        <!-- feature box -->

        <div class="col-md-3">
            <div class=" feature-box">
                <div class="feature-title"><i class="fa fa-files-o circle-icon"></i>
                    <h4>Pay & Print</h4>
                </div>
                <p>Get your order printed by the printer you find the most suitable to take your job. Pay 70% advance for your printing job.</p>
            </div>
        </div>
        <!-- end: feature box -->
        <!-- feature box -->
        <div class="col-md-3">
            <div class=" feature-box">
                <div class="feature-title"><i class="fa fa-rocket circle-icon"></i>
                    <h4>Fast Delivery</h4>
                </div>
                <p>  We'll deliver the product as soon as its printed. </p>
            </div>
        </div>
    </div>
</div>
<!-- end: shop features -->
<div class="row clearfix f-space30"></div>
<div class="container">
    <div class="row">
        <div class="middle" >
            <h1>CALL @ 9950-1818-51</h1>
            <p>Give an Appointment <span> &nbsp; &nbsp; » &nbsp; &nbsp; </span> Get It Designed <span> &nbsp; &nbsp; » &nbsp; &nbsp; </span> Pay for designing</p>
        </div>
    </div>
</div>

<div id="myModal" class="reveal-modal" style="top: 100px; opacity: 1; visibility: hidden;">
    <h1 style="font-weight: 100">Pricing</h1>

    <table border="1" style="width: 30%">
        <tr>
            <td>
                Business Cards
            </td>
            <td>
                Rs. 179
            </td>
        </tr>

        <tr>
            <td>
                Bill Books
            </td>
            <td>
                Rs. 65*
            </td>
        </tr>
        <tr>
            <td>
                Banner
            </td>
            <td>
                Rs. 229
            </td>
        </tr>

        <tr>
            <td>
                Flex
            </td>
            <td>
                Rs. 229
            </td>
        </tr>

        <tr>
            <td>
                Brochure
            </td>
            <td>
                Rs. 65 per page
            </td>
        </tr>

        <tr>
            <td>
                Single Page Editing
            </td>
            <td>
                Rs. 135
            </td>
        </tr>

    </table>
    <br>
    <p>
        Note : <br>
        1. This price includes one visit at your place and one hour of designing. <br>
        2. *Price of bill book designing do not include visit at your workplace. <br>
        3. This price is not inclusive of all taxes.
    </p>



    <a class="close-reveal-modal">×</a>
</div>
<!-- big unit -->

<!-- end: big unit -->
<div class="row clearfix f-space30"></div>

<!-- footer -->
<?php
include('footer.php');

?>

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
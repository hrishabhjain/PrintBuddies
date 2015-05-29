<?php
session_start();

if((isset($_SESSION['email']))){
    echo '<script>window.location.href="profile.php"</script>';
}

if((isset($_SESSION['printer_username']))){
    echo '<script>window.location.href="printer_bid.php"</script>';
}


include_once('mysqlclass.php');


if($_POST){
    $username=$_POST['username'];
    $password = $_POST['password'];

    if(login_pr($username,$password))
    {
        $_SESSION['printer_username']=$username;

        header('Location: printer_bid.php');
    }else
    {
        echo '<script>alert(\'Username or Passwaord Incorrect. \')</script>';
    }


}

function  login_pr($username, $pass)
{
    try{
        $mysql = new Mysql();
        $import = "SELECT `username` FROM `printer` WHERE `username`= '$username' AND `password` = '$pass' " ;
        $response = $mysql->executeQuery($import);
        if($response)
            $rows = mysqli_num_rows($response);
        else
            return false;
        if ($rows == 1)
        {
            return true;
        }
        else{
            return false;
        }

    }catch(Exception $error){

        $mysql=new MySql();
        $mysql->write_Exception($error);
        return false;
    }
}
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
    <link href="images/favicon.png" rel="shortcut icon">
    <title>Printer's Login | Print Buddies  </title>

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


<body>
<!-- Header -->
<header>
<!-- Top Heading Bar -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="topheadrow">
                <ul class="nav nav-pills pull-right">
                    <li> <a href="#a">  <span class="hidden-xs">We're hiring! </span></a> </li>
                    <li> <a href="#a">  <i class="fa fa-phone fa-fw"></i><span class="hidden-xs">+91-9950-1818-51 </span></a> </li>

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
<li> <a href="#a"> <i class="fa fa-bars"></i> <span>Marketing</span> <i class="fa fa-angle-right"></i> </a>
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
<li> <a href="#a"> <i class="fa fa-bars"></i> <span>All Products</span></a> </li>
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
            </li>
        </ul>
    </div>
    <!-- end: Navigation Buttons/Quick Cart Tablets and large screens Only -->

</div>
</div>
</div>
</header>


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
                            <h4 class="panel-title"> <a href="#a"> <span class="fa fa-cogs"></span>REGISTER / LOGIN </a><span class="op-number">1</span> </h4>
                        </div>
                        <div class="panel-collapse collapse in" id="op1">
                            <div class="panel-body">
                                <div class="row co-row">

                                    <!-- Login -->
                                    <div class="col-md-6 col-xs-12">
                                        <div class="box-content login-box">
                                            <h4>Request a FREE Visit</h4>
                                            <form method="POST" action="register_visit.php" id="signup">
                                                <input type="email" value="" placeholder="Email" class="input4" name="email" required>
                                                <input type="text" value="" placeholder="Name" class="input4" name="name" required>
                                                <input type="number" maxlength="10" value="" placeholder="Phone" class="input4" name="phone" required>
                                                <input type="text" value="" placeholder="Address" class="input4" name="address" required>
                                                <input type="text" value="" placeholder="City" class="input4" name="city" required>
                                                <input type="number" maxlength="6" value="" placeholder="Pincode" class="input4" name="pincode" required>
                                                <label class="checkbox" for="checkbox1">
                                                </label>
                                                <button type="submit" form="signup" value="Submit" class="btn medium color2 pull-right">Request</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- end: Login -->
                                    <!-- Register -->

                                    <div class="col-md-6 col-xs-12">
                                        <div class="box-content register-box">
                                            <h4>Printers with a existing account.</h4>
                                            <form action="printer.php" method="post">
                                                <input type="text" value="" placeholder="Username" name="username" class="input4" required>
                                                <input type="password" value="" placeholder="Password" name="password" class="input4" required>
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

        <!-- end:sidebar -->
    </div>
    <!-- end:row -->
</div>
<!-- end: container-->

<div class="row clearfix f-space30"></div>

<!-- Rectangle Banners -->

<?php include_once('features.php') ?>
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


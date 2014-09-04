<?php
$defaultTitle = "Friends of St Marcellins Childrens Village";
	$Title = isset($pageTitle)?$pageTitle:$defaultTitle;
?>

<!DOCTYPE html>
<html>

<head>
    <title><?php echo $Title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="keywords" content="<?php echo $keywords; ?>" /> -->
    <meta name="description" content="<?php echo $description; ?>"> <!-- Gets description from top of page -->
    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/responsive.css">
</head>

<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div id="desk-nav">
				<ul id="navigation">
					<li><h4><a href="/who-are-we.php">Who Are We</a></h4></li>
					<li><h4><a href="/about-smcv.php">About St Marcellins Childrens Village</a></h4></li>
					<li><h4><a href="/meet-the-kids.php">Meet the Kids</a></h4></li>
					<li><h4><a href="/projects.php">Projects</a></h4></li>
					<li><h4><a href="/how-can-i-help.php">Fundraising</a></h4></li>
					<li><h4><a href="/contact-us.php">Contact Us</a></h4></li>
				</ul>
			</div>
		</div>
	</div>

<!-- Start Header -->
    <nav class="navbar navbar-inverse navbar-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse" style="padding-right:0px; padding-left:0px;">
            <div id="mobile-nav" class="nav navbar-nav" style="margin-bottom:0px; margin-right:0px; margin-top:0px;">
                    <div class="col-xs-6 mob-nav">
                        <ul class="nav navbar-nav first-col" > <!--col-xs-6 col-sm-8 col-md-8-->
                            <li><h4><a href="/who-are-we.php">Who Are We</a></h4></li>
							<li><h4><a href="/about-smcv.php">About St Marcellins Childrens Village</a></h4></li>
							<li><h4><a href="/meet-the-kids.php">Meet the Kids</a></h4></li>                       
                        </ul>
                    </div>
                    <div class="col-xs-6 mob-nav">
                        <ul class="nav navbar-nav sec-col pull-right"> <!--col-xs-6 col-sm-8 col-md-8-->
                            <li><h4><a href="/projects.php">Projects</a></h4></li>
							<li><h4><a href="/how-can-i-help.php">Fundraising</a></h4></li>
							<li><h4><a href="/contact-us.php">Contact Us</a></h4></li>
                        </ul> 
                    </div>
                    <!-- <div class="col-xs-12 mob-nav-soc">
                        <a href="tel:01959569523" style="margin-left:10px;">
                            <img src="assets/images/phone.png" alt="Contact Number" width="30" height="40" class="sm_logo mob-social" style="margin-top:10px;">
                        </a>
                        <a href="http://google.com/+beyondlocalcouk1">
                            <img src="assets/images/googleplus.png" alt="Icon Google Bk" width="46" height="56" class="social-links sm_logo" style="margin-top:0px; float:right;">
                        </a>
                        <a href="https://twitter.com/beyondlocal_">
                            <img src="assets/images/twitter.png" alt="Follow Beyond Local on Twitter" width="46" height="56" class="social-links sm_logo" style="margin-top:0px; float:right;">
                        </a>
                        <a href="https://www.facebook.com/beyondlocal">
                            <img src="assets/images/facebook.png" alt="Like Beyond Local on Facebook" width="46" height="56" class="social-links sm_logo" style="margin-top:0px; float:right;">
                        </a>
                    </div> -->
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<!-- End Header --> 
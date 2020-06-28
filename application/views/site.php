<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title ;?></title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coalition Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="<?php echo base_url();?>resources/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>resources/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="<?php echo base_url();?>resources/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link rel="stylesheet" href="<?php echo base_url();?>resources/css/flexslider.css" type="text/css" media="screen" property="" />
<!-- font-awesome-icons -->
<link href="<?php echo base_url();?>resources/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="w3_agile_banner_top">
				<div class="agile_phone_mail">
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i>+(000) 123 456 232</li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:Coalition@w3layouts.com">Coalition@w3layouts.com</a></li>
					</ul>
				</div>
			</div>
			<div class="agileits_w3layouts_banner_nav">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.html">Virtually Dial</a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li class="active"><a href="<?php echo site_url('Home')?>">Home</a></li>
							<li><a href="<?php echo site_url('Home/About')?>">About</a></li>
							<li><a href="<?php echo site_url('Home/Pricing')?>">Pricing</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="<?php echo site_url('Services/VirtualNumbers')?>">Virtual Numbers</a></li>
									<li><a href="<?php echo site_url('Services/VOIP')?>">VoIP</a></li>
								</ul>
							</li>
							<li><a href="<?php echo site_url('Home/Contact')?>">Contact</a></li>
						</ul>
						
					</nav>

					</div>
				</nav>
			</div>
			
<?php $this->load->view($view_page);?>
<!-- map -->
<!-- footer -->
	<div class="footer">
		<div class="col-md-4 footer-left-agileits">
			<h3>Address</h3>
				<ul>
					<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 7th Street, Melbourne City, Australia.</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> (4584) 5689 0254 128</li>
				</ul>
		</div>
		<div class="col-md-4 footer-left-agileinfo">
			<h3>Get In Touch</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<ul class="social-icons">
					<li><a href="#" class="icon icon-border facebook"></a></li>
					<li><a href="#" class="icon icon-border twitter"></a></li>
					<li><a href="#" class="icon icon-border instagram"></a></li>
					<li><a href="#" class="icon icon-border pinterest"></a></li>
				</ul>
		</div>
		<div class="col-md-4 footer-left-w3-agileits">
			<h3>Newsletter</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<form action="#" method="post">
					<input type="email" name="email" placeholder="Your email..." required="">
					<input type="submit" value=" ">
				</form>
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //footer --> 
	<div class="copyright-w3-agile">
		<div class="container">
			<p>© 2017 Coalition. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- for bootstrap working -->
	<script src="<?php echo base_url();?>resources/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>
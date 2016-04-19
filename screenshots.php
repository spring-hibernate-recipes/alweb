<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>AryaLinux</title>
<meta name="description" content="The HTML5 Herald">
<meta name="author" content="SitePoint">
<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php include_once 'styles.php'?>
<link rel="stylesheet" type="text/css" href="css/jcarousel.vertical.css">
<script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="js/jcarousel.vertical.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
</head>
<body>
	<?php include_once('heading.php')?>
	<?php $currentPage="aboutAryaLinux.php"?>
	<?php include_once 'menu.php';?>
	<?php include_once 'banner.php';?>
	<?php include_once 'functions.php';?>
	<div class="full centered">
		<div class="quarter">
			<?php include_once 'aboutMenu.php';?>
		</div>
		<div class="three-quarters doublem">
			<h2>AryaLinux Screenshots</h2>
			<div class="wrapper">
				<div class="jcarousel-wrapper">
					<div class="jcarousel">
						<ul>
							<li><img src="images/s1.png" alt=""></li>
							<li><img src="images/s2.png" alt=""></li>
							<li><img src="images/s3.png" alt=""></li>
							<li><img src="images/s4.png" alt=""></li>
							<li><img src="images/s5.png" alt=""></li>
							<li><img src="images/Screenshot-19.png" alt=""></li>
							<li><img src="images/Screenshot-20.png" alt=""></li>
							<li><img src="images/Screenshot-28.png" alt=""></li>
							<li><img src="images/Screenshot-29.png" alt=""></li>
						</ul>
					</div>
					<p class="photo-credits">AryaLinux Screenshots</p>
					<a href="#" class="jcarousel-control-prev">&lsaquo;</a> <a href="#"
						class="jcarousel-control-next">&rsaquo;</a>
				</div>
			</div>
		</div>
	</div>
	<div style="clear: both"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<?php include_once 'footer.php';?>
</body>
</html>

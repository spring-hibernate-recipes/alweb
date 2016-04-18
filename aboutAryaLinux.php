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
</head>
<body>
	<?php include_once('heading.php')?>
	<?php $currentPage="aboutAryaLinux.php"?>
	<?php include_once 'menu.php';?>
	<?php include_once 'banner.php';?>
	<?php include 'functions.php';?>
	<div class="full centered">
		<div class="quarter">
			<ul>
				<li><a href="aboutAryaLinux.php">About AryaLinux</a></li>
				<li><a href="history.php">A bit of History</a></li>
				<li><a href="faqs.php">FAQs</a></li>
				<li><a href="roadmap.php">Roadmap</a></li>
				<li><a href="#">Packages</a></li>
			</ul>
		</div>
		<div class="three-quarters">
	<?php article("About AryaLinux", "AryaLinux is a source-based Linux distribution inspired by LFS/BLFS. We use bash scripts for building the entire distribution ground up. As of now, AryaLinux has Mate and XFCE spins as the supported desktop environments but suport for other desktops is in progress.")?>
	</div>
	</div>
	<div style="clear: both"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<?php include_once 'footer.php';?>
</body>
</html>

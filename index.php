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
	<?php $currentPage="index.php"?>
	<?php include_once 'menu.php';?>
	<?php include_once 'banner.php';?>
	<?php include 'functions.php';?>
	<div class="full centered">
		<div class="three-quarters">
	<?php article("Welcome to AryaLinux", "AryaLinux is a GNU/Linux based operating system that is built by building source code of the various components packages that it comprises of. In more geeky terms its a source based Linux Distribution. Its fast, comprehensive and provides pre-installed applications that are pretty much enough for the day to day user. AryaLinux also provides the flexibility to build your own Linux distribution by providing the necessary tools to do so. ")?>
	</div>
	</div>
	<div style="clear: both"></div>
	<div class="full centered">
	<?php newsHeading("Pre-Release notes - AryaLinux 2016.04", NULL, "14th April, 2016")?>
	<?php newsHeading("Gearing up for AryaLinux 2016.04", NULL, "14th April, 2016")?>
	</div>
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
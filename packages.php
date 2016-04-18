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
	<?php $currentPage="packages.php"?>
	<?php include_once 'menu.php';?>
	<?php include_once 'banner.php';?>
	<?php include_once 'functions.php';?>
	<div class="full centered">
		<div class="three-quarters doublem">
			<h2>AryaLinux Packages</h2>
			<form action="searchResults.php">
				<input name="keywords" size="50"> <input type="submit"
					value="Search">
			</form>
			<h2>Categories</h2>
			<ul>
				<li><a href="#">Base System (LFS Packages)</a></li>
				<li><a href="#">Networking</a></li>
				<li><a href="#">Desktop Environments</a></li>
				<li><a href="#">Multimedia</a></li>
				<li><a href="#">System Utilities</a></li>
				<li><a href="#">Miscellaneous</a></li>
				<li><a href="#">Games</a></li>
			</ul>
			<h2>Submit a build script</h2>
			<p>
				In case you have created a build script for a particular package,
				you can submit the same at aryalinux11@gmail.com. Please make sure
				that you follow the same format for your build script as outlined in
				the <a href="">documentation</a>.
			</p>
		</div>
		<div class="quarter"><?php include_once 'downloadSidePanel.php';?></div>
	</div>
	<div style="clear: both"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<?php include_once 'footer.php';?>
</body>
</html>

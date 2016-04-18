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
	<?php $currentPage="downloads.php"?>
	<?php include_once 'menu.php';?>
	<?php include_once 'banner.php';?>
	<?php include_once 'functions.php';?>
	<div class="full centered doublem">
		<div class="quarter" style="background-color: #e2e2e2">
			<div class="padded small-text">
				<b>Release 2016.04</b><br> <br> <a href="#">aryalinux-builder-i386.iso</a><br>
				<a href="#">aryalinux-builder-ix86_64.iso</a><br> <a href="#">aryalinux-mate-live-i386.iso</a><br>
			</div>
			<div class="hspace" style="background-color: #fff"></div>
			<div class="hspace" style="background-color: #fff"></div>
			<div class="padded small-text">
				<b>Release 2015</b><br> <br> <a href="#">aryalinux-builder-i386.iso</a><br>
				<a href="#">aryalinux-builder-ix86_64.iso</a><br> <a href="#">aryalinux-mate-live-i386.iso</a><br>
				<a href="#">aryalinux-xfce-live-i386.iso</a><br> <a href="#">aryalinux-mate-live-x86_64.iso</a><br>
				<a href="#">aryalinux-xfce-live-x86_64.iso</a><br>
			</div>
		</div>
		<div class="three-quarters">
			<div class="padded justified doublem">
				<h1>Build Tools</h1>
				<p>Build tools are essentially bash scripts that can be used to
					build a full fledged GNU/Linux system from the ground up. Apart
					from scripts created using instructions from LFS and BLFS, build
					tools also contain extra-scripts to add more functionality to the
					result of a certain stage of compilation/building.</p>
				<ul>
					<li><a href="#">AryaLinux 2016.04 build scripts</a></li>
				</ul>
				<h1>Builder DVD</h1>
				<p>These builder DVDs contain the build scripts as well as source
					code that would otherwise be downloaded only when the corresponding
					package is built. For the sake of making ISOs that would fit into a
					DVD, we have categorized the DVDs on the basis of the target system
					that would be built using it.</p>
				<ul>
					<li><a href="#">AryaLinux 2016.04 32 bit Builder DVD</a></li>
					<li><a href="#">AryaLinux 2016.04 64 bit Builder DVD</a></li>
				</ul>
				<h1>Live DVD Images</h1>
				<p>These images can be directly written onto DVDs or USB drives and booted into. Building packages from scratch might pose problems in these DVDs because the architecture on which you might be building the packages may not match the architecture that we have used to build these systems. Nonetheless, these live DVDs contain a lot of software for general purpose computing like Multimedia Players, Internet Browsers, E-Mail Clients etc.</p>
				<ul>
					<li><a href="#">Mate Live Disk</a></li>
					<li><a href="#">XFCE live disk</a></li>
					<li><a href="#">Gnome live disk</a></li>
					<li><a href="#">KDE live disk</a></li>
				</ul>
				<h1>Previous Releases</h1>
				<p>
					Click <a href="#">here</a> to view all releases done so far.
				</p>
			</div>
		</div>
	</div>
	<div class="three-quarters"></div>
	<div style="clear: both;"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<?php include_once 'footer.php';?>
</body>
</html>
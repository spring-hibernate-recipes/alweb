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
	<?php article("A bit of history", "AryaLinux started off as a research project in the year 2007 when I was still learning how to use Linux. It took almost close to three weeks for me to come up with a working LFS system on a pretty slow AMD processor based system. BLFS with a functional XFCE took another couple of months and all of this while I was spending sleepless nights copying and pasting instructions from the LFS/BLFS books. Of course ALFS used to exist but even ALFS seemed like a difficult proposition to me to set up and run. Ever since then I was wishing to build what is &quot;aryalinux build scripts&quot; as of now.<br><br>The scripts that I built over the subsequent years were not nearly ready to be released and so I kept working on them till they'd mature enough. A few years back only after reuniting with Rakesh Khandelwal(Creator and Maintainer of <a href=\"prathamos.org\">Pratham OS</a>), a very old and dear friend of the good old school days that I shared my idea of building a distro around scripts, inspired by LFS. He encouraged me to build and release the scripts that I had worked on over the years but there was another challange. LFS sort of helps you build a usable GNU/Linux Desktop but you would still need to build/install a lot of things on your own outside the LFS/BLFS ecospace to end up with a really working OS worthy of running alongside or even replacing any existing system for that matter. Painstkingly, we worked through a lot of minor details - Hardware Driver Issues, Circular Package Dependencies, Package Management System etc and here we are.")?>
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

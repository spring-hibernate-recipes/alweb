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
			<h2>Road Map</h2>
			<table style="width: 100%;" cellspacing="0" cellpadding="10">
				<tr>
					<th>Status</th>
					<th>Tentative Date</th>
					<th style="width: 60%">Task</th>
				</tr>
				<tr>
					<td>In Progress</td>
					<td>2016 April 30</td>
					<td>Release 2016.04 build-tools and builder DVDs</td>
				</tr>
				<tr>
					<td>In Progress</td>
					<td>2016 April 30</td>
					<td>Release 2016.04 Mate and XFCE base live systems</td>
				</tr>
				<tr>
					<td>In Progress</td>
					<td>2016 May 30</td>
					<td>Release 2016.04 Gnome and KDE base live systems</td>
				</tr>
			</table>
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

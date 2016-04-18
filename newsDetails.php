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
	<?php $currentPage="news.php"?>
	<?php include_once 'menu.php';?>
	<?php include_once 'banner.php';?>
	<?php include_once 'functions.php';?>
	<div class="full centered doublem">
		<?php $id = $_REQUEST['id']?>
		<?php if(isset($id)) {?>
		<?php $news = news($id)?>
		<?php if (count($news) > 0) {?>
		<?php $news = $news[0]?>
		<?php }?>
		<?php $date = $news['createdOn']?>
		<?php $heading = $news['heading']?>
		<?php $summary = $news['summary']?>
		<?php $body = $news['body']?>
		<?php $date = $news['createdOn']?>
		<?php $sign = $news['author']?>
		<?php $signAlign = "right";?>
		<?php include 'templates/newsDetails.php';?>
		<?php } else {?>
			No news article found with the ID specified.
		<?php }?>
	</div>
	<div style="clear: both"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<?php include_once 'footer.php';?>
</body>
</html>

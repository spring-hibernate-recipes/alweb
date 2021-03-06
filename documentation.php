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
	<?php $currentPage="documentation.php"?>
	<?php include_once 'menu.php';?>
	<?php include_once 'banner.php';?>
	<?php include_once 'functions.php';?>
	<div class="full centered">
		<div class="quarter doublem">
			<?php include_once 'documentationCategories.php';?>
		</div>
		<div class="three-quarters">
			<h2>Search Documentation</h2>
			<form action="searchResults.php">
				<input type="text" name="search" size="40"> <input type="submit"
					value="Search">
			</form>
			<div class="hspace"></div>
			<div class="hspace"></div>
			<h2>Recent Articles</h2>
			<?php $query = 'select id, summary, heading from articles where type=4 order by id desc limit 5'?>
			<?php $articles = query($query);?>
			<?php foreach ($articles as $article) { ?>
			<h3><?php echo $article['heading']?></h3>
			<p class="justified"><?php echo $article['summary']?></p>
			<p style="text-align: right;">
				<a href="readDoc.php?id=<?php echo $article['id']?>">Read More</a>
			</p>
			<?php }?>
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

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
			<h2>AryaLinux Documentation</h2>
			<form action="searchResults.php">
				<input type="text" name="search" size="40"> <input type="submit"
					value="Search">
			</form>
			<div class="hspace"></div>
			<?php $id = $_REQUEST['id']?>
			<?php $query = "select * from articles where type=4 and id='$id'"?>
			<?php $article = query($query)[0];?>
			<h3><?php echo $article['heading']?></h3>
			<i class="justified"><?php echo $article['summary']?></i>
			<p class="justified">
				<?php echo $article['body']?>
			</p>
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

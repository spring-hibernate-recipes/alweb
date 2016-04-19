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
			<?php $id = $_REQUEST["id"]?>
			<h2>Packages in <?php echo packageCategoryById($id)?></h2>
			<?php menuFromRecords(packagesByCategory($id), "packageReleases.php", "id", "name", NULL)?>
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

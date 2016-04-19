<?php include_once '../functions.php';?>
<?php if (!isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] != 'YES') {?>
<?php header("Location: index.php")?>
<?php }?>
<?php include_once 'ui.php';?>
<?php $id = $_REQUEST['id']?>
<?php $query = "select * from articles where id='$id'"?>
<?php $article = query($query)[0]?>
<?php $heading = $article['heading']?>
<?php $summary = $article['summary']?>
<?php $body = $article['body']?>
<?php $category = $article['category']?>
<?php $type = $article['type']?>
<html>
<head>
<meta name="viewport"
	content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<script src="js/jquery-1.12.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Bevan'
	rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="style.css">
<link
	href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600italic,700,700italic'
	rel='stylesheet' type='text/css'>
<title>Admin : AryaLinux</title>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid"><?php include_once 'header.php';?></div>
	</nav>
	<div class="main-content">
		<h2 style="padding-left: 10px;">Editing article</h2>
		<hr>
		<form method="post" action="saveArticle.php" class="form">
			<input type="hidden" name="id" value="<?php echo $id?>">
			<div class="form-group">
				<input type="text" name="heading" placeholder="Heading"
					class="form-control" id="heading" value="<?php echo $heading?>">
			</div>
			<div class="form-group">
				<input type="text" name="category" placeholder="Category"
					class="form-control" id="category" value="<?php echo $category?>">
			</div>
			<div class="form-group">
				<textarea name="summary" placeholder="Summary" class="form-control"
					id="summary"><?php echo $summary?></textarea>
			</div>
			<div class="form-group">
				<textarea name="body" placeholder="Body" class="form-control"
					id="body" style="height: 200px;"><?php echo $body?></textarea>
			</div>
			<div class="form-group">
				<?php select(array("0"=>"-", "1"=>"General Article", "2"=>"News", "4"=>"Documentation"), $type, "type")?>
			</div>
			<div style="text-align: right">
				<a href="articles.php" class="btn btn-warning">Back to all articles</a>&nbsp;
				<input type="submit" value="Save" class="btn btn-primary">
			</div>
		</form>
	</div>
</body>
</html>

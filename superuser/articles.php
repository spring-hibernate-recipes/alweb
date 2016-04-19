<?php include_once '../functions.php';?>
<?php if (!isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] != 'YES') {?>
<?php header("Location: index.php")?>
<?php }?>
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
		<h2 style="padding-left: 10px;">Articles</h2>
		<div style="text-align: right"><a href="newArticle.php" class="btn btn-success">New Article</a></div>
		<?php $query = "select id, heading, summary, createdOn from articles"?>
		<?php $results = query($query)?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Heading</th>
					<th>Date</th>
					<th>Summary</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($results as $article) {?>
			<tr>
					<td><?php echo $article['heading']?></td>
					<td><?php echo $article['createdOn']?></td>
					<td><?php echo $article['summary']?></td>
					<td><a href="deleteArticle.php?id=<?php echo $article['id']?>"
						class="btn btn-danger">Delete</a></td>
					<td><a href="editArticle.php?id=<?php echo $article['id']?>"
						class="btn btn-primary">Edit</a></td>
				</tr>
			<?php }?>
			</tbody>
		</table>
	</div>
</body>
</html>

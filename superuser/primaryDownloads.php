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
		<div style="text-align: right">
			<a href="newPrimaryDownload.php" class="btn btn-success">New Primary
				Download</a>
		</div>
		<?php $query = 'select * from releases'?>
		<?php $results = query($query)?>
		<?php $releases = array()?>
		<?php foreach ($results as $release) {?>
		<?php $releases[$release['id']] = $release['name']?>
		<?php }?>
		<?php $query = "select * from primaryDownloads"?>
		<?php $results = query($query)?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Release</th>
					<th>Button Label</th>
					<th>Download Link</th>
					<th>Download Button</th>
					<th>Active</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($results as $primaryDownload) {?>
			<tr>
					<td><?php echo $releases[$primaryDownload['releaseId']]?></td>
					<td><?php echo $primaryDownload['label']?></td>
					<td><?php echo $primaryDownload['downloadLink']?></td>
					<td><?php echo $primaryDownload['downloadButtonClass']?></td>
					<td><?php echo $primaryDownload['isActive']?></td>
					<td><a href="editPrimaryDownload.php?id=<?php echo $release['id']?>"
						class="btn btn-primary">Edit</a></td>
				</tr>
			<?php }?>
			</tbody>
		</table>
	</div>
</body>
</html>

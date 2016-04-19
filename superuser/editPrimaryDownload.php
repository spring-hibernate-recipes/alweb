<?php include_once '../functions.php';?>
<?php if (!isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] != 'YES') {?>
<?php header("Location: index.php")?>
<?php }?>
<?php include_once 'ui.php';?>
<?php $query = 'select * from releases'?>
<?php $result = query($query)?>
<?php $releases = array()?>
<?php foreach ($result as $release) {?>
<?php $releases[$release['id']] = $release['name']?>
<?php }?>
<?php $id = $_REQUEST['id']?>
<?php $query="select * from primaryDownloads where id='$id'"?>
<?php $primaryDownload = query($query)[0]?>
<?php $buttons = array("orange"=>"Orange Button", "blue"=>"Blue Button")?>
<?php $activeStatus = array("0"=>"Not Active", "1"=>"Active")?>
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
		<h2 style="padding-left: 10px;">New Primary Download</h2>
		<hr>
		<form method="post" action="savePrimaryDownload.php" class="form">
			<input name="id" type="hidden" value="<?php echo $id?>">
			<div class="form-group">
				<?php select($releases, $primaryDownload['releaseId'], "releaseId")?>
			</div>
			<div class="form-group">
				<input type="text" name="label" placeholder="Download Button Label"
					class="form-control" id="label" value="<?php echo $primaryDownload['label']?>">
			</div>
			<div class="form-group">
				<input type="text" name="downloadLink" placeholder="Download Link"
					class="form-control" id="downloadLink" <?php echo $primaryDownload['downloadLink']?>>
			</div>
			<div class="form-group">
				<textarea name="releaseNotes" placeholder="Release Notes"
					class="form-control" id="releaseNotes" style="height: 200px;"><?php echo $primaryDownload['releaseNotes']?></textarea>
			</div>
			<div class="form-group">
				<?php select($buttons, $primaryDownload['downloadButtonClass'], "downloadButtonClass")?>
			</div>
			<div class="form-group">
				<?php select($activeStatus, $primaryDownload['isActive'], "isActive")?>
			</div>
			<div style="text-align: right">
				<a href="primaryDownloads.php" class="btn btn-warning">Back to
					primary downloads</a>&nbsp; <input type="submit" value="Save"
					class="btn btn-primary">
			</div>
		</form>
	</div>
</body>
</html>

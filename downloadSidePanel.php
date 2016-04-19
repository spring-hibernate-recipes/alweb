<?php include_once 'release.php';?>
<?php include_once 'functions.php';?>
<?php $query = "select * from primaryDownloads where isActive='1'"?>
<?php $downloads = query($query)?>
<?php foreach ($downloads as $download) {?>
<?php

	$downloadLink = $download ['downloadLink'];
	$buttonClass = $download ['downloadButtonClass'];
	$downloadLabel = $download ['label'];
	$releaseNotesLink = 'releaseNotes.php?id=' . $download ['id'];
	?>
<div class="hspace"></div>
<div class="release-div">
	<a href="<?php echo $downloadLink?>" class="<?php echo $buttonClass?>" target="_new"><?php echo $downloadLabel?></a>
	<div class="hspace"></div>
	<a href="<?php echo $releaseNotesLink?>" target="_new">Release Notes</a>
	<div class="hspace"></div>
	<div class="hspace"></div>
	<div class="hspace"></div>
</div>
<?php }?>
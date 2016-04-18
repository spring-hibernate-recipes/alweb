<?php include_once 'release.php';?>
<?php foreach ($releases as $release) {?>
<?php

	$downloadLink = $release->downloadLink;
	$buttonClass = $release->buttonClass;
	$downloadLabel = $release->downloadLabel;
	$releaseNotesLink = $release->releaseNotesLink;
	?>
<div class="hspace"></div>
<div class="release-div">
	<a href="<?php echo $downloadLink?>" class="<?php echo $buttonClass?>"><?php echo $downloadLabel?></a>
	<div class="hspace"></div>
	<a href="<?php echo $releaseNotesLink?>">Release Notes</a>
	<div class="hspace"></div><div class="hspace"></div><div class="hspace"></div>
</div>
<?php }?>
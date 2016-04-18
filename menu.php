<?php
$mainMenu = array (
		"index.php" => "Home",
		"packages.php" => "Packages",
		"documentation.php" => "Documentation",
		"downloads.php" => "Downloads",
		"aboutAryaLinux.php" => "About Aryalinux",
		"news.php" => "News",
		"contactUs.php" => "Contact Us" 
)?>
<div class="green-bg">
	<div class="main-menu centered full">
		<ul>
		<?php foreach ($mainMenu as $page=>$label) {?>
			<li><a href="<?php echo $page?>"
				class="<?php if ($currentPage == $page) {echo "current";}?>"><?php echo $label?></a></li>
		<?php }?>
			<div style="clear: both"></div>
		</ul>
	</div>
</div>

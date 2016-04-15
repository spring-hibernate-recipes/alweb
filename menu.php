<?php
$mainMenu = array (
		"index.php" => "Home",
		"downloads.php" => "Downloads",
		"news.php" => "News",
		"aboutUs.php" => "About Us",
		"contactUs.php" => "Contact Us",
		"packages.php" => "Packages",
		"articles.php" => "Articles" 
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
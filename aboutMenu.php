<?php
include_once 'functions.php';
$options = array (
		"aboutAryaLinux.php" => "About AryaLinux",
		"history.php" => "A bit of History",
		"screenshots.php" => "Screenshots",
		"faqs.php" => "FAQs",
		"taskProgress.php" => "Roadmap and Status" 
);
$class = "sidebar-menu doublem";
createMenu ( $options, $class );
?>
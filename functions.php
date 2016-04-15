<?php
function article($heading, $body, $date = NULL, $sign = NULL, $signAlign = "right") {
	include 'templates/article.php';
}
function newsHeading($heading, $body, $date = NULL, $sign = NULL, $signAlign = "right") {
	include 'templates/newsHeading.php';
}
?>
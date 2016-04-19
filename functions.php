<?php
include_once 'globalvars.php';
function connect() {
	$mysqli = mysqli_connect ( "localhost", "root", "password@123", "aryadynamic" );
	return $mysqli;
}
function query($query) {
	$link = connect ();
	debug ( $query );
	$result = mysqli_query ( $link, $query );
	$data = array ();
	while ( $row = mysqli_fetch_assoc ( $result ) ) {
		$data [] = $row;
	}
	mysqli_close ( $link );
	return $data;
}
function findArticle($params) {
	if (isset ( $params ['heading'] )) {
		$query = "select id, heading, summary, body, author, createdOn, type, category from articles where heading='$params[heading]'";
	} else if (isset ( $params ['id'] )) {
		$query = "select id, heading, summary, body, author, createdOn, type, category from articles where id='$params[id]'";
	}
	debug ( $query );
	return query ( $query );
}
function article($params) {
	$article = findArticle ( $params );
	if (count ( $article ) >= 1) {
		$article = $article [0];
		$heading = $article ['heading'];
		$body = $article ['body'];
		$date = NULL;
		$sign = NULL;
		$signAlign = "right";
		include 'templates/article.php';
	}
}
function latestNewsHeadings() {
	$query = "select id, heading, summary, author, createdOn from articles where type='2' order by createdOn desc limit 5";
	debug ( $query );
	$result = query ( $query );
	foreach ( $result as $row ) {
		$heading = $row ['heading'];
		$summary = $row ['summary'];
		$date = NULL;
		$sign = NULL;
		$signAlign = "right";
		$id = $row ['id'];
		include 'templates/newsHeading.php';
	}
}
function news($id) {
	$query = "select * from articles where type='2' and id='$id'";
	return query ( $query );
}
function roadmap() {
	$query = "select status, DATE_FORMAT(tentativeDate, '%Y, %M %d') as `tentativeDate`, task from roadmap where year(tentativeDate) = year(now())";
	return query ( $query );
}
function packageCategories() {
	$query = "select id, name from packages where isPackage=0";
	return query ( $query );
}
function packagesByCategory($id) {
	$query = "select id, name from packages where isPackage=1";
	return query ( $query );
}
function packageCategoryById($id) {
	$query = "select name from packages where id='$id' and isPackage=0";
	$result = query ( $query );
	$name = NULL;
	if (count ( $result )) {
		$name = $result [0] ['name'];
	}
	return $name;
}
function createMenu($options, $class) {
	include 'templates/menu.php';
}
function menuFromRecords($records, $pageName, $pageColumn, $labelColumn, $class) {
	$options = array ();
	foreach ( $records as $record ) {
		$options [$pageName . "?id=" . $record [$pageColumn]] = $record [$labelColumn];
	}
	createMenu ( $options, $class );
}
function debug($stuff) {
	if (isset ( $_REQUEST ["8971789157"] )) {
		echo $stuff;
	}
}
?>
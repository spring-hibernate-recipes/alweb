<?php include_once '../functions.php';?>
<?php if (!isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] != 'YES') {?>
<?php header("Location: index.php")?>
<?php }?>
<?php if (isset($_REQUEST['id'])) {?>
<?php $id = $_REQUEST['id']?>
<?php }?>
<?php $heading = addslashes($_REQUEST['heading'])?>
<?php $summary = addslashes($_REQUEST['summary'])?>
<?php $body = addslashes($_REQUEST['body'])?>
<?php $type = $_REQUEST['type']?>
<?php $category = addslashes($_REQUEST['category'])?>
<?php $author = $_SESSION['name']?>
<?php $type = $_REQUEST['type']?>
<?php if (isset($id)) {?>
<?php $query = "update articles set heading='$heading', summary='$summary', body='$body', type='$type', category='$category', author='$author', type='$type' where id='$id'"?>
<?php } else {?>
<?php $query = "insert into articles (heading, summary, category, body, createdOn, author, type) values ('$heading', '$summary', '$category', '$body', now(), '$author', '$type')"?>
<?php }?>
<?php $result = update($query)?>
<?php if ($result) {?>
<?php header("Location: articles.php?SUCCESS")?>
<?php } else {?>
<?php echo $query?>
<?php //header("Location: articles.php?ERR")?>
<?php }?>
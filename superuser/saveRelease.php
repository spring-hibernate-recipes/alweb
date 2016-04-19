<?php include_once '../functions.php';?>
<?php if (!isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] != 'YES') {?>
<?php header("Location: index.php")?>
<?php }?>
<?php if (isset($_REQUEST['id'])) {?>
<?php $id = $_REQUEST['id']?>
<?php }?>
<?php $name = addslashes($_REQUEST['name'])?>
<?php $summary = addslashes($_REQUEST['summary'])?>
<?php $isActive = addslashes($_REQUEST['isActive'])?>
<?php $codename = addslashes($_REQUEST['codename'])?>
<?php if (isset($id)) {?>
<?php $query = "update releases set name='$name', codename='$codename', summary='$summary', isActive='$isActive' where id='$id'"?>
<?php } else {?>
<?php $query = "insert into releases (name, summary, createdDate, isActive, codename) values ('$name', '$summary', now(), '$isActive', '$codename')"?>
<?php }?>
<?php $result = update($query)?>
<?php if ($result) {?>
<?php header("Location: releases.php?SUCCESS")?>
<?php } else {?>
<?php echo $query?>
<?php //header("Location: articles.php?ERR")?>
<?php }?>
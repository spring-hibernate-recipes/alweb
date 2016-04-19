<?php include_once '../functions.php';?>
<?php if (!isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] != 'YES') {?>
<?php header("Location: index.php")?>
<?php }?>
<?php if (isset($_REQUEST['id'])) {?>
<?php $id = $_REQUEST['id']?>
<?php }?>
<?php $releaseId = $_REQUEST['releaseId']?>
<?php $downloadLink = addslashes($_REQUEST['downloadLink'])?>
<?php $releaseNotes = addslashes($_REQUEST['releaseNotes'])?>
<?php $downloadButtonClass = $_REQUEST['downloadButtonClass']?>
<?php $label = $_REQUEST['label']?>
<?php $isActive = $_REQUEST['isActive']?>
<?php if (isset($id)) {?>
<?php $query = "update primaryDownloads set releaseId='$releaseId', downloadLink='$downloadLink', releaseNotes='$releaseNotes', isActive='$isActive', downloadButtonClass='$downloadButtonClass', label='$label' where id='$id'"?>
<?php } else {?>
<?php $query = "insert into primaryDownloads (releaseId, downloadLink, releaseNotes, isActive, downloadButtonClass, label) values ('$releaseId', '$downloadLink', '$releaseNotes', '$isActive', '$downloadButtonClass', '$label')"?>
<?php }?>
<?php $result = update($query)?>
<?php if ($result) {?>
<?php echo $query?>
<?php header("Location: primaryDownloads.php?SUCCESS")?>
<?php } else {?>
<?php echo $query?>
<?php //header("Location: articles.php?ERR")?>
<?php }?>
<?php include_once '../functions.php';?>
<?php $username = $_REQUEST["username"]?>
<?php $password = $_REQUEST["password"]?>
<?php $query = "select * from users where username='$username' and password='$password'"?>
<?php $result = query($query)?>
<?php if(count($result)) {?>
<?php $_SESSION['name'] = $result[0]['name']?>
<?php $_SESSION['loggedIn'] = 'YES'?>
<?php header("Location: home.php")?>
<?php }?>
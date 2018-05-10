<?php
include("class/users.php");
$login= new users;
extract($_POST);
if($login->signin($email,$pwd))
{
	$login->url("home.php");
}
else if($login->signinadmin($email,$pwd))
{
	$login->url("admin.php");
}
else
{
	$login->url("index.php?run=failed");
}

?>
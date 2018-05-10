<?php
include("class/users.php");
$lout= new users;
if($lout->logout())
{
	$lout->url("index.php");
}
?>

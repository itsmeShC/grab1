<?php
include("class/users.php");
$register= new users;
extract($_POST);
$img_name=$_FILES["img"]["name"];
$tmp_name=$_FILES["img"]["tmp_name"];
move_uploaded_file($tmp_name,"img/".$img_name);
$query="insert into  values admin_panel('','$e','$p','$img_name')";
if($register->signupadmin($query))
 {
	$register->url("admin.php?run=success");
 }	


?>
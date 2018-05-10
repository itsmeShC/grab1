<?php
include("class/users.php");
$register= new users;
extract($_POST);
$m=$sdate.$tsdate;
$n=$edate.$tedate;
$x=date("Y-m-d H:i:s",$m);
$y=date("Y-m-d H:i:s",$n);
$query="insert into category values ('$tid','$tn','$x','$y','$tm')";
if($register->category($query))
 {
	$register->url("admin.php");
 }	


?>
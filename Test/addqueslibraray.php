<?php
include("class/users.php");
$register= new users;
extract($_POST);
$query="insert into library values ('','$ques','$ans1','$ans2','$ans3','$ans4','$ans','$cat_id')";
if($register->addlibrary($query))
 {
	$register->url("admin.php?run=success");
 }	


?>
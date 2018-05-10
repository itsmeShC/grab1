<?php
include("class/users.php");
$register= new users;
extract($_POST);
$query="insert into ques_ans values ('','$ques','$ans1','$ans2','$ans3','$ans4','$ans','$tid')";
if($register->signupadmin($query))
 {
	$register->url("admin.php?run=success");
 }	


?>
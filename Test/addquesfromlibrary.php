<?php
include("class/users.php");
$ques= new users;
$ques1= new users;
$ques->libra();
foreach ($ques->ans2 as $show) 
{
	$x=$show['id'];
	if($_POST["$x"]=="1"){
     $a=$show['ques'];$b=$show['ans1']; $c=$show['ans2']; $d=$show['ans3']; $e=$show['ans4']; $f=$show['ans']; $g=$show['cat_id'];
   $ques->connect->query("insert into ques_ans values ('' ,'$a', '$b' , '$c' , '$d' , '$e' , '$f' , '$g')");

       $ques->connect->query("delete  from library where id='$x'");


}
 
 }
 echo "please click back for adding more questions";

?>
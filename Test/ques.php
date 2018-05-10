<?php
include("class/users.php");
$qus=new users;
$ques=new users;
extract($_POST);
if($ques->match($cat))
{
  
  $ques->url("home1.php");
}
$qus->q_ans($cat);
$qus->datetime($cat);
foreach ($qus->datet as $a) 
{
 $t=$a['time'];
}
 

$_SESSION['cat']=$cat;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </script>
  
</head>
<body onload='timeout()' >

<div class="container">

  <h2>Online Test <div id="time" style="float: right;">timeout</div> </h2>
  <form action="result.php" id="form1" method="post">
  <?php 
   $i=1;
    foreach  ($qus->ans as $quiz)
    { ?>     
  <table class="table table-striped">
    <thead>
      <tr>
        <th class="danger"><?php echo $i.".".$quiz['ques'] ?></th>
      </tr> 
    </thead>
    <tbody>
     <?php if(isset($quiz['ans1'])) { ?>
      <tr>
        <td class="info">A.<input type="radio" value="0" name="<?php echo $quiz['id'] ?>"><?php echo $quiz['ans1'] ?></td>
      </tr>
      <?php } ?>
      <?php if(isset($quiz['ans2'])) { ?>
      <tr>
        <td class="info">B.<input type="radio" value="1" name="<?php echo $quiz['id'] ?>"><?php echo $quiz['ans2'] ?></td>
      </tr>
      <?php } ?>
      <?php if(isset($quiz['ans3'])) { ?>
      <tr>
        <td class="info">C.<input type="radio" value="2" name="<?php echo $quiz['id'] ?>"><?php echo $quiz['ans3'] ?></td>
      </tr>
      <?php } ?>
      <?php if(isset($quiz['ans4'])) { ?>
      <tr>
        <td class="info">D.<input type="radio" value="3" name="<?php echo $quiz['id'] ?>"><?php echo $quiz['ans4'] ?></td>
      </tr>
      <?php } ?>
      <tr>
        <td><input type="radio" value="4" checked="checked" style="display: none;" name="<?php echo $quiz['id'] ?>"></td>
      </tr>
    </tbody>
  </table>

  
 <?php $i++;} ?>
 <center><input type="submit" class="btn btn-danger"></center>
 </form>
</div>

</body>
<script type="text/javascript">
  var timeleft=<?php echo $t*60 ?>;


      function timeout()
    {
      var minute=Math.floor(timeleft/60);
      var second=timeleft%60;

      if(timeleft<=0)
      {
        clearTimeout(tm);
        document.getElementById("form1").submit();
      }
      else
      {
        document.getElementById("time").innerHTML=minute+":"+second; 
  

      
      }
      timeleft--;
      var tm=setTimeout("timeout()",1000);
      
    }
  </script>
 
</html>

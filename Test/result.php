<?php
include("class/users.php");
$ans= new users;
$ans->ans_match($_POST);
$right=0;
$wrong=0;
$not_attempted=0;
$total=0;
foreach( $ans->ans1 as $b)
{
    $z= $b["id"];
	if($_POST["$z"]==$b["ans"])
	{
		$right++;
	}
	else if($_POST["$z"]=="4")
    {
    	$not_attempted++;
    }
    else
    {
    	$wrong++;
    }
}
$total = $right + $wrong + $not_attempted;
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
</head>
<body>

<div class="container">
  <h2>Result</h2>           
  <table class="table table-bordered">
    <tbody>
      <tr>
        <td><b>Total no. of questions</b></td>
        <td><b><?php echo $total ?></b></td>
      </tr>
      <tr>
        <td>Right answers</td>
        <td><?php echo $right ?></td>
      </tr>
      <tr>
        <td>wrong answers</td>
        <td><?php echo $wrong ?></td>
      </tr>
       <tr>
        <td>Not attempted</td>
        <td><?php echo $not_attempted ?></td>
      </tr>
      <tr>
        <td>Percentage</td>
        <td><?php echo ($right/$total)*100;echo "%" ?></td>
      </tr>
    </tbody>
  </table>
  <form action="backtopanel.php">
  <button type="submit" class="info"> Back to Panel </button>
  </form>
</div>

</body>
</html>

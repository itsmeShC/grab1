<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
 <div class="panel panel-success panel-expand">
    <div class="panel-heading info"><h1>Test portal</h1></div>
    <div class="panel-content">
    <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-6">
    <?php 
    if(isset($_GET["run"]) && $_GET["run"]=="failed")
    {
     echo "You have entered wrong password or email";
    } 
    ?>
    <h2>Sign In</h2>
    <form action="signin.php" target="_blank" method="post">
      <div class="form-group">
      <label for="email">Email:</label>
       <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i> <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"></span>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
         <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i> <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd"></span>
     
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default btn-info">Submit</button>
  </form>
  </div>
  </div>
</div>
</div>
</div>
</body>
</html>

<?php
include("class/users.php");
$email= $_SESSION['em'];
$data= new users;
$data->profile($email);
$data->cat();
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
  <h2>WELCOME</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#profile">Profile</a></li>
    <li style="float:right;" ><a  href="logout.php">Log out</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <center><button type="button" class="btn btn-success" data-toggle="tab" href="#select">Start Test</button></center>
      <div class="tab-pane fade" id="select">
      <form action="ques.php"  method="POST">
        <select class="form-control" id="" name="cat">
        <option>category</option>
        <?php
         foreach ($data->cat_name as $show)
         { ?>
         <option value="<?php echo $show['id'] ?>"><?php echo $show['cat_name'] ?>   </option>
         <?php } ?>
        </select>
      <button type="submit" class="btn btn-info" value="submit">submit</button>
      </form>
      </div>
    </div>
    <div id="profile" class="tab-pane fade">
       <table class="table table-striped">
      <thead>
      <tr>
        <th>ID</th>
        <th>Email Id</th>
        <th>Photo</th>
      </tr>
    </thead>
    <tbody>
    <?php
    foreach ($data->contact as $show)
    { ?>
      <tr>
        <td><?php echo $show["id"] ?></td>
        <td><?php echo $show["email"] ?></td>
        <td><img src="img/<?php echo $show['img']; ?>" width=100px height=100px ></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>

<?php
include("class/users.php");
extract($_POST);
$number= new users;
$number->library();
$number->cat();

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
  <h2>Admin_Panel</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#menu1">Add users</a></li>
    <li><a data-toggle="tab" href="#menu2">add admin</a></li>
    <li><a data-toggle="tab" href="#menu3">Add test</a></li>
    <li><a data-toggle="tab" href="#menu4">Add questions to test</a></li>
     <li><a data-toggle="tab" href="#menu5">Add questions to test from library</a></li>
      <li><a data-toggle="tab" href="#menu6">Add questions to library</a></li>
    <li style="float: right;"><a  href="logout.php">logout</a></li>
  </ul>

  <div class="tab-content">
    <div id="menu2" class="tab-pane ">
      <h3>Admin</h3>
              <?php 
    if(isset($_GET["run"]) && $_GET["run"]=="success")
    {
     echo "you have successfully added one user";
    } 
  ?>
        <form action="signupadmin.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="e">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="p">
    </div>
     <div class="form-group">
      <label for="file">Upload your photo:</label>
      <input type="file" class="form-control" id="email" name="img">
    </div>
    
    <button type="submit" class="btn btn-success">ADD</button>
  </form>
</div>
   
    <div id="menu1" class="tab-pane fade in active">
      <h3>Users</h3>
        <?php 
    if(isset($_GET["run"]) && $_GET["run"]=="success")
    {
     echo "you have successfully added one user";
    } 
  ?>
       <form action="signup.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="e">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="p">
    </div>
     <div class="form-group">
      <label for="file">Upload your photo:</label>
      <input type="file" class="form-control" id="email" name="img">
    </div>
    
    <button type="submit" class="btn btn-success">ADD</button>
  </form>
 </div>
    <div id="menu3" class="tab-pane fade">
    <div class="row">
    <div class="col-xs-6">
      <h4>Design a new test</h4>
      <div class="conatiner" style="width: 400px;">
        <form action="category.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
      <label for="name">Test name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter test name" name="tn">
    </div>
    <div class="form-group">
      <label for="name">Enter a unique test id:</label>
      <input type="text" class="form-control" id="pwd" placeholder="enter a id " name="tid">
    </div>
     <div class="form-group">
      <label for="name">Enter the time of the test in minutes</label>
      <input type="number" class="form-control " id="pwd" placeholder="enter time in minutes " name="tm">
    </div>
     <div class="form-group">
      <label for="name">Enter the starting date of test and time</label>
     <input type="date"  class="form-control" name="sdate" >
     <input type="time"  class="form-control" name="tsdate" >
    </div>
     <div class="form-group">
      <label for="name">Enter the Ending date of test</label>
     <input type="date"  class="form-control" name="edate" >
     <input type="time"  class="form-control" name="tedate" >
    </div>    
    <button type="submit" class="btn btn-success">ADD</button>
  </form>
  </div>
  </div>
  <div class="col-xs-6">
  <h2>Conducted Test</h2>
    <table class="table table-condensed">
    <thead>
      <tr>
        <th class="info">Tst Id</th>
        <th class="info">Test name</th>
        <th class="info">Starting date</th>
        <th class="info">End date</th>
        <th class="info">Time</th>
      </tr>
    </thead>
    <tbody>
     <?php
      foreach($number->cat_name as $show1)
        { ?>
      <tr>
      
       <td> <?php echo $show1['id'] ?></td>
       <td><?php echo $show1['cat_name'] ?></td>
         <td><?php echo $show1['sdate'] ?></td>
          <td><?php echo $show1['edate'] ?></td>
           <td><?php echo $show1['time'] ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  </div>
  </div>
    </div>
    <div id="menu4" class="tab-pane fade">
      <h3></h3>
      <form action="addques.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
      <label for="name">first enter test id for which you would add question</label>
      <input type="text" class="form-control"  placeholder="id"name="tid">
    </div>
    <div class="form-group">
      <label for="name">question</label>
      <input type="text" class="form-control"  name="ques">
    </div>
     <div class="form-group">
      <label for="name">Option 1 1</label>
      <input type="text" class="form-control"  name="ans1">
    </div>
     <div class="form-group">
      <label for="name">Option 2</label>
      <input type="text" class="form-control"  name="ans2">
    </div>
     <div class="form-group">
      <label for="name">Option 3</label>
      <input type="text" class="form-control"  name="ans3">
    </div>
     <div class="form-group">
      <label for="name">option 4 </label>
      <input type="text" class="form-control"  name="ans4">
    </div>
     <div class="form-group">
      <label for="name">answer</label>
      <input type="text" class="form-control"  name="ans">
    </div>
    <button type="submit" class="btn btn-success">ADD</button>
  </form>
    </div>
     <div id="menu6" class="tab-pane fade">
      <h3></h3>
      <form action="addqueslibraray.php" method="post" enctype="multipart/form-data"> <div class="form-group">
      <label for="name">id of the the test for which you would add question to library</label>
      <input type="text" class="form-control"  name="cat_id">
    </div>
    <div class="form-group">
      <label for="name">question</label>
      <input type="text" class="form-control"  name="ques">
    </div>
     <div class="form-group">
      <label for="name">Option 1 </label>
      <input type="text" class="form-control"  name="ans1">
    </div>
     <div class="form-group">
      <label for="name">Option 2</label>
      <input type="text" class="form-control"  name="ans2">
    </div>
     <div class="form-group">
      <label for="name">Option 3</label>
      <input type="text" class="form-control"  name="ans3">
    </div>
     <div class="form-group">
      <label for="name">option 4 </label>
      <input type="text" class="form-control"  name="ans4">
    </div>
     <div class="form-group">
      <label for="name">answer</label>
      <input type="text" class="form-control"  name="ans">
    </div>
    <button type="submit" class="btn btn-success">ADD</button>
  </form>
    </div>
     <div id="menu5" class="tab-pane fade">
      <h3></h3>
      <form action="addquesfromlibrary.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <table class="table table-condensed">
    <thead>
      <tr>
        <th>Questions</th>
        <th>answer->0</th>
        <th>answer->1</th>
        <th>answer->2</th>
        <th>answer->3</th>
        <th>right_answer</th>
        <th>test id</th>
        <th>Tick below</th>
      </tr>
    </thead>
    <tbody>
     <?php
      foreach($number->ques as $show)
        { ?>
      <tr>
      
       <td> <?php echo $show['id'].$show['ques'] ?></td>
       <td><?php echo $show['ans1'] ?></td>
         <td><?php echo $show['ans2'] ?></td>
          <td><?php echo $show['ans3'] ?></td>
           <td><?php echo $show['ans4'] ?></td>
            <td><?php echo $show['ans'] ?></td>
            <td><?php echo $show['cat_id'] ?></td>
            <?php if(isset($show['id'])) { ?>
            <td>   <input type="checkbox" value="1" class="form-control"  name="<?php echo $show['id'] ?>"></td>
            <?php } ?>
            <input type="radio" value="0" checked="checked" style="display: none;" name="<?php echo $show['id'] ?>"></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
    </div>

    <button type="submit" class="btn btn-success">ADD</button>
  </form>
    </div>
  </div>
</div>

</body>
</html>
     
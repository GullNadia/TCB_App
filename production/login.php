

<?php 
  $conn=mysqli_connect("localhost","root","developer","tcbapp_db");
  session_start();
  if(isset($_POST['submit']))

  {
    
    $user_name = $_POST['user_name'];
    $password  = $_POST['password'];

    $query = "SELECT * FROM users WHERE user_name = '$user_name' AND password = '$password'";

    $result = mysqli_query($conn,$query);

    $row = mysqli_num_rows($result);

    if ($row > 0) {
      $_SESSION["user_name"] = $user_name;
      header("location:index.php"); 
    }
    else {
      echo "<div class='alert alert-danger' style='text-align:center;'><b>Invalid username or password</b></div>";
    }
  }


 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.min.js">
</head>
<body>
<div class="container">
  <div class="row" style="margin-top: 50px;">
    <div class="col-md-4 col-md-offset-4 jumbotron">
      <div class="panel panel-primary">
        <div class="panel-heading"><h2 align="center">Login</h2></div>
        <div class="panel-body">
          <form method="post">
              <div class="form-group">
                <label>User Name:</label>
                <input type="text" class="form-control" name="user_name" placeholder="Enter user name">
              </div>
              <div class="form-group">
                <label>Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Enter password">
              </div>
              <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-sign-in"></i>Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>       
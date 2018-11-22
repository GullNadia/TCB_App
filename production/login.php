

<?php 
  $conn=mysqli_connect("localhost","root","","mobile_application");
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
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>POS | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post">
              <h1>Login Form</h1>
              <div>
                <input type="text" name="user_name" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-success btn-block submit" name="submit" class="btn btn-success"> <i class="fa fa-sign-in"></i> Submit</button>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <p>Copyright &copy; 2018 All Rights Reserved By: POS</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>

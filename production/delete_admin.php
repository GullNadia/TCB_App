<?php  include_once 'session.php';?>
<?php    include_once ('header.php');  ?>
<?php include('connection.php'); ?>
<?php 
	
	if (isset($_GET["id"])) {
		$id=$_GET["id"];
		$query="SELECT * from users WHERE user_id='$id'";
		$query=mysqli_query($connection,$query);
		$row=mysqli_fetch_assoc($query);
		if ($_SESSION["user_name"]==$row["user_name"]) {
			echo"<script>alert('Can't delete this admin to delete this admin login from another account')</script>";
			echo"<script>window.location = 'manage_admin.php'</script>";
		}
		else
		{
			$query="DELETE FROM users WHERE user_id='$id'";
		$result=mysqli_query($connection,$query);
		if ($result) {
			echo"<script>window.location = 'manage_admin.php'</script>";
		}
		}
	}


 ?>
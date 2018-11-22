<?php  include_once 'session.php';?>
<?php    include_once ('header.php');  ?>
<?php include('connection.php'); ?>
<?php 
	
	if (isset($_GET["id"])) {
		
		$id = $_GET['id'];
		$delete = "DELETE FROM customer WHERE id = '$id'";
		$query=mysqli_query($connection,$delete);
		
			if($query){
				echo"<script>window.location = 'customers_index.php'</script>";
			}
			
			else
			{
				
				echo "Not Deleted";
			}
		}


 ?>
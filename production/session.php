<?php
include("db_connection.php");

	session_start();
	
$username=$_SESSION["user_name"];
if ($username) {
	$name=$_SESSION["user_name"];
}
else
{
	header("location:login.php");
}


	function message() {
		if (isset($_SESSION["message"])) {
				$output = "<div class=\"alert alert-success\"  style = \"text-align:center\">";
				$output .= htmlentities($_SESSION["message"]);
				$output .= "</div>";
				$_SESSION["message"] = null;
				return $output;
			}
	}
	function errors() {
		if (isset($_SESSION["errors"])) {
			$errors = $_SESSION["errors"];
			
			// clear message after use
			$_SESSION["errors"] = null;
			return $errors;
		}
	}


?>

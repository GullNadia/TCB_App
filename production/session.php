<?php

	session_start();
	$usernames=$_SESSION["user_name"];
	//Checking the user about login or not 
	if ($usernames) {
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
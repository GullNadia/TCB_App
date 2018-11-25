<?php 
     include_once 'customer_crud.php';
	  if (isset($_GET["customer_id"])) {
		$customer_id =$_GET["customer_id"] ;
	  }
	?>
 <?php 
     $crud = new crudop();
	 $crud->delete_customer($customer_id);
?>
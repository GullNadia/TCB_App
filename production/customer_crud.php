<?php 
     include_once 'db_connection.php';
	  include_once 'function.php';
      include_once 'session.php';
     
  class crudop extends db_connection{
		public function __construct(){
			 $this->connect();
			    }

			public function fetch_sale_invoice_id($customer_id,$date,$total,$total_discount,$net_total,$amount_paid,$remaining){
			$stmt = $this->conn->prepare("SELECT sale_id FROM sale_invoice WHERE customer_id ={$customer_id} AND date = {$date} AND total = {$total_discount} AND net_total = {$net_total} AND amount_paid = {$amount_paid} AND remaining ={$remaining}") or die($this->conn->error);
			  if($stmt->execute()){
					$result = $stmt->get_result();
					return $result;
			    }

		}    
		  //insert customer
		 public function customer($name,$father_name,$cnic,$phone_no,$address){
		 	  $inserts="INSERT INTO customer VALUES(null,'{$name}','{$father_name}','{$cnic}','{$phone_no}','{$address}')";
			 $insert = $this->conn->query($inserts);
			 if($insert){
				//Success
			  $_SESSION["message"] = "Customer created successfully.";
			   echo '<script>window.location="sale_invoice.php"; </script>';
				 } else {
				//Failure
			  $_SESSION["message"] = "Customer creation failed.";
			   echo '<script>window.location="sale_invoice.php"; </script>';
				 }
		    }
			//fetch all record from customer table
		  public function read(){
			$stmt = $this->conn->prepare("SELECT * FROM customer") or die($this->conn->error);
			  if($stmt->execute()){
					$result = $stmt->get_result();
					return $result;
			    }
		    }
		 // delete customer
			public function delete_customer($customer_id){
				$delete = "DELETE FROM customer WHERE id = {$customer_id}";
				$deleted = $this->conn->query($delete);
				if($deleted){
					//Success
				  $_SESSION["message"] = "Customer Deleted Successfully.";
			      echo '<script>window.location="customer_record.php"; </script>';
					} else {
					//Failure
				  $_SESSION["message"] = "Customer Deleted  Failed.";
			      echo '<script>window.location="customer_record.php"; </script>';
					}
				}
			//fetch data against selected id
			public function fetch_selected_id($customer_id){
				$stmt=$this->conn->prepare("SELECT * FROM customer WHERE id ={$customer_id}") or die($this->conn->error);
				   if($stmt->execute()){ 
					$result = $stmt->get_result();
					return $result;
					  }
				  }
			 // update customer
			public function update($customer_id,$name,$father_name,$cnic,$phone_no,$address){
				$updates ="UPDATE customer SET name ='{$name}',father_name='{$father_name}',cnic='{$cnic}',phone_no='{$phone_no}',address ='{$address}' WHERE id = {$customer_id}";
				$update = $this->conn->query($updates);

				 if($update){
						//Success
					$_SESSION["message"] = "Customer Edit Successfully.";
					echo '<script>window.location="customer_record.php"; </script>';
						} else {
						//Failure
					$_SESSION["message"] = "Customer Edit Failed.";
					echo '<script>window.location="customer_record.php";</script>';
						}
			}
		 public function sale_invoice($customer_id,$date,$total,$total_discount,$net_total,$amount_paid,$remaining){
		 	  $inserts="INSERT INTO sale_invoice VALUES(null,'$customer_id','$date','$total','$total_discount','$net_total',
		 	  '$amount_paid','$remaining')";
			 $insert = $this->conn->query($inserts);
			 if($insert){
			 	$res = fetch_sale_invoice_id($customer_id,$date,$total,$total_discount,$net_total,$amount_paid,$remaining);
				//Success
			  //$_SESSION["message"] = "Invoice created successfully.";
			  echo '<script>window.location="customer_ajax_request.php?sale_id=<?php echo $res;?>" </script>';
				 } else {
				//Failure
			  $_SESSION["message"] = "Invoice creation failed.";
			   echo '<script>window.location="sale_invoice.php"; </script>';
				 }
		    }
		
	//insert array 
		public function sale($customer_id,$date,$total,$total_discount,$net_total,$amount_paid,$remaining)
		{
        for($i=0; $i< $length; $i++)
		{
		$query = "INSERT INTO sale_invoice VALUES(null,'$customer_id ','$product_id[$i]','$imei_no[$i]','$discount_per_item[$i]','$total[$i]','$total_discount[$i]','$net_total[$i]')";											
		$result = $this->conn->query($query);
		}
		 if($result){
				//Success
				$_SESSION["message"] = "Products added against purchase invoice successfully."; ?>
					<script>
					    window.location="products_per_purchase_invoice.php?invoice_id=<?php echo $purchase_invoice_id;?>";
					</script>
		 <?php }else{
					$_SESSION["message"] = "Products added against purchase invoice failed."; ?>
					<script>
					    window.location="products_per_purchase_invoice.php?invoice_id=<?php echo $purchase_invoice_id;?>";
					</script>
			
		<?php
		 }
		 
		}
	}	
?>
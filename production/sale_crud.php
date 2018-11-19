<?php	
		$connection = mysqli_connect('localhost','root','','mobile_application');
		$date = date("Y-m-d");

		$customer_id        = $_POST['customer_id'];
		$total              = $_POST['total'];
	    $total_discount     = $_POST['total_discount'];	
		$net_total          = $_POST['net_total'];
		$amount_paid        = $_POST['amount_paid'];
	    $remaining	        = $_POST['remaining'];	

		$product_id         = $_POST['product_id'];
		$sale_price         = $_POST['sale_price'];
		$imei_no            = $_POST['imei_no'];
	    $discount_per_item  = $_POST['discount_per_item'];
		
		$insert = "INSERT INTO sale_invoice VALUES(null,'$customer_id','$date','$total','$total_discount',
		                        '$net_total','$amount_paid','$remaining')";
		$query = mysqli_query($connection, $insert);
		if($query){
			
			$select = "SELECT * FROM sale_invoice WHERE customer_id ='$customer_id' AND total ='$total'";
			$query_select = mysqli_query($connection,$select);
			$fetch = mysqli_fetch_assoc($query_select);
			$id = $fetch['sale_id'];
			if($fetch){
				$length = count($imei_no);

				for($i=0; $i<$length; $i++)
				{
				$insert_detail = "INSERT INTO sale_invoice_product_detail VALUES(null,'$id','$product_id[$i]','$sale_price[$i]','$imei_no[$i]','$discount_per_item[$i]');";
				$detail_query = mysqli_query($connection,$insert_detail);
				}
				if($detail_query){
					for($j=0; $j<$length; $j++){
						$status_result = "UPDATE products_per_purchase_invoice SET status = 'Sold' WHERE imei = '$imei_no[$j]'";
						$status_query = mysqli_query($connection,$status_result);
					}	
					if($status_query){
						echo true;
					}
				} else {
					echo "fail";
				}
			}
		}		
		
?>


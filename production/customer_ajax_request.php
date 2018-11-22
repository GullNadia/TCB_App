<?php	

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
	    echo $customer_id;
		
		//var_dump('$net_total');
		//echo $net_total;
			
		//count function count the length of the array
		$length = count($product_id);
		$date = date("Y-m-d");
		
		//echo $invoice_id;
		
		include "customer_crud.php";
		//insert query
		$insert = new crudop();
		$insert->sale_invoice($customer_id,$date,$total,$total_discount,$net_total,$amount_paid,$remaining);

		// $conn = new crudop();
		// $read = $conn->sumOfPurchasePrice($purchase_invoice_id );
		// $fetch = $read->fetch_assoc();
		// //echo $fetch["TotalItemsOrdered"];
		// echo json_encode($fetch["TotalItemsOrdered"]);

		if(isset($_GET['sale_id'])){
			$sale_id = $_GET['sale_id'];
			echo $sale_id;
		}
?>
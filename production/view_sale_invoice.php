<?php  
include_once 'session.php';
include_once 'header.php'; 
include_once 'sale_invoice_crud.php';
?>

        <!-- page content -->
        <div class="right_col" role="main"  style="height: 500px;">
          <div class="" >
            <div class="page-title">
              <div class="title_left">
                <h3>Sale Invoie</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
				    <?php echo message();?>
                  <div class="x_title">
                    <h3>Sale Invoice View</h3>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content"><br/>
				            <?php echo message();?>
				  <!-- table to display the record of all sale invoices-->
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap">
                  <thead>
                    <tr>
                        <th align="center">Date</th>
              				  <th align="center">Customer Name</th>
              				  <th align="center">Total</th>
              				  <th align="center">Total Discount</th>
              				  <th align="center">Net Total</th>
              				  <th align="center">Amount Paid</th>
              				  <th align="center">Remaining</th>
                    </tr>
                  </thead>
                <tbody>
					 <?php 
					   // create object of a class
					   $conn = new crudOp();
					   //call the method through object to display whole data
					   $read = $conn->read();
					   while($fetch = $read->fetch_array()){
					 ?>
					 <tr>	
						<td align="center"><?php echo $fetch['date'];?>        </td>
						<td align="center"><?php echo $fetch['customer_id'];?> </td>
						<td align="center"><?php echo $fetch['total'];?>        </td>
						<td align="center"><?php echo $fetch['total_discount'];?>    </td>
						<td align="center"><?php echo $fetch['net_total'];?>     </td>
            <td align="center"><?php echo $fetch['amount_paid'];?>     </td>
            <td align="center"><?php echo $fetch['remaining'];?>     </td>
					</tr>	
				<?php
					}
				?>	
				</tbody>
                
              </table>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<?php include_once ('footer.php'); ?>        
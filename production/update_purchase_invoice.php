<?php include_once 'db_connection.php';?>
<?php include_once 'session.php';?>
<?php include_once ('header.php');?>
<?php include('connection.php'); ?>
<?php include 'purchase_invoice_crud.php' ?>
<?php 

    if(isset($_GET['invoice_id']))
    {
      $id = $_GET['invoice_id'];
      $select = new crudOp();
      $read = $select->fetch_selected_id($id); 
      $fetch = $read->fetch_array();
      $distributer_id = $fetch['distributer_id'];
      $con = mysqli_connect('localhost','root','','mobile_application');
      $query = "SELECT name from distributors WHERE id = $distributer_id";
      $result = mysqli_query($con ,$query);
      $distributer_name = mysqli_fetch_assoc($result);
    }
 ?>
 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>POS</h3>
              </div>

            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><b>Update Purchase Invoice</b>

                    </h2>
                  
                    <div class="clearfix"></div>
                  </div>
                  <?php 
                    if (isset($_POST["submit"])) { 
                              $name                   =$_POST["name"];
                              $date                   =$_POST["date"];
                              $comment                =$_POST["comment"];
                              $net_total_of_products  =$_POST["net_total_of_products"];
                              $products_discount      =$_POST["products_discount"];
                              $discount_of_invoice    =$_POST["discount_of_invoice"];
                              $net_discount           =$_POST["net_discount"];
                              $net_total              =$_POST["net_total"];
                              $amount_paid            =$_POST["amount_paid"];
                              $amount_payable         =$_POST["amount_payable"];                                       
                              $crud = new crudop();
                              $crud->update($id,$name,$date,$comment,$net_total_of_products,$products_discount,$discount_of_invoice,$net_discount,$net_total,$amount_paid,$amount_payable);
                    }
                  ?>
           <div class="x_content"><br/>
            <form method="post">
             <div class="row">
               <div class="col-md-4">
                 <div class="form-group">
                       <label>Distributer Name:</label>
                       <input type="text" name="name" class="form-control" required="" value="<?php echo $distributer_name['name'];?>">
                     </div>
               </div>
               <div class="col-md-4">
                 <div class="form-group">
                       <label>Date:</label>
                       <input type="text" name="date" class="form-control" required="" value="<?php echo $fetch['date'];?>">
                     </div>
               </div>
               <div class="col-md-4">
                 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Comment</label>
                        
                          <input type="text" name="comment" class="form-control" value="<?php echo $fetch['comment'];?>">
                          
                        
                  </div>
               </div>
             </div>

             <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                        <label>Net Total of Products</label>
                        
                          <input type="text" name="net_total_of_products" class="form-control" value="<?php echo $fetch['net_total_of_products'];?>">
                          
                      </div>
               </div>
               <div class="col-md-4">
                 <div class="form-group">
                        <label>Products Discount<span class="required">*</span>
                        </label>
                        
                          <input type="text" class="form-control" name="products_discount" rows="3"  value="<?php echo $fetch['products_discount'];?>">
                        
                 </div>
               </div>
               <div class="col-md-4">
                 <div class="form-group">
                        <label>Discount of Invoice<span class="required">*</span>
                        </label>
                        
                          <input type="text" class="form-control" name="discount_of_invoice" rows="3" value="<?php echo $fetch['discount_of_invoice'];?>">
                        
                 </div>
               </div>
             </div>

             <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                        <label>Net Discount</label>
                        
                          <input type="text" name="net_discount" class="form-control" value="<?php echo $fetch['net_discount'];?>">
                          
                      </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                      <label>Net Total of Invoic<span class="required">*</span></label>
                      <input type="text" class="form-control" name="net_total" rows="3"  value="<?php echo $fetch['net_total'];?>">    
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                      <label>Amount Paid<span class="required">*</span></label>
                      <input type="text" class="form-control" name="amount_paid" rows="3" value="<?php echo $fetch['amount_paid'];?>">    
                 </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                      <label>Amount Payable<span class="required">*</span></label>
                      <input type="text" class="form-control" name="amount_payable" rows="3" value="<?php echo $fetch['amount_payable'];?>">    
                 </div>
               </div>
             </div>

             <div class="row">
               <div class="col-md-4">
                  <button type="submit" class="btn btn-success" name="submit"><i class="fa fa-save"></i> Submit</button>
                     <a href="purchase_invoice.php" class="btn btn-outline btn-danger"> <i class="fa fa-times"></i> Cancel</a>
               </div>
             </div>
           </form>                
             
            </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
  

<?php include_once ('footer.php'); ?>        
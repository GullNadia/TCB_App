<?php include_once 'session.php';?>
<?php include_once ('header.php');?>
<?php include('connection.php'); ?>
<?php include 'product_CRUD.php' ?>
<?php 

    if(isset($_GET['product_id']))
    {
      $id = $_GET['product_id'];
      $select = new crudOp();
      $read = $select->fetch_selected_id($id); 
      $fetch = $read->fetch_array();
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
                    <h2><b>Update Product</b>

                    </h2>
                  
                    <div class="clearfix"></div>
                  </div>



                  <?php 
                    if (isset($_POST["submit"])) {

                               
                              $name           =$_POST["product_name"];
                              $father_name    =$_POST["manufacturer"];                             
                                  
                              $crud = new crudop();
                              $crud->update($id,$name,$father_name,$cnic,$phone_no,$address);
                               // $query="UPDATE customer SET name = '$name', father_name='$father_name', cnic = '$cnic', phone_no = '$phone_no', address = '$address' WHERE id = '$id' ";
                               //  $result=mysqli_query($connection,$query);
                               //  if ($result) {
                               //    echo"<script>window.location = 'customer_record.php'</script>";
                               //  }
                               //  else
                               //  {
                               //    echo " Data is not updated";
                               //  }
                
    }
                     ?>
           <div class="x_content"><br/>
            <form method="post">
             <div class="row">
               <div class="col-md-4">
                 <div class="form-group">
                       <label>Product Name:</label>
                       <input type="text" name="product_name" class="form-control" placeholder="Enter Product name" required="" value="<?php echo $fetch['product_name'];?>">
                     </div>
               </div>
               <div class="col-md-4">
                 <div class="form-group">
                       <label>Manufacturer:</label>
                       <input type="text" name="manufacturer" class="form-control" placeholder="Enter manufacturer" required="" value="<?php echo $fetch['manufacturer'];?>">
                     </div>
               </div>
              
             </div>

             <div class="row">
               <div class="col-md-4">
                  <button type="submit" class="btn btn-success" name="submit"><i class="fa fa-save"></i> Submit</button>
                     <a href="products_record.php" class="btn btn-outline btn-danger"> <i class="fa fa-times"></i> Cancel</a>
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
<?php  include_once 'session.php';?>
<?php    include_once ('header.php');  ?>
<?php include('connection.php'); ?>
<?php 

    if(isset($_GET['id']))
    {
      $id = $_GET['id'];
      $query = "SELECT * FROM customer WHERE id = $id";
      $result = mysqli_query($connection,$query);
      $get_data = mysqli_fetch_assoc($result);
    }
    


 ?>


 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>POS</h3>
              </div>

              <!-- <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div> -->
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><b>Update Customers</b>


                    <?php

echo "<a href='customers_index.php'>".$get_data['name'] . " " . ": " . $get_data['id']. "<a/>";
                      ?>

                    </h2>
                      
                  <!--   <ul class="nav navbar-right panel_toolbox">
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

                    </ul> -->
                    <div class="clearfix"></div>
                  </div>



                  <?php 
                    if (isset($_POST["submit"])) {

                               
                              $name           =$_POST["name"];
                              $father_name    =$_POST["father_name"];
                              $cnic           =$_POST["cnic"];
                              $phone_no       =$_POST["phone_no"];
                              $address        =$_POST["address"];                               
                               
                                  

                               $query="UPDATE customer SET name = '$name', father_name='$father_name', cnic = '$cnic', phone_no = '$phone_no', address = '$address' WHERE id = '$id' ";
                                $result=mysqli_query($connection,$query);
                                if ($result) {
                                  echo"<script>window.location = 'customers_index.php'</script>";
                                }
                                else
                                {
                                  echo " Data is not updated";
                                }
                
    }
                     ?>
                   
        
				   <div class="x_content"><br/>
            <form method="post">
             <div class="row">
               <div class="col-md-4">
                 <div class="form-group">
                       <label>Customer Name:</label>
                       <input type="text" name="name" class="form-control" placeholder="Enter customer name" required="" value="<?php echo $get_data['name'];?>">
                     </div>
               </div>
               <div class="col-md-4">
                 <div class="form-group">
                       <label>Father NAme:</label>
                       <input type="text" name="father_name" class="form-control" placeholder="Enter your father name" required="" value="<?php echo $get_data['father_name'];?>">
                     </div>
               </div>
               <div class="col-md-4">
                 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">CNIC</label>
                        
                          <input type="text" name="cnic" class="form-control" data-inputmask="'mask' : '99999-9999999-9'" value="<?php echo $get_data['cnic'];?>">
                          
                        
                      </div>
               </div>
             </div>

             <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                        <label>Phone No.</label>
                        
                          <input type="text" name="phone_no" class="form-control"   data-inputmask="'mask' : '(+99)999-9999999'" value="<?php echo $get_data['phone_no'];?>">
                          
                      </div>
               </div>
               <div class="col-md-4">
                 <div class="form-group">
                        <label>Address<span class="required">*</span>
                        </label>
                        
                          <input type="text" class="form-control" name="address" rows="3" placeholder='Enter Address' value="<?php echo $get_data['address'];?>">
                        
                      </div>
               </div>
               <div class="col-md-4">
                 
               </div>
             </div>

             <div class="row">
               <div class="col-md-4">
                  <button type="submit" class="btn btn-success" name="submit"><i class="fa fa-save"></i> Submit</button>
                     <a href="customers_index.php" class="btn btn-outline btn-danger"> <i class="fa fa-times"></i> Cancel</a>
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
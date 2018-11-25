<?php  include_once 'session.php';?>
<?php    include_once ('header.php');  ?>
<?php include('connection.php'); ?>
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
            <?php message(); ?>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                     <a href="create_customers.php" class="btn btn-success"> + Create Customers</a>
                    
                  </div>
           <div class="x_content">

               <?php echo message();?>
          <!-- table to display the record of all distributors-->
                <table id="example1" class="table table-hover">
                    <thead>
                    <tr>
                      <th  style="text-align: center;">ID</th>
                      <th  style="text-align: center;">Name</th>
                      <th  style="text-align: center;">Father Name</th>
                      <th  style="text-align: center;">CNIC</th>
                      <th  style="text-align: center;">Phone_#</th>
                      <th  style="text-align: center;">Address</th>
                      <th  style="text-align: center;" colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                       <?php 
                         // create object of a class
                         $query = "SELECT * FROM customer";
                         $result = mysqli_query($connection,$query);
                         while($fetch = mysqli_fetch_assoc($result)){
                       ?>
                       <tr> 
                        <td align="center"><?php echo $fetch['id'];?>        </td>
                        <td align="center"><?php echo $fetch['name'];?> </td>
                        <td align="center"><?php echo $fetch['father_name'];?>        </td>
                        <td align="center"><?php echo $fetch['cnic'];?>    </td>
                        <td align="center"><?php echo $fetch['phone_no'];?>     </td>
                        <td align="center"><?php echo $fetch['address'];?>     </td>
                        <td>
                        
                        <a href="update_customers.php?id=<?php echo $fetch['id'];?>" class="btn btn-"><i class="glyphicon glyphicon-edit"></i> Update</a>

                        <a href="delete_customers.php?id=<?php echo $fetch['id']; ?>" onclick="return confirm('Are you sure?');" class="btn btn-danger">
                      <i class="glyphicon glyphicon-remove-circle"></i> Delete</a>
                        </td>
                    
                    <td align="center">
                    </td>
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
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

             <!--  <div class="title_right">
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
                    <h2><b>Add New Admin</b></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <!-- <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li> -->
                  <!--     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li> -->

                    </ul>
                    <div class="clearfix"></div>
                  </div>
                    <?php 
                          if (isset($_POST["add_admin"])) {
                             
                              $user_name=$_POST["user_name"];
                              $user_email=$_POST["user_email"];
                              $user_password=$_POST["user_password"];
                              $user_address=$_POST["user_address"];
                             $filename=$_FILES["image"]['name'];
                             $tempname=$_FILES["image"]['tmp_name'];
                               $folder="images/".$filename;
                               move_uploaded_file($tempname, $folder);

                               $query="INSERT INTO users (user_name, user_email, password, user_address, image) VALUES ('$user_name','$user_email','$user_password','$user_address','$folder')";
                               $result = mysqli_query($connection,$query);

                               if ($result) {
                                 
                                 echo "<script>
                                  window.location='manage_admin.php';
                                 </script>";
                               }

     
    }
                     ?>
				   <div class="x_content"><br/>
           <form method="post" enctype="multipart/form-data">
             <div class="row">
               <div class="col-md-4">
                 <div class="form-group">
                       <label>User Name:</label>
                       <input type="text" name="user_name" class="form-control" placeholder="Enter user name" required="">
                     </div>
               </div>
               <div class="col-md-4">
                 <div class="form-group">
                       <label>E-mail Address:</label>
                       <input type="text" name="user_email" class="form-control" placeholder="Enter your E-mail Address" required="">
                     </div>
               </div>
               <div class="col-md-4">
                 <div class="form-group">
                       <label>Password:</label>
                       <input type="Password" name="user_password" class="form-control" placeholder="Enter password" required="">
                     </div>
               </div>
             </div>

             <div class="row">
               <div class="col-md-4">
                 <div class="form-group">
                       <label>Address:</label>
                       <input type="text" name="user_address" class="form-control" placeholder="Enter Address" required="">
                     </div>
               </div>
               <div class="col-md-4">
                 <div class="form-group">
                       <label>Image:</label>
                       <input type="file" name="image" class="form-control" required="">
                     </div>
               </div>
               <div class="col-md-4">
                 
               </div>
             </div>

             <div class="row">
               <div class="col-md-4">
                  <button type="submit" class="btn btn-success" name="add_admin"><i class="fa fa-save"></i> Submit</button>
                     <a href="manage_admin.php" class="btn btn-outline btn-danger"> <i class="fa fa-times"></i> Cancel</a>
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
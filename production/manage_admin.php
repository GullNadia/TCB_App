<?php  include_once 'session.php';?>
<?php    include_once ('header.php');  ?>
 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Manage Admin</h3>
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
                  <div class="x_title">
                    <button type="button" class="btn btn-success">
                    <a href="create_admin.php" style="color: white;"> + Create Admin</a>
                    </button>
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
                 <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                          <tr >
                            <tr>
                              <th  align="center">ID</th>
                              <th  align="center">User Name</th>
                              <th  align="center">User Email</th>
                              <th  align="center">User Password</th>
                              <th  align="center">Address</th>
                              <th  align="center">Photo</th>
                              <th  align="center" colspan="2">Action</th>
                            </tr>
                          </tr>
                        </thead>
                      <tbody>
                            <?php 
                             // create object of a class
                             $query = "SELECT * FROM users";
                             $result = mysqli_query($connection,$query);
                             while($fetch = mysqli_fetch_assoc($result)){
                            ?>
                          <tr> 
                            <td align="center"><?php echo $fetch['user_id'];?>        </td>
                            <td align="center"><?php echo $fetch['user_name'];?> </td>
                            <td align="center"><?php echo $fetch['user_email'];?>        </td>
                            <td align="center"><?php echo $fetch['password'];?>    </td>
                            <td align="center"><?php echo $fetch['user_address'];?>     </td>
                            <td align="center"><a href="<?php echo $fetch['image'];?>"><img src="<?php echo $fetch['image'];?>" height="50px" width="50px" class="img-circle"></a>     </td>
                            <td>
                            
                            <a href="update_admin.php?id=<?php echo $fetch['user_id'];?>"><i class="glyphicon glyphicon-edit"></i> Update</a>
                            </td>
                        
                            <td align="center"><a href="delete_admin.php?id=<?php echo $fetch['user_id']; ?>" onclick="return confirm('Are you sure?');">
                            <i class="glyphicon glyphicon-remove-circle"></i></a>
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
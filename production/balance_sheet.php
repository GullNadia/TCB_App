<?php include 'session.php' ?>
<?php include_once 'header.php'; ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Balance Sheet</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <!--button for add new invoice -->
                        <h2>Balance Sheet</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a></li>
                                    <li><a href="#">Settings 2</a></li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div> 
                    <div class="x_content">
                        <form action="balance_sheet.php" method="POST">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Select Date</label>
                                        <input type="date" name="startDate" class="form-control">          
                                    </div>    
                                </div> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Select End Date</label>
                                        <input type="date" name="endDate" class="form-control">          
                                    </div>    
                                </div>    
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-warning">Submit</button>
                                    </div>    
                                </div>
                            </div>
                        </form> 
                    </div> 
                    <?php
                            $con = mysqli_connect('localhost','root','','mobile_application');
                            if(isset($_POST["submit"])){

                                $startDate = $_POST["startDate"];
                                $endDate = $_POST["endDate"];

                                $sale = "SELECT SUM(net_total) FROM sale_invoice WHERE date >= '$startDate' OR date <= '$endDate'";
                                $result = mysqli_query($con,$sale);
                                $fetch = mysqli_fetch_assoc($result);
                                $saleNetTotal = $fetch['SUM(net_total)'];
                                

                                $purchase = "SELECT SUM(net_total) FROM purchase_invoice WHERE date >= '$startDate' OR date <= '$endDate'";
                                $result = mysqli_query($con,$purchase);
                                $fetch = mysqli_fetch_assoc($result);
                                $purchaseNetTotal = $fetch['SUM(net_total)'];
                        ?>

                        <table class="table table-striped">
                            <tr align="center">
                                <th colspan="7" class="text-center warning"><h3 style="color:#F98822;">Balance Sheet</h3></th>
                            </tr>
                                <th>Start Date </th>
                                <th>End Date </th>
                                <th>Total Sale</th>
                                <th>Total Purchase</th>
                                <th>Amount </th>
                            </tr>
                            <tr>
                                <td><?php echo $startDate ?></td>
                                <td><?php echo $endDate ?></td>
                                <td><?php echo $saleNetTotal ?></td>
                                <td><?php echo $purchaseNetTotal ?></td>
                                <?php $remaining = $saleNetTotal - $purchaseNetTotal ?>
                                <td><?php echo $remaining ?></td>
                            </tr>
                        </table>
                        <div class="row">
                            <div class="col-md-4">
                                <table class="table table-hover">
                                    <tr class="warning">
                                        <?php 
                                        if($purchaseNetTotal > $saleNetTotal ) {?>
                                            <td style="color:#F98822;" colspan="6"><b>Loss</b></td>
                                            <td style="color:#F98822;"><b><?php echo "Rs = ".$remaining; ?></b></td>
                                        <?php 
                                            } else {
                                        ?>
                                        <td style="color:#F98822;" colspan="6"><b>Profit</b></td>
                                        <td style="color:#F98822;"><b><?php echo "Rs = ".$remaining; ?></b></td>
                                        <?php } ?>
                                    </tr>
                                </table>    
                            </div>
                        </div>
                        <?php
                            }
                        ?>    
                </div>  
            </div>
        </div>
    </div>
</div>
 
      
<?php include_once ('footer.php'); ?> 
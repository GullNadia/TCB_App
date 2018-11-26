<?php include 'session.php' ?>
<?php include_once 'header.php'; ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Monthly Purchase Report</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <!--button for add new invoice -->
                        <h2>Monthly Purchase</h2>
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
                        <form action="report_monthly_purchase.php" method="POST">
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
                                        <button type="submit" name="submit" class="btn btn-info">Submit</button>
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
                                $query = "SELECT * FROM Purchase_invoice WHERE date >= '$startDate' AND date <= '$endDate'";
                                $result = mysqli_query($con,$query);
                        ?>

                        <table class="table table-striped">
                            <tr align="center">
                                <th colspan="7" class="text-center info"><h3 style="color:#1B8FE2;">Monthly Purchase Report</h3></th>
                            </tr>
                                <th>Date Of Purchase</th>
                                <th>Distributer Name</th>
                                <th>Net Total</th>
                                <th>Amount Paid</th>
                                <th>Amount Payable</th>
                            </tr>
                            <?php 
                                $netTotal = 0;
                                $amountPaid = 0;
                                $amountPayable = 0;
                                foreach($result as $item) { ?>
                            <tr>
                                <td><?php echo $item['date'] ?></td>
                                <td><?php echo $item['distributer_id'] ?></td>
                                <td><?php echo $item['net_total'] ?></td>
                                <td><?php echo $item['amount_paid'] ?></td>
                                <td><?php echo $item['amount_payable'] ?></td>
                            </tr>
                            <?php 
                                $netTotal = $netTotal + $item['net_total'];
                                $amountPaid = $amountPaid + $item['amount_paid'];
                                $amountPayable = $amountPayable + $item['amount_payable'];
                                } 
                            ?>
                        </table>

                        <div class="row">     
                            <div class="col-md-4">
                                <table class="table table-hover">
                                    <tr class="info">
                                        <td style="color:#1B8FE2;;" colspan="6"><b>Net Total</b></td>
                                        <td style="color:#1B8FE2;;"><b><?php echo "Rs = ".$netTotal; ?></b></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-md-4">
                                <table class="table table-hover">
                                    <tr class="info">
                                        <td style="color:#1B8FE2;;" colspan="6"><b>Amount Paid</b></td>
                                        <td style="color:#1B8FE2;;"><b><?php echo "Rs = ".$amountPaid; ?></b></td>
                                    </tr>
                                </table>
                            </div>
                            
                            <div class="col-md-4">
                                <table class="table table-hover">
                                    <tr class="info">
                                        <td style="color:#1B8FE2;;" colspan="6"><b>Amount Payable </b></td>
                                        <td style="color:#1B8FE2;;"><b><?php echo "Rs = ".$amountPayable; ?></b></td>
                                    </tr>
                                </table>
                            </div>    
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
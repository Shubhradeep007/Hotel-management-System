<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../image/favicon.png" type="image/png">
        <title>Tree noyoni</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../vendors/linericon/style.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="../vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/responsive.css">

        <style type="text/css">
            .btn{
                margin-right: 15px;
            }
        </style>
    </head>
    <body>
        <!--================Header Area =================-->
     
        <!--================Header Area Finish=================-->
        <br><br><br><br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form action="" method="post">
                    <a class="btn btn-primary" href="rooms.php">Book Room</a>
                    <a class="btn btn-success" href="rooms.php">Check Room Status</a>
                    <a class="btn btn-warning" href="#">View Users Detail</a>
                    <a class="btn btn-info" href="#">Recently Check Outs</a>
                    <a class="btn btn-danger" href="logout.php">Logout</a>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
        <br><br><br>
        <!--================Banner Area END =================-->
       <div class="row">
       	<div class="col-md-12">
       		<center><h3>Checked In Users Details</h3></center>
       		<center><h3>Delux-Room</h3></center>
       	</div>
       </div><br><br>
        <div class="row">
        	<div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>User ID(Adhar)</th>
                            <th>User Mobile</th>
                            <th>Email</th>
                            <th>Room No</th>
                            <th>User Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Beds</th>
                            <th>Days Stay</th>
                            <th>Price</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
                        </tr> 
                    </thead>
        		<?php 
                    
                    include('../db_connection.php');
                    $user_count = 0;
                    $query = "SELECT * FROM `user` WHERE `status` = 1;";
                    $query_run = mysqli_query($conn,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['fname'];?></td>
                                <td><?php echo $row['adhar-card-no'];?></td>
                                <td><?php echo $row['phone'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['rooms'];?></td>
                                <td><?php echo $row['address'];?></td>
                                <td><?php echo $row['Childs'];?></td>
                                <td><?php echo $row['Adults'];?></td>
                                <td><?php echo $row['Beds'];?></td>
                                <td><?php echo $row['Days-stay'];?></td>
                                <td><?php echo $row['Price'];?></td>
                                <td><?php echo $row['approching-date'];?></td>
                                <td><?php echo $row['leaving-date'];?></td>
                               
                            </tr>
                        <?php
                    }
                ?>
            


            <?php
    
       $sql = "SELECT * FROM USER u INNER JOIN payment_details pd ON u.order_id = pd.order_id WHERE u.order_id = pd.order_id ";
        $query_run = mysqli_query($conn,$sql);
        if (mysqli_num_rows($query_run) > 0) 
            {
            while($row = mysqli_fetch_array($query_run))
                {   ?>

                                <td><?php echo $row['dis_st'];?></td>
                                <td><?php echo $row['order_id'];?></td>
                                <td><?php echo $row['amount'];?></td>


                     <?php                }}   ?>




            </table>
        	</div>
        </div>
        <br><br><br><br><br><br>

        <div class="row">
       	<div class="col-md-12">
       		<center><h3>Checked In Users Details</h3></center>
       		<center><h3>Semi-Delux-Room</h3></center>
       	</div>
       </div><br><br>
        <div class="row">
        	<div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>User ID(Adhar)</th>
                            <th>User Mobile</th>
                            <th>Email</th>
                            <th>Room No</th>
                            <th>User Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Beds</th>
                            <th>Days Stay</th>
                            <th>Price</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
                        </tr> 
                    </thead>
        		<?php 
                    
                    include('../db_connection.php');
                    $user_count = 0;
                    $query = "SELECT * FROM `semi` WHERE `status` = 1;";
                    $query_run = mysqli_query($conn,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['fname'];?></td>
                                <td><?php echo $row['adhar-card-no'];?></td>
                                <td><?php echo $row['phone'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['rooms'];?></td>
                                <td><?php echo $row['address'];?></td>
                                <td><?php echo $row['Childs'];?></td>
                                <td><?php echo $row['Adults'];?></td>
                                <td><?php echo $row['Beds'];?></td>
                                <td><?php echo $row['Days-stay'];?></td>
                                <td><?php echo $row['Price'];?></td>
                                <td><?php echo $row['approching-date'];?></td>
                                <td><?php echo $row['leaving-date'];?></td>
                               
                            </tr>
                        <?php
                    }
                ?>
            </table>
        	</div>
        </div>
        <br><br><br><br><br><br>
        <div class="row">
       	<div class="col-md-12">
       		<center><h3>Checked In Users Details</h3></center>
       		<center><h3>Super-Delux-Room</h3></center>
       	</div>
       </div><br><br>
        <div class="row">
        	<div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>User ID(Adhar)</th>
                            <th>User Mobile</th>
                            <th>Email</th>
                            <th>Room No</th>
                            <th>User Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Beds</th>
                            <th>Days Stay</th>
                            <th>Price</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
                        </tr> 
                    </thead>
        		<?php 
                    
                    include('../db_connection.php');
                    $user_count = 0;
                    $query = "SELECT * FROM `super` WHERE `status` = 1;";
                    $query_run = mysqli_query($conn,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['fname'];?></td>
                                <td><?php echo $row['adhar-card-no'];?></td>
                                <td><?php echo $row['phone'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['rooms'];?></td>
                                <td><?php echo $row['address'];?></td>
                                <td><?php echo $row['Childs'];?></td>
                                <td><?php echo $row['Adults'];?></td>
                                <td><?php echo $row['Beds'];?></td>
                                <td><?php echo $row['Days-stay'];?></td>
                                <td><?php echo $row['Price'];?></td>
                                <td><?php echo $row['approching-date'];?></td>
                                <td><?php echo $row['leaving-date'];?></td>
                               
                            </tr>
                        <?php
                    }
                ?>
            </table>
        	</div>
        </div>
        <br><br><br><br><br><br>

          <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | by treenoyoni</a>
 </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>


<!-- MADE BY izzon URF SHUBHRADEEPBOSE -->
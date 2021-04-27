<?php include("config.php");
session_start();
if(!isset($_SESSION['email']))
{
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Milk Vendor</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
       
        <!-- END HEADER MOBILE-->

        <?php $page="order";include('adminheader.php');?>

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include('adminheaderdesktop.php');?>
            <!-- HEADER DESKTOP-->
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Subscriptions</h2>
                                    
                                </div>
                            </div>
                        </div>
						
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Subscription Id</th>
                                                <th>Customer Name</th>
												<th>Address</th>
                                                <th>Days</th>
                                                <th>Quantity</th>
                                                <th>Animal</th>
                                                <th>Price</th>
                                                <th>Time</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
												
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
											
											$query="select * from subs where vid=".$_SESSION['id'];
                                            $result=mysqli_query($con,$query);
                                            while($row=mysqli_fetch_array($result))
											{
												$sid=$row[0];
                                                $mid=$row[1];
                                                $cid=$row[3];
                                                $qty=$row[4];
                                                $days=$row[7];
                                                $price=$row[6];
                                                $time=$row[5];
                                                $st_date=$row[8];
                                                $end_date=$row[9];

											    if(isset($cid))
                                                {
                                                    $query="select name,address from user where id=".$cid;

                                                    $result=mysqli_query($con,$query);
                                                    while($row=mysqli_fetch_array($result))
                                                    {
                                                        $cname=$row[0];
                                                        $add=$row[1];
                                                    }
                                                    $query="select animal from milk_type where id=".$mid;
                                                    $result=mysqli_query($con,$query);
                                                    while($row=mysqli_fetch_array($result))
                                                    {
                                                        $animal=$row[0];
                                                    }
                                                    echo "<tr>";
                                                    echo "<td>".$sid."</td>";
                                                    echo "<td>".$cname."</td>";
                                                    echo "<td>".$add."</td>";
                                                    echo "<td>".$days."</td>";
                                                    echo "<td>".$qty."</td>";
                                                    echo "<td>".$animal."</td>";
                                                    echo "<td>".$price."</td>";
                                                    echo "<td>".$time."</td>";
                                                    echo "<td>".$st_date."</td>";
                                                    echo "<td>".$end_date."</td>";
                                                   
                                                    echo "<tr>";

                                                }
                                            }
                                            
											mysqli_close($con);
											
										?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                       
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2021 Milk Vendor. All rights reserved. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->

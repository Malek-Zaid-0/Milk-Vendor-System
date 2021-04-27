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

        <?php $page="buy";include('adminheader.php');?>

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
                                    <h2 class="title-1">Place Order</h2>
                                    
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
                                                <th>Vendor Name</th>
                                                <th>Animal</th>
												<th>Price</th>
                                                <th>Place Order</th>
                                                <th>Subscribe</th>
												
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
											$q1="select city from user where id=".$_SESSION['id'];
                                            $result=mysqli_query($con,$q1);
                                            while($row=mysqli_fetch_array($result))
                                            {   
                                                $city=$row[0];
                                            }
                                            $q2="select id,name from user where role='vendor' and city='".$city."'";
                                            $result=mysqli_query($con,$q2);
                                            $i=0;
                                            while($row=mysqli_fetch_array($result))
                                            {   
                                                $vendor=$row[0];
                                                $name=$row[1];
    											$query="select * from milk_type where vid=".$vendor;
                                                $result=mysqli_query($con,$query);
                                                while($row=mysqli_fetch_array($result))
    											{
    												$mid=$row[0];
                                                    $animal=$row[1];
                                                    $price=$row[3];
                                                        
                                                    echo "<tr>";
                                                    echo "<td>".$name."</td>";
                                                    echo "<td>".$animal."</td>";
                                                    echo "<td>".$price."</td>";
                                                    ?>
                
                                                    <td><a href="placeorder.php?vid=<?php echo $vendor; ?>&mid=<?php echo $mid;?>" >
                                                        <input type=button value=Order></a>

                                                    <td><a href="subscribe.php?vid=<?php echo $vendor; ?>&mid=<?php echo $mid;?>" >
                                                        <input type=button value=Subscribe></a>
                                                    </td>
                                                    </form>

                                                    <?php
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

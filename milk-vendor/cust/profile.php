<?php include("config.php");
session_start();
if(!isset($_SESSION['email']))
{
	header("location:login.php");
}
if(isset($_POST['submit']))
{
    $n=$_POST['name'];
    $e=$_POST['mail'];
    $a=$_POST['add'];
    $c=$_POST['city'];

    $q="update user set name='".$n."',email='".$e."',address='".$a."',city='".$c."' where id='".$_SESSION['id']."'";
    $result=mysqli_query($con,$q);
    if($result)
    {
        $done=TRUE;
    }
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
    <title>Society Admin</title>

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

        <?php $page="profile";include('adminheader.php');?>

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
                                    <h2 class="title-1">Profile</h2>
                                    
                                </div>
                            </div>
                        </div>
						<div class="row">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
									
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                           <img src="images/icon/person.png" style="width:200px; border-radius:50%; margin:10px;">
                                        </thead>
                                        <tbody>
										<?php
											
												
                                                /*$query="select sid from users where user_id='".$_SESSION['username']."'";
                                                $result=mysqli_query($con,$query);
                                                while($row=mysqli_fetch_array($result))
                                                {
                                                    
                                                
                                                    $sid=$row['sid'];
                                                    
                                                }*/
                                                $query1="select * from user where id='".$_SESSION['id']."'";
                                                $result1=mysqli_query($con,$query1);
                                                while($row=mysqli_fetch_array($result1))
                                                {
                                                   $name1=$row[1];
                                                   $email1=$row[2];
                                                   $add1=$row[4];
                                                   $city1=$row[6];
                                                                                          
                                                }
												mysqli_close($con);
											 
                                                

										?>
                                        <form action=profile.php method="POST">
											<tr>
												<td>Name: </td>
												<td><?php echo '<input type="text" name="name" value="'.$name1.'">';?></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>Email: </td>
												<td><?php echo '<input type="Email" name="mail" value="'.$email1.'">';?></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>Address: </td>
												<td><?php echo '<input type="text" name="add" value="'.$add1.'">';?></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>Ciy: </td>
												<td><?php echo '<input type="text" name="city" value="'.$city1.'">';?></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
                                            <tr>
                                            	<td colspan="2"><input type="Submit" name="submit" value="update"></td>
                                            	<td></td>
												<td></td>
												<td></td>
                                            </tr>
                                            <?php
                                                if(isset($done))
                                                {
                                                    ?>
                                                    <tr>
                                                    <td colspan="2"><label>Updated Successfully</label>></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                    </tr>
                                                    <?php
                                                }
                                            ?>
                                        </form>
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

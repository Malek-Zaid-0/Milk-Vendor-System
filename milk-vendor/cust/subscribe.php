<?php
session_start();
include('config.php');
if(isset($_REQUEST['vid']))
{
	if(isset($_REQUEST['mid']))
	{
		$vid=$_REQUEST['vid'];
		$mid=$_REQUEST['mid'];
		$query1="select * from user where id=".$vid;
        $result1=mysqli_query($con,$query1);
        while($row=mysqli_fetch_array($result1))
        {
          	$name1=$row[1];
        }

        $query1="select * from milk_type where id=".$mid;
        $result1=mysqli_query($con,$query1);
        while($row=mysqli_fetch_array($result1))
        {
          	$animal=$row[1];
          	$price=$row[3];
        }
		

	}
	else
	{
		header('Location:index.php');
	}
}
else
{
	header('Location:index.php');
}
if(isset($_POST['submit']))
{
	$vid=$_REQUEST['vid'];
	$mid=$_REQUEST['mid'];
	$qtyl=$_POST['qtyl'];
	$qtyml=$_POST['qtyml'];
	$date=$_POST['date'];
    $dur=$_POST['dur'];
	$time=$_POST['time'];
    if($dur=="1w")
    {
        $days=7;
    }
    elseif ($dur=="2w") 
    {
        $days=14;
    }
    elseif ($dur=="1m") 
    {
        $days=30;
    }
    else
    {
        $days=60;
    }
	$qty=($qtyl*1000)+$qtyml;
	$pr_day=($qtyl*$price)+($qtyml*($price/1000));
    $pr=$pr_day*$days;

    $to_date=date('Y-m-d',strtotime($date.'+ '.$days.' days'));
	$query1="insert into subs(mid,uid,vid,qty,time,price,days,st_date,end_date) values(".$mid.",".$_SESSION['id'].",".$vid.",".$qty.",'".$time."',".$pr.",".$days.",'".$date."','".$to_date."')";
    $result1=mysqli_query($con,$query1);
    if($result1)
    {
     	$done=TRUE;
    }
       
       
        
      
}
mysqli_close($con);

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

        <?php $page="Order";include('adminheader.php');?>

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
                                    <h2 class="title-1">Subscribe</h2>
                                    
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
                                       
                                        <form action="subscribe.php?vid=<?php echo $vid; ?>&mid=<?php echo $mid;?>" method="POST">

											<tr>
												<td>Vendor Name: </td>
												<td><?php echo '<input type="text" name="name" value="'.$name1.'" disabled>';?></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>Animal: </td>
												<td><?php echo '<input type="text" name="animal" value="'.$animal.'" disabled>';?></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>Price: </td>
												<td><?php echo '<input type="text" name="price" value="'.$price.'" disabled>';?></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>Quantity: </td>
												<td>
												<select name="qtyl" >
													<option value="0">0</option>
                                      				<option value="1">1</option>
                                        			<option value="2">2</option>
                                        			<option value="3">3</option>
                                        			<option value="4">4</option>
                                        			<option value="5">5</option>
                                   				</select>
												<label>Litres</label>
												<select name="qtyml">
													<option value="0">0</option>
                                      				<option value="250">250</option>
                                        			<option value="500">500</option>
                                        			<option value="750">750</option>
                                   				</select>
												<label>ml</label>
												</td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>From Date:</td>
												<td><input type="date" name="date" min="<?php echo date("Y-m-d");?>"" max="2021-05-30"></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
                                            <tr>
                                                <td>Duration</td>
                                                <td>
                                                <select name="dur">
                                                    <option value="1w">1 Week</option>
                                                    <option value="2w">2 Weeks</option>
                                                    <option value="1m">1 Month</option>
                                                    <option value="2m">2 Months</option>
                                                </select>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
											<tr>
												<td>Time:</td>
												<td>
													<input type="radio" name="time" value="am">
													<label>AM</label>
													<input type="radio" name="time" value="pm">
													<label>PM</label>
												</td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
                                            <tr>
                                            	<td colspan="2"><input type="Submit" name="submit" value="Subscribe"></td>
                                            	<td></td>
												<td></td>
												<td></td>
                                            </tr>
                                            <?php
                                                if(isset($done))
                                                {
                                                    ?>
                                                    <tr>
                                                    <td colspan="2"><label>Subscribed Successfully</label>></td>
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

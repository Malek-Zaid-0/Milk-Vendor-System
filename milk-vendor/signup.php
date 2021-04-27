<?php 
if(isset($_POST['signup']))
{
    include("config.php");
    
        $query="insert into user(name,email,pass,address,role,city) values('".$_POST['name']."','".$_POST['email']."','".$_POST['password']."','".$_POST['address']."','".$_POST['role']."','".$_POST['city']."')";
        $result=mysqli_query($con,$query);
        if($result)
        {
            header("location:login.php?error=Account created successfully! please login");
        }
        else
        {
            header("location:signup.php?error=Username or Password is Wrong..!!");
        }
        mysqli_close($con);

    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

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
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/milk3.jpg" alt="SOCIETY Admin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="signup.php" method="post">
                                 <div class="form-group">
                                    <label>Name</label>
                                    <input class="au-input au-input--full" type="text" name="name" placeholder="Enter your Name">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Enter Password">
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <select name="city" class="au-input au-input--full">
                                        <option value="Ahmedabad">Ahmedabad</option>
                                        <option value="anand">Anand</option>
                                        <option value="Nadiad">Nadiad</option>
                                        <option value="Vadodara">Vadodara</option>
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label>Address</label>
                                    <textarea class="au-input au-input--full" name="address" cols="50" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Role</label>
                                    <table>
                                        <tr>
                                            <td><input class="au-checkbox" id="Customer" type="radio" name="role" value="cust"></td>
                                            <td>Customer</td>
                                        </tr>
                                        <tr>
                                            <td><input class="au-checkbox" id="Vendor" type="radio" name="role" value="vendor"></td>
                                            <td>Vendor</td>
                                        </tr>
                                    </table>
                                    
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="signup">sign up</button>
                                 <div class="login-checkbox">
                                    <?php
									if(isset($_GET['error']))
									{echo $_GET['error'];}
									?>
								</div>
                                    
                                
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
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
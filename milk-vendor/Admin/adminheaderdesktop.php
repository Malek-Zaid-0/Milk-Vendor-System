<?php
    include("config.php");
    $query="select name from user where email='".$_SESSION['email']."'";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $name=$row['name'];
?>
<header class="header-desktop">
                
                <div class="section__content section__content--p30">
                    
                    <div class="container-fluid">
                    
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                
                                
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <!--<img src="images/icon/avatar-01.jpg" alt="John Doe" />-->
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['email'];?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <!--<a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="" />
                                                    </a>-->
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $name; ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $_SESSION['email']?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
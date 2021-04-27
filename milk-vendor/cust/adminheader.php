<!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/milk2.jpg" alt="Milk Vendor" />
                </a>
            </div>
            
        
<div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="<?php if ($page=="index"){echo "active ";}?>has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-home"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                               
                            </ul>
                        </li>
						<li class="<?php if ($page=="profile"){echo "active ";}?>has-sub">
                            <a class="js-arrow" href="profile.php">
                                <i class="fa fa-user"></i>My Profile</a>
                        </li>
						<li class="<?php if ($page=="buy"){echo "active ";}?>has-sub">
                            <a class="js-arrow" href="buy.php">
                                <i class="zmdi zmdi-shopping-cart"></i>Buy</a>
                            
                        </li>
						<li class="<?php if ($page=="order"){echo "active ";}?>has-sub">
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-shopping-cart"></i>Orders</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                
                                <li>
                                    <a href="order.php">My Orders</a>
                                </li>
                                <li>
                                    <a href="subs.php">Subscription</a>
                                </li>
                            </ul>
                        </li>
						
						
                    </ul>
                </nav>
            </div>
			</aside>
        <!-- END MENU SIDEBAR-->
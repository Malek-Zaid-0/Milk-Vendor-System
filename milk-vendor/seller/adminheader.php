<!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/milk2.jpg" alt="Milk Logo" />
                </a>
            </div>
            
        
<div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="<?php if ($page=="index"){echo "active ";}?>has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fa fa-home"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                               
                            </ul>
                        </li>
                        <li class="<?php if ($page=="profile"){echo "active ";}?>has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-user"></i>Profile</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                
                                <li>
                                    <a href="profile.php">My Profile</a>
                                </li>
                                <li>
                                    <a href="products.php">Products</a>
                                </li>
                            </ul>
                        </li>
						<li class="<?php if ($page=="order"){echo "active ";}?>has-sub">
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-shopping-cart"></i>Orders</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                
                                <li>
                                    <a href="order.php">Orders</a>
                                </li>
								<li>
                                    <a href="subs.php">Subscriptions</a>
                                </li>
                            </ul>
                        </li>
						
						<li class="<?php if ($page=="bill"){echo "active ";}?>has-sub">
                            <a class="js-arrow" href="bills.php">
                                <i class="fa fa-credit-card"></i>Bills</a>
                            
                        </li>
						
						
                    </ul>
                </nav>
            </div>
			</aside>
        <!-- END MENU SIDEBAR-->
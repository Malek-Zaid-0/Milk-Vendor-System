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
                                <i class="fa fa-home"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                               
                            </ul>
                        </li>
						<li class="<?php if ($page=="Profile"){echo "active ";}?>has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-user"></i>Profiles</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                
                                <li>
                                    <a href="view_cust.php">Customers</a>
                                </li>
								<li>
                                    <a href="view_vendor.php">Vendors</a>
                                </li>
                            </ul>
                        </li>
						<li class="<?php if ($page=="req"){echo "active ";}?>has-sub">
                            <a class="js-arrow" href="requests.php">
                                <i class="fa fa-user"></i>Requests</a>
                            
                        </li>
						
                    </ul>
                </nav>
            </div>
			</aside>
        <!-- END MENU SIDEBAR-->
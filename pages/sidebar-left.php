
<?php

	echo '
	<aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">

                        <div class="info" style = margin-top:80px;margin-left:30px;">
                            <h3>'.$_SESSION['username'].'</h3>
                        </div>
                    </div>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    ';
                    if($_SESSION['role'] == "Administrator"){
                        echo '
                    <ul class="sidebar-menu">
                            <li>
                                <a href="../dashboard/dashboard.php">
                                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="../officials/officials.php">
                                    <i class="fa fa-users"></i> <span>User Accounts</span>
                                </a>
                            </li>
														<li>
                                <a href="../tracking/tracking.php">
                                    <i class="fa fa-users"></i> <span>Tracking</span>
                                </a>
                            </li>
                            <li>
                                <a href="#certificate" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
                                    <i class="fa fa-file"></i>
                                    <span id="NameSection3">Clearance and Forms</span> <i class="zmdi zmdi-caret-down-pull-right"></i>
                                    </a>
                                    <ul class="list-unstyled collapse" id="certificate" style="font-size:12px;">

                            <li>
                                    &nbsp &nbsp <a href="../clearance/clearance.php">&nbsp
                                    <i class="fa fa-file">&nbsp </i> Barangay Clearance</a>
                                    </a>
                            <li>
                                    <li>
                                    &nbsp &nbsp <a href="../permit/permit.php">&nbsp
                                    <i class="fa fa-file">&nbsp </i> Business Permit</a>
                                    </a>
                            <li>
                                    <li>
                                    &nbsp &nbsp <a href="../clearance/clearance.php">&nbsp
                                    <i class="fa fa-file">&nbsp </i> Barangay Indigency</a>
                                    </a>
                            <li>
                                    <li>
                                    &nbsp &nbsp <a href="../residency/residency.php">&nbsp
                                    <i class="fa fa-file">&nbsp </i> Barangay Residency</a>
                                    </a>
                            <li>

                            </ul>
                            </li>
                            </li>

                            <li>
                            <li>
                                <a href="../logs/logs.php">
                                    <i class="fa fa-history"></i> <span>Logs</span>
                                </a>
                            </li>
                            <li>
                                <a href="../../logout.php">
                                    <i class="fa fa-history"></i> <span>Logout</span>
                                </a>
                            </li>

                    </ul>';
                    }
                    elseif($_SESSION['role'] == "Secretary"){
                        echo '
                        <ul class="sidebar-menu">
												<li>
														<a href="../dashboard/dashboard.php">
																<i class="fa fa-dashboard"></i> <span>Dashboard</span>
														</a>
												</li>
												<li>
														<a href="../tracking/tracking.php">
																<i class="fa fa-users"></i> <span>Tracking</span>
														</a>
												</li>
												<li>
														<a href="#certificate" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
																<i class="fa fa-file"></i>
																<span id="NameSection3">Clearance and Forms</span> <i class="zmdi zmdi-caret-down-pull-right"></i>
																</a>
																<ul class="list-unstyled collapse" id="certificate" style="font-size:12px;">

												<li>
																&nbsp &nbsp <a href="../clearance/clearance.php">&nbsp
																<i class="fa fa-file">&nbsp </i> Barangay Clearance</a>
																</a>
												<li>
																<li>
																&nbsp &nbsp <a href="../permit/permit.php">&nbsp
																<i class="fa fa-file">&nbsp </i> Business Permit</a>
																</a>
												<li>
																<li>
																&nbsp &nbsp <a href="../indigency/indigency.php">&nbsp
																<i class="fa fa-file">&nbsp </i> Barangay Indigency</a>
																</a>
												<li>
																<li>
																&nbsp &nbsp <a href="../residency/residency.php">&nbsp
																<i class="fa fa-file">&nbsp </i> Barangay Residency</a>
																</a>
												<li>

												</ul>
												</li>
												</li>

												<li>
														<a href="../../logout.php">
																<i class="fa fa-history"></i> <span>Logout</span>
														</a>
												</li>
                        </ul>';
                    }elseif($_SESSION['role'] == "Mayor Secretary"){
                        echo '
                    <ul class="sidebar-menu">
														<li>
                                <a href="#">
                                    <i class="fa fa-users"></i> <span>Tracking</span>
                                </a>
                            </li>
                            <li>
                                <a href="../../logout.php">
                                    <i class="fa fa-history"></i> <span>Logout</span>
                                </a>
                            </li>

                    </ul>';
                    }
                    else{
                        echo '
                        <ul class="sidebar-menu">
                            <li>
                                <a href="../permit/permit.php">
                                    <i class="fa fa-file"></i> <span>Permit</span>
                                </a>
                            </li>
                            <li>
                                <a href="../clearance/clearance.php">
                                    <i class="fa fa-file"></i> <span>Clearance</span>
                                </a>
                            </li>
                            <li>
                                <a href="../activity/activity.php">
                                    <i class="fa fa-calendar"></i> <span>Activity</span>
                                </a>
                            </li>
                        </ul>';
                    }
                echo '
                </section>
                <!-- /.sidebar -->
            </aside>
	';
?>

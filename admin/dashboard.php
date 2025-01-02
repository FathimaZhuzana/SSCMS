<!doctype html>
<html lang="en">

<head>


    <!-- App title -->
    <title>Student Study Center Mananagement System || Dashboard</title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="../plugins/morris/morris.css">

    <!-- Switchery css -->
    <link href="../plugins/switchery/switchery.min.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- App CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- Modernizr js -->
    <script src="assets/js/modernizr.min.js"></script>

</head>



<body>
    <!-- Navigation Bar-->
    <header id="topnav">
        <div class="topbar-main">
            <div class="container">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="./dashboard.php" class="logo">

                        <span>Student Study Center Management System</span>
                    </a>
                </div>
                <!-- End Logo container-->


                <div class="menu-extras navbar-topbar">

                    <ul class="list-inline float-right mb-0">

                        <li class="list-inline-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>



                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Welcome! Zhuzana</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="./profile.php" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="./change-password.php" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                                </a>

                                <a href="./logout.php" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-power"></i> <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                </div> <!-- end menu-extras -->
                <div class="clearfix"></div>

            </div> <!-- end container -->
        </div>
        <!-- end topbar-main -->


        <div class="navbar-custom">
            <div class="container">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li>
                            <a href="./dashboard.php"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span>
                            </a>
                        </li>

                        <!---Desks---->
                        <li class="has-submenu">
                            <a href="#"><i class="zmdi zmdi-collection-text"></i> <span> Desks </span> </a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="./add-desk.php">Add </a></li>
                                        <li><a href="./manage-desks.php">Manage </a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>

                        <!---Students---->
                        <li class="has-submenu">
                            <a href="#"><i class="zmdi zmdi-collection-text"></i> <span> Students </span> </a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="./add-student.php">Add </a></li>
                                        <li><a href="./manage-students.php">Manage </a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li> <a href="./student-list.php"><i class="zmdi zmdi-collection-text"></i> Assigned /
                                Unassigned
                                Desk </a></li>

                        <li> <a href="./report.php"><i class="zmdi zmdi-collection-text"></i> Report </a></li>





                    </ul>
                    <!-- End navigation menu  -->
                </div>
            </div>
        </div>
    </header>
    <!-- End Navigation Bar-->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="wrapper">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">

                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card-box tilebox-one">
                        <i class="fa fa-desktop float-right"></i>
                        <h6 class="text-muted text-uppercase m-b-20">Total Desks</h6>
                        <h2 class="m-b-20" data-plugin="counterup">7</h2>
                        <a href="./manage-desks.php"><span class="badge badge-primary"> View Detail </span></a>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card-box tilebox-one">
                        <i class="fa fa-desktop float-right"></i>
                        <h6 class="text-muted text-uppercase m-b-20">Total Desk Available</h6>
                        <h2 class="m-b-20"><span data-plugin="counterup">5</span></h2>
                        <a href="./manage-desks.php"><span class="badge badge-success"> View Detail </span></a>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card-box tilebox-one">
                        <i class="fa fa-desktop float-right"></i>
                        <h6 class="text-muted text-uppercase m-b-20">Desk Occupied</h6>
                        <h2 class="m-b-20"><span data-plugin="counterup">2</span></h2>
                        <a href="./manage-desks.php"><span class="badge badge-danger"> View Detail </span></a>
                    </div>
                </div>


                <div class="col-md-6 col-xl-4">
                    <div class="card-box tilebox-one">
                        <i class="fa fa-users float-right"></i>
                        <h6 class="text-muted text-uppercase m-b-20">Total Registered Students</h6>
                        <h2 class="m-b-20"><span data-plugin="counterup"></span>5</h2>
                        <a href="./manage-students.php"><span class="badge badge-danger"> View Detail </span></a>
                    </div>
                </div>




            </div>
            <!-- end row -->




        </div> <!-- container -->


            <!-- Footer -->
            <footer class="footer">
                <p>Student Study Center Management System (SSCMS)</p>
              </footer>
              <!-- End Footer -->
  




    </div> <!-- End wrapper -->


    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="../plugins/switchery/switchery.min.js"></script>

    <!--Morris Chart-->
    <script src="../plugins/morris/morris.min.js"></script>
    <script src="../plugins/raphael/raphael.min.js"></script>

    <!-- Counter Up  -->
    <script src="../plugins/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="../plugins/counterup/jquery.counterup.js"></script>

    <!-- Page specific js -->
    <script src="assets/pages/jquery.dashboard.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

</body>

</html>
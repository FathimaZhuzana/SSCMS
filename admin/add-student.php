<!doctype html>
<html lang="en">

<head>

    <title>Student Study Center Mananagement System | Add Student</title>
    <link href="../plugins/switchery/switchery.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
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
                                <a href="./profile.html" class="dropdown-item notify-item">
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

    
    <div class="wrapper">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">

                        <h4 class="page-title">Add Student Detail</h4>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-12">
                    <div class="card-box">

                        <div class="row">
                            <div class="col-lg-6">

                                <h4 class="header-title m-t-0">Add Student Detail</h4>

                                <div class="p-20">
                                    <form action="#" method="post">

                                        <div class="form-group">
                                            <label for="studentname">Student Registation Number <small>(Auto
                                                    Generated)</small><span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" required="true" name="studentregno"
                                            placeholder="654867847">
                                        </div>
                                        <div class="form-group">
                                            <label for="studentname">Student Name<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Student Name"
                                                required="true" name="studentname">
                                        </div>


                                        <div class="form-group">
                                            <label for="studentname">Student Contact Number<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Student Contact Number"
                                                required="true" name="studentcontactno" pattern="[0-9]{10}"
                                                maxlength="10" title="10 numeric characters only">
                                        </div>


                                        <div class="form-group">
                                            <label for="studentname">Student Email<span
                                                    class="text-danger">*</span></label>
                                            <input type="email" class="form-control" placeholder="Student Email Id"
                                                required="true" name="studentemail">
                                        </div>


                                        <div class="form-group">
                                            <label for="studentname">Qualification<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Student Qualification"
                                                required="true" name="qualification">
                                        </div>

                                        <div class="form-group">
                                            <label for="emailAddress">Address<span class="text-danger">*</span></label>
                                            <textarea class="form-control" placeholder="Address" required="true"
                                                name="address"></textarea>
                                        </div>



                                        <div class="form-group text-left m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit"
                                                name="submit">
                                                Add</button>

                                        </div>

                                    </form>
                                </div>

                            </div>

                        </div>
                        <!-- end row -->


                    </div>
                </div><!-- end col-->

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

    <!-- Validation js (Parsleyjs) -->
    <script src="../plugins/parsleyjs/parsley.min.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

    <script>
        $(document).ready(function () {
            $('form').parsley();
        });
    </script>

</body>

</html>

<!doctype html>
<html lang="en">

<head>

    <title>Student Study Center Mananagement System | Manage Students</title>

    <!-- DataTables -->
    <link href="../plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="../plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Multi Item Selection examples -->
    <link href="../plugins/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

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
                    <a href="./dashboard.html" class="logo">

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
                                <a href="./change-password.html" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                                </a>

                                <a href="./logout.html" class="dropdown-item notify-item">
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
                            <a href="./dashboard.html"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span>
                            </a>
                        </li>

                        <!---Desks---->
                        <li class="has-submenu">
                            <a href="#"><i class="zmdi zmdi-collection-text"></i> <span> Desks </span> </a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="./add-desk.html">Add </a></li>
                                        <li><a href="./manage-desks.html">Manage </a></li>
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
                                        <li><a href="./add-student.html">Add </a></li>
                                        <li><a href="./manage-students.html">Manage </a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li> <a href="./student-list.html"><i class="zmdi zmdi-collection-text"></i> Assigned /
                                Unassigned
                                Desk </a></li>

                        <li> <a href="./report.html"><i class="zmdi zmdi-collection-text"></i> Report </a></li>





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


            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h3> B/w Dates Report Assign Desk</h3>
                        <hr />

                        <div class="card-body card-block">
                            <form method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">From Date</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="date" id="fromdate" name="fromdate" value="" class="form-control"
                                            required="">

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email-input" class=" form-control-label">To Date</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="date" id="todate" name="todate" value="" class="form-control"
                                            required="">

                                    </div>
                                </div>



                                <div class="card-footer">
                                    <p style="text-align: center;"><button type="submit" name="submit" id="submit"
                                            class="btn btn-primary btn-sm">Submit
                                        </button></p>

                                </div>
                            </form>
                        </div>
                        <h5 align="center">Assign Desk Report from 2024-10-10 to 2024-10-12
                        </h5>
                        <hr />


                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Reg No</th>
                                    <th>Name</th>
                                    <th>Contact No</th>
                                    <th>Email Id</th>
                                    <th>Qualification</th>
                                    <th>Current Desk Status</th>
                                    <th>Reg Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>

                                <tr>
                                    <td>
                                       1
                                    </td>
                                    <td>
                                        2891347046
                                    </td>
                                    <td>
                                        Sanjeev
                                    </td>
                                    <td>
                                        1231234560
                                    </td>
                                    <td>
                                        snj12@test.com
                                    </td>
                                    <td>
                                        BA
                                    </td>
                                    <td>
                                        Assigned
                                    </td>
                                    <td>
                                        2022-12-07 23:27:53
                                    </td>
                                    <td><a href="./student-details.html"
                                            class="btn btn-primary" target="_blank">Assign/UnAssign Desk</a></td>

                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end row -->



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


    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

    <script>
        $(document).ready(function () {

            // Default Datatable
            $('#datatable').DataTable();

            //Buttons examples
            var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf']
            });

            // Key Tables

            $('#key-table').DataTable({
                keys: true
            });

            // Responsive Datatable
            $('#responsive-datatable').DataTable();

            // Multi Selection Datatable
            $('#selection-datatable').DataTable({
                select: {
                    style: 'multi'
                }
            });

            table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        });

    </script>

</body>

</html>
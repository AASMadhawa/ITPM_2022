<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Registration</title>
    <!-- Favicons -->
    <link href="./img/favicon.png" rel="icon">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
            <div>
                <img src="../img/header_logo.png" style="height: 60px; width: 200px">
            </div>
            <!--                <div class="sidebar-brand-text mx-3">SRI ONUS</div>-->
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="dashboard.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-user-nurse"></i>
                <span>Employees</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">All Features:</h6>
                    <a class="collapse-item" href="care_giver_list.php">View List</a>
                    <a class="collapse-item" href="employee_list_approved.php">Approved List</a>
                    <a class="collapse-item" href="employee_list_rejected.php">Rejected List</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
               aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-user"></i>
                <span>Care Seekers</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">All Features:</h6>
                    <a class="collapse-item" href="./seeker_list.php">View List</a>
                    <!-- <a class="collapse-item" href="utilities-border.html">Borders</a>
                    <a class="collapse-item" href="utilities-animation.html">Animations</a>
                    <a class="collapse-item" href="utilities-other.html">Other</a> -->
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLocation"
               aria-expanded="true"
               aria-controls="collapseLocation">
                <i class="fas fa-street-view"></i>
                <span>Services</span>
            </a>
            <div id="collapseLocation" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">All Features:</h6>
                    <a class="collapse-item" href="homeCare_nursing_Service.php">HomeCare Nursing Service</a>
                    <a class="collapse-item" href="cleaning_service.php">Cleaning Service</a>
                    <a class="collapse-item" href="house_maid.php">House Maid</a>
                    <a class="collapse-item" href="mother_baby_Care.php">Mother and Baby Care</a>
                    <a class="collapse-item" href="private_nursing_care_service.php">Private Nursing Care Service</a>
                    <a class="collapse-item" href="security.php">Security</a>
                    <a class="collapse-item" href="#">Other</a>
                </div>
            </div>
        </li>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers"
               aria-expanded="true"
               aria-controls="collapseLocation">
                <i class="fas fa-user-shield"></i>
                <span>Users</span>
            </a>
            <div id="collapseUsers" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">All Features:</h6>
                    <a class="collapse-item" href="register.php">Add Users</a>
                    <!-- <a class="collapse-item" href="google_map.html">View Map</a> -->
                </div>
            </div>
        </li>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">


        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <form class="form-inline">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                </form>

                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->


                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Welcome <?php echo $_SESSION['uname']; ?></span>
                            <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">New Admin Registration</h1>

                <hr>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">

                    <div class="card-body">
                        <div class="container" style="max-width: 100%">

                            <div class="card o-hidden border-0 shadow-lg my-5">
                                <div class="card-body p-0">
                                    <!-- Nested Row within Card Body -->
                                    <div class="row">
 
                                        <div class="col-lg-6">
                                            <div class="p-5">
                                                <div class="text-center">
                                                    <h1 class="h4 text-gray-900 mb-4">Create New User Account</h1>
                                                </div>
                                                <form method="POST" class="user" id="register-form"
                                                      action="./API/signup_api.php">

                                                    <div class="form-group">
                                                        <input type="text" class="form-control form-control-user"
                                                               id="uname" name="uname"
                                                               placeholder="User Name">
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="email" class="form-control form-control-user"
                                                               id="email" name="email"
                                                               placeholder="Email Address">
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                                            <input type="password"
                                                                   class="form-control form-control-user"
                                                                   name="password"
                                                                   id="password" placeholder="Password">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="password"
                                                                   class="form-control form-control-user" name="re_pass"
                                                                   id="re_pass" placeholder="Repeat Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-button">
                                                        <input type="submit" name="signup" id="signup"
                                                               class="btn btn-primary btn-user btn-block"
                                                               value="Register"/>
                                                    </div>

                                                    <hr>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>

        <!-- End of Main Content -->


        <!-- Model Form of the add Employee -->


        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">

                        <!-- <center><img src="https://shivshaktiaarogya.com/images/logo.png" width="300px" height="80px" alt=""></center> -->
                        <h4 class="modal-title text-center">Register Employee</h4>

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="./API/employee_registration_api.php" method="POST" enctype="multipart/form-data">

                            <!-- This is test for New Card Activate Form  -->
                            <!-- This is Address with email id  -->
                            <input type="hidden" name="id" value="<?php echo $id; ?>">

                            <div class="form-group">
                                <label for="category">Category</label>
                                <!-- <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="Email Address"> -->
                                <select class="form-control " id="category" value="<?php echo $category; ?>"
                                        placeholder="category" name="category">
                                    <option value="category">Select category</option>
                                    <option value="HomeCare Nursing Service">HomeCare Nursing Service</option>
                                    <option value="Cleaning Service">Cleaning Service</option>
                                    <option value="House Maid">House Maid</option>
                                    <option value="Mother and Baby Care">Mother and Baby Care</option>
                                    <option value="Private Nursing Care Service">Private Nursing Care Service</option>
                                    <option value="Security">Security</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" class="form-control " id="fullName"
                                           value="<?php echo $fullName; ?>"
                                           placeholder="Type Your Full Name" name="fullname">
                                </div>
                                <div class="col-sm-4">
                                    <label for="age">Age</label>
                                    <input type="number" class="form-control" id="age" value="<?php echo $age; ?>"
                                           placeholder="Type Your Age" name="age">
                                </div>
                                <div class="col-sm-4">
                                    <label for="gender">Gender</label>
                                    <!-- <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address"> -->
                                    <select class="form-control " id="gender" value="<?php echo $gender; ?>"
                                            placeholder="gender" name="gender">
                                        <option value="Gender">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="birthday">Birth Day</label>
                                    <input type="date" class="form-control " id="birthday"
                                           value="<?php echo $birthday; ?>"
                                           placeholder="Select Your Full Name" name="birthday">
                                </div>
                                <div class="col-sm-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" value="<?php echo $email; ?>"
                                           placeholder="Type Your Email" name="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control " id="address"
                                           value="<?php echo $address; ?>"
                                           placeholder="Type Your Address" name="address">
                                </div>
                                <div class="col-sm-4">
                                    <label for="province">Province</label>
                                    <input type="text" class="form-control" id="province"
                                           value="<?php echo $province; ?>"
                                           placeholder="Type Your Province" name="province">
                                </div>
                                <div class="col-sm-4">
                                    <label for="district">District</label>
                                    <input type="text" class="form-control" id="district"
                                           value="<?php echo $district; ?>"
                                           placeholder="Type Your District" name="district">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="nic">National ID Card Number</label>
                                    <input type="text" class="form-control " id="nic" value="<?php echo $nic; ?>"
                                           placeholder="Type Your NIC Number" name="nic">
                                </div>
                                <div class="col-sm-6">
                                    <label for="contact">Contact Number</label>
                                    <input type="text" class="form-control" id="contact" value="<?php echo $contact; ?>"
                                           placeholder="Type Your Contact Number" name="contact">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="experience">Experience</label>
                                    <input type="text" class="form-control " id="experience"
                                           value="<?php echo $experience; ?>"
                                           placeholder="Experience" name="experience">
                                </div>
                                <div class="col-sm-4">
                                    <label for="language">Language Skills</label>
                                    <input type="text" class="form-control" id="language"
                                           value="<?php echo $language; ?>"
                                           placeholder="Type Your Language Skills" name="language">
                                </div>
                                <div class="col-sm-4">
                                    <label for="OtherSkills">Other Skills</label>
                                    <input type="text" class="form-control" id="OtherSkills"
                                           value="<?php echo $OtherSkills; ?>"
                                           placeholder="Type Your Other Experience" name="OtherSkills">
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary btn-user btn-block" name="REGISTER">Register
                                Employee
                            </button>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>


        <!-- Edit Update Model -->

        <div id="editmodal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">

                        <!-- <center><img src="https://shivshaktiaarogya.com/images/logo.png" width="300px" height="80px" alt=""></center> -->
                        <h4 class="modal-title text-center">Edit Employee Data</h4>

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="./API/employee_update_api.php" method="POST" enctype="multipart/form-data">


                            <input type="hidden" name="id" id="id1">

                            <div class="form-group">
                                <label for="category">Category</label>

                                <select class="form-control " id="category1" value="<?php echo $category; ?>"
                                        placeholder="category" name="category">
                                    <option value="category">Select category</option>
                                    <option value="HomeCare Nursing Service">HomeCare Nursing Service</option>
                                    <option value="Cleaning Service">Cleaning Service</option>
                                    <option value="House Maid">House Maid</option>
                                    <option value="Mother and Baby Care">Mother and Baby Care</option>
                                    <option value="Private Nursing Care Service">Private Nursing Care Service</option>
                                    <option value="Security">Security</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" class="form-control " id="fullName1"
                                           value="<?php echo $fullName; ?>"
                                           placeholder="Type Your Full Name" name="fullname">
                                </div>
                                <div class="col-sm-4">
                                    <label for="age">Age</label>
                                    <input type="number" class="form-control" id="age1" value="<?php echo $age; ?>"
                                           placeholder="Type Your Age" name="age">
                                </div>
                                <div class="col-sm-4">
                                    <label for="gender">Gender</label>

                                    <select class="form-control " id="gender1" value="<?php echo $gender; ?>"
                                            placeholder="gender" name="gender">
                                        <option value="Gender">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="birthday">Birth Day</label>
                                    <input type="date" class="form-control " id="birthday1"
                                           value="<?php echo $birthday; ?>"
                                           placeholder="Select Your Full Name" name="birthday">
                                </div>
                                <div class="col-sm-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email1" value="<?php echo $email; ?>"
                                           placeholder="Type Your Email" name="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control " id="address1"
                                           value="<?php echo $address; ?>"
                                           placeholder="Type Your Address" name="address">
                                </div>
                                <div class="col-sm-4">
                                    <label for="province">Province</label>
                                    <input type="text" class="form-control" id="province1"
                                           value="<?php echo $province; ?>"
                                           placeholder="Type Your Province" name="province">
                                </div>
                                <div class="col-sm-4">
                                    <label for="district">District</label>
                                    <input type="text" class="form-control" id="district1"
                                           value="<?php echo $district; ?>"
                                           placeholder="Type Your District" name="district">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="nic">National ID Card Number</label>
                                    <input type="text" class="form-control " id="nic1" value="<?php echo $nic; ?>"
                                           placeholder="Type Your NIC Number" name="nic">
                                </div>
                                <div class="col-sm-6">
                                    <label for="contact">Contact Number</label>
                                    <input type="text" class="form-control" id="contact1"
                                           value="<?php echo $contact; ?>"
                                           placeholder="Type Your Contact Number" name="contact">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="experience">Experience</label>
                                    <input type="text" class="form-control " id="experience1"
                                           value="<?php echo $experience; ?>"
                                           placeholder="Experience" name="experience">
                                </div>
                                <div class="col-sm-4">
                                    <label for="language">Language Skills</label>
                                    <input type="text" class="form-control" id="language1"
                                           value="<?php echo $language; ?>"
                                           placeholder="Type Your Language Skills" name="language">
                                </div>
                                <div class="col-sm-4">
                                    <label for="OtherSkills">Other Skills</label>
                                    <input type="text" class="form-control" id="OtherSkills1"
                                           value="<?php echo $OtherSkills; ?>"
                                           placeholder="Type Your Other Experience" name="OtherSkills">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block" name="UPDATE">UPDATE DATA
                            </button>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>


        <!-- Edit Approved Employee Model -->

        <div id="approvemodal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">

                        <!-- <center><img src="https://shivshaktiaarogya.com/images/logo.png" width="300px" height="80px" alt=""></center> -->
                        <h4 class="modal-title text-center">Approve Employee Data</h4>

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="./API/employee_approved.php" method="POST" enctype="multipart/form-data">


                            <input type="hidden" name="id" id="id2">

                            <div class="form-group">
                                <label for="category">Category</label>

                                <select class="form-control " id="category2" value="<?php echo $category; ?>"
                                        placeholder="category" name="category">
                                    <option value="category">Select category</option>
                                    <option value="HomeCare Nursing Service">HomeCare Nursing Service</option>
                                    <option value="Cleaning Service">Cleaning Service</option>
                                    <option value="House Maid">House Maid</option>
                                    <option value="Mother and Baby Care">Mother and Baby Care</option>
                                    <option value="Private Nursing Care Service">Private Nursing Care Service</option>
                                    <option value="Security">Security</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" class="form-control " id="fullName2"
                                           value="<?php echo $fullName; ?>"
                                           placeholder="Type Your Full Name" name="fullname">
                                </div>
                                <div class="col-sm-4">
                                    <label for="age">Age</label>
                                    <input type="number" class="form-control" id="age2" value="<?php echo $age; ?>"
                                           placeholder="Type Your Age" name="age">
                                </div>
                                <div class="col-sm-4">
                                    <label for="gender">Gender</label>

                                    <select class="form-control " id="gender2" value="<?php echo $gender; ?>"
                                            placeholder="gender" name="gender">
                                        <option value="Gender">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="birthday">Birth Day</label>
                                    <input type="date" class="form-control " id="birthday2"
                                           value="<?php echo $birthday; ?>"
                                           placeholder="Select Your Full Name" name="birthday">
                                </div>
                                <div class="col-sm-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email2" value="<?php echo $email; ?>"
                                           placeholder="Type Your Email" name="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control " id="address2"
                                           value="<?php echo $address; ?>"
                                           placeholder="Type Your Address" name="address">
                                </div>
                                <div class="col-sm-4">
                                    <label for="province">Province</label>
                                    <input type="text" class="form-control" id="province2"
                                           value="<?php echo $province; ?>"
                                           placeholder="Type Your Province" name="province">
                                </div>
                                <div class="col-sm-4">
                                    <label for="district">District</label>
                                    <input type="text" class="form-control" id="district2"
                                           value="<?php echo $district; ?>"
                                           placeholder="Type Your District" name="district">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="nic">National ID Card Number</label>
                                    <input type="text" class="form-control " id="nic2" value="<?php echo $nic; ?>"
                                           placeholder="Type Your NIC Number" name="nic">
                                </div>
                                <div class="col-sm-6">
                                    <label for="contact">Contact Number</label>
                                    <input type="text" class="form-control" id="contact2"
                                           value="<?php echo $contact; ?>"
                                           placeholder="Type Your Contact Number" name="contact">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="experience">Experience</label>
                                    <input type="text" class="form-control " id="experience2"
                                           value="<?php echo $experience; ?>"
                                           placeholder="Experience" name="experience">
                                </div>
                                <div class="col-sm-4">
                                    <label for="language">Language Skills</label>
                                    <input type="text" class="form-control" id="language2"
                                           value="<?php echo $language; ?>"
                                           placeholder="Type Your Language Skills" name="language">
                                </div>
                                <div class="col-sm-4">
                                    <label for="OtherSkills">Other Skills</label>
                                    <input type="text" class="form-control" id="OtherSkills2"
                                           value="<?php echo $OtherSkills; ?>"
                                           placeholder="Type Your Other Experience" name="OtherSkills">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block" name="REGISTER1">Approve
                                Employee
                            </button>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>


        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="index.php">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>


<script>
    $(document).ready(function () {
        $('.editbtn').on('click', function () {

            $('#editmodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#id1').val(data[0]);
            $('#category1').val(data[1]);
            $('#fullName1').val(data[2]);
            $('#age1').val(data[3]);
            $('#gender1').val(data[4]);
            $('#birthday1').val(data[5]);
            $('#email1').val(data[6]);
            $('#address1').val(data[7]);
            $('#province1').val(data[8]);
            $('#district1').val(data[9]);
            $('#nic1').val(data[10]);
            $('#contact1').val(data[11]);
            $('#experience1').val(data[12]);
            $('#language1').val(data[13]);
            $('#OtherSkills1').val(data[14]);

        });
    });
</script>


<script>
    $(document).ready(function () {
        $('.approvebtn').on('click', function () {

            $('#approvemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#id2').val(data[0]);
            $('#category2').val(data[1]);
            $('#fullName2').val(data[2]);
            $('#age2').val(data[3]);
            $('#gender2').val(data[4]);
            $('#birthday2').val(data[5]);
            $('#email2').val(data[6]);
            $('#address2').val(data[7]);
            $('#province2').val(data[8]);
            $('#district2').val(data[9]);
            $('#nic2').val(data[10]);
            $('#contact2').val(data[11]);
            $('#experience2').val(data[12]);
            $('#language2').val(data[13]);
            $('#OtherSkills2').val(data[14]);

        });
    });
</script>

</body>

</html>

<?php
include './database/connection.php';
?>
<?php
include './database/connection.php';
if (isset($_POST['submit'])) {
    $schedVstr_fname = $_POST['schedVstr_fname'];
    $schedVstr_lname = $_POST['schedVstr_lname'];
    $vstrPurpose_id = $_POST['vstrPurpose_id'];
    $schedVstr_timeOfVisit = $_POST['schedVstr_timeOfVisit'];
    $schedVstr_mobile = $_POST['schedVstr_mobile'];

    $sql = "INSERT INTO admin_visitors_scheduled (schedVstr_fname, schedVstr_lname, vstrPurpose_id, schedVstr_timeOfVisit, schedVstr_mobile)
    VALUES ('$schedVstr_fname', '$schedVstr_lname', '$vstrPurpose_id', '$schedVstr_timeOfVisit', '$schedVstr_mobile')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Data Inserted Successfully";
        header('location:./assets/error/visitor-success1.html');
    } else {
        die(mysqli_error($con));
    }
}

?>
<?php
include './database/connection.php';
if (isset($_POST['submit'])) {
    $rsrv_name = $_POST['rsrv_name'];
    $facility_ID = $_POST['facility_ID'];
    $rsrvPurpose_ID = $_POST['rsrvPurpose_ID'];
    $rsrv_date = $_POST['rsrv_date'];
    $rsrv_time = $_POST['rsrv_time'];
    $rsrv_occupants = $_POST['rsrv_occupants'];
    $rsrv_mobile = $_POST['rsrv_mobile'];

    // Query database to get capacity of the selected facility
    $query = "SELECT facility_capacity FROM admin_facility_info WHERE facility_ID = '$facility_ID'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $facility_capacity = $row['facility_capacity'];

    // Check if the number of occupants exceeds the capacity of the facility
    if ($rsrv_occupants > $facility_capacity) {
        // Display an error message to the user and prevent the reservation from being made 
        echo '<script>alert("The number of occupants exceeds the capacity of the facility.")</script>';
    } else {
        // Reservation can be made as the number of the occupants does not exceed the capacity of the facility
        $sql = "INSERT INTO admin_facility_reservations (rsrv_name, facility_ID, rsrvPurpose_ID, rsrv_date, rsrv_time, rsrv_occupants, rsrv_mobile)
    VALUES ('$rsrv_name', '$facility_ID', '$rsrvPurpose_ID', '$rsrv_date', '$rsrv_time', '$rsrv_occupants', '$rsrv_mobile')";

        $result = mysqli_query($con, $sql);
        if ($result) {
            // echo "Data Inserted Successfully";
            header('location:./assets/error/facility-success1.html');
        } else {
            die(mysqli_error($con));
        }
    }
}
?>
<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>LULAN</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="./assets/vendors/core/core.css">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="./assets/vendors/owl.carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/vendors/owl.carousel/owl.theme.default.min.css">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="./assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="./assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="./assets/css/demo3/style.css">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="./assets/images/mainlogo.png" />
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:partials/_navbar.html -->
        <div class="horizontal-menu">
            <nav class="navbar top-navbar">
                <div class="container">
                    <div class="navbar-content">
                        <a href="index.php" class="navbar-brand">
                            <img src="./assets/images/mainlogo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                            &nbspLU<span>LAN</span>
                        </a>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="flag-icon flag-icon-us mt-1" title="us"></i> <span class="ms-1 me-1 d-none d-md-inline-block">English</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="languageDropdown">
                                    <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> <span class="ms-1"> English </span></a>
                                    <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i> <span class="ms-1"> French </span></a>
                                    <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-de" title="de" id="de"></i> <span class="ms-1"> German </span></a>
                                    <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-pt" title="pt" id="pt"></i> <span class="ms-1"> Portuguese </span></a>
                                    <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es" title="es" id="es"></i> <span class="ms-1"> Spanish </span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Navigation Bar -->
            <nav class="bottom-navbar">
                <div class="container">
                    <ul class="nav page-navigation">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <i class="link-icon" data-feather="box"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
							<a href="#" class="nav-link">
								<i class="link-icon" data-feather="smile"></i>
								<span class="menu-title">About</span>
								<i class="link-arrow"></i>
							</a>
							<div class="submenu">
								<ul class="submenu-item">
									<li class="nav-item"><a class="nav-link" href="pages/icons/feather-icons.html">About Us</a></li>
									<li class="nav-item"><a class="nav-link" href="pages/icons/flag-icons.html">Locations</a></li>
									<li class="nav-item"><a class="nav-link" href="pages/icons/mdi-icons.html">Newsroom</a></li>
								</ul>
							</div>
						</li>
                        <li class="nav-item">
							<a href="#" class="nav-link">
								<i class="link-icon" data-feather="smile"></i>
								<span class="menu-title">Icons</span>
								<i class="link-arrow"></i>
							</a>
							<div class="submenu">
								<ul class="submenu-item">
									<li class="nav-item"><a class="nav-link" href="pages/icons/feather-icons.html">Feather Icons</a></li>
									<li class="nav-item"><a class="nav-link" href="pages/icons/flag-icons.html">Flag Icons</a></li>
									<li class="nav-item"><a class="nav-link" href="pages/icons/mdi-icons.html">Mdi Icons</a></li>
								</ul>
							</div>
						</li>
                        <li class="nav-item">
                            <a class="nav-link" href="#visit">
                                <i class="link-icon" data-feather="box"></i>
                                <span class="menu-title">Visit Us!</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#facility">
                                <i class="link-icon" data-feather="box"></i>
                                <span class="menu-title">Reserve a Facility</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.html">
                                <i class="link-icon" data-feather="box"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.html">
                                <i class="link-icon" data-feather="box"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./login.php" target="_blank" class="nav-link">
                                <i class="link-icon" data-feather="hash"></i>
                                <span class="menu-title">Login</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Navigation Bar -->

        <!-- partial -->
        <div class="page-wrapper">

            <div class="page-content">

                <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                    <div>
                        <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
                    </div>
                    <div class="d-flex align-items-center flex-wrap text-nowrap">
                        <div class="input-group date datepicker wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
                            <span class="input-group-text input-group-addon bg-transparent border-primary"><i data-feather="calendar" class=" text-primary"></i></span>
                            <input type="text" class="form-control border-primary bg-transparent">
                        </div>
                    </div>
                </div>
                <!-- partial -->

                <!-- row -->
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">FACILITIES</h6>
                                <div class="owl-carousel owl-theme owl-auto-play">
                                    <div class="item">
                                        <img src="./assets/images/officepic/1.jpg" alt="item-image">
                                    </div>
                                    <div class="item">
                                        <img src="./assets/images/officepic/2.jpg" alt="item-image">
                                    </div>
                                    <div class="item">
                                        <img src="./assets/images/officepic/3.jpg" alt="item-image">
                                    </div>
                                    <div class="item">
                                        <img src="./assets/images/officepic/4.jpg" alt="item-image">
                                    </div>
                                    <div class="item">
                                        <img src="./assets/images/officepic/5.jpg" alt="item-image">
                                    </div>
                                    <div class="item">
                                        <img src="./assets/images/officepic/6.jpg" alt="item-image">
                                    </div>
                                    <div class="item">
                                        <img src="./assets/images/officepic/7.jpg" alt="item-image">
                                    </div>
                                    <div class="item">
                                        <img src="./assets/images/officepic/1.jpg" alt="item-image">
                                    </div>
                                    <div class="item">
                                        <img src="./assets/images/officepic/2.jpg" alt="item-image">
                                    </div>
                                    <div class="item">
                                        <img src="./assets/images/officepic/3.jpg" alt="item-image">
                                    </div>
                                    <div class="item">
                                        <img src="./assets/images/officepic/4.jpg" alt="item-image">
                                    </div>
                                    <div class="item">
                                        <img src="./assets/images/officepic/5.jpg" alt="item-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->

                <!-- Visitor Management -->
                <!-- row -->
                <div class="d-flex align-items-start" id="visit">
                    <img src="./assets/images/lulanlogo.jpg" class="align-self-center wd-100 wd-sm-150 me-3" alt="...">
                    <div>
                        <h5 class="mb-2" style="text-align:center">Visit Us</h5>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <br>
                        <div class="row">
                            <div class="col-md-12 stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Schedule a Visit</h6>
                                        <form id="signupForm" action="" method="POST">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">First Name</label>
                                                        <input type="text" class="form-control" placeholder="First Name" name="schedVstr_fname" autocomplete="off" required>
                                                    </div>
                                                </div><!-- Col -->
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Last Name</label>
                                                        <input type="text" class="form-control" placeholder="Enter Last Name" name="schedVstr_lname" autocomplete="off" required>
                                                    </div>
                                                </div><!-- Col -->
                                            </div><!-- Row -->
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Purpose</label>
                                                        <select class="form-select" placeholder="Purpose" name="vstrPurpose_id" autocomplete="off" required>
                                                            <option selected="" disabled="">Select Purpose</option>
                                                            <option value="1">Business Meeting</option>
                                                            <option value="2">Job Interview</option>
                                                            <option value="3">Facility Tour</option>
                                                            <option value="4">Training Session</option>
                                                            <option value="5">Networking Events</option>
                                                            <option value="6">Vendor Visits</option>
                                                        </select>
                                                    </div>
                                                </div><!-- Col -->
                                                <div class="col-sm-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Date and Time</label>
                                                        <input type="datetime-local" class="form-control" name="schedVstr_timeOfVisit" placeholder="Enter Date and Time" autocomplete="off" required>
                                                    </div>
                                                </div><!-- Col -->
                                                <div class="col-sm-4">
                                                    <div class="mb-3">
                                                        <label for="schedVstr_mobile" class="form-label">Mobile No.</label>
                                                        <input type="tel" class="form-control" placeholder="Enter Mobile Number" name="schedVstr_mobile" id="schedVstr_mobile" autocomplete="off" required>
                                                    </div>
                                                </div><!-- Col -->
                                            </div><!-- Row -->
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <label class="form-check-label" for="termsCheck">
                                                        Agree to <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"> terms and conditions </a>
                                                    </label>
                                                    <input type="checkbox" class="form-check-input" name="terms_agree" id="termsCheck">
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-primary submit" name="submit">Submit form</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Terms and Conditions</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    <strong>1. Our Service:</strong> This web application is a platform for users to access and use the services provided by us. By accessing and using our services, you agree to be bound by these terms.<br>
                                    <strong>2. User Account Registration:</strong> You must register for an account in order to access and use our services. You must provide accurate and complete information, and you are solely responsible for the security of your account.<br>
                                    <strong>3. Your Responsibilities:</strong> You are solely responsible for your use of our services. You will not use our services for any illegal purposes or in any manner that could damage, disable, overburden, or impair our services.<br>
                                    <strong>4. Payment Terms:</strong> If you use any of our paid services, you agree to pay the applicable fees. We may modify the fees for any of our services at any time.<br>
                                    <strong>5. Termination of Services:</strong> We may terminate your access to our services at any time, with or without cause, and without notice.<br>
                                    <strong>6. Privacy Policy:</strong> We respect your privacy and are committed to protecting it. We have a Privacy Policy, which is incorporated into these terms and governs our collection and use of your information.<br>
                                    <strong>7. Disclaimer of Warranty:</strong> Our services are provided “as is” and “as available” without warranty of any kind. We do not guarantee that our services will be uninterrupted, secure, or error-free.<br>
                                    <strong>8. Limitation of Liability:</strong> We are not liable for any damages resulting from your use of our services. This includes any direct, indirect, consequential, special, and punitive damages.<br>
                                    <strong>9. Changes to These Terms:</strong> We may modify these terms at any time. You should review these terms periodically to stay informed of any changes.<br>
                                    <strong>10. Governing Law:</strong> These terms are governed by the laws of the state of [state], without regard to its conflict of law provisions.<br>
                                    <strong>11. Dispute Resolution:</strong> Any disputes arising out of or related to these terms will be resolved through binding arbitration, to be conducted in [city], [state].
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <!-- Visitor Management -->

                <!-- Facility Reservation -->
                <!-- row -->
                <div class="d-flex align-items-start" id="facility">
                    <img src="./assets/images/lulanlogo.jpg" class="align-self-center wd-100 wd-sm-150 me-3" alt="...">
                    <div>
                        <h5 class="mb-2 mt-3" style="text-align:center">Facility Reserve</h5>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <br>
                        <div class="row">
                            <div class="col-md-12 stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Reserve a Facility</h6>
                                        <form id="signupForm" action="" method="POST">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Name</label>
                                                        <input type="text" class="form-control" placeholder="Name" name="rsrv_name" autocomplete="off" required>
                                                    </div>
                                                </div><!-- Col -->
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="text" class="form-label">Facility ID</label>
                                                        <input class="form-control" name="facility_ID" placeholder="Facility ID" type="text" required>
                                                    </div>
                                                </div><!-- Col -->
                                            </div><!-- Row -->
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Purpose</label>
                                                        <select class="form-select" placeholder="Purpose" name="rsrvPurpose_ID" autocomplete="off" required>
                                                            <option selected="" disabled="">Select Purpose</option>
                                                            <option value="1">Event</option>
                                                            <option value="2">Meeting</option>
                                                        </select>
                                                    </div>
                                                </div><!-- Col -->
                                                <div class="col-sm-4">
                                                    <div class="mb-3">
                                                        <label for="date" class="form-label">Date</label>
                                                        <input type="date" class="form-control" placeholder="Reservation Date" name="rsrv_date" autocomplete="off" required>
                                                    </div>
                                                </div><!-- Col -->
                                                <div class="col-sm-4">
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Time</label>
                                                        <input type="time" class="form-control" placeholder="Reservation Time" name="rsrv_time" autocomplete="off" required>
                                                    </div>
                                                </div><!-- Col -->
                                            </div><!-- Row -->
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="mb-3">
                                                        <label for="occupants" class="form-label">Occupants</label>
                                                        <input type="text" class="form-control" placeholder="Occupants" name="rsrv_occupants" autocomplete="off" required>
                                                    </div>
                                                </div><!-- Col -->
                                                <div class="col-sm-4">
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Mobile No.</label>
                                                        <input type="tel" class="form-control" placeholder="Mobile No." name="rsrv_mobile" autocomplete="off" required>
                                                    </div>
                                                </div>
                                            </div><!-- Row -->
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <label class="form-check-label" for="termsCheck">
                                                        Agree to <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"> terms and conditions </a>
                                                    </label>
                                                    <input type="checkbox" class="form-check-input" name="terms_agree" id="termsCheck">
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-primary submit" name="submit">Submit form</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Terms and Conditions</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    <strong>1. Our Service:</strong> This web application is a platform for users to access and use the services provided by us. By accessing and using our services, you agree to be bound by these terms.<br>
                                    <strong>2. User Account Registration:</strong> You must register for an account in order to access and use our services. You must provide accurate and complete information, and you are solely responsible for the security of your account.<br>
                                    <strong>3. Your Responsibilities:</strong> You are solely responsible for your use of our services. You will not use our services for any illegal purposes or in any manner that could damage, disable, overburden, or impair our services.<br>
                                    <strong>4. Payment Terms:</strong> If you use any of our paid services, you agree to pay the applicable fees. We may modify the fees for any of our services at any time.<br>
                                    <strong>5. Termination of Services:</strong> We may terminate your access to our services at any time, with or without cause, and without notice.<br>
                                    <strong>6. Privacy Policy:</strong> We respect your privacy and are committed to protecting it. We have a Privacy Policy, which is incorporated into these terms and governs our collection and use of your information.<br>
                                    <strong>7. Disclaimer of Warranty:</strong> Our services are provided “as is” and “as available” without warranty of any kind. We do not guarantee that our services will be uninterrupted, secure, or error-free.<br>
                                    <strong>8. Limitation of Liability:</strong> We are not liable for any damages resulting from your use of our services. This includes any direct, indirect, consequential, special, and punitive damages.<br>
                                    <strong>9. Changes to These Terms:</strong> We may modify these terms at any time. You should review these terms periodically to stay informed of any changes.<br>
                                    <strong>10. Governing Law:</strong> These terms are governed by the laws of the state of [state], without regard to its conflict of law provisions.<br>
                                    <strong>11. Dispute Resolution:</strong> Any disputes arising out of or related to these terms will be resolved through binding arbitration, to be conducted in [city], [state].
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <!-- Facility Reservation -->

            </div>

            <!-- partial:partials/_footer.html -->
            <footer class="footer border-top">
                <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between py-3 small">
                    <p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>.</p>
                    <p class="text-muted">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
                </div>
            </footer>
            <!-- partial -->

        </div>
    </div>

    <!-- core:js -->
    <script src="./assets/vendors/core/core.js"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="./assets/vendors/chartjs/Chart.min.js"></script>
    <script src="./assets/vendors/jquery.flot/jquery.flot.js"></script>
    <script src="./assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
    <script src="./assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="./assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="./assets/vendors/owl.carousel/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="./assets/vendors/feather-icons/feather.min.js"></script>
    <script src="./assets/js/template.js"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="./assets/js/dashboard-light.js"></script>
    <script src="./assets/js/datepicker.js"></script>
    <script src="./assets/js/carousel.js"></script>
    <!-- End custom js for this page -->

</body>

</html>
<?php
include '../database/connection.php';
$user_id = $_GET['viewid'];
$sql = "SELECT * FROM admin_user_accounts WHERE user_id=$user_id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$username = $row['username'];
$password = $row['password'];
$role_id = $row['role_id'];
$emp_ID = $row['emp_ID'];
$userStatus_ID = $row['userStatus_ID'];

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $role_id = $_POST['role_id'];
  $emp_ID = $_POST['emp_ID'];
  $userStatus_ID = $_POST['userStatus_ID'];

  $sql = "UPDATE user_accounts SET user_id='$user_id',username='$username',password='$password',role_id='$role_id',emp_ID='$emp_ID',userStatus_ID='$userStatus_ID' WHERE user_id=$user_id";
  $result = mysqli_query($con, $sql);
  if ($result) {
    // echo "Data Inserted Successfully";
    header('location:./account-list.php');
  } else {
    die(mysqli_error($con));
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
  <link rel="stylesheet" href="../assets/vendors/core/core.css">
  <!-- endinject -->

  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
  <!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="../assets/fonts/feather-font/css/iconfont.css">
  <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../assets/vendors/sweetalert2/sweetalert2.min.css">
  <!-- endinject -->

  <!-- Layout styles -->
  <link rel="stylesheet" href="../assets/css/modules/style.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="../assets/images/mainlogo.png" />
</head>

<body>
  <div class="main-wrapper">

    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          <img src="../assets/images/mainlogo.png" width="30" height="30" class="d-inline-block align-top" alt="">
          LU<span>LAN</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="./dashboard.php" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">User Management</li>
          <li class="nav-item">
          </li>
          <li class="nav-item">
            <a href="./account-list.php" class="nav-link">
              <i class="link-icon" data-feather="users"></i>
              <span class="link-title">Account List</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="./register.php" class="nav-link">
              <i class="link-icon" data-feather="user-plus"></i>
              <span class="link-title">Register User</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="user-log.php" class="nav-link">
              <i class="link-icon" data-feather="user-check"></i>
              <span class="link-title">User Log</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="user-roles.php" class="nav-link">
              <i class="link-icon" data-feather="user"></i>
              <span class="link-title">User Roles</span>
            </a>
          </li>
    </nav>
    <!-- partial -->

    <div class="page-wrapper">

      <!-- partial:partials/_navbar.html -->
      <nav class="navbar">
        <a href="#" class="sidebar-toggler">
          <i data-feather="menu"></i>
        </a>
        <div class="navbar-content">
          <form class="search-form">
            <div class="input-group">
              <div class="input-group-text">
                <i data-feather="search"></i>
              </div>
              <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="profile">
              </a>
              <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                  <div class="mb-3">
                    <img class="wd-80 ht-80 rounded-circle" src="https://via.placeholder.com/80x80" alt="">
                  </div>
                  <div class="text-center">
                    <p class="tx-16 fw-bolder">USER MANAGEMENT</p>
                    <p class="tx-12 text-muted">user@lulan.com</p>
                  </div>
                </div>
                <ul class="list-unstyled p-1">
                  <li class="dropdown-item py-2">
                    <a href="../database/logout.php" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="log-out"></i>
                      <span>Log Out</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!-- partial -->

      <div class="page-content">

        <!-- row -->
        <div class="card">
          <div class="card-body">
            <div class="col-md-8 ps-md-0">
              <div class="auth-form-wrapper px-4 py-5">
                <h3>User Information</h3><br />
                <form action="" method="POST">
                  <div class="mb-3">
                    <label for="name" class="form-label">Username</label>
                    <input type="text" class="form-control" placeholder="Username" name="username" autocomplete="off" value="<?php echo $username ?>" readonly>
                  </div>
                  <div class="mb-3">
                    <label for="name" class="form-label">Password</label>
                    <input type="text" class="form-control" placeholder="Password" name="password" autocomplete="off" value="<?php echo $password ?>" readonly>
                  </div>
                  <div class="mb-3">
                    <label for="name" class="form-label">Role ID</label>
                    <input type="text" class="form-control" placeholder="Role ID" name="role_id" autocomplete="off" value="<?php echo $role_id ?>" readonly>
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Employee ID</label>
                    <input type="text" class="form-control" placeholder="Employee ID" name="emp_ID" autocomplete="off" value="<?php echo $emp_ID ?>" readonly>
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">User Status</label>
                    <input type="text" class="form-control" placeholder="User Status" name="userStatus_ID" autocomplete="off" value="<?php echo $userStatus_ID ?>" readonly>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-secondary text-white me-2 mb-2 mb-md-0" name="submit">Back</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- row -->

      </div>

      <!-- partial:partials/_footer.html -->
      <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
        <p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>.</p>
        <p class="text-muted">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
      </footer>
      <!-- partial -->

    </div>
  </div>

  <!-- core:js -->
  <script src="../assets/vendors/core/core.js"></script>
  <!-- endinject -->

  <!-- Plugin js for this page -->
  <script src="../assets/vendors/chartjs/Chart.min.js"></script>
  <script src="../assets/vendors/jquery.flot/jquery.flot.js"></script>
  <script src="../assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
  <script src="../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="../assets/vendors/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendors/sweetalert2/sweetalert2.min.js"></script>
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="../assets/vendors/feather-icons/feather.min.js"></script>
  <script src="../assets/js/template.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <script src="../assets/js/dashboard-light.js"></script>
  <script src="../assets/js/datepicker.js"></script>
  <script src="../assets/js/sweet-alert.js"></script>
  <!-- End custom js for this page -->

</body>

</html>
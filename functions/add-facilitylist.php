<?php
include '../database/connection.php';
if (isset($_POST['submit'])) {
  $facility_name = $_POST['facility_name'];
  $facility_desc = $_POST['facility_desc'];
  $facility_capacity = $_POST['facility_capacity'];
  $facilityType_ID = $_POST['facilityType_ID'];
  $facilityStatus_ID = $_POST['facilityStatus_ID'];

  $sql = "INSERT INTO admin_facility_info (facility_name, facility_desc, facility_capacity, facilityType_ID, facilityStatus_ID)
    VALUES ('$facility_name', '$facility_desc', '$facility_capacity', '$facilityType_ID', '$facilityStatus_ID')";

  $result = mysqli_query($con, $sql);
  if ($result) {
    // echo "Data Inserted Successfully";
    header('location:../modules/facility-list.php');
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
  <link rel="stylesheet" href="../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
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
        <a href="../modules/dashboard.php" class="sidebar-brand">
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
            <a href="../modules/dashboard.php" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Legal Management</li>

          <li class="nav-item">
            <a href="../modules/legal-approvals.php" class="nav-link"><i class="link-icon" data-feather="check-square"></i>
              <span class="link-title">Approvals</span></a>
          </li>
          <li class="nav-item">
            <a href="../modules/legal-cases.php" class="nav-link"><i class="link-icon" data-feather="briefcase"></i>
              <span class="link-title">Cases</span></a>
          </li>
          <li class="nav-item">
            <a href="../modules/legal-contracts.php" class="nav-link"><i class="link-icon" data-feather="book"></i>
              <span class="link-title">Contracts</span></a>
          </li>

          <li class="nav-item nav-category">Document Management</li>
          <li class="nav-item">
            <a href="../modules/document-archive.php" class="nav-link"><i class="link-icon" data-feather="archive"></i>
              <span class="link-title">Archive</span></a>
          </li>
          <li class="nav-item">
            <a href="../modules/document-list.php" class="nav-link"><i class="link-icon" data-feather="file-text"></i>
              <span class="link-title">Document List</span></a>
          </li>

          <li class="nav-item nav-category">Visitor Management</li>
          <li class="nav-item">
            <a href="../modules/visitor-purpose.php" class="nav-link"><i class="link-icon" data-feather="pen-tool"></i>
              <span class="link-title">Purposes</span></a>
          </li>
          <li class="nav-item">
            <a href="../modules/visitor-schedule.php" class="nav-link"><i class="link-icon" data-feather="calendar"></i>
              <span class="link-title">Scheduled Visitor</span></a>
          </li>
          <li class="nav-item">
            <a href="../modules/visitor-list.php" class="nav-link"><i class="link-icon" data-feather="list"></i>
              <span class="link-title">Visitor List</span></a>
          </li>

          <li class="nav-item nav-category">Facility Reservation</li>
          <li class="nav-item">
            <a href="../modules/facility-list.php" class="nav-link"><i class="link-icon" data-feather="book-open"></i>
              <span class="link-title">Facility List</span></a>
          </li>
          <li class="nav-item">
            <a href="../modules/facility-reserve.php" class="nav-link"><i class="link-icon" data-feather="bookmark"></i>
              <span class="link-title">Reserve</span></a>
          </li>

          <li class="nav-item nav-category">User Management</li>
          <li class="nav-item">
            <a href="../modules/account-list.php" class="nav-link"><i class="link-icon" data-feather="users"></i>
              <span class="link-title">Account List</span></a>
          </li>
          <li class="nav-item">
            <a href="../modules/register.php" class="nav-link"><i class="link-icon" data-feather="user-plus"></i>
              <span class="link-title">Register User</span></a>
          </li>
          <li class="nav-item">
            <a href="../modules/user-log.php" class="nav-link"><i class="link-icon" data-feather="user"></i>
              <span class="link-title">User Log</span></a>
          </li>
          <li class="nav-item">
            <a href="../modules/user-roles.php" class="nav-link"><i class="link-icon" data-feather="user-check"></i>
              <span class="link-title">User Roles</span></a>
          </li>

          <li class="nav-item nav-category">Rules and Regulations</li>
          <li class="nav-item">
            <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#TOS"><i class="link-icon" data-feather="info"></i>
              <span class="link-title">Terms of Service</span></a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#PP"><i class="link-icon" data-feather="lock"></i>
              <span class="link-title">Privacy Policy</span></a>
          </li>

          <li class="nav-item nav-category">Members</li>
          <li class="nav-item">
            <a href="../assets/error/404.html" class="nav-link">
              <i class="link-icon" data-feather="smile"></i>
              <span class="link-title">Joshua Gallano</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="../assets/error/404.html" class="nav-link">
              <i class="link-icon" data-feather="smile"></i>
              <span class="link-title">Kent Rillo</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="../assets/error/404.html" class="nav-link">
              <i class="link-icon" data-feather="smile"></i>
              <span class="link-title">Rainer Rafael</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="../assets/error/404.html" class="nav-link">
              <i class="link-icon" data-feather="smile"></i>
              <span class="link-title">Kyle Cedric Asis</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="../assets/error/404.html" class="nav-link">
              <i class="link-icon" data-feather="smile"></i>
              <span class="link-title">Cedric Parado</span>
            </a>
          </li>
        </ul>
      </div>
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
                    <p class="tx-16 fw-bolder">ADMIN</p>
                    <p class="tx-12 text-muted">admin@lulan.com</p>
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

      <div class="page-content d-flex align-items-center justify-content-center">

        <!-- row -->
        <div class="row w-100 mx-0 auth-page">
          <div class="card">
            <div class="row">

              <div class="auth-form-wrapper px-4 py-5">
                <a href="#" class="noble-ui-logo d-block mb-2"><img src="../assets/images/mainlogo.png" width="30" height="30" class="d-inline-block align-top" alt="">&nbspLU<span>LAN</span></a>
                <h5 class="text-muted fw-normal mb-4">Add Facility.</h5>
                <form id="signupForm" action="" method="POST">
                  <div class="mb-3">
                    <label for="name" class="form-label">Facility Name</label>
                    <input type="text" class="form-control" placeholder="Facility Name" name="facility_name" autocomplete="off" required>
                  </div>
                  <div class="mb-3">
                    <label for="name" class="form-label">Facility Description</label>
                    <input type="text" class="form-control" placeholder="Facility Description" name="facility_desc" autocomplete="off" required>
                  </div>
                  <div class="mb-3">
                    <label for="name" class="form-label">Capacity</label>
                    <input type="number" class="form-control" placeholder="Capacity" name="facility_capacity" autocomplete="off" required>
                  </div>
                  <div class="mb-3">
                    <label for="text" class="form-label">Type</label>
                    <select class="form-select" name="facilityType_ID" required>
                      <option value="">Select Type</option>
                      <?php
                      // Retrieve the list of facilities from the database
                      $query = "SELECT facilityType_ID, facilityType_desc FROM admin_facility_type";
                      $result = mysqli_query($con, $query);
                      while ($row = mysqli_fetch_assoc($result)) {
                        // Display each facility as an option in the select element
                        echo "<option value='" . $row['facilityType_ID'] . "'>" . $row['facilityType_desc'] . "</option>";
                      }
                      ?>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="text" class="form-label">Status</label>
                    <select class="form-select" name="facilityStatus_ID" required>
                      <option value="">Select Status</option>
                      <?php
                      // Retrieve the list of facilities from the database
                      $query = "SELECT facilityStatus_ID, facilityStatus_desc FROM admin_facility_status";
                      $result = mysqli_query($con, $query);
                      while ($row = mysqli_fetch_assoc($result)) {
                        // Display each facility as an option in the select element
                        echo "<option value='" . $row['facilityStatus_ID'] . "'>" . $row['facilityStatus_desc'] . "</option>";
                      }
                      ?>
                    </select>
                  </div>
                  <div class="mb-3">
                    <div class="form-check">
                      <label class="form-check-label" for="termsCheck">
                        Agree to <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"> terms and conditions </a>
                      </label>
                      <input type="checkbox" class="form-check-input" name="terms_agree" id="termsCheck">
                    </div>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary text-white me-2 mb-2 mb-md-0" name="submit">Register</button>
                    <button class="btn btn-secondary text-white me-2 mb-2 mb-md-0"><a href="../modules/facility-list.php" class="text-light">Cancel</a></button>
                  </div>
                </form>
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

        <!-- Modal TOS -->
        <div class="modal fade" id="TOS" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Terms of Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
              </div>
              <div class="modal-body">
                <h6 class="modal-title">Effective until: May 2023</h6>
                <br>
                <h6 class="modal-title">Our Service</h6>
                <p>This application is a platform for users to access and use the services provided by us. By accessing and using our services, you agree to be bound by these terms.</p>
                <br>
                <h6 class="modal-title">User Account Registration</h6>
                <p>You must register for an account in order to access and use our services. You must provide accurate and complete information, and you are solely responsible for the security of your account.</p>
                <br>
                <h6 class="modal-title">Your Responsibilities</h6>
                <p>You are solely responsible for your use of our services. You will not use our services for any illegal purposes or in any manner that could damage, disable, overburden, or impair our services.</p>
                <br>
                <h6 class="modal-title">Payment Terms</h6>
                <p>If you use any of our paid services, you agree to pay the applicable fees. We may modify the fees for any of our services at any time.</p>
                <br>
                <h6 class="modal-title">Termination of Services</h6>
                <p>We may terminate your access to our services at any time, with or without cause, and without notice.</p>
                <br>
                <h6 class="modal-title">Privacy Policy</h6>
                <p>We respect your privacy and are committed to protecting it. We have a Privacy Policy, which is incorporated into these terms and governs our collection and use of your information.</p>
                <br>
                <h6 class="modal-title">Disclaimer of Warranty</h6>
                <p>Our services are provided “as is” and “as available” without warranty of any kind. We do not guarantee that our services will be uninterrupted, secure, or error-free.</p>
                <br>
                <h6 class="modal-title">Limitation of Liability</h6>
                <p>We are not liable for any damages resulting from your use of our services. This includes any direct, indirect, consequential, special, and punitive damages.</p>
                <br>
                <h6 class="modal-title">Changes to These Terms</h6>
                <p>We may modify these terms at any time. You should review these terms periodically to stay informed of any changes.</p>
                <br>
                <h6 class="modal-title">Governing Law</h6>
                <p>These terms are governed by the laws of the state of [state], without regard to its conflict of law provisions.</p>
                <br>
                <h6 class="modal-title">Dispute Resolution</h6>
                <p>Any disputes arising out of or related to these terms will be resolved through binding arbitration, to be conducted in [city], [state].</p>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal TOS -->

        <!-- Modal PP -->
        <div class="modal fade" id="PP" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Privacy Policy</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
              </div>
              <div class="modal-body">
                <div id="notice">
                  <h6 class="modal-title">Effective until: May 2023</h6>
                  <br>
                  <p>This privacy notice for Lulan Inc. ("<strong>Company</strong>," "<strong>we</strong>," "<strong>us</strong>," or "<strong>our</strong>"), describes how and why we might collect, store, use, and/or share ("<strong>process</strong>") your information when you use our services ("<strong>Services</strong>"), such as when you:</p>
                  <br>
                  <ul>
                    <li>Visit our website at lulan-tnvs.com, or any website of ours that links to this privacy notice</li>
                    <li>Engage with us in other related ways, including any sales, marketing, or events</li>
                  </ul>

                  <p><strong>Questions or concerns?</strong> Reading this privacy notice will help you understand your privacy rights and choices. If you do not agree with our policies and practices, please do not use our Services. If you still have any questions or concerns, please contact us at <a href="mailto:admin@lulan.com">admin@lulan.com</a>.</p>
                  <br>
                </div>

                <div id="summary">
                  <h3>SUMMARY OF KEY POINTS</h3>

                  <p><strong><em>This summary provides key points from our privacy notice, but you can find out more details about any of these topics by clicking the link following each key point or by using our table of contents below to find the section you are looking for. You can also click <a href="#TOC">here</a> to go directly to our table of contents.</em></strong></p>

                  <p><strong>What personal information do we process?</strong> When you visit, use, or navigate our Services, we may process personal information depending on how you interact with Lulan Inc. and the Services, the choices you make, and the products and features you use. Click <a href="#personalinfo">here</a> to learn more.</p>

                  <p><strong>Do we process any sensitive personal information?</strong> We do not process sensitive personal information.</p>

                  <p><strong>Do we receive any information from third parties?</strong> We may receive information from public databases, marketing partners, social media platforms, and other outside sources. Click <a href="#othersources">here</a> to learn more.</p>

                  <p><strong>How do we process your information?</strong> We process your information to provide, improve, and administer our Services, communicate with you, for security and fraud prevention, and to comply with law. We may also process your information for other purposes with your consent. We process your information only when we have a valid legal reason to do so. Click <a href="#infouse">here</a> to learn more.</p>

                  <p><strong>In what situations and with which parties do we share personal information?</strong> We may share information in specific situations and with specific third parties. Click <a href="#whoshare">here</a> to learn more.</p>

                  <p><strong>How do we keep your information safe?</strong> We have organizational and technical processes and procedures in place to protect your personal information. However, no electronic transmission over the internet or information storage technology can be guaranteed to be 100% secure, so we cannot promise or guarantee that hackers, cybercriminals, or other unauthorized third parties will not be able to defeat our security and improperly collect, access, steal, or modify your information. Click <a href="#infosafe">here</a> to learn more.</p>

                  <p><strong>What are your rights?</strong> Depending on where you are located geographically, the applicable privacy law may mean you have certain rights regarding your personal information. Click <a href="#privacyrights">here</a> to learn more.</p>

                  <p><strong>How do you exercise your rights?</strong> The easiest way to exercise your rights is by filling out our data subject request form available here, or by contacting us. We will consider and act upon any request in accordance with applicable data protection laws.</p>

                  <p>Want to learn more about what Lulan Inc. does with any information we collect? Click <a href="#TOC">here</a> to review the notice in full.</p>
                </div>

                <div id="TOC">
                  <h3>TABLE OF CONTENTS</h3>
                  <ol>
                    <li><a href="#infocollect">WHAT INFORMATION DO WE COLLECT?</a></li>
                    <li><a href="#infouse">HOW DO WE PROCESS YOUR INFORMATION?</a></li>
                    <li><a href="#whoshare">WHEN AND WITH WHOM DO WE SHARE YOUR PERSONAL INFORMATION?</a></li>
                    <li><a href="#inforetain">HOW LONG DO WE KEEP YOUR INFORMATION?</a></li>
                    <li><a href="#infosafe">HOW DO WE KEEP YOUR INFORMATION SAFE?</a></li>
                    <li><a href="#privacyrights">WHAT ARE YOUR PRIVACY RIGHTS?</a></li>
                    <li><a href="#DNT">CONTROLS FOR DO-NOT-TRACK FEATURES</a></li>
                    <li><a href="#caresidents">DO CALIFORNIA RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?</a></li>
                    <li><a href="#policyupdates">DO WE MAKE UPDATES TO THIS NOTICE?</a></li>
                    <li><a href="#contact">HOW CAN YOU CONTACT US ABOUT THIS NOTICE?</a></li>
                    <li><a href="#request">HOW CAN YOU REVIEW, UPDATE, OR DELETE THE DATA WE COLLECT FROM YOU?</a></li>
                  </ol>
                </div>

                <div id="infocollect">
                  <h3>1. WHAT INFORMATION DO WE COLLECT?</h3>
                  <h4>Personal information you disclose to us</h4>

                  <p><em><strong>In Short:</strong> We collect personal information that you provide to us.</em></p>

                  <p>We collect personal information that you voluntarily provide to us when you register on the Services, express an interest in obtaining information about us or our products and Services, when you participate in activities on the Services, or otherwise when you contact us.</p>

                  <p id="personalinfo"><strong>Personal Information Provided by You.</strong> The personal information that we collect depends on the context of your interactions with us and the Services, the choices you make, and the products and features you use. The personal information we collect may include the following:</p>
                  <ul>
                    <li>names</li>
                    <li>usernames</li>
                    <li>passwords</li>
                    <li>phone numbers</li>
                    <li>email addresses</li>
                  </ul>

                  <p><strong>Sensitive Information.</strong> We do not process sensitive information.</p>
                  <p>All personal information that you provide to us must be true, complete, and accurate, and you must notify us of any changes to such personal information.</p>

                  <h4 id="othersources">Information collected from other sources</h4>
                  <p><em><strong>In Short:</strong> We may collect limited data from public databases, marketing partners, and other outside sources.</em></p>

                  In order to enhance our ability to provide relevant marketing, offers, and services to you and update our records, we may obtain information about you from other sources, such as public databases, joint marketing partners, affiliate programs, data providers, and from other third parties. This information includes mailing addresses, job titles, email addresses, phone numbers, intent data (or user behavior data), Internet Protocol (IP) addresses, social media profiles, social media URLs, and custom profiles, for purposes of targeted advertising and event promotion.
                </div>

                <div id="infouse">
                  <h3>2. HOW DO WE PROCESS YOUR INFORMATION?</h3>
                  <p><em><strong>In Short:</strong> We process your information to provide, improve, and administer our Services, communicate with you, for security and fraud prevention, and to comply with law. We may also process your information for other purposes with your consent.</em></p>

                  <p><strong>We process your personal information for a variety of reasons, depending on how you interact with our Services, including:</strong></p>
                  <ul>
                    <li><strong>To facilitate account creation and authentication and otherwise manage user accounts.</strong> We may process your information so you can create and log in to your account, as well as keep your account in working order.</li>
                    <li><strong>To protect our Services.</strong> We may process your information as part of our efforts to keep our Services safe and secure, including fraud monitoring and prevention.</li>
                    <li><strong>To comply with our legal obligations.</strong> We may process your information to comply with our legal obligations, respond to legal requests, and exercise, establish, or defend our legal rights.</li>
                  </ul>
                </div>

                <div id="whoshare">
                  <h3>3. WHEN AND WITH WHOM DO WE SHARE YOUR PERSONAL INFORMATION?</h3>
                  <p><em><strong>In Short:</strong> We may share information in specific situations described in this section and/or with the following third parties.</em></p>

                  <p>We may need to share your personal information in the following situations:</p>
                  <ul>
                    <li>Business Transfers. We may share or transfer your information in connection with, or during negotiations of, any merger, sale of company assets, financing, or acquisition of all or a portion of our business to another company.</li>
                  </ul>
                </div>

                <div id="inforetain">
                  <h3>4. HOW LONG DO WE KEEP YOUR INFORMATION?</h3>
                  <p><em><strong>In Short:</strong> We keep your information for as long as necessary to fulfill the purposes outlined in this privacy notice unless otherwise required by law.</em></p>

                  <p>We will only keep your personal information for as long as it is necessary for the purposes set out in this privacy notice, unless a longer retention period is required or permitted by law (such as tax, accounting, or other legal requirements). No purpose in this notice will require us keeping your personal information for longer than the period of time in which users have an account with us.</p>

                  <p>When we have no ongoing legitimate business need to process your personal information, we will either delete or anonymize such information, or, if this is not possible (for example, because your personal information has been stored in backup archives), then we will securely store your personal information and isolate it from any further processing until deletion is possible.</p>
                </div>

                <div id="infosafe">
                  <h3>5. HOW DO WE KEEP YOUR INFORMATION SAFE?</h3>
                  <p><em><strong>In Short:</strong> We aim to protect your personal information through a system of organizational and technical security measures.</em></p>

                  <p>We have implemented appropriate and reasonable technical and organizational security measures designed to protect the security of any personal information we process. However, despite our safeguards and efforts to secure your information, no electronic transmission over the Internet or information storage technology can be guaranteed to be 100% secure, so we cannot promise or guarantee that hackers, cybercriminals, or other unauthorized third parties will not be able to defeat our security and improperly collect, access, steal, or modify your information. Although we will do our best to protect your personal information, transmission of personal information to and from our Services is at your own risk. You should only access the Services within a secure environment.</p>
                </div>

                <div id="privacyrights">
                  <h3>6. WHAT ARE YOUR PRIVACY RIGHTS?</h3>
                  <p><em><strong>In Short:</strong> You may review, change, or terminate your account at any time.</em></p>

                  <p>If you are located in the EEA or UK and you believe we are unlawfully processing your personal information, you also have the right to complain to your local data protection supervisory authority. You can find their contact details here: <a target="_blank" href="https://ec.europa.eu/justice/data-protection/bodies/authorities/index_en.htm">https://ec.europa.eu/justice/data-protection/bodies/authorities/index_en.htm</a>.</p>

                  <p>If you are located in Switzerland, the contact details for the data protection authorities are available here: <a target="_blank" href="https://www.edoeb.admin.ch/edoeb/en/home.html">https://www.edoeb.admin.ch/edoeb/en/home.html</a>.</p>

                  <p><strong><u>Withdrawing your consent:</u></strong> If we are relying on your consent to process your personal information, which may be express and/or implied consent depending on the applicable law, you have the right to withdraw your consent at any time. You can withdraw your consent at any time by contacting us by using the contact details provided in the section "<a href="#contact">HOW CAN YOU CONTACT US ABOUT THIS NOTICE?</a>" below.</p>

                  <p>However, please note that this will not affect the lawfulness of the processing before its withdrawal nor, when applicable law allows, will it affect the processing of your personal information conducted in reliance on lawful processing grounds other than consent.</p>

                  <h4>Account Information</h4>

                  <p>If you would at any time like to review or change the information in your account or terminate your account, you can:</p>
                  <ul>
                    <li>Contact us using the contact information provided.</li>
                  </ul>

                  <p>Upon your request to terminate your account, we will deactivate or delete your account and information from our active databases. However, we may retain some information in our files to prevent fraud, troubleshoot problems, assist with any investigations, enforce our legal terms and/or comply with applicable legal requirements.</p>
                </div>

                <div id="DNT">
                  <h3>7. CONTROLS FOR DO-NOT-TRACK FEATURES</h3>
                  <p>Most web browsers and some mobile operating systems and mobile applications include a Do-Not-Track ("DNT") feature or setting you can activate to signal your privacy preference not to have data about your online browsing activities monitored and collected. At this stage no uniform technology standard for recognizing and implementing DNT signals has been finalized. As such, we do not currently respond to DNT browser signals or any other mechanism that automatically communicates your choice not to be tracked online. If a standard for online tracking is adopted that we must follow in the future, we will inform you about that practice in a revised version of this privacy notice.</p>
                </div>

                <div id="caresidents">
                  <h3>8. DO CALIFORNIA RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?</h3>
                  <p><em><strong>In Short:</strong> Yes, if you are a resident of California, you are granted specific rights regarding access to your personal information.</em></p>

                  <p>California Civil Code Section 1798.83, also known as the "Shine The Light" law, permits our users who are California residents to request and obtain from us, once a year and free of charge, information about categories of personal information (if any) we disclosed to third parties for direct marketing purposes and the names and addresses of all third parties with which we shared personal information in the immediately preceding calendar year. If you are a California resident and would like to make such a request, please submit your request in writing to us using the contact information provided below.</p>

                  <p>If you are under 18 years of age, reside in California, and have a registered account with Services, you have the right to request removal of unwanted data that you publicly post on the Services. To request removal of such data, please contact us using the contact information provided below and include the email address associated with your account and a statement that you reside in California. We will make sure the data is not publicly displayed on the Services, but please be aware that the data may not be completely or comprehensively removed from all our systems (e.g., backups, etc.).</p>
                </div>

                <div id="policyupdates">
                  <h3>9. DO WE MAKE UPDATES TO THIS NOTICE?</h3>
                  <p><em><strong>In Short:</strong> Yes, we will update this notice as necessary to stay compliant with relevant laws.</em></p>

                  <p>We may update this privacy notice from time to time. The updated version will be indicated by an updated "Revised" date and the updated version will be effective as soon as it is accessible. If we make material changes to this privacy notice, we may notify you either by prominently posting a notice of such changes or by directly sending you a notification. We encourage you to review this privacy notice frequently to be informed of how we are protecting your information.</p>
                </div>

                <div id="contact">
                  <h3>10. HOW CAN YOU CONTACT US ABOUT THIS NOTICE?</h3>
                  <p>If you have questions or comments about this notice, you may email us at <a href="mailto:admin@lulan.com">admin@lulan.com</a> or by post to:</p>

                  <p>
                    Lulan Inc. <br>
                    __________ <br>
                    #1071 Brgy. Kaligayahan, Quirino Highway <br>
                    Novaliches, Quezon City<br>
                    Philippines 1123<br>
                  </p>
                </div>

                <div id="request">
                  <h3>11. HOW CAN YOU REVIEW, UPDATE, OR DELETE THE DATA WE COLLECT FROM YOU?</h3>
                  <p>Based on the applicable laws of your country, you may have the right to request access to the personal information we collect from you, change that information, or delete it. To request to review, update, or delete your personal information, please submit a request form by clicking here.</p>
                </div>

                <p>This privacy policy was created using Termly's <a href="https://termly.io/products/privacy-policy-generator/">Privacy Policy Generator</a></p>
                <span id="document-previewer-logo-d16635"></span>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal PP -->

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
  <script src="../assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
  <script src="../assets/vendors/jquery-validation/jquery.validate.min.js"></script>
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="../assets/vendors/feather-icons/feather.min.js"></script>
  <script src="../assets/js/template.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <script src="../assets/js/dashboard-light.js"></script>
  <script src="../assets/js/datepicker.js"></script>
  <script src="../assets/js/sweet-alert.js"></script>
  <script src="../assets/js/data-table.js"></script>
  <!-- End custom js for this page -->

  <!-- Disabled Right Click -->
  <script>
    document.addEventListener('contextmenu', event => event.preventDefault());
  </script>
  <!-- Disabled Right Click -->
  <script>
    $(function() {
      'use strict';

      $(function() {
        // validate signup form on keyup and submit
        $("#signupForm").validate({
          rules: {
            name: {
              required: true,
              minlength: 3
            },
            email: {
              required: true,
              email: true
            },
            age_select: {
              required: true
            },
            gender_radio: {
              required: true
            },
            skill_check: {
              required: true
            },
            password: {
              required: true,
              minlength: 8
            },
            confirm_password: {
              required: true,
              minlength: 5,
              equalTo: "#password"
            },
            terms_agree: "required"
          },
          messages: {
            name: {
              required: "Please enter a name",
              minlength: "Name must consist of at least 3 characters"
            },
            email: "Please enter a valid email address",
            age_select: "Please select your age",
            skill_check: "Please select your skills",
            gender_radio: "Please select your gender",
            password: {
              required: "Please provide a password",
              minlength: "Your password must meet the validation request"
            },
            confirm_password: {
              required: "Please confirm your password",
              minlength: "Your password must meet the validation request",
              equalTo: "Please enter the same password as above"
            },
            terms_agree: "Please agree to terms and conditions"
          },
          errorPlacement: function(error, element) {
            error.addClass("invalid-feedback");

            if (element.parent('.input-group').length) {
              error.insertAfter(element.parent());
            } else if (element.prop('type') === 'radio' && element.parent('.radio-inline').length) {
              error.insertAfter(element.parent().parent());
            } else if (element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
              error.appendTo(element.parent().parent());
            } else {
              error.insertAfter(element);
            }
          },
          highlight: function(element, errorClass) {
            if ($(element).prop('type') != 'checkbox' && $(element).prop('type') != 'radio') {
              $(element).addClass("is-invalid").removeClass("is-valid");
            }
          },
          unhighlight: function(element, errorClass) {
            if ($(element).prop('type') != 'checkbox' && $(element).prop('type') != 'radio') {
              $(element).addClass("is-valid").removeClass("is-invalid");
            }
          }
        });
      });
    });
  </script>
</body>

</html>
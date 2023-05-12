<?php
include './database/connection.php';
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
  <!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="./assets/fonts/feather-font/css/iconfont.css">
  <link rel="stylesheet" href="./assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="./assets/vendors/sweetalert2/sweetalert2.min.css">
  <!-- endinject -->

  <!-- Layout styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./assets/css/modules/style.css">
  <link rel="stylesheet" href="./assets/css/demo1/icon.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="./assets/images/mainlogo.png" />
</head>

<body>
  <div class="main-wrapper">
    <div class="page-wrapper full-page">
      <div class="page-content d-flex align-items-center justify-content-center">

        <div class="row w-100 mx-0 auth-page">
          <div class="col-md-8 col-xl-6 mx-auto">
            <div class="card">
              <div class="row">
                <div class="col-md-4 pe-md-0">
                  <div class="auth-side-wrapper">

                  </div>
                </div>
                <div class="col-md-8 ps-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo d-block mb-2"><img src="./assets/images/mainlogo.png" width="30" height="30" class="d-inline-block align-top" alt="">&nbspLU<span>LAN</span></a>
                    <h5 class="text-muted fw-normal mb-4">Welcome back! Log in to your account.</h5>
                    <form name="f1" action="./database/authentication.php" onsubmit="return validation()" method="POST">
                      <div class="mb-3">
                        <div class="box">
                          <label for="user" class="form-label">Username</label>
                          <div class="inputBox">
                            <input type="email" class="form-control" name="user" id="user" placeholder="Username">
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <div class="box">
                          <label for="pass" class="form-label">Password</label>
                          <div class="inputBox">
                            <input type="password" class="form-control" name="pass" id="pass" autocomplete="current-password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" onkeyup=" checkPassword(this.value)">
                            <span id="toggleBtn"></span>
                          </div>
                          <!-- <div class="validation">
                            <ul>
                              <li id="lower">At least one lowercase character</li>
                              <li id="upper">At least one uppercase character</li>
                              <li id="number">At least one number</li>
                              <li id="special">At least one special character</li>
                              <li id="length">At least 8 characters</li>
                            </ul>
                          </div> -->
                        </div>
                      </div>
                      <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="authCheck">
                        <label class="form-check-label" for="authCheck">
                          Remember me
                        </label>
                      </div>
                      <div>
                        <button class="btn btn-primary me-2 mb-2 mb-md-0 text-white" type="submit" name="login" id="btn" value="Log in">Log in</button>
                      </div>
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
  <!-- core:js -->
  <script src="./assets/vendors/core/core.js"></script>
  <!-- endinject -->

  <!-- Plugin js for this page -->
  <script src="./assets/vendors/sweetalert2/sweetalert2.min.js"></script>
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="./assets/vendors/feather-icons/feather.min.js"></script>
  <script src="./assets/js/template.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <script src="./assets/js/sweet-alert.js"></script>
  <!-- End custom js for this page -->

  <!-- Validate Password -->
  <script>
    function validation() {
      var id = document.f1.user.value;
      var ps = document.f1.pass.value;
      if (id.length == "" && ps.length == "") {
        swal.fire({
          text: 'Username and Password field is empty',
          confirmButtonText: 'Close',
          confirmButtonClass: 'btn btn-danger',
        })
        return false;
      } else {
        if (id.length == "") {
          swal.fire({
            text: 'Username field is empty',
            confirmButtonText: 'Close',
            confirmButtonClass: 'btn btn-danger',
          })
          return false;
        }
        if (ps.length == "") {
          swal.fire({
            text: 'Password field is empty',
            confirmButtonText: 'Close',
            confirmButtonClass: 'btn btn-danger',
          })
          return false;
        }
      }
    }
    let pass = document.getElementById('pass');
    let toggleBtn = document.getElementById('toggleBtn');

    let lowerCase = document.getElementById('lower');
    let upperCase = document.getElementById('upper');
    let digit = document.getElementById('number');
    let specialChar = document.getElementById('special');
    let minLength = document.getElementById('length');

    function checkPassword(data) {
      // javascript regular expression pattern
      const lower = new RegExp('(?=.*[a-z])');
      const upper = new RegExp('(?=.*[A-Z])');
      const number = new RegExp('(?=.*[0-9])');
      const special = new RegExp('(?=.*[!@#\$%\^&\*])');
      const length = new RegExp('(?=.{8,})');

      // lower case validation check
      if (lower.test(data)) {
        lowerCase.classList.add('valid');
      } else {
        lowerCase.classList.remove('valid');
      }
      // upper case validation check
      if (upper.test(data)) {
        upperCase.classList.add('valid');
      } else {
        upperCase.classList.remove('valid');
      }
      // number case validation check
      if (number.test(data)) {
        digit.classList.add('valid');
      } else {
        digit.classList.remove('valid');
      }
      // special character case validation check
      if (special.test(data)) {
        specialChar.classList.add('valid');
      } else {
        specialChar.classList.remove('valid');
      }
      // minimum length validation check
      if (length.test(data)) {
        minLength.classList.add('valid');
      } else {
        minLength.classList.remove('valid');
      }
    }
    // show hide password
    toggleBtn.onclick = function() {
      if (pass.type === 'password') {
        pass.setAttribute('type', 'text');
        toggleBtn.classList.add('hide');
      } else {
        pass.setAttribute('type', 'password');
        toggleBtn.classList.remove('hide');
      }
    }
  </script>
  <!-- Validate Password -->

  <!-- Disabled Right Click -->
  <script>
    document.addEventListener('contextmenu', event => event.preventDefault());
  </script>
  <!-- Disabled Right Click -->

</body>

</html>
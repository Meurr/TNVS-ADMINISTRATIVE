<?php

include('connection.php');
$username = $_POST['user'];
$password = $_POST['pass'];

//to prevent from mysqli injection  
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

$sql = "SELECT * FROM admin_user_accounts WHERE username = '$username' and password = '$password'";

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$count = mysqli_num_rows($result);

if ($count == 1) {
    $status_id = $row['userStatus_ID'];
    if ($status_id == 1) {
        // Active user account, redirect to dashboard
        $_SESSION['user_id'] = $row['user_id']; // store the user_id in the session
        // redirect to the appropriate dashboard based on user role
        if ($row['user_id'] == '1') {
            header("location:../user-management/dashboard.php");
            exit();
        } else if ($row['user_id'] == '2') {
            header("location:../document-management/dashboard.php");
            exit();
        } else if ($row['user_id'] == '3') {
            header("location:../legal-management/dashboard.php");
            exit();
        } else if ($row['user_id'] == '4') {
            header("location:../facility-reservation/dashboard.php");
            exit();
        } else if ($row['user_id'] == '5') {
            header("location:../visitor-management/dashboard.php");
            exit();
        } else if ($row['user_id'] == '6') {
            header("location:../super-admin/dashboard.php");
            exit();
        } else if ($row['user_id'] == '7') {
            header("location:../modules/dashboard.php");
            exit();
        }
    } else if ($status_id == 2) {
        // Inactive user account, redirect to inactive page
        header("location:../assets/error/inactive.html");
        exit();
    } else {
        // Unknown user account status, show error message
        header("location:../assets/error/unknown.html");
        exit();
    }
} else {
    // Invalid username or password, show error message
    header("location:../assets/error/auth.html");
    exit();
}

mysqli_close($con);

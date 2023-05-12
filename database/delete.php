<?php
include './connection.php';
if (isset($_GET['deleteid'])) {
    $user_id = $_GET['deleteid'];

    $sql = "DELETE FROM admin_user_accounts WHERE user_id=$user_id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Delete successfull";
        header('location:../modules/account-list.php');
    } else {
        die(mysqli_error($con));
    }
}

<?php
include '../database/connection.php';
if (isset($_GET['deleteid'])) {
    $facility_ID = $_GET['deleteid'];

    $sql = "DELETE FROM admin_facility_info WHERE facility_ID=$facility_ID";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Delete successfull";
        header('location:../modules/facility-list.php');
    } else {
        die(mysqli_error($con));
    }
}

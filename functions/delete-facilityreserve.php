<?php
include '../database/connection.php';
if (isset($_GET['deleteid'])) {
    $rsrv_id = $_GET['deleteid'];

    $sql = "DELETE FROM admin_facility_reservations WHERE rsrv_id=$rsrv_id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Delete successfull";
        header('location:../modules/facility-reserve.php');
    } else {
        die(mysqli_error($con));
    }
}

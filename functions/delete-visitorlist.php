<?php
include '../database/connection.php';
if (isset($_GET['deleteid'])) {
    $vstr_id = $_GET['deleteid'];

    $sql = "DELETE FROM admin_visitor_info WHERE vstr_id=$vstr_id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Delete successfull";
        header('location:../modules/visitor-list.php');
    } else {
        die(mysqli_error($con));
    }
}

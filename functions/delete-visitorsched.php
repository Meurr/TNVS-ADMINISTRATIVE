<?php
include '../database/connection.php';

if (isset($_GET['deleteid'])) {
    $schedVstr_id = $_GET['deleteid'];

    // Update the status to "Archived"
    $sql = "UPDATE admin_visitors_scheduled SET schedVstr_status='Archived' WHERE schedVstr_id=$schedVstr_id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        // Move the archived schedule to a new table
        $sql = "INSERT INTO archived_visitors_scheduled SELECT * FROM admin_visitors_scheduled WHERE schedVstr_id=$schedVstr_id";
        $result = mysqli_query($con, $sql);

        if (!$result) {
            die(mysqli_error($con));
        }

        // Delete the row from the original table
        $sql = "DELETE FROM admin_visitors_scheduled WHERE schedVstr_id=$schedVstr_id";
        $result = mysqli_query($con, $sql);

        if ($result) {
            // echo "Delete successfull";
            header('location:../modules/visitor-schedule.php');
        } else {
            die(mysqli_error($con));
        }
    } else {
        die(mysqli_error($con));
    }
}
?>
